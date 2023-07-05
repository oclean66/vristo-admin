<div class="flex flex-col xl:flex-row gap-4">
    <div class="panel basis-1/3 h-fit">
        <div class="flex flex-col md:flex-row items-center xl:flex-col gap-4">
            @foreach ($roles as $role)
                <x-cards.sm
                    class="cursor-pointer transition delay-100 ease-in-out hover:scale-110 focus:scale-110 text-center"
                    tabindex="0" wire:click="getRole('{{ $role->name }}')">
                    <x-slot:title>{{ $role->name }}</x-slot:title>
                    {{ $role->description }}
                </x-cards.sm>
            @endforeach
        </div>

        <div class="border-t pt-3 dark:border-dark flex justify-evenly">
            <button class="btn btn-primary" wire:click="assignRole">{{ __('Assign') . ' ' . __('Role') }}</button>
            <button class="btn btn-danger" wire:click="revokeRole">{{ __('Revoke') . ' ' . __('Role') }}</button>
        </div>
    </div>
    <div class="panel basis-2/3">
        <div class="mb-5">
            <x-inputs.text label="none" wire:model="search" placeholder="Search..." />
        </div>
        <div class="table-responsive">
            <table class="table-hover">
                <thead>
                    <tr>
                        <th>
                            <x-inputs.check />
                        </th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Role') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <x-inputs.check value="{{ $user->id }}" wire:model="selectedUsers" />
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->getRoleNames()->first() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $users->links('components.interface.live-pagination') }}
        </div>
    </div>
</div>
