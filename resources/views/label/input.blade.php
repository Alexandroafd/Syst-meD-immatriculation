@php
    $label ??= null;
    $class ??= null;
    $type ??= 'text';
    $name ??='';
    $value ??= null;
@endphp
<div @class(["form-group", $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <input class="form-control  @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ ($value) }}">
</div>
