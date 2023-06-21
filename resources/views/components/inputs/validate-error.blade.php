@props(['field'])

@error($field)
    <span {{ $attributes->merge(['class' => 'text-sm text-danger list-item ml-5']) }}>{{ $message }}</span>
@enderror
