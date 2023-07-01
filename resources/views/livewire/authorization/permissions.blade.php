<div class="panel">
    <h4 class="text-2xl font-semibold border-b mb-3 dark:border-dark">{{ __('Permissions') }}</h4>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <x-lists.basic class="relative">
            <div wire:loading>
                <div class="absolute inset-0 z-[60] grid place-content-center bg-white dark:bg-black rounded-lg">
                    <span
                        class="animate-spin border-4 border-primary border-l-transparent rounded-full w-14 h-14 inline-block align-middle"></span>
                </div>
            </div>
            @isset($role)
                @if ($role->name == 'super-admin')
                    @foreach ($permissions as $permission)
                        <x-lists.list-item class="flex justify-between">
                            <span class="text-lg">{{ $permission->name }}</span>
                        </x-lists.list-item>
                    @endforeach
                @endif
                @foreach ($role->getPermissionNames() as $permission)
                    <x-lists.list-item class="flex justify-between">
                        <span class="text-lg">{{ $permission }}</span>
                        <x-badges.outline class="cursor-pointer" color="danger"
                            @click="$wire.revokePermissions(`{{ $permission }}`)">revoke</x-badges.outline>
                    </x-lists.list-item>
                @endforeach
            @endisset
        </x-lists.basic>
        <x-lists.basic>
            @foreach ($permissions as $permission)
                @isset($role)
                    <x-lists.list-link class="text-lg">
                        <x-inputs.check value="{{ $permission->name }}" wire:model="permissionsNames">
                            {{ $permission->name }}</x-inputs.check>
                    </x-lists.list-link>
                @else
                    <x-lists.list-link class="text-lg">
                        <x-inputs.check value="{{ $permission->name }}" wire:model="permissionsNames">
                            {{ $permission->name }}</x-inputs.check>
                    </x-lists.list-link>
                @endisset
            @endforeach
        </x-lists.basic>
    </div>
    <div class="flex flex-row-reverse">
        @if ($role != null && $role->name != 'super-admin')
            <button class="btn btn-primary mt-5"
                wire:click="givePermissions">{{ __('Add') . ' ' . __('Permission') . ' ' . __('to') . ' ' . $role->name }}</button>
        @endif
    </div>
</div>
