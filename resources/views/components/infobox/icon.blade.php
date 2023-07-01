@php
    $color = 'bg-primary';
    
    if (isset($icon->attributes['color'])) {
        $color = 'bg-' . $icon->attributes['color'];
    }
@endphp

<div class="flex flex-wrap w-full h-fit justify-center">
    <div
        class="border border-gray-500/20 rounded-md shadow-[rgb(31_45_61_/_10%)_0px_2px_10px_1px] dark:shadow-[0_2px_11px_0_rgb(6_8_24_/_39%)] p-6 pt-12 mt-8 relative">
        <div
            {{ $icon->attributes->merge(['class' => $color . ' absolute text-white-light ltr:left-6 rtl:right-6 -top-8 p-2 rounded-md flex items-center justify-center mb-5 mx-auto']) }}>
            {!! $icon !!}
        </div>
        <h5 class="text-dark text-lg font-semibold mb-3.5 dark:text-white-light">{{ $title }}</h5>

        {!! $slot !!}

        <a
            {{ $link->attributes->merge(['class' => 'text-primary font-semibold hover:underline group', 'href' => '#']) }}>
            {!! $link !!}
        </a>
    </div>
</div>
