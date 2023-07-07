@props(['label' => 'Text', 'id' => null, 'disabled' => false])

<div>
    @if ($label != 'none')
        <label {{ $id ? "for=$id" : '' }}>{{ $label }}</label>
    @endif
    <input {{ $id ? "id=$id" : '' }} type="text" {{ $attributes->merge(['class' => 'form-input']) }}
        @disabled($disabled)>
</div>
