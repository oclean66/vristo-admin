<div class="flex flex-wrap w-full h-fit justify-center">
    <div
        class="border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6">
        @isset($heading)
            <div {{ $heading->attributes->merge(['class' => 'mb-5']) }}>
                {!! $heading !!}
            </div>
        @endisset
        <h5 class="text-lg font-semibold mb-3.5 dark:text-white-light">{{ $title }}</h5>

        {{ $slot }}

        <a
            {{ $link->attributes->merge(['class' => 'text-primary font-semibold hover:underline group', 'href' => '#']) }}>
            {!! $link !!}
        </a>
    </div>
</div>
