
<ul class="flex space-x-2 rtl:space-x-reverse mb-5">
    <li>
        <span>{{__('Authorization')}}</span>
    </li>
    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
        <span>{{__('Permissions')}}</span>
    </li>
</ul>
<div class="panel">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($permissions as $permission)
            <x-inputs.check value="{{ $permission->name }}" wire:model="permissionsNames">
                {{ $permission->name }}
            </x-inputs.check>
        @endforeach
    </div>
    <br>
    <hr>
    <br>
    <h2 class="text-xl">Roles</h2>
    @foreach ($roles as $role)
        <div class="border border-dark">
            <x-inputs.radio name="role" value="{{ $role->name }}" class="text-lg" wire:model="roleName">
                {{ $role->name }}
            </x-inputs.radio>
            <br>
            <div class="grid grid-cols-4 gap-2 w-full">
                @foreach ($role->getPermissionNames() as $item)
                    <span>{{ $item }}</span>
                @endforeach
            </div>
            <div>
            </div>
        </div>
    @endforeach
    <button class="btn btn-primary" wire:click="givePermissions">Give permissions to role</button>
</div>
