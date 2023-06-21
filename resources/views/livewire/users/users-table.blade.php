<div class="panel">
    {{ $errors }}
    <div class="mb-5 max-w-fit">
        <x-modal>
            <x-slot:toggle>
                <button class="btn btn-primary">Create User</button>
            </x-slot:toggle>
            <x-slot:dialog>
                <div class="panel w-[512px] lg:w-[768px] xl:w-[1024px]">
                    <h6 class="text-xl">{{ __('Create') . ' ' . __('User') }}</h6>
                    <form action="{{ route('users.store') }}" method="post" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-inputs.text wire:model.debounce="name" label="{{ __('Name') }}" name="name" required />
                                <x-inputs.validate-error field="name" />
                            </div>
                            <div>
                                <x-inputs.text wire:model.debounce="username" label="{{ __('Username') }}" name="username" />
                                <x-inputs.validate-error field="username" />
                            </div>
                        </div>
                        <div>
                            <x-inputs.text wire:model.debounce="email" label="{{ __('Email') }}" name="email" required />
                            <x-inputs.validate-error field="email" />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-inputs.select wire:model.debounce="gender" label="{{ __('Gender') }}" name="gender">
                                    <option value="0">-- N/A --</option>
                                    <option value="1">{{ __('Male') }}</option>
                                    <option value="2">{{ __('Female') }}</option>
                                </x-inputs.select>
                                <x-inputs.validate-error field="gender" />
                            </div>
                            <div>
                                <x-inputs.select wire:model.debounce="state" label="{{ __('State') }}" name="state">
                                    <option value="0">state 0</option>
                                    <option value="1">state 1</option>
                                </x-inputs.select>
                                <x-inputs.validate-error field="state" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-inputs.text wire:model.debounce="mobile" label="{{ __('Mobile') }}" name="mobile"
                                    x-mask="+999999999999" />
                                <x-inputs.validate-error field="mobile" />
                            </div>
                            <div>
                                <x-inputs.text wire:model.debounce="phone" label="{{ __('Phone') }}" name="phone"
                                    x-mask="+999999999999" />
                                <x-inputs.validate-error field="phone" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <x-inputs.password wire:model.debounce="password" label="{{ __('Password') }}" name="password"
                                    required />
                                <x-inputs.validate-error field="password" />
                            </div>
                            <div>
                                <x-inputs.password wire:model.debounce="password_confirmation"
                                    label="{{ __('Confirm Password') }}" name="password_confirmation" required />
                                <x-inputs.validate-error field="password_confirmation" />
                            </div>
                        </div>
                        <div class="flex mt-5 justify-start gap-4">
                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            <button type="button" class="btn btn-dark" wire:click="resetFields">{{ __('Cancel') }}</button>
                        </div>
                    </form>
                </div>
            </x-slot:dialog>
        </x-modal>
    </div>
    <div class="table-responsive">
        <table class="table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="!text-center">Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="whitespace-nowrap">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <ul class="flex items-center justify-center gap-2">
                                <li>
                                    <a href="{{ route('users.data', $user->id) }}" x-tooltip="Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 hover:text-primary transition hover:scale-y-125">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $users->links('components.interface.pagination') }}
    </div>
</div>
