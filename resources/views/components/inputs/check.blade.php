<label class="flex items-center cursor-pointer  m-0">
    <input type="checkbox" {{ $attributes->merge(['class' => 'form-checkbox transition hover:scale-125']) }}>
    <span class="text-white-dark">{{ $slot }}</span>
</label>
