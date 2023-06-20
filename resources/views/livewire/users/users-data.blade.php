<div>
    <div class="flex items-center justify-between mb-5">
        <h5 class="font-semibold text-lg dark:text-white-light">{{ __('Data') }}</h5>
    </div>
    <div x-data="{ editable: false }">
        <form class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
            action="{{ route('users.update', $user) }}" method="post">
            @csrf
            @method('put')
            {{ $errors }}
            <h6 class="text-lg font-bold mb-5">{{ __('General Information') }}</h6>
            <div class="flex flex-col sm:flex-row">
                <div class="ltr:sm:mr-4 rtl:sm:ml-4 w-full sm:w-2/12 mb-5">
                    <img src="/assets/images/profile-34.jpeg" alt="image"
                        class="w-20 h-20 md:w-32 md:h-32 rounded-full object-cover mx-auto">
                </div>
                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label>{{ __('Username') }}</label>
                        <input name="username" type="text" class="form-input" wire:model.defer="username"
                            value="{{ $user->username }}" :disabled="!editable">
                    </div>
                    <div>
                        <label>{{ __('Name') }}</label>
                        <input name="name" type="text" class="form-input" wire:model.defer="name"
                            value="{{ $user->name }}" :disabled="!editable">
                    </div>
                    <div>
                        <label>{{ __('Email') }}</label>
                        <input name="email" type="email" class="form-input" wire:model.defer="email"
                            value="{{ $user->email }}" :disabled="!editable">
                    </div>
                    <div>
                        <label>{{ __('Gender') }}</label>
                        <template x-if="!editable">
                            <input name="gender" type="text" class="form-input" value="{{ $user->gender }}"
                                disabled>
                        </template>
                        <template x-if="editable">
                            <select class="form-select" name="gender" wire:model.defer="gender">
                                <option value="0">-- N/A --</option>
                                <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>
                                    {{ __('Male') }}</option>
                                <option value="2" {{ $user->gender == 2 ? 'selected' : '' }}>
                                    {{ __('Female') }}</option>
                            </select>
                        </template>
                    </div>
                    <div>
                        <label>{{ __('State') }}</label>
                        <template x-if="!editable">
                            <input name="state" type="text" class="form-input" disabled>
                        </template>
                        <template x-if="editable">
                            <select name="state" class="form-select" wire:model.defer="state">
                                <option value="0" {{ $user->state == 0 ? 'selected' : '' }}>state 0
                                </option>
                                <option value="1" {{ $user->state == 1 ? 'selected' : '' }}>state 1
                                </option>
                            </select>
                        </template>
                    </div>
                    <div>
                        <label>{{ __('Mobile') }}</label>
                        <input name="mobile" type="text" class="form-input" x-mask="+99 999 9999999"
                            wire:model.defer="mobile" :disabled="!editable">
                        {{ $this->mobile }}
                    </div>
                    <div>
                        <label>{{ __('Phone') }}</label>
                        <input name="phone" type="text" class="form-input" x-mask="9999999999999999"
                            wire:model.defer="phone" value="{{ $user->phone }}" :disabled="!editable">
                    </div>
                    <div x-data="hiddenPass">
                        <label for="web">{{ __('Password') }}</label>
                        <div class="flex">
                            <input name="password" :type="type" class="form-input"
                                value="{{ $user->password }}" :disabled="!editable">
                            <div class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                @click="toggleVisibility">
                                <template x-if="hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-white-dark hover:text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                    </svg>
                                </template>
                                <template x-if="!hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-white-dark hover:text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <template x-if="!editable">
                            <button type="button" class="btn btn-primary"
                                @click="editable = true">{{ __('Edit') }}</button>
                        </template>
                        <template x-if="editable">
                            <div class="flex items-start gap-3">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                <a href="" class="btn btn-dark">Cancel</a>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </form>
        <form class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 bg-white dark:bg-[#0e1726]">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="flex">
                    <div
                        class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect x="2" y="9" width="4" height="12">
                            </rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </div>
                    <input type="text" placeholder="jimmy_turner" class="form-input" />
                </div>
                <div class="flex">
                    <div
                        class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                            </path>
                        </svg>
                    </div>
                    <input type="text" placeholder="jimmy_turner" class="form-input" />
                </div>
                <div class="flex">
                    <div
                        class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                            </path>
                        </svg>
                    </div>
                    <input type="text" placeholder="jimmy_turner" class="form-input" />
                </div>
                <div class="flex">
                    <div
                        class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <path
                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                            </path>
                        </svg>
                    </div>
                    <input type="text" placeholder="jimmy_turner" class="form-input" />
                </div>
            </div>
        </form>
    </div>
</div>
