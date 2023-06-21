@props(['label' => 'Select', 'id' => null, 'name' => 'select', 'disabled' => false])

<label {{ $id ? "for=$id" : '' }}>{{ $label }}</label>
<select name="{{ $name }}" {{ $id ? "id=$id" : '' }} {{ $attributes->merge(['class' => 'form-select']) }}
    @disabled($disabled)>
    {{ $slot }}
</select>
