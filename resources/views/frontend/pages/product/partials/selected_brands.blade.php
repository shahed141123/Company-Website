@foreach ($brands as $slug => $title)
    <div class="form-inline d-flex align-items-center py-2 px-3 border-bottom brand_item">
        <label class="tick">{{ $title }}
            <input type="checkbox" name="brand[]" value="{{ $slug }}" onchange="brandFilter();" checked>
            <span class="check"></span>
        </label>
    </div>
@endforeach
