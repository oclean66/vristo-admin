@props(['checked' => false])

<label class="flex content-center cursor-pointer  m-0">
    <input type="checkbox" {{ $attributes->merge(['class' => 'form-checkbox transition hover:scale-125']) }}
        {{ $checked ? 'checked' : '' }}>
    <span class="text-white-dark">{{ $slot }}</span>
</label>
