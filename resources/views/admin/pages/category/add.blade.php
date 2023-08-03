@extends('admin.master')
@section('content')

<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Category Management</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#js-tab1" class="nav-link active" data-bs-toggle="tab">
                                        Category
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab2" class="nav-link" data-bs-toggle="tab">
                                        Sub Category
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab3" class="nav-link" data-bs-toggle="tab">
                                        Sub Sub Category
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab4" class="nav-link" data-bs-toggle="tab">
                                        Sub Sub Sub Category
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-lg-3">
                        <label class="text-center" for="category">Chose from the dropdown</label>
                        <select onchange="dropdownCategory(value)" id="dropdownCategory" name="category"
                            class="form-control select col-lg-2 category" data-width="250"
                            data-minimum-results-for-search="Infinity">
                            <option value="table1">Category</option>
                            <option value="table2">Sub Category</option>
                            <option value="table3">Sub Sub Category</option>
                            <option value="table4">Sub Sub Sub Category</option>
                        </select>
                    </div> --}}
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('category.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Category
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Category Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data" >
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength" maxlength="100"/>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Image </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="image" class="form-control"  id="image" accept="image/*" required/>
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Banner Image </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="banner_image" class="form-control"  id="banner_image" accept="image/*" required/>
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Status</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" value="active" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" name="status" value="inactive" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                    class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="js-tab2">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-8">
                            <div id="table2" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Sub Category Form</h5>

                                </div>

                                <div class="card-body">
                                    <div class="col-lg-8">
                                        <form method="post" action="{{route('store.subcategory')}}" enctype="multipart/form-data" >
                                            @csrf

                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Category Name</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <select name="cat_id" class="form-control select" data-width="250"
                                                        data-minimum-results-for-search="Infinity">
                                                        <option value=""> -- Select Category -- </option>
                                                        @foreach ($cats as $cat )
                                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Sub Category Name</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="title" class="form-control maxlength" maxlength="100"/>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Sub Category Image </h6>
                                                </div>
                                                <div class="col-sm-8 text-secondary">
                                                    <input type="file" name="image" class="form-control"  id="image1" accept="image/*" required/>
                                                    <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                    <img id="showImage1" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Sub Category Banner Image </h6>
                                                </div>
                                                <div class="col-sm-8 text-secondary">
                                                    <input type="file" name="banner_image" class="form-control"  id="banner_image" accept="image/*" required/>
                                                    <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Sub Category Status</h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status" value="active" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Active
                                                        </label>
                                                    </div>
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="radio" name="status" value="inactive" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Inactive
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-8 text-secondary">
                                                    <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                                </div>
                                            </div>


                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="js-tab3">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div id="table3" class="card cardTd">
                                <div class="card-header">
                                    <h5 class="mb-0 text-center">Add Sub Sub Category Form</h5>
                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{route('store.subsubcategory')}}" enctype="multipart/form-data" >
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="cat_id" class="form-control select" data-width="250"
                                                 data-minimum-results-for-search="Infinity">
                                                 <option value=""> -- Select Category -- </option>
                                                 @foreach ($cats as $cat )
                                                 <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                 @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="sub_cat_id" class="form-control select" data-width="250"
                                                 data-minimum-results-for-search="Infinity">
                                                 <option value=""> -- Select Sub Category -- </option>
                                                 @foreach ($sub_cats as $sub_cat )
                                                 <option value="{{$sub_cat->id}}">{{$sub_cat->title}}</option>
                                                 @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength" maxlength="100"/>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Category Image </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="image" class="form-control"  id="image2" accept="image/*" required/>
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage2" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Category Banner Image </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="banner_image" class="form-control"  id="banner_image" accept="image/*" required/>
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Category Status</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" value="active" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" name="status" value="inactive" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show" id="js-tab4">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div id="table4" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Sub Sub Sub Category Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{route('store.subsubsubcategory')}}" enctype="multipart/form-data" >
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="cat_id" class="form-control select" data-width="250"
                                                 data-minimum-results-for-search="Infinity">
                                                 <option value=""> -- Select Category -- </option>
                                                 @foreach ($cats as $cat )
                                                 <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                 @endforeach


                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="sub_cat_id" class="form-control select" data-width="250"
                                                 data-minimum-results-for-search="Infinity">
                                                 <option value=""> -- Select Sub Category -- </option>
                                                 @foreach ($sub_cats as $sub_cat )
                                                 <option value="{{$sub_cat->id}}">{{$sub_cat->title}}</option>
                                                 @endforeach


                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <select name="sub_sub_cat_id" class="form-control select" data-width="250"
                                                 data-minimum-results-for-search="Infinity">
                                                 <option value=""> -- Select Sub Sub Category -- </option>
                                                 @foreach ($sub_sub_cats as $sub_sub_cat )
                                                 <option value="{{$sub_sub_cat->id}}">{{$sub_sub_cat->title}}</option>
                                                 @endforeach


                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Sub Category Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="title" class="form-control maxlength" maxlength="100"/>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Sub Category Image </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="image" class="form-control"  id="image3" accept="image/*" required/>
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                <img id="showImage3" height="100px" width="100px"  src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png" alt="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Sub Category Banner Image </h6>
                                            </div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="file" name="banner_image" class="form-control"  id="banner_image" accept="image/*" required/>
                                                <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sub Sub Category Status</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" value="active" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="radio" name="status" value="inactive" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /content area -->
    <!-- /inner content -->

</div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            function dropdownCategory() {
                var selectedTable = document.getElementById("dropdownCategory").value;
                var elements = document.getElementsByClassName('cardT')
                for (var i = 0; i < elements.length; i++) {
                    if (elements[i].id == selectedTable)
                        elements[i].style.display = '';
                    else
                        elements[i].style.display = 'none';
                }
            }
        </script>
    @endpush
@endonce
