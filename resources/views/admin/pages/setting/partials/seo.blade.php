<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('seo.setting') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card border border-secondary">
                <div class="card-header bg-secondary text-white p-2">
                    <h6 class="mb-0">Page Info</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Page Name <span class="text-danger">*</span></label>
                                <input type="text" id="page_name" name="page_name"
                                    value="{{ optional($seo)->page_name }}"
                                    class="form-control form-control-sm maxlength-options" maxlength="200"
                                    placeholder="Enter Page Name" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Page Link </label>
                                <input type="url" id="page_link" name="page_link"
                                    value="{{ optional($seo)->page_link }}"
                                    class="form-control form-control-sm maxlength-options" maxlength="100"
                                    placeholder="Enter Page Link">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Meta Title </label>
                                <input type="text" id="meta_title" name="meta_title"
                                    value="{{ optional($seo)->meta_title }}"
                                    class="form-control form-control-sm maxlength-options" maxlength="100"
                                    placeholder="Enter Meta Title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Google Verification Code</label>
                                <textarea id="google_verification_code" name="google_verification_code" rows="3" cols="3"
                                    class="form-control" placeholder="Enter Google Verification Code">{{ optional($seo)->google_verification_code }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Google Adsense Code</label>
                                <textarea id="google_adsense_code" name="google_adsense_code" rows="3" cols="3" class="form-control"
                                    placeholder="Enter Google Adsense Code">{{ optional($seo)->google_adsense_code }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Google Analytics Code</label>
                                <textarea id="google_analytics_code" name="google_analytics_code" rows="3" cols="3" class="form-control"
                                    placeholder="Enter Google Analytics Code">{{ optional($seo)->google_analytics_code }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Meta Keywords</label>
                                @php
                                    $meta_tag = isset($seo->meta_keywords) ? json_decode($seo->meta_keywords, true) : [];
                                @endphp
                                <select data-placeholder="Type and hit enter to add a tag"
                                    class="form-control form-control-sm select" name="meta_keywords[]"
                                    data-container-css-class="select-sm" multiple="multiple" data-tags="true"
                                    data-maximum-input-length="15">
                                    @if ($meta_tag)
                                        @foreach ($meta_tag as $tag)
                                            <option @selected(in_array($tag, $meta_tag)) value="{{ $tag }}">
                                                {{ $tag }}</option>
                                        @endforeach
                                    @else
                                        <option value=""></option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Meta Description</label>
                                <textarea id="meta_description" name="meta_description" rows="3" cols="3" class="form-control"
                                    placeholder="Enter Meta Description">{{ optional($seo)->meta_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3 mx-3">
                    <button type="submit" class="btn btn-primary ">Submit
                        <i class="ph-paper-plane-tilt ms-2"></i>
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tfLimit = new Tokenfield({
                el: document.querySelector('.tokenfield-limit'),
                maxItems: 5,
            });
        });
    </script>
@endpush
