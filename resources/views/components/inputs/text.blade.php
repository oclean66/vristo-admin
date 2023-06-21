@props(['label' => 'Text', 'id' => null, 'name' => 'text', 'disabled' => false])

<label {{ $id ? "for=$id" : '' }}>{{ $label }}</label>
<input name="{{ $name }}" {{ $id ? "id=$id" : '' }} type="text" {{ $attributes->merge(['class' => 'form-input']) }} @disabled($disabled)>
