<div id="categoryAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Category Add Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7">
                <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-1">
                        <div class="col-sm-4">
                            <span>Category Name</span>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="text" name="title" class="form-control form-control-sm maxlength"
                                maxlength="100" required />
                        </div>
                    </div>
                    {{--  --}}
                    <div class="row mb-1">
                        <div class="col-sm-4">
                            <span>Category Image</span>
                            <h6 class="mb-0"></h6>
                        </div>
                        <div class="col-sm-6 text-start">
                            <input type="file" name="image" class="form-control form-control-sm" id="image2"
                                accept="image/*" required />
                        </div>
                        <div class="col-sm-2 text-end">
                            <img class="rounded-circle" id="showImage2"
                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                width="40" height="40" alt="">
                        </div>
                    </div>
                    {{--  --}}
                    <div class="row mb-1">
                        <div class="col-sm-4">
                            <span>Category Banner Image</span>
                            <h6 class="mb-0"> </h6>
                        </div>
                        <div class="col-sm-6 text-start">
                            <input type="file" name="banner_image" class="form-control form-control-sm"
                                id="banner_image" accept="image/*" required />
                        </div>
                        <div class="col-sm-2 text-end">
                            <img class="rounded-circle" id="showImage2"
                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                width="40" height="40" alt="">
                        </div>
                    </div>
                    {{--  --}}
                    <div class="row mb-1">
                        <div class="col-sm-4">
                            <span>Category Status</span>
                            <h6 class="mb-0"></h6>
                        </div>
                        <div class=" col-sm-8 text-secondary">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="active"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="status" value="inactive"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 text-secondary d-flex justify-content-end ">
                            <button type="submit" class="text-white btn btn-sm"
                                style="background-color:#247297 !important; padding: 5px 12px 5px;"
                                id="submitbtn">Submit
                                <i class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<div id="subcategoryAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sub Category Add Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7">
                <form method="post" action="{{ route('store.subcategory') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Category Name</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <select name="cat_id" class="form-control select" data-width="250"
                                data-minimum-results-for-search="Infinity">
                                <option value=""> -- Select Category -- </option>
                                @foreach ($categorys as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Category Name</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <input type="text" name="title" class="form-control maxlength" maxlength="100" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Category Image </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="file" name="image" class="form-control" id="image1"
                                accept="image/*" required />
                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                            <img id="showImage1" height="100px" width="100px"
                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                alt="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Category Banner Image </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="file" name="banner_image" class="form-control" id="banner_image"
                                accept="image/*" required />
                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Category Status</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="active"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="status" value="inactive"
                                    id="flexRadioDefault2" checked>
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
<div id="subsubcategoryAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sub Sub Category Add Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7">
                <form method="post" action="{{ route('store.subsubcategory') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Category Name</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <select name="cat_id" class="form-control select" data-width="250"
                                data-minimum-results-for-search="Infinity">
                                <option value=""> -- Select Category -- </option>
                                @foreach ($categorys as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
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
                                @foreach ($sub_cats as $sub_cat)
                                    <option value="{{ $sub_cat->id }}">{{ $sub_cat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Category Name</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <input type="text" name="title" class="form-control maxlength" maxlength="100" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Category Image </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="file" name="image" class="form-control" id="image2"
                                accept="image/*" required />
                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                            <img id="showImage2" height="100px" width="100px"
                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                alt="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Category Banner Image </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="file" name="banner_image" class="form-control" id="banner_image"
                                accept="image/*" required />
                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Category Status</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="active"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="status" value="inactive"
                                    id="flexRadioDefault2" checked>
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
<div id="subsubsubcategoryAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sub Sub Category Add Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body border br-7">
                <form method="post" action="{{ route('store.subsubsubcategory') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Category Name</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <select name="cat_id" class="form-control select" data-width="250"
                                data-minimum-results-for-search="Infinity">
                                <option value=""> -- Select Category -- </option>
                                @foreach ($categorys as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
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
                                @foreach ($sub_cats as $sub_cat)
                                    <option value="{{ $sub_cat->id }}">{{ $sub_cat->title }}</option>
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
                                @foreach ($sub_sub_cats as $sub_sub_cat)
                                    <option value="{{ $sub_sub_cat->id }}">{{ $sub_sub_cat->title }}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Sub Category Name</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <input type="text" name="title" class="form-control maxlength" maxlength="100" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Sub Category Image </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="file" name="image" class="form-control" id="image3"
                                accept="image/*" required />
                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                            <img id="showImage3" height="100px" width="100px"
                                src="https://cdn.pixabay.com/photo/2017/02/07/02/16/cloud-2044823_960_720.png"
                                alt="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Sub Category Banner Image </h6>
                        </div>
                        <div class="col-sm-8 text-secondary">
                            <input type="file" name="banner_image" class="form-control" id="banner_image"
                                accept="image/*" required />
                            <div class="form-text">Accepts only png, jpg, jpeg images</div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <h6 class="mb-0">Sub Sub Sub Category Status</h6>
                        </div>
                        <div class="form-group col-sm-8 text-secondary">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="active"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="status" value="inactive"
                                    id="flexRadioDefault2" checked>
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
