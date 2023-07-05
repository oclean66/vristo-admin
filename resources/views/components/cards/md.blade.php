<div class="mb-5 flex items-center justify-center">
    <div
        class="max-w-[30rem] w-full bg-white shadow-[4px_6px_10px_-3px_#bfc9d4] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] dark:bg-[#191e3a] dark:shadow-none">
        <div class="p-5 flex items-center flex-col sm:flex-row">
            @isset ($heading)
                <div {{ $heading->attributes->merge() }}>
                    {!! $heading !!}
                </div>
            @endisset
            <div class="flex-1 ltr:sm:pl-5 rtl:sm:pr-5 text-center sm:text-left">
                <h5 class="text-[#3b3f5c] text-[15px] font-semibold mb-2 dark:text-white-light">{{ $title }}</h5>
                {!! $slot !!}
            </div>
        </div>
    </div>
</div>