@php
    $type ??= 'text';
    $class ??= null;
    $name ??= null;
    $value ??= "";
    $label ??= ucfirst($name);
@endphp

<div @class(["form-group", $class])>
    
    @if($type === 'textarea')
        <label for="{{ $name }}">{{ $label }}</label>
        <textarea class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>

    @else
        <label for="{{ $name }}">{{ $label }}</label>
        <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    @endif
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

