<div>
    <div class="flex items-center justify-between mb-5">
        <h5 class="font-semibold text-lg dark:text-white-light">{{ __('Data') }}</h5>
    </div>
    <div x-data="{ tab: 'home' }">
        <ul
            class="sm:flex font-semibold border-b border-[#ebedf2] dark:border-[#191e3a] mb-5 whitespace-nowrap overflow-y-auto">
            <li class="inline-block">
                <a href="javascript:;"
                    class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary"
                    :class="{ '!border-primary text-primary': tab == 'home' }" @click="tab='home'">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <path opacity="0.5"
                            d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                            stroke="currentColor" stroke-width="1.5" />
                        <path d="M12 15L12 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    Home
                </a>
            </li>
            <li class="inline-block">
                <a href="javascript:;"
                    class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary"
                    :class="{ '!border-primary text-primary': tab == 'payment-details' }"
                    @click="tab='payment-details'">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="1.5" />
                        <path d="M12 6V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M15 9.5C15 8.11929 13.6569 7 12 7C10.3431 7 9 8.11929 9 9.5C9 10.8807 10.3431 12 12 12C13.6569 12 15 13.1193 15 14.5C15 15.8807 13.6569 17 12 17C10.3431 17 9 15.8807 9 14.5"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    {{ __('Payment Details') }}
                </a>
            </li>
            <li class="inline-block">
                <a href="javascript:;"
                    class="flex gap-2 p-4 border-b border-transparent hover:border-primary hover:text-primary"
                    :class="{ '!border-primary text-primary': tab == 'preferences' }" @click="tab='preferences'">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    {{ __('Preferences') }}
                </a>
            </li>
        </ul>
        <template x-if="tab === 'home'">
            <div>
                <form
                    class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 mb-5 bg-white dark:bg-[#0e1726]"
                    wire:submit.prevent="updateUsers">
                    <h6 class="text-lg font-bold mb-5">{{ __('General Information') }}</h6>
                    <div class="flex flex-col sm:flex-row">
                        <div class="ltr:sm:mr-4 rtl:sm:ml-4 w-full sm:w-2/12 mb-5">
                            <img src="/assets/images/profile-34.jpeg" alt="image"
                                class="w-20 h-20 md:w-32 md:h-32 rounded-full object-cover mx-auto" />
                        </div>
                        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label>{{ __('Username') }}</label>
                                <input name="username" type="text" class="form-input" value="{{ $user->username }}"
                                    {{ $edit }} />
                            </div>
                            <div>
                                <label>{{ __('Name') }}</label>
                                <input name="name" type="text" class="form-input" value="{{ $user->name }}"
                                    {{ $edit }} />
                            </div>
                            <div>
                                <label for="name">{{ __('Email') }}</label>
                                <input name="email" type="email" class="form-input" value="{{ $user->email }}"
                                    {{ $edit }} />
                            </div>
                            <div>
                                <label for="address">{{ __('Gender') }}</label>
                                @if ($edit == 'disabled')
                                    <input name="gender" type="text" class="form-input" value="{{ $user->gender }}"
                                        disabled />
                                @else
                                    <select class="form-select" name="gender">
                                        <option>-- N/A --</option>
                                        <option value="1" {{ $user->gender == 1 ? 'selected' : '' }}>
                                            {{ __('Male') }}</option>
                                        <option value="2" {{ $user->gender == 2 ? 'selected' : '' }}>
                                            {{ __('Female') }}</option>
                                    </select>
                                @endif
                            </div>
                            <div>
                                <label>{{ __('State') }}</label>
                                @if ($edit == 'disabled')
                                    <input name="state" type="text" class="form-input" disabled />
                                @else
                                    <select name="state" class="form-select">
                                        <option value="0" {{ $user->state == 0 ? 'selected' : '' }}>state 0
                                        </option>
                                        <option value="1" {{ $user->state == 1 ? 'selected' : '' }}>state 1
                                        </option>
                                    </select>
                                @endif
                            </div>
                            <div>
                                <label>{{ __('Mobile') }}</label>
                                <input name="mobile" type="text" class="form-input" x-mask="+99 999 9999999"
                                    value="{{ $user->mobile }}" {{ $edit }} />
                            </div>
                            <div>
                                <label>{{ __('Phone') }}</label>
                                <input name="phone" type="text" class="form-input" x-mask="9999999999999999"
                                    value="{{ $user->phone }}" {{ $edit }} />
                            </div>
                            <div x-data="hiddenPass">
                                <label for="web">{{ __('Password') }}</label>
                                <div class="flex">
                                    <input name="password" :type="type" class="form-input"
                                        value="{{ $user->password }}" {{ $edit }} />
                                    <div class="bg-[#eee] flex justify-center items-center ltr:rounded-r-md rtl:rounded-l-md px-3 font-semibold border ltr:border-l-0 rtl:border-r-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]"
                                        @click="toggleVisibility">
                                        <template x-if="hide">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 text-white-dark hover:text-primary">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                            </svg>
                                        </template>
                                        <template x-if="!hide">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
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
                            <div class="sm:col-span-2 mt-3 flex items-start gap-3">
                                @if ($edit == 'disabled')
                                    <button type="button" class="btn btn-primary" @click="$wire.editable">{{ __('Edit') }}</button>
                                @else
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                    <a href="" class="btn btn-dark">Cancel</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
                <form class="border border-[#ebedf2] dark:border-[#191e3a] rounded-md p-4 bg-white dark:bg-[#0e1726]">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="flex">
                            <div
                                class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
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

                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
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

                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" placeholder="jimmy_turner" class="form-input" />
                        </div>
                        <div class="flex">
                            <div
                                class="bg-[#eee] flex justify-center items-center rounded px-3 font-semibold dark:bg-[#1b2e4b] ltr:mr-2 rtl:ml-2">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
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
        </template>
        <template x-if="tab === 'payment-details'">
            <div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div class="panel">
                        <div class="mb-5">
                            <h5 class="font-semibold text-lg mb-4">Billing Address</h5>
                            <p>Changes to your <span class="text-primary">Billing</span> information will take
                                effect starting with scheduled payment and will be refelected on your next
                                invoice.</p>
                        </div>
                        <div class="mb-5">
                            <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                <div class="flex items-start justify-between py-3">
                                    <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                        Address #1 <span
                                            class="block text-white-dark dark:text-white-light font-normal text-xs mt-1">2249
                                            Caynor Circle, New Brunswick, New Jersey</span></h6>
                                    <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                        <button class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                <div class="flex items-start justify-between py-3">
                                    <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                        Address #2 <span
                                            class="block text-white-dark dark:text-white-light font-normal text-xs mt-1">4262
                                            Leverton Cove Road, Springfield, Massachusetts</span></h6>
                                    <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                        <button class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-start justify-between py-3">
                                    <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                        Address #3 <span
                                            class="block text-white-dark dark:text-white-light font-normal text-xs mt-1">2692
                                            Berkshire Circle, Knoxville, Tennessee</span></h6>
                                    <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                        <button class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Add Address</button>
                    </div>
                    <div class="panel">
                        <div class="mb-5">
                            <h5 class="font-semibold text-lg mb-4">Payment History</h5>
                            <p>Changes to your <span class="text-primary">Payment Method</span> information
                                will take effect starting with scheduled payment and will be refelected on your
                                next invoice.</p>
                        </div>
                        <div class="mb-5">
                            <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                <div class="flex items-start justify-between py-3">
                                    <div class="flex-none ltr:mr-4 rtl:ml-4">
                                        <img src="/assets/images/card-americanexpress.svg" alt="image" />
                                    </div>
                                    <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                        Mastercard <span
                                            class="block text-white-dark dark:text-white-light font-normal text-xs mt-1">XXXX
                                            XXXX XXXX 9704</span></h6>
                                    <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                        <button class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-[#ebedf2] dark:border-[#1b2e4b]">
                                <div class="flex items-start justify-between py-3">
                                    <div class="flex-none ltr:mr-4 rtl:ml-4">
                                        <img src="/assets/images/card-mastercard.svg" alt="image" />
                                    </div>
                                    <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                        American Express<span
                                            class="block text-white-dark dark:text-white-light font-normal text-xs mt-1">XXXX
                                            XXXX XXXX 310</span></h6>
                                    <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                        <button class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-start justify-between py-3">
                                    <div class="flex-none ltr:mr-4 rtl:ml-4">
                                        <img src="/assets/images/card-visa.svg" alt="image" />
                                    </div>
                                    <h6 class="text-[#515365] font-bold dark:text-white-dark text-[15px]">
                                        Visa<span
                                            class="block text-white-dark dark:text-white-light font-normal text-xs mt-1">XXXX
                                            XXXX XXXX 5264</span></h6>
                                    <div class="flex items-start justify-between ltr:ml-auto rtl:mr-auto">
                                        <button class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Add Payment Method</button>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <div class="panel">
                        <div class="mb-5">
                            <h5 class="font-semibold text-lg mb-4">Add Billing Address</h5>
                            <p>Changes your New <span class="text-primary">Billing</span> Information.</p>
                        </div>
                        <div class="mb-5">
                            <form>
                                <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="billingName">Name</label>
                                        <input id="billingName" type="text" placeholder="Enter Name"
                                            class="form-input" />
                                    </div>
                                    <div>
                                        <label for="billingEmail">Email</label>
                                        <input id="billingEmail" type="email" placeholder="Enter Email"
                                            class="form-input" />
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="billingAddress">Address</label>
                                    <input id="billingAddress" type="text" placeholder="Enter Address"
                                        class="form-input" />
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-5">
                                    <div class="md:col-span-2">
                                        <label for="billingCity">City</label>
                                        <input id="billingCity" type="text" placeholder="Enter City"
                                            class="form-input" />
                                    </div>
                                    <div>
                                        <label for="billingState">State</label>
                                        <select id="billingState" class="form-select text-white-dark">
                                            <option>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="billingZip">Zip</label>
                                        <input id="billingZip" type="text" placeholder="Enter Zip"
                                            class="form-input" />
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="mb-5">
                            <h5 class="font-semibold text-lg mb-4">Add Payment Method</h5>
                            <p>Changes your New <span class="text-primary">Payment Method</span> Information.
                            </p>
                        </div>
                        <div class="mb-5">
                            <form>
                                <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="payBrand">Card Brand</label>
                                        <select id="payBrand" class="form-select text-white-dark">
                                            <option selected="">Mastercard</option>
                                            <option>American Express</option>
                                            <option>Visa</option>
                                            <option>Discover</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="payNumber">Card Number</label>
                                        <input id="payNumber" type="text" placeholder="Card Number"
                                            class="form-input" />
                                    </div>
                                </div>
                                <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="payHolder">Holder Name</label>
                                        <input id="payHolder" type="text" placeholder="Holder Name"
                                            class="form-input" />
                                    </div>
                                    <div>
                                        <label for="payCvv">CVV/CVV2</label>
                                        <input id="payCvv" type="text" placeholder="CVV" class="form-input" />
                                    </div>
                                </div>
                                <div class="mb-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="payExp">Card Expiry</label>
                                        <input id="payExp" type="text" placeholder="Card Expiry"
                                            class="form-input" />
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template x-if="tab === 'preferences'">
            <div class="switch">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Choose Theme</h5>
                        <div class="flex justify-around">
                            <label class="inline-flex cursor-pointer">
                                <input class="form-radio ltr:mr-4 rtl:ml-4 cursor-pointer" type="radio"
                                    name="flexRadioDefault" checked="" />
                                <span>
                                    <img class="ms-3" width="100" height="68" alt="settings-dark"
                                        src="/assets/images/settings-light.svg" />
                                </span>
                            </label>

                            <label class="inline-flex cursor-pointer">
                                <input class="form-radio ltr:mr-4 rtl:ml-4 cursor-pointer" type="radio"
                                    name="flexRadioDefault" />
                                <span>
                                    <img class="ms-3" width="100" height="68" alt="settings-light"
                                        src="/assets/images/settings-dark.svg" />
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Activity data</h5>
                        <p>Download your Summary, Task and Payment History Data</p>
                        <button type="button" class="btn btn-primary">Download Data</button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Public Profile</h5>
                        <p>Your <span class="text-primary">Profile</span> will be visible to anyone on the
                            network.</p>
                        <label class="w-12 h-6 relative">
                            <input type="checkbox"
                                class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                id="custom_switch_checkbox1" />
                            <span for="custom_switch_checkbox1"
                                class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                        </label>
                    </div>
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Show my email</h5>
                        <p>Your <span class="text-primary">Email</span> will be visible to anyone on the
                            network.</p>
                        <label class="w-12 h-6 relative">
                            <input type="checkbox"
                                class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                id="custom_switch_checkbox2" />
                            <span for="custom_switch_checkbox2"
                                class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                        </label>
                    </div>
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Enable keyboard shortcuts</h5>
                        <p>When enabled, press <span class="text-primary">ctrl</span> for help</p>
                        <label class="w-12 h-6 relative">
                            <input type="checkbox"
                                class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                id="custom_switch_checkbox3" />
                            <span for="custom_switch_checkbox3"
                                class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                        </label>
                    </div>
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Hide left navigation</h5>
                        <p>Sidebar will be <span class="text-primary">hidden</span> by default</p>
                        <label class="w-12 h-6 relative">
                            <input type="checkbox"
                                class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                id="custom_switch_checkbox4" />
                            <span for="custom_switch_checkbox4"
                                class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                        </label>
                    </div>
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Advertisements</h5>
                        <p>Display <span class="text-primary">Ads</span> on your dashboard</p>
                        <label class="w-12 h-6 relative">
                            <input type="checkbox"
                                class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                id="custom_switch_checkbox5" />
                            <span for="custom_switch_checkbox5"
                                class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                        </label>
                    </div>
                    <div class="panel space-y-5">
                        <h5 class="font-semibold text-lg mb-4">Social Profile</h5>
                        <p>Enable your <span class="text-primary">social</span> profiles on this network</p>
                        <label class="w-12 h-6 relative">
                            <input type="checkbox"
                                class="custom_switch absolute w-full h-full opacity-0 z-10 cursor-pointer peer"
                                id="custom_switch_checkbox6" />
                            <span for="custom_switch_checkbox6"
                                class="bg-[#ebedf2] dark:bg-dark block h-full rounded-full before:absolute before:left-1 before:bg-white  dark:before:bg-white-dark dark:peer-checked:before:bg-white before:bottom-1 before:w-4 before:h-4 before:rounded-full peer-checked:before:left-7 peer-checked:bg-primary before:transition-all before:duration-300"></span>
                        </label>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
