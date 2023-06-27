@props([
    'color' => 'primary', // primary, secondary, success, danger, warning, info, dark
])

<span {{ $attributes->merge(['class' => 'badge badge-outline-' . $color]) }}>{{ $slot }}</span>
