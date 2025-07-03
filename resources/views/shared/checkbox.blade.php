@php
    $class ??= null;
@endphp

<div @class(["form-check form-switch", $class])>
    <input type="hidden" name="{{ $name }}" value="0">
    <input @checked(old($name, $value ?? false)) class="form-check-input" type="checkbox" role="switch" id="{{ $name }}" name="{{ $name }}" value="1" @error($name) is-invalid @enderror">
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
     @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
