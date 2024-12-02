<input id="{{ $id ?? '' }}" type="{{ $type ?? 'checkbox' }}" class="form-check-input @error($name) is-invalid @enderror"
    name="{{ $name }}" value="{{  ($value ?? '') }}" {{ isset($checked) && $checked ? 'checked' : '' }}/>
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
