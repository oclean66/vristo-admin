<x-app-layout>
    {{-- <div class="panel grid grid-cols-1 xl:grid-cols-2 gap-4 mb-5">
        <livewire:account-tree />
        <livewire:account-data />
    </div> --}}
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
        <x-tab />
        <x-vertical-tab />
        <x-accordion />

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

        <x-info-box />
        <x-info-box-2 />
        <x-info-box-3 />
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
