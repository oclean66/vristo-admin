@props([
    'color' => 'primary', // primary, secondary, success, danger, warning, info, dark
])

<span {{ $attributes->merge(['class' => 'badge bg-' . $color]) }}>{{ $slot }}</span>
