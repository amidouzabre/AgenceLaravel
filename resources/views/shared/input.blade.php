@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= null;
@endphp

<div @class(["form-control", $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
</div>