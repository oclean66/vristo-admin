@props(['checked' => false])

<label class="flex items-center cursor-pointer">
    <input type="checkbox" {{ $attributes->merge(['class' => 'form-checkbox']) }} @checked($checked) />
    <span class="text-white-dark">{{ $slot }}</span>
</label>
