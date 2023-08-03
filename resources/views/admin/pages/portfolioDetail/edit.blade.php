@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item">Portfolio Details</a>
                        <a href="#" class="breadcrumb-item">Edit</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Highlighting rows and columns -->
        <div class="content pt-2 mx-auto" style="width: 85%;">
            <h5 class="text-center">Portfolio Details Edit</h5>
            <form action="{{route('portfolio-detail.update',$portfolio->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card">
                    <div class="container">
                        <div class="row g-2 p-1">
                            <div class="col">
                                <p class="my-1 fw-bold text-info text-center p-0">Row Area</p>
                                <div class="px-2 py-2 rounded bg-light">
                                    <div class="d-flex align-items-center pt-1">
                                        <label
                                            class="col-form-label label_style col-lg-2 p-0 text-start text-black">Portfolio Category</label>
                                        <select name="category_id" class="form-control form-select-sm select"
                                            data-container-css-class="select-sm"
                                            data-placeholder="Chose Portfolio Category" required>
                                            <option></option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}" @selected($categorie->id == $portfolio->category_id)>{{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Row One
                                            Image</label>
                                        <div class="input-group">
                                            <input name="row_one_image" value="{{$portfolio->row_one_image}}" type="file" class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Row One Image" style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Row One
                                            Logo</label>
                                        <div class="input-group">
                                            <input name="row_one_logo" value="{{$portfolio->row_one_logo}}" type="file" class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Row One Logo" style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Row One
                                            Title</label>
                                        <input name="row_one_title" value="{{$portfolio->row_one_title}}" type="text" maxlength="250"
                                            class="form-control form-control-sm" placeholder="Enter Portfolio Row One Title"
                                            required>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Row One
                                            Description</label>
                                        <div class="input-group">
                                            <input name="row_one_description" value="{{$portfolio->row_one_description}}" type="text"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Row One Description"
                                                style="padding: 2px 10px 0px 10px;" required>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Row One
                                            Btn Name</label>
                                        <div class="input-group">
                                            <input name="row_one_btn_name" value="{{$portfolio->row_one_btn_name}}" type="text" maxlength="250" class="form-control form-control-sm"  placeholder="Enter Portfolio Row One Btn Name"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Row One
                                            Button Link</label>
                                        <div class="input-group">
                                            <input name="row_one_btn_link" value="{{$portfolio->row_one_btn_link}}" type="url" maxlength="250" class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Detail Row One Button Link"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                                <p class="my-1 fw-bold text-info text-center p-0">Banner Area</p>
                                <div class=" px-2 py-2 bg-light rounded">

                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Banner
                                            Title</label>
                                        <div class="input-group">
                                            <input name="banner_title" value="{{$portfolio->banner_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Detail Banner Title"
                                                style="padding: 2px 10px 0px 10px;" required>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Bnner Short
                                            Description</label>
                                        <div class="input-group">
                                            <input name="banner_short_desc" value="{{$portfolio->banner_short_desc}}" type="text" class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Detail Banner Title"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Banner
                                            Image</label>
                                        <input name="banner_image" value="{{$portfolio->banner_image}}" type="file" class="form-control form-control-sm"
                                            placeholder="Enter Portfolio Detail Banner Image">
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Banner
                                            Button Name</label>
                                        <div class="input-group">
                                            <input name="banner_btn_name" value="{{$portfolio->banner_btn_name}}" type="text" maxlength="250" class="form-control form-control-sm" placeholder="Enter Portfolio Detail Banner Button Name"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Banner
                                            Button Link</label>
                                        <div class="input-group">
                                            <input name="banner_btn_link" value="{{$portfolio->banner_btn_link}}" type="url" maxlength="250" class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Detail Banner Button Name"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                            <div class="col">
                                <p class="fw-bold text-info text-center p-0 my-1">Gallery Area</p>
                                <div class="px-2 bg-light rounded">
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Title</label>
                                        <div class="input-group">
                                            <input name="gallery_title" value="{{$portfolio->gallery_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Gallery Title"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Short Description</label>
                                        <div class="input-group">
                                            <textarea name="gallery_short_desc" rows="2" class="form-control form-control-sm"
                                                placeholder="Enter Gallery Short Description">{!!$portfolio->gallery_short_desc !!}</textarea>

                                        </div>
                                    </div>
                                    <hr class="m-0 mt-2">

                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image One</label>
                                        <input name="gallery_image_one" value="{{$portfolio->gallery_image_one}}" type="file" class="form-control form-control-sm"
                                            placeholder="Enter Gallery Image One">
                                    </div>
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image One Title</label>
                                        <div class="input-group">
                                            <input name="gallery_image_one_title" value="{{$portfolio->gallery_image_one_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image One Title"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image One Short Desc</label>
                                        <div class="input-group">
                                            <textarea name="gallery_image_one_short_desc" rows="2"class="form-control form-control-sm"
                                            placeholder="Enter Gallery Image One Short Description">{!!$portfolio->gallery_image_one_short_desc !!}</textarea>
                                        </div>
                                    </div>
                                    <hr class="m-0 mt-2">
                                    {{--  --}}

                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image Two</label>
                                        <div class="input-group">
                                            <input name="gallery_image_two" value="{{$portfolio->gallery_image_two}}" type="file" class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image Two"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image Two Title</label>
                                        <div class="input-group">
                                            <input name="gallery_image_two_title" value="{{$portfolio->gallery_image_two_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image Two Title"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image Two Short Desc</label>
                                        <div class="input-group">

                                            <textarea name="gallery_image_two_short_desc" rows="2"class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image Two Short Description">{!! $portfolio->gallery_image_two_short_desc !!}</textarea>

                                        </div>
                                    </div>
                                    <hr class="m-0 mt-2">
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image Three</label>
                                        <div class="input-group">
                                            <input name="gallery_image_three" value="{{$portfolio->gallery_image_three}}" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image Three"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Gallery
                                            Image Three Title</label>
                                        <div class="input-group">
                                            <input name="gallery_image_three_title" value="{{$portfolio->gallery_image_three_title}}" type="text"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image Three Title"
                                                style="padding: 2px 10px 0px 10px;" >
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-4 p-0 text-start text-black label_style">Gallery
                                            Image Three Short Desc</label>
                                        <div class="input-group">
                                            <textarea name="gallery_image_three_short_desc" rows="2"class="form-control form-control-sm"
                                                placeholder="Enter Gallery Image Three Short Description">{!! $portfolio->gallery_image_three_short_desc !!}</textarea>
                                        </div>
                                    </div>
                                    <hr class="m-0 mt-2">
                                    {{--  --}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-2 px-1 mb-2 pt-1">
                            <p class="fw-bold text-info text-center my-1 p-0">Feature Area</p>
                            <div class="col mt-0">
                                <div class=" px-2  p-1 bg-light rounded">
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature One Title</label>
                                        <div class="input-group">
                                            <input name="feature_one_title" value="{{$portfolio->feature_one_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature One Title"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            One
                                            Description</label>
                                        <div class="input-group">
                                            <input name="feature_one_description" value="{{$portfolio->feature_one_description}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature One Description"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            Two
                                            Title</label>
                                        <div class="input-group">
                                            <input name="feature_two_title" value="{{$portfolio->feature_two_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature Two Title"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            Two
                                            Description</label>
                                        <div class="input-group">
                                            <input name="feature_two_description" value="{{$portfolio->feature_two_description}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature Two Description"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col  mt-0">
                                <div class="px-2  p-1 bg-light rounded">
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            Three
                                            Title</label>
                                        <div class="input-group">
                                            <input name="feature_three_title" value="{{$portfolio->feature_three_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature Three Title"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            Three
                                            Description</label>
                                        <div class="input-group">
                                            <input name="feature_three_description" value="{{$portfolio->feature_three_description}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature Three Description"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            Four
                                            Title</label>
                                        <div class="input-group">
                                            <input name="feature_four_title" value="{{$portfolio->feature_four_title}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature Four Title"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="d-flex align-items-center pt-1">
                                        <label class="col-form-label col-lg-2 p-0 text-start text-black label_style">Feature
                                            Four
                                            Description</label>
                                        <div class="input-group">
                                            <input name="feature_four_description" value="{{$portfolio->feature_four_description}}" type="text" maxlength="250"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Portfolio Feature Four Description"
                                                style="padding: 2px 10px 0px 10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pb-0 pe-0">
                    <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="submit_btn from-prevent-multiple-submits"
                        style="padding: 4px 9px;">Submit</button>
                </div>
            </form>
        </div>
    @endsection

