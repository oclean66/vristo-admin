<label class="cursor-pointer">
    <input type="checkbox" {{ $attributes->merge(['class' => 'form-checkbox']) }} />
    <span class="text-white-dark">{{ $slot }}</span>
</label>
