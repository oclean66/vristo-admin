@if ($paginator->hasPages())
    <div class="mb-5">
        <div class="flex justify-center flex-col w-full">
            <ul class="inline-flex items-center m-auto">
                @if ($paginator->onFirstPage())
                    <li>
                        <button type="button"
                            class="flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-[#888ea8] dark:text-dark dark:bg-[#191e3a] cursor-default">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                @else
                    <li>
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                            rel="prev"
                            class="flex justify-center font-semibold ltr:rounded-l-full rtl:rounded-r-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                @endif
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li>
                            <button type="button"
                                class="flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark dark:text-white-light dark:bg-[#191e3a] cursor-default">{{ $element }}</button>
                        </li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <li wire:key="{{ $page }}">
                                @if ($page == $paginator->currentPage())
                                    <span>
                                        <button type="button"
                                            class="flex justify-center font-semibold px-3.5 py-2 transition bg-primary text-white dark:text-white-light dark:bg-primary">{{ $page }}</button>
                                    </span>
                                @else
                                    <span>
                                        <button type="button"
                                            wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                            class="flex justify-center font-semibold px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary">{{ $page }}</button>
                                    </span>
                                @endif
                            </li>
                        @endforeach
                    @endif
                @endforeach
                @if ($paginator->hasMorePages())
                    <li>
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                            rel="next"
                            class="flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-dark hover:text-white hover:bg-primary dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-primary">


                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                @else
                    <li>
                        <button type="button"
                            class="flex justify-center font-semibold ltr:rounded-r-full rtl:rounded-l-full px-3.5 py-2 transition bg-white-light text-[#888ea8] dark:text-dark dark:bg-[#191e3a] cursor-default">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:rotate-180">
                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif
