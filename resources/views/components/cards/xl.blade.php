@props(['heading', 'footer'])

<div class="mb-5 flex items-center justify-center">
    <div
        class="max-w-[22rem] w-full bg-white shadow-[4px_6px_10px_-3px_#bfc9d4] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] dark:bg-[#191e3a] dark:shadow-none">
        <div class="py-7 px-6">
            @isset($heading)
                <div {{ $heading->attributes->merge(['class' => '-mt-7 -mx-6 mb-6 rounded-t overflow-hidden']) }}>
                    {!! $heading !!}
                </div>
            @endisset
            <h5 class="text-[#3b3f5c] text-[15px] font-bold mb-4 dark:text-white-light">{{ $title }}</h5>

            {!! $slot !!}

            @isset($footer)
                <div
                    class="relative flex justify-between mt-6 pt-4 before:w-[250px] before:h-[1px] before:bg-[#e0e6ed] before:inset-x-0 before:top-0 before:absolute before:mx-auto dark:before:bg-[#1b2e4b]">
                    {!! $footer !!}
                </div>
            @endisset
        </div>
    </div>
</div>
