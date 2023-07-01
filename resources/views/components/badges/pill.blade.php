@props([
    'color' => 'primary', // primary, secondary, success, danger, warning, info, dark
    'outline' => false,
])

<span
    {{ $attributes->merge(['class' => 'badge rounded-full ' . ($outline ? ' badge-outline-' . $color : 'bg-' . $color)]) }}>{{ $slot }}</span>
