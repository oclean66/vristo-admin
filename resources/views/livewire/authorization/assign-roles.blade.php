<div class="flex flex-col gap-4">
    <div class="panel">
        <div class="border-b dark:border-dark mb-3">
            <h4 class="text-2xl font-semibold">{{ __('Manage Roles') }}</h4>
            <p class="my-2">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="flex justify-center items-center gap-4">
            @foreach ($roles as $role)
                <button type="button" wire:click="getRole({{ $role->id }})"
                    @if (isset($selectedRole) && $role->name == $selectedRole->name) class="btn btn-secondary min-w-[180px]"
                @else
                class="btn btn-outline-secondary min-w-[180px]" @endif>
                    {{ $role->name }}
                </button>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col xl:flex-row gap-4">
        <div class="panel xl:basis-1/2">
            @isset($authorizeUsers)
                <div class="flex gap-2 mb-5">
                    <button class="btn btn-danger min-w-max"
                        wire:click="revokeRole">{{ __('Revoke') . ' ' . __('Role') }}</button>
                    <x-inputs.text label="none" wire:model="search" placeholder="Search..." />
                </div>
                <div class="table-responsive">
                    <table class="table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <x-inputs.check disabled />
                                </th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Role') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($authorizeUsers as $user)
                                <tr>
                                    <td>
                                        <x-inputs.check value="{{ $user->id }}" wire:model="authorizeSelectedUsers" />
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getRoleNames()->first() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endisset
        </div>
        <div class="panel xl:basis-1/2">
            <div class="flex gap-2 mb-5">
                <button class="btn btn-primary min-w-max"
                    wire:click="assignRole">{{ __('Assign') . ' ' . __('Role') }}</button>
                <x-inputs.text label="none" wire:model="search" placeholder="Search..." />
            </div>
            <div class="table-responsive">
                <table class="table-hover">
                    <thead>
                        <tr>
                            <th>
                                <x-inputs.check disabled />
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
</div>
