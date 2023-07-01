<div>
    <form class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
        action="{{ route('users.update', $user) }}" method="post">
        @csrf
        @method('put')
        <h6 class="text-lg font-bold mb-5">{{ __('General Information') }}</h6>
        <div class="flex flex-col sm:flex-row">
            <div class="ltr:sm:mr-4 rtl:sm:ml-4 w-full sm:w-2/12 mb-5">
                <img src="/assets/images/profile-34.jpeg" alt="image"
                    class="w-20 h-20 md:w-32 md:h-32 rounded-full object-cover mx-auto">
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deleniti
                    necessitatibus quis id
                    dignissimos nostrum deserunt ipsa dolorum voluptates placeat libero, voluptatibus aut. Commodi
                    in illo quae debitis aut molestias?</p>
            </div>
            <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <x-inputs.text wire:model="username" value="{{ $user->username }}" id="1" label="{{ __('Username') }}"
                        name="username" disabled="{{ !$editable }}" />
                    <x-inputs.validate-error field="username" />
                </div>
                <div>
                    <x-inputs.text wire:model="name" value="{{ $user->name }}" label="{{ __('Name') }}" name="name"
                        disabled="{{ !$editable }}" />
                    <x-inputs.validate-error field="name" />
                </div>
                <div>
                    <x-inputs.email wire:model="email" value="{{ $user->email }}" label="{{ __('Email') }}" name="email"
                        disabled="{{ !$editable }}" />
                    <x-inputs.validate-error field="email" />
                </div>
                <div>
                    @if ($editable)
                        <x-inputs.select label="{{ __('Gender') }}" name="gender" wire:model="gender">
                            <option value="0">-- N/A --</option>
                            <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>
                                {{ __('Male') }}</option>
                            <option value="2" {{ $user->gender == 2 ? 'selected' : '' }}>
                                {{ __('Female') }}</option>
                        </x-inputs.select>
                    @else
                        <x-inputs.text value="{{ $user->gender == 0 ? '-- N/A --' : $user->gender }}" label="{{ __('Gender') }}"
                            name="gender" disabled="true" />
                    @endif
                    <x-inputs.validate-error field="state" />
                </div>
                <div>
                    @if ($editable)
                        <x-inputs.select label="State" name="state" wire:model="state">
                            <option value="0" {{ $user->state == 0 ? 'selected' : '' }}>state 0
                            </option>
                            <option value="1" {{ $user->state == 1 ? 'selected' : '' }}>state 1
                            </option>
                        </x-inputs.select>
                    @else
                        <x-inputs.text value="{{ $user->state }}" label="State" name="state" disabled="true" />
                    @endif
                    <x-inputs.validate-error field="state" />
                </div>
                <div>
                    <x-inputs.text wire:model="mobile" value="{{ $user->mobile }}" label="Mobile" name="mobile"
                        x-mask="+999999999999" disabled="{{ !$editable }}" />
                    <x-inputs.validate-error field="mobile" />
                </div>
                <div>
                    <x-inputs.text wire:model="phone" value="{{ $user->phone }}" label="Phone" name="phone"
                        x-mask="+999999999999" disabled="{{ !$editable }}" />
                    <x-inputs.validate-error field="phone" />
                </div>
                <div>
                    <x-inputs.password wire:model="password" value="{{ $user->password }}" label="Password"
                        name="password" disabled="{{ !$editable }}" />
                    <x-inputs.validate-error field="password" />
                </div>
                <div class="mt-3">
                    @if ($editable)
                        <div class="flex items-start gap-3">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            <a href="" class="btn btn-dark">Cancel</a>
                        </div>
                    @else
                        <button type="button" class="btn btn-primary"
                            wire:click="activateEdition">{{ __('Edit') }}</button>
                    @endif
                </div>
            </div>
        </div>
    </form>
    <div class="panel flex items-center gap-5">
        <span class="text-base">Actions: </span>
        <button type="button" class="btn btn-sm btn-outline-danger" wire:click="deleteUser">Delete</button>
        <p>Deleted At: <span>{{ $user->deleted_at }}</span></p>
    </div>
</div>
