<div class="panel">
    <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">
        <div class="mx-10 mb-5 sm:mb-0">
            <ul class="w-24 m-auto text-center font-semibold">
                <li>
                    <a href="javascript:;"
                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 hover:before:h-[80%] before:bg-secondary"
                        :class="{ 'text-secondary before:!h-[80%]': tab === 'home' }" @click="tab='home'">Home</a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%]"
                        :class="{ 'text-secondary before:!h-[80%]': tab === 'profile' }"
                        @click="tab='profile'">Profile</a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%]"
                        :class="{ 'text-secondary before:!h-[80%]': tab === 'messages' }"
                        @click="tab='messages'">Messages</a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="p-3.5 py-4 -mb-[1px] block ltr:border-r rtl:border-l border-white-light dark:border-[#191e3a] relative before:transition-all before:duration-700 hover:text-secondary before:absolute before:w-[1px] before:bottom-0 before:top-0 ltr:before:-right-[1px] rtl:before:-left-[1px] before:m-auto before:h-0 before:bg-secondary hover:before:h-[80%]"
                        :class="{ 'text-secondary before:!h-[80%]': tab === 'settings' }"
                        @click="tab='settings'">Settings</a>
                </li>
            </ul>
        </div>
        <div class="flex-1 text-sm ">
            <template x-if="tab === 'home'">
                <div>
                    <h4 class="font-semibold text-2xl mb-4">We move your world!</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </template>
            <template x-if="tab === 'profile'">
                <div>
                    <div class="flex items-start">
                        <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                            <img src="/assets/images/profile-34.jpeg" alt="image"
                                class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                        </div>
                        <div class="flex-auto">
                            <h5 class="text-xl font-medium mb-4">Media heading</h5>
                            <p class="text-white-dark">Cras sit amet nibh libero, in gravida nulla.
                                Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                faucibus.</p>
                        </div>
                    </div>
                </div>
            </template>
            <template x-if="tab === 'messages'">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </template>
            <template x-if="tab === 'settings'">
                <div>
                    <blockquote
                        class="text-black p-5 ltr:pl-3.5 rtl:pr-3.5 bg-white shadow-md rounded-tr-md rounded-br-md border border-white-light border-l-2 !border-l-primary dark:bg-[#060818] dark:border-[#060818]">
                        <div class="flex items-start">
                            <p class="not-italic text-[#515365] text-sm dark:text-white-dark m-0">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo.</p>
                        </div>
                    </blockquote>
                </div>
            </template>
        </div>
    </div>
</div>
