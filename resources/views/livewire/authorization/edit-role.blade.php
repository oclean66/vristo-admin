<div class="flex justify-center">
    <div class="panel w-2/3">
        <h4 class="text-2xl font-semibold border-b dark:border-dark">{{ __('Edit') . ' ' . __('Role') }} -
            {{ $role->name }}</h4>
        <form action="{{ route('authorization.roles.update', $role) }}" method="POST">
            @csrf
            @method('put')
            <div class="flex flex-col sm:flex-row gap-4 mt-4">
                <div class="basis-1/2 flex flex-col gap-6">
                    <div>
                        <x-inputs.text label="{{ __('Name') }}" name="name" value="{{ old('name', $role->name) }}" />
                        <x-inputs.validate-error field="name" />
                    </div>
                    <div>
                        <x-inputs.text label="{{ __('Description') }}" name="description"
                            value="{{ old('description', $role->description) }}" />
                        <x-inputs.validate-error field="description" />
                    </div>
                </div>
                <div class="basis-1/2 border-l dark:border-dark pl-4 overflow-y-scroll">
                    <h5 class="text-lg font-semibold tracking-wider uppercase border-b dark:border-dark mb-2">
                        {{ __('Permissions') }}</h5>
                    @isset($permissionList)
                        @foreach ($permissionList as $permissionName => $permissions)
                            <div class="mt-2" x-data="{ open: true }">
                                <button type="button" class="flex items-center" @click="open = !open">
                                    <div class="transition" :class="{ '!rotate-90': open }">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <span class="text-base uppercase">{{ $permissionName }}</span>
                                </button>
                                <div class="pl-8" x-transition.duration.2000ms x-collapse x-show="open">
                                    @foreach ($permissions as $key => $permission)
                                        <x-inputs.check class="mb-2" name="selectedPermissions[]"
                                            value="{{ $permission }}" :checked="in_array($permission, $role->getPermissionNames()->all())">
                                            {{ $permission }}
                                        </x-inputs.check>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
            <div class="flex justify-start gap-2 mt-8">
                <button type="submit" class="btn btn-outline-success">{{ __('Save') }}</button>
                <a href="{{ route('authorization.roles') }}"
                    class="btn btn-outline-dark w-fit">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</div>
