@foreach ($brands as $brand)
    <div class="form-inline d-flex align-items-center py-2 px-3 border-bottom brand_item">
        <label class="tick">{{ $brand->title }}
            <input type="checkbox" name="brand[]" value="{{ $brand->slug }}" onchange="brandFilter();">
            <span class="check"></span>
        </label>
    </div>
@endforeach
