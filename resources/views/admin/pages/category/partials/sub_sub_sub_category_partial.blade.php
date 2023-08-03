<div class="tab-pane fade show" id="sub_sub_sub_category">
    <div class="d-flex align-items-center">
        {{-- Add Category Modal --}}
        <a href="{{ route('category.create') }}" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
            data-bs-target="#subsubsubcategoryAdd" style="position: relative;
            z-index: 999; margin-bottom: -30px;">
            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Add Category">
                <i class="ph-plus icons_design"></i>
            </span>
            <div class="d-flex justify-content-between">
                <span class="ms-1">Add Sub Sub
                    Sub Category</span>
            </div>
            <div class="d-flex justify-content-between hide_mobile">
                <h6 class="mb-0 text-black text-center" style="margin-left: 17rem !important;">Sub
                    Sub Sub Category</h6>
            </div>
        </a>
    </div>
    <div>
        <table class="table sub_sub_sub_category table-bordered table-hover datatable-highlight text-center ">
            <thead>
                <tr>
                    <th width="5%">Sl No:</th>
                    <th width="15%">Category Name</th>
                    <th width="15%">Sub Category Name</th>
                    <th width="15%">Sub Sub Category Name</th>
                    <th width="10%">Image</th>
                    <th width="20%">Name</th>
                    <th width="10%">Status</th>
                    <th width="10%" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($sub_sub_sub_cats)
                    @foreach ($sub_sub_sub_cats as $key => $sub_sub_sub_cat)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td>{{ App\Models\Admin\Category::where('id', $sub_sub_sub_cat->cat_id)->value('title') }}
                            </td>
                            <td>{{ App\Models\Admin\SubCategory::where('id', $sub_sub_sub_cat->sub_cat_id)->value('title') }}
                            </td>
                            <td>{{ App\Models\Admin\SubSubCategory::where('id', $sub_sub_sub_cat->sub_sub_cat_id)->value('title') }}
                            </td>
                            <td><img src="{{ asset('storage/' . $sub_sub_sub_cat->image) }}" alt="" width="25px" height="25px"></td>
                            <td>{{ $sub_sub_sub_cat->title }}</td>
                            <td>
                                @if ($sub_sub_sub_cat->status == 'active')
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-info">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                    data-bs-target="#update_sub_sub_cat_{{ $sub_sub_sub_cat->slug }}">
                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                </a>
                                <!---Sub Sub Category Update modal--->
                                <div id="update_sub_sub_cat_{{ $sub_sub_sub_cat->slug }}" class="modal fade"
                                    tabindex="-1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Sub Sub Category Update
                                                    Form</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body border br-7">
                                                @php
                                                    $sub_sub_sub_cat = App\Models\Admin\SubSubSubCategory::where('slug', $sub_sub_sub_cat->slug)->first();
                                                @endphp
                                                <form method="post"
                                                    action="{{ route('update.subsubsubcategory', $sub_sub_sub_cat->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Category Name</span>
                                                        </div>
                                                        <div class="col-sm-8 text-start">
                                                            <select name="cat_id" class="form-control select"
                                                                data-width="100%"
                                                                data-minimum-results-for-search="Infinity">
                                                                <option value=""> -- Select
                                                                    Category -- </option>
                                                                @foreach ($categorys as $cat)
                                                                    <option value="{{ $cat->id }}"
                                                                        {{ $cat->id == $sub_sub_sub_cat->cat_id ? 'selected' : '' }}>
                                                                        {{ $cat->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Sub Category Name</span>
                                                        </div>
                                                        <div class="col-sm-8 text-start">
                                                            <select name="sub_cat_id" class="form-control select"
                                                                data-width="100%"
                                                                data-minimum-results-for-search="Infinity">
                                                                <option value=""> -- Select
                                                                    Category -- </option>
                                                                @foreach ($sub_cats as $sub_cat)
                                                                    <option value="{{ $sub_cat->id }}"
                                                                        {{ $sub_cat->id == $sub_sub_sub_cat->sub_cat_id ? 'selected' : '' }}>
                                                                        {{ $sub_cat->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Sub Sub Category
                                                                Name</span>
                                                        </div>
                                                        <div class="col-sm-8 text-start">
                                                            <select name="sub_sub_cat_id" class="form-control select"
                                                                data-width="100%"
                                                                data-minimum-results-for-search="Infinity">
                                                                <option value=""> -- Select
                                                                    Category -- </option>
                                                                @foreach ($sub_sub_cats as $sub_sub_cat)
                                                                    <option value="{{ $sub_sub_cat->id }}"
                                                                        {{ $sub_sub_cat->id == $sub_sub_sub_cat->sub_sub_cat_id ? 'selected' : '' }}>
                                                                        {{ $sub_sub_cat->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Sub Sub Sub Category
                                                                Name</span>
                                                        </div>
                                                        <div class="col-sm-8 text-start">
                                                            <input type="text" name="title"
                                                                class="form-control form-control-sm maxlength"
                                                                maxlength="100"
                                                                value="{{ $sub_sub_sub_cat->title }}" />
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Sub Sub Sub Category
                                                                Image</span>
                                                        </div>
                                                        <div class="col-sm-6 text-start">
                                                            <input type="file" name="image"
                                                                class="form-control form-control-sm" id="image3"
                                                                accept="image/*" />
                                                        </div>
                                                        <div class="col-sm-3 text-end">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('storage/' . $sub_sub_sub_cat->image) }}"
                                                                width="40" height="40" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Sub Sub Sub Category
                                                                Banner Image </span>
                                                        </div>
                                                        <div class="col-sm-6 text-start">
                                                            <input type="file" name="banner_image"
                                                                class="form-control form-control-sm" id="banner_image"
                                                                accept="image/*" />
                                                        </div>
                                                        <div class="col-sm-3 text-end">
                                                            <img class="rounded-circle"
                                                                src="{{ asset('storage/' . $sub_sub_sub_cat->banner_image) }}"
                                                                width="40" height="40" alt=""
                                                                id="showbannerImage">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-1">
                                                        <div class="col-sm-4 text-start">
                                                            <span>Sub Sub Sub Category
                                                                Status</span>
                                                        </div>
                                                        <div class="col-sm-4 text-start">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="status" value="active"
                                                                    id="flexRadioDefault1"
                                                                    {{ $sub_sub_sub_cat->status == 'active' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault1">
                                                                    Active
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="status" value="inactive"
                                                                    id="flexRadioDefault2"
                                                                    {{ $sub_sub_sub_cat->status == 'inactive' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault2">
                                                                    Inactive
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 text-end">
                                                            <button type="submit" class="text-white btn btn-sm"
                                                                style="background-color:#247297 !important; padding: 5px 12px 5px;">Update</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!---Sub Sub Category Update modal--->
                                <a href="{{ route('subsubsubcategory.destroy', [$sub_sub_sub_cat->id]) }}"
                                    class="text-danger delete mx-2">
                                    <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
