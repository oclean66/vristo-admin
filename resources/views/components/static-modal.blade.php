<div x-data="modal">
    <div class="w-fit" @click="toggle">
        {{ $trigger }}
    </div>
    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden" :class="open && '!block'">
        <div class="flex flex-wrap content-center justify-center min-h-screen px-4">
            <div x-show="open" x-transition x-transition.duration.300
                class="panel border-0 p-0 rounded-lg overflow-hidden w-fit">
                <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                    <div class="font-bold text-lg">{{ $title }}</div>
                    @isset($closer)
                        <button type="button" {{ $attributes->merge(['class' => 'text-white-dark hover:text-dark']) }}
                            @click="toggle">
                            {!! $closer !!}
                        </button>
                    @else
                        <button type="button" class="text-white-dark hover:text-dark" @click="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="w-6 h-6">
                                <line x1="18" y1="6" x2="6" y2="18">
                                </line>
                                <line x1="6" y1="6" x2="18" y2="18">
                                </line>
                            </svg>
                        </button>
                    @endisset
                </div>
                {!! $dialog !!}
            </div>
        </div>
    </div>
</div>
