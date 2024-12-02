@props(['id', 'name'])

<textarea id="{{ $id }}" name="{{ $name }}" class="form-control form-control-solid @error($name) is-invalid @enderror"
    {{ $attributes }}>{{ old($name,$slot) }}</textarea>
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
