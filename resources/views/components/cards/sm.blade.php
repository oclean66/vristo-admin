<div
    {{ $attributes->merge(['class' => 'mb-5 flex items-center justify-center max-w-[19rem] w-full bg-white shadow-[4px_6px_10px_-3px_#bfc9d4] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] dark:bg-[#191e3a] dark:shadow-none']) }}>
    <div class="py-7 px-6">
        <h5 class="text-[#3b3f5c] text-xl font-semibold mb-4 dark:text-white-light">{{ $title }}</h5>
        <div class="text-white-dark">{!! $slot !!}</div>
    </div>
</div>
