<div class="panel">
    <h4 class="text-2xl font-semibold border-b mb-3 dark:border-dark">Roles</h4>
    <div class="flex flex-col sm:flex-row xl:flex-col justify-center items-center gap-4">
        @foreach ($roles as $role)
            <x-cards.sm
                class="cursor-pointer transition delay-100 ease-in-out hover:scale-110 focus:scale-110 text-center"
                tabindex="0" wire:click="getRole({{ $role }})">
                <x-slot:title>{{ $role->name }}</x-slot:title>
                {{ $role->description }}
            </x-cards.sm>
        @endforeach
    </div>
    <div class="border-t pt-3 dark:border-dark" x-data="{ tab: '' }">
        <div class="flex justify-evenly mb-5">
            <button type="button" class="btn btn-primary"
                @click="tab === '' ? tab = 'create' : tab = ''">{{ __('Create') }}</button>
            <button type="button" class="btn btn-info"
                @click="tab === '' ? tab = 'edit' : tab = ''">{{ __('Edit') }}</button>
            <x-modal>
                <x-slot:toggle>
                    <button type="button" class="btn btn-danger">{{ __('Delete') }}</button>
                </x-slot:toggle>
                <x-slot:dialog>
                    <div class="panel">
                        <div class="flex items-center justify-between px-5 py-3">
                            <div class="font-bold text-lg">{{ __('Delete') . ' ' . __('User') }}</div>
                            <button type="button" class="text-white-dark hover:text-dark" @click="toggle">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                    <line x1="18" y1="6" x2="6" y2="18">
                                    </line>
                                    <line x1="6" y1="6" x2="18" y2="18">
                                    </line>
                                </svg>
                            </button>
                        </div>
                        <div class="flex gap-2">
                            @foreach ($roles as $role)
                                <x-cards.sm class="text-center mx-3">
                                    <x-slot:title>{{ $role->name }}</x-slot:title>
                                    <div class="flex flex-col">
                                        {{ $role->description }}
                                        <button class="text-lg text-danger hover:underline mt-10"
                                            wire:click="deleteRole({{ $role }})">{{ __('Delete') }}</button>
                                    </div>
                                </x-cards.sm>
                            @endforeach
                        </div>
                    </div>
                </x-slot:dialog>
            </x-modal>
        </div>
        <div x-cloack x-transition x-collapse x-show="tab === 'create'">
            <x-inputs.text label="{{ __('Name') }}" wire:model="roleName" />
            <x-inputs.text label="{{ __('Description') }}" wire:model="roleDescription" />
            <button type="button" class="btn btn-success mt-5 mx-auto"
                wire:click="createRole">{{ __('Save') }}</button>
        </div>
        <div x-cloack x-transition x-collapse x-show="tab === 'edit'">
            <x-inputs.text label="{{ __('Name') }}" wire:model="roleName" />
            <x-inputs.text label="{{ __('Description') }}" wire:model="roleDescription" />
            <button type="button" class="btn btn-success mt-5 mx-auto"
                wire:click="updateRole">{{ __('Update') }}</button>
        </div>
    </div>
</div>
