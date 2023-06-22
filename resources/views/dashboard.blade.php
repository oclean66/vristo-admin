<x-app-layout>
    {{-- <div class="panel grid grid-cols-1 xl:grid-cols-2 gap-4 mb-5">
        <livewire:account-tree />
        <livewire:account-data />
    </div> --}}
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
        {{-- tabs --}}
        <x-tab />
        <x-vertical-tab />

        {{-- accordions --}}
        <x-accordion />

        {{-- cards --}}
        <x-cards.sm>
            <x-slot:title>
                Title
            </x-slot:title>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, dignissimos.</p>
        </x-cards.sm>

        <x-cards.md>
            <x-slot:heading class="rounded-full overflow-hidden h-20 w-20">
                <img src="/assets/images/profile-34.jpeg" alt="image" class="w-full h-full object-cover">
            </x-slot:heading>
            <x-slot:title>Tilte</x-slot:title>

            <p class="mb-2 text-white-dark">Manager</p>
            <span class="badge bg-primary rounded-full">4.5</span>
            <p class="font-semibold text-white-dark mt-4 sm:mt-8">Maecenas nec mi vel lacus
                condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat.
                Vestibulum in ultricies.</p>
        </x-cards.md>

        <x-cards.lg>
            <x-slot:heading>
                <div class="h-[215px] overflow-hidden">
                    <img src="/assets/images/profile-28.jpeg" alt="image" class="w-full h-full object-cover" />
                </div>
            </x-slot:heading>
            <x-slot:title>Title</x-slot:title>

            <p class="text-white-dark">Etiam sed augue ac justo tincidunt posuere. Vivamus euismod eros,
                nec risus malesuada.</p>
            <button type="button" class="btn btn-primary mt-6">Explore More</button>
        </x-cards.lg>

        <x-cards.xl>
            <x-slot:heading>
                <div class="h-[260px] overflow-hidden">
                    <img src="/assets/images/profile-28.jpeg" alt="image" class="w-full h-full object-cover" />
                </div>
            </x-slot:heading>
            <x-slot:title>Title</x-slot:title>

            <p class="text-primary text-xs mb-1.5 font-bold">25 Sep 2020</p>
            <p class="text-white-dark ">Vestibulum vestibulum tortor ut eros tincidunt, ut rutrum elit
                volutpat.</p>

            <x-slot:footer>
                <div class="flex items-center font-semibold">
                    <div class="w-9 h-9 rounded-full overflow-hidden inline-block ltr:mr-2 rtl:ml-2.5">
                        <span
                            class="flex w-full h-full items-center justify-center bg-[#515365] text-[#e0e6ed]">AG</span>
                    </div>
                    <div class="text-[#515365] dark:text-white-dark">Luke Ivory</div>
                </div>
                <div class="flex font-semibold">
                    <div class="text-primary flex items-center ltr:mr-3 rtl:ml-3">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ltr:mr-1 rtl:ml-1">
                            <path
                                d="M12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path opacity="0.5"
                                d="M12 5.50063C16.4998 0.825464 22 4.27416 22 9.1371C22 14 17.9806 16.5914 15.0383 18.9109C14 19.7294 13 20.5 12 20.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        51
                    </div>
                    <div class="text-primary flex items-center">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ltr:mr-1 rtl:ml-1">
                            <path opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                        250
                    </div>
                </div>
            </x-slot:footer>
        </x-cards.xl>

        {{-- infobox --}}
        <x-infobox.simple>
            <x-slot:heading class="text-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-12 h-12">
                    <path
                        d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M21 7.5L12 12M12 12L3 7.5M12 12V21.5" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </x-slot:heading>
            <x-slot:title>Title</x-slot:title>

            <p class="text-white-dark text-[15px]  mb-3.5">Lorem ipsum dolor sit amet, labore et dolore
                magna aliqua.</p>

            <x-slot:link>
                Discover

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180">
                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </x-slot:link>
        </x-infobox.simple>

        <x-infobox.solid>
            <x-slot:heading class="text-white-light bg1-white-dark w-20 h-20 rounded-full">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-12 h-12">
                    <path
                        d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M21 7.5L12 12M12 12L3 7.5M12 12V21.5" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </x-slot:heading>
            <x-slot:title>Title</x-slot:title>

            <p class="text-white-light text-[15px]  mb-3.5">Lorem ipsum dolor sit amet, labore et
                dolore magna aliqua.</p>

            <x-slot:link>
                Discover

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180">
                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </x-slot:link>
        </x-infobox.solid>

        <x-infobox.icon>
            <x-slot:icon color="primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="w-12 h-12">
                    <path
                        d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path opacity="0.5" d="M21 7.5L12 12M12 12L3 7.5M12 12V21.5" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </x-slot:icon>
            <x-slot:title>Title</x-slot:title>

            <p class="text-white-dark text-[15px]  mb-3.5">Lorem ipsum dolor sit amet, labore et dolore
                magna aliqua.</p>

            <x-slot:link>
                Discover

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 ltr:ml-1 rtl:mr-1 inline-block relative transition-all duration-300 group-hover:translate-x-2 rtl:group-hover:-translate-x-2 rtl:rotate-180">
                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </x-slot:link>
        </x-infobox.icon>

        <div class="panel grid grid-cols-3">
            <div>
                <span
                    class="animate-spin border-4 border-success border-l-transparent rounded-full w-10 h-10 inline-block align-middle m-auto mb-10"></span>
            </div>
            <div>
                <span
                    class="animate-spin border-4 border-transparent border-l-black rounded-full w-10 h-10 inline-block align-middle m-auto mb-10 dark:border-l-dark"></span>
            </div>
            <div class="w-4 h-4">
                <span class="animate-ping inline-flex h-full w-full rounded-full bg-info"></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                    class="w-5 h-5 animate-[spin_2s_linear_infinite] inline-block align-middle ltr:mr-2 rtl:ml-2">
                    <line x1="12" y1="2" x2="12" y2="6"></line>
                    <line x1="12" y1="18" x2="12" y2="22"></line>
                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                    <line x1="2" y1="12" x2="6" y2="12"></line>
                    <line x1="18" y1="12" x2="22" y2="12"></line>
                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>
