@props([
    'title' => 'Alert!',
    'description' => '',
    'color' => 'primary', // primary, succcess, danger, secondary, warning, info
])

<div x-data="alert" x-show="open">
    <div
        {{ $attributes->merge(['class' => 'flex items-center p-3.5 rounded text-white-dark border border-' . $color]) }}>
        <span class="ltr:pr-2 rtl:pl-2">
            <strong class="ltr:mr-2 rtl:ml-2">{{ $title }}</strong>{{ $description }}</span>
        <button type="button" class="ltr:ml-auto rtl:mr-auto hover:opacity-80" @click="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>
