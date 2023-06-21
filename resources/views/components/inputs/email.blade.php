@props(['label' => 'Email', 'id' => null, 'name' => 'email', 'disabled' => false])

<label {{ $id ? "for=$id" : '' }}>{{ $label }}</label>
<input name="{{ $name }}" type="email" {{ $id ? "id=$id" : '' }} {{ $attributes->merge(['class' => 'form-input']) }} @disabled($disabled)>
