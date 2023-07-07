<div class="flex flex-col gap-4">
    {{ session('updated') }}
    <div class="panel">
        <div class="flex justify-between border-b dark:border-dark">
            <h4 class="text-2xl font-semibold">Roles</h4>
            <a href="{{ route('authorization.roles.create') }}" class="btn btn-primary max-lg:btn-sm mb-2">
                {{ __('Create') . ' ' . __('Role') }}
            </a>
        </div>
        <div class="table-responsive">
            <table class="table-hover">
                <thead>
                    <tr>
                        <th class="text-center text-lg">#</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th class="!text-center">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->description }}</td>
                            <td class="flex flex-col items-center md:flex-row justify-center gap-2">
                                <x-modal>
                                    <x-slot:trigger>
                                        <button type="button">
                                            <x-badges.basic color="primary"
                                                wire:click="getRolePermissions({{ $role->id }})">
                                                show
                                            </x-badges.basic>
                                        </button>
                                    </x-slot:trigger>
                                    <x-slot:dialog>
                                        <div class="panel w-full md:w-2/3 xl:w-1/2">
                                            <h4 class="text-2xl font-semibold mb-4 border-b dark:border-dark">
                                                {{ __('Role') }}:
                                                {{ $role->name }}</h4>
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div class="flex flex-col gap-2 border dark:border-dark rounded-md p-4">
                                                    <div>
                                                        <h5>{{ __('Name') }}:</h5>
                                                        <span class="text-lg ml-4">{{ $role->name }}</span>
                                                    </div>
                                                    <div>
                                                        <h5>{{ __('Description') }}:</h5>
                                                        <span class="text-lg ml-4">{{ $role->description }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5
                                                        class="text-lg font-semibold tracking-wider uppercase border-b dark:border-dark mb-2">
                                                        {{ __('Permissions') }}</h5>
                                                    <div
                                                        class="border dark:border-dark rounded-md p-2 max-h-96 overflow-y-scroll">
                                                        @if ($role->name == 'super-admin')
                                                            <p>This role have all permissions.</p>
                                                        @endif
                                                        @isset($permissionList)
                                                            @foreach ($permissionList as $permissionName => $permissions)
                                                                <div class="mt-2" x-data="{ open: true }">
                                                                    <button type="button" class="flex items-center"
                                                                        @click="open = !open">
                                                                        <div class="transition"
                                                                            :class="{ '!rotate-90': open }">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M9 5L15 12L9 19"
                                                                                    stroke="currentColor" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>
                                                                        <span
                                                                            class="text-base uppercase">{{ $permissionName }}</span>
                                                                    </button>
                                                                    <div x-transition.duration.2000ms x-collapse
                                                                        x-show="open">
                                                                        <ul class="pl-8">
                                                                            @foreach ($permissions as $permission)
                                                                                <li class="text-base">{{ $permission }}
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endisset
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </x-slot:dialog>
                                </x-modal>
                                @if ($role->name != 'super-admin')
                                    @can('update-role')
                                        <a href="{{ route('authorization.roles.edit', $role) }}">
                                            <x-badges.basic color="info">edit</x-badges.basic>
                                        </a>
                                    @endcan
                                @endif
                                @if ($role->name != 'super-admin')
                                    @can('destroy-role')
                                        <form action="{{ route('authorization.roles.destroy', $role) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">
                                                <x-badges.basic color="danger">delete</x-badges.basic>
                                            </button>
                                        </form>
                                    @endcan
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
