@props(['label' => 'Text', 'id' => null, 'disabled' => false])

<label {{ $id ? "for=$id" : '' }}>{{ $label }}</label>
<input {{ $id ? "id=$id" : '' }} type="text" {{ $attributes->merge(['class' => 'form-input']) }} @disabled($disabled)>
