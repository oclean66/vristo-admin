<x-app-layout>
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
        {{-- Mailbox and Notification --}}
        <div class="flex items-center space-x-1.5">
            <div class="dropdown" x-data="dropdown" @click.outside="open = false">
                <a href="javascript:;"
                    class="block p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60"
                    @click="toggle">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22 10C22.0185 10.7271 22 11.0542 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H13"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <circle cx="19" cy="5" r="3" stroke="currentColor" stroke-width="1.5" />
                    </svg>
                </a>
                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                    class="top-11 !py-0 text-dark dark:text-white-dark w-[300px] ltr:-right-16 sm:ltr:-right-2 rtl:-left-16 sm:rtl:-left-2 sm:w-[375px] text-xs">
                    <li class="mb-5">
                        <div class="overflow-hidden relative rounded-t-md !p-5 text-white">
                            <div
                                class="absolute h-full w-full bg-[url('/assets/images/menu-heade.jpg')] bg-no-repeat bg-center bg-cover inset-0">
                            </div>
                            <h4 class="font-semibold relative z-10 text-lg">Messages</h4>
                        </div>
                    </li>
                    <template x-for="msg in messages">
                        <li>
                            <div class="flex items-center px-5 py-3" @click.self="toggle">
                                <div x-html="msg.image"></div>
                                <span class="px-3 dark:text-gray-500">
                                    <div class="font-semibold text-sm dark:text-white-light/90" x-text="msg.title">
                                    </div>
                                    <div x-text="msg.message"></div>
                                </span>
                                <span
                                    class="font-semibold bg-white-dark/20 rounded text-dark/60 px-1 ltr:ml-auto rtl:mr-auto whitespace-pre dark:text-white-dark ltr:mr-2 rtl:ml-2"
                                    x-text="msg.time"></span>
                                <span class="text-neutral-300 hover:text-danger" @click="removeMessage(msg.id)">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.5" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                        </li>
                    </template>
                    <template x-if="messages.length">
                        <li class="border-t border-white-light text-center dark:border-white/10 mt-5 ">
                            <div class="flex items-center px-4 py-4 text-primary font-semibold group dark:text-gray-400  justify-center cursor-pointer"
                                @click="toggle">
                                <span class="group-hover:underline ltr:mr-1 rtl:ml-1">VIEW ALL ACTIVITIES</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition duration-300 ltr:ml-1 rtl:mr-1"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </li>
                    </template>
                    <template x-if="!messages.length">
                        <li class="mb-5">
                            <div class="!grid place-content-center hover:!bg-transparent text-lg min-h-[200px]">
                                <div class="mx-auto ring-4 ring-primary/30 rounded-full mb-4 text-primary">
                                    <svg width="40" height="40" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10 4.25C10.4142 4.25 10.75 4.58579 10.75 5V11C10.75 11.4142 10.4142 11.75 10 11.75C9.58579 11.75 9.25 11.4142 9.25 11V5C9.25 4.58579 9.58579 4.25 10 4.25Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                No data available.
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
            <div class="dropdown" x-data="dropdown" @click.outside="open = false">
                <a href="javascript:;"
                    class="relative block p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60"
                    @click="toggle">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0001 9.7041V9C19.0001 5.13401 15.8661 2 12.0001 2C8.13407 2 5.00006 5.13401 5.00006 9V9.7041C5.00006 10.5491 4.74995 11.3752 4.28123 12.0783L3.13263 13.8012C2.08349 15.3749 2.88442 17.5139 4.70913 18.0116C9.48258 19.3134 14.5175 19.3134 19.291 18.0116C21.1157 17.5139 21.9166 15.3749 20.8675 13.8012L19.7189 12.0783C19.2502 11.3752 19.0001 10.5491 19.0001 9.7041Z"
                            stroke="currentColor" stroke-width="1.5" />
                        <path d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C14.0775 22 15.845 20.7478 16.5 19"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M12 6V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>

                    <span class="flex absolute w-3 h-3 ltr:right-0 rtl:left-0 top-0">
                        <span
                            class="animate-ping absolute ltr:-left-[3px] rtl:-right-[3px] -top-[3px] inline-flex h-full w-full rounded-full bg-success/50 opacity-75"></span>
                        <span class="relative inline-flex rounded-full w-[6px] h-[6px] bg-success"></span>
                    </span>
                </a>
                <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                    class="ltr:-right-2 rtl:-left-2 top-11 !py-0 text-dark dark:text-white-dark w-[300px] sm:w-[350px] divide-y dark:divide-white/10">
                    <li>
                        <div class="flex items-center px-4 py-2 justify-between font-semibold hover:!bg-transparent">
                            <h4 class="text-lg">Notification</h4>
                            <template x-if="notifications.length">
                                <span class="badge bg-primary/80" x-text="notifications.length + ' New'"></span>
                            </template>
                        </div>
                    </li>
                    <template x-for="notification in notifications">
                        <li class=" dark:text-white-light/90 ">
                            <div class="flex items-center px-4 py-2 group" @click.self="toggle">
                                <div class="grid place-content-center rounded">
                                    <div class="w-12 h-12 relative">
                                        <img class="w-12 h-12 rounded-full object-cover"
                                            :src="`/assets/images/${notification.profile}`" alt="image" />
                                        <span
                                            class="bg-success w-2 h-2 rounded-full block absolute right-[6px] bottom-0"></span>
                                    </div>
                                </div>
                                <div class="ltr:pl-3 rtl:pr-3 flex flex-auto">
                                    <div class="ltr:pr-3 rtl:pl-3">
                                        <h6 x-html="notification.message"></h6>
                                        <span class="text-xs block font-normal dark:text-gray-500"
                                            x-text="notification.time"></span>
                                    </div>
                                    <button type="button"
                                        class="ltr:ml-auto rtl:mr-auto text-neutral-300 hover:text-danger opacity-0 group-hover:opacity-100"
                                        @click="removeNotification(notification.id)">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle opacity="0.5" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="1.5" />
                                            <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </template>
                    <template x-if="notifications.length">
                        <li>
                            <div class="p-4">
                                <button class="btn btn-primary block w-full btn-small" @click="toggle">Read All
                                    Notifications</button>
                            </div>
                        </li>
                    </template>
                    <template x-if="!notifications.length">
                        <li>
                            <div class="!grid place-content-center hover:!bg-transparent text-lg min-h-[200px]">
                                <div class="mx-auto ring-4 ring-primary/30 rounded-full mb-4 text-primary">
                                    <svg width="40" height="40" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20C15.5228 20 20 15.5228 20 10Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10 4.25C10.4142 4.25 10.75 4.58579 10.75 5V11C10.75 11.4142 10.4142 11.75 10 11.75C9.58579 11.75 9.25 11.4142 9.25 11V5C9.25 4.58579 9.58579 4.25 10 4.25Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                No data available.
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
        </div>

        {{-- tabs --}}
        <x-tab />
        <x-vertical-tab />

        {{-- accordions --}}
        <x-accordion />

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
