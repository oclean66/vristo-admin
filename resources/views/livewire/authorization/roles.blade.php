<div class="panel">
    <h4 class="text-2xl font-semibold border-b mb-3 dark:border-dark">Roles</h4>
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
                            <x-static-modal>
                                <x-slot:trigger>
                                    <button class="transition hover:scale-110" wire:click="getRole({{ $role->id }})">
                                        <x-badges.basic class="lowercase"
                                            wire:click="getRolePermissions({{ $role->id }})">{{ __('Permissions') }}
                                        </x-badges.basic>
                                    </button>
                                </x-slot:trigger>
                                <x-slot:title>{{ __('Permissions') }}</x-slot:title>
                                <x-slot:closer wire:click="clearForm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18">
                                        </line>
                                    </svg>
                                </x-slot:closer>
                                <x-slot:dialog>
                                    <div class="panel min-w-[600px]" wire:loading.class="hidden">
                                        @if ($rolePermissions)
                                            <x-list class="mt-4 h-80 overflow-y-scroll">
                                                @if ($rolePermissions->isNotEmpty())
                                                    @foreach ($rolePermissions as $permission)
                                                        <x-list-item class="flex justify-between">
                                                            <p>{{ $permission }}</p>
                                                            <span class="text-danger underline cursor-pointer lowercase"
                                                                wire:click="revokePermission({{ $role->id }}, '{{ $permission }}')">{{ __('Revoke') }}</span>
                                                        </x-list-item>
                                                    @endforeach
                                                @elseif ($role->name == 'super-admin')
                                                    <x-list-item>This role have all permissions</x-list-item>
                                                @else
                                                    <x-list-item>This role don't have any permission</x-list-item>
                                                @endif
                                            </x-list>
                                        @endif
                                        @if ($role->name != 'super-admin')
                                            <div x-data="{ open: false }">
                                                <span
                                                    class="text-lg flex justify-between items-center mt-6 cursor-pointer border-b hover:text-primary hover:border-primary hover:dark:border-primary dark:border-dark"
                                                    @click="open = !open">
                                                    {{ __('Add') . ' ' . __('Permissions') }}
                                                    <div class="transition" :class="open && 'rotate-90'">
                                                        <svg width="20" height="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 5L15 12L9 19" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </span>
                                                <div x-cloak x-collapse x-transition x-show="open">
                                                    <x-list class="mt-4 h-80 overflow-y-scroll">
                                                        @foreach ($permissions as $permission)
                                                            <x-list-item>
                                                                <x-inputs.check class="transition hover:scale-125"
                                                                    value="{{ $permission->name }}"
                                                                    wire:model="permissionList">
                                                                    {{ $permission->name }}
                                                                </x-inputs.check>
                                                            </x-list-item>
                                                        @endforeach
                                                    </x-list>
                                                    <button class="btn btn-success w-full mt-5"
                                                        wire:click="addPermissions({{ $role->id }})"
                                                        @click="open = false">{{ __('Save') }}</button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </x-slot:dialog>
                            </x-static-modal>
                            <x-static-modal>
                                <x-slot:trigger>
                                    <button class="transition hover:scale-110">
                                        <x-badges.basic color="info" class="lowercase"
                                            wire:click="getRole({{ $role->id }})">
                                            {{ __('Edit') }}
                                        </x-badges.basic>
                                    </button>
                                </x-slot:trigger>
                                <x-slot:title>{{ __('Edit') . ' ' . __('Role') }}</x-slot:title>
                                <x-slot:closer wire:click="clearForm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                        <line x1="18" y1="6" x2="6" y2="18">
                                        </line>
                                        <line x1="6" y1="6" x2="18" y2="18">
                                        </line>
                                    </svg>
                                </x-slot:closer>
                                <x-slot:dialog>
                                    <div class="panel w-[512px] lg:w-[768px] xl:w-[1024px]">
                                        <form>
                                            <x-inputs.text label="{{ __('Name') }}" wire:model="roleName" />
                                            <x-inputs.validate-error field="roleName" />
                                            <x-inputs.text label="{{ __('Description') }}"
                                                wire:model="roleDescription" />
                                            <x-inputs.validate-error field="roleDescription" />
                                            <div class="flex justify-start gap-2 mt-8">
                                                <button type="button" class="btn btn-info"
                                                    wire:click="updateRole({{ $role->id }})"
                                                    @click="open = false">{{ __('Update') }}</button>
                                                <button type="button" class="btn btn-dark" @click="open = false"
                                                    wire:click="clearForm">{{ __('Cancel') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </x-slot:dialog>
                            </x-static-modal>
                            <button class="transition hover:scale-110">
                                <x-badges.basic color="danger" class="lowercase"
                                    wire:click="deleteRole({{ $role->id }})">
                                    {{ __('Delete') }}</x-badges.basic>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-static-modal>
        <x-slot:trigger>
            <button class="btn btn-success btn-sm mt-8">{{ __('Add') . ' ' . __('New') . ' ' . __('Role') }}</button>
        </x-slot:trigger>
        <x-slot:title>{{ __('Create') . ' ' . __('Role') }}</x-slot:title>
        <x-slot:closer>
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" class="w-6 h-6" wire:click="clearForm">
                <line x1="18" y1="6" x2="6" y2="18">
                </line>
                <line x1="6" y1="6" x2="18" y2="18">
                </line>
            </svg>
        </x-slot:closer>
        <x-slot:dialog>
            <div class="panel w-[512px] lg:w-[768px] xl:w-[1024px]">
                <form>
                    <x-inputs.text label="{{ __('Name') }}" wire:model="roleName" />
                    <x-inputs.validate-error field="roleName" />
                    <x-inputs.text label="{{ __('Description') }}" wire:model="roleDescription" />
                    <x-inputs.validate-error field="roleDescription" />
                    <div x-data="{ open: false }">
                        <span
                            class="text-lg flex justify-between items-center mt-6 cursor-pointer border-b hover:text-primary hover:border-primary hover:dark:border-primary dark:border-dark"
                            @click="open = !open">
                            {{ __('Permissions') }}
                            <div class="transition" :class="open && 'rotate-90'">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </span>
                        <div x-cloak x-collapse x-transition x-show="open">
                            <x-list class="mt-4 h-80 overflow-y-scroll">
                                @foreach ($permissions as $permission)
                                    <x-list-item>
                                        <x-inputs.check class="transition hover:scale-125"
                                            value="{{ $permission->name }}" wire:model="permissionList">
                                            {{ $permission->name }}
                                        </x-inputs.check>
                                    </x-list-item>
                                @endforeach
                            </x-list>
                        </div>
                    </div>
                    <div class="flex justify-start gap-2 mt-8">
                        <button type="button" class="btn btn-success" @click="open = false"
                            wire:click="createRole">{{ __('Save') }}</button>
                        <button type="button" class="btn btn-dark" @click="open = false"
                            wire:click="clearForm">{{ __('Cancel') }}</button>
                    </div>
                </form>
            </div>
        </x-slot:dialog>
    </x-static-modal>
</div>
