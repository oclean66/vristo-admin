@props(['checked' => false])

<label class="flex items-center cursor-pointer">
    <input type="radio" {{ $attributes->merge(['class' => 'form-radio']) }} @checked($checked) />
    <span class="text-white-dark">{{ $slot }}</span>
</label>
