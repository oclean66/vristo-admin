<div class="panel">
    <div class="mb-5" x-data="{ active: 1 }">
        <div class="space-y-2 font-semibold">
            <div class="border border-[#d3d3d3] rounded dark:border-[#1b2e4b]">
                <button type="button" class="p-4 w-full flex items-center text-white-dark dark:bg-[#1b2e4b]"
                    :class="{ '!text-primary': active === 1 }"
                    x-on:click="active === 1 ? active = null : active = 1">Collapsible Group Item #1
                    <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': active === 1 }">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
                <div x-cloak x-show="active === 1" x-collapse x-transition>
                    <div
                        class="space-y-2 p-4 text-white-dark text-[13px] border-t border-[#d3d3d3] dark:border-[#1b2e4b]">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
            <div class="border border-[#d3d3d3] dark:border-[#1b2e4b] rounded">
                <button type="button" class="p-4 w-full flex items-center text-white-dark dark:bg-[#1b2e4b]"
                    :class="{ '!text-primary': active === 2 }"
                    x-on:click="active === 2 ? active = null : active = 2">Collapsible Group Item #2
                    <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': active === 2 }">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
                <div x-cloak x-show="active === 2" x-collapse x-transition>
                    <div class="p-4 text-[13px] border-t border-[#d3d3d3] dark:border-[#1b2e4b]">
                        <ul class="space-y-1">
                            <li><a href="javascript:;">Apple</a></li>
                            <li><a href="javascript:;">Orange</a></li>
                            <li><a href="javascript:;">Banana</a></li>
                            <li><a href="javascript:;">list</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border border-[#d3d3d3] dark:border-[#1b2e4b] rounded">
                <button type="button" class="p-4 w-full flex items-center text-white-dark dark:bg-[#1b2e4b]"
                    :class="{ '!text-primary': active === 3 }"
                    x-on:click="active === 3 ? active = null : active = 3">Collapsible Group Item #3
                    <div class="ltr:ml-auto rtl:mr-auto" :class="{ 'rotate-180': active === 3 }">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-4 h-4">
                            <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
                <div x-cloak x-show="active === 3" x-collapse x-transition>
                    <div class="p-4 text-[13px] border-t border-[#d3d3d3] dark:border-[#1b2e4b]">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS.</p>
                        <button type="button" class="btn btn-primary mt-4">Accept</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
