<div x-data="locale">
    <div class="dropdown shrink-0" x-data="dropdown" @click.outside="open = false">
        <a href="javascript:;"
            class="block p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60"
            @click="toggle">
            <img :src="`/assets/images/flags/${$store.app.locale.toUpperCase()}.svg`" alt="image"
                class="w-5 h-5 object-cover rounded-full" />
        </a>
        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
            class="ltr:-right-14 sm:ltr:-right-2 rtl:-left-14 sm:rtl:-left-2 top-11 !px-2 text-dark dark:text-white-dark grid grid-cols-2 gap-y-2 font-semibold dark:text-white-light/90 w-[280px]">
            <template x-for="lang in languages">
                <li>
                    <a :href="`/locale/${lang.value}`" class="hover:text-primary"
                        @click="$store.app.toggleLocale(lang.value),toggle()"
                        :class="{ 'bg-primary/10 text-primary': $store.app.locale == lang.value }">
                        <img class="w-5 h-5 object-cover rounded-full"
                            :src="`/assets/images/flags/${lang.value.toUpperCase()}.svg`" alt="image" />
                        <span class="ltr:ml-3 rtl:mr-3" x-text="lang.key"></span>
                    </a>
                </li>
            </template>
        </ul>
    </div>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("locale", () => ({
                languages: [{
                        id: 1,
                        key: '{{__('English')}}',
                        value: 'en',
                    },
                    {
                        id: 2,
                        key: '{{__('Spanish')}}',
                        value: 'es',
                    }
                ],
            }));
        });
    </script>
</div>
