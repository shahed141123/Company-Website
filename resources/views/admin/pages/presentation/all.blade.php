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
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Presentation Management</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#addPresentation">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Presentation</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table newsLetterDt table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="8%">Id</th>
                            <th width="12%">Type</th>
                            <th width="70%">PDF Download</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($presentations)
                            @foreach ($presentations as $key => $presentation)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $presentation->type }}</td>
                                    <td>
                                        <a href="{{ asset('storage/files/' . $presentation->presentation) }}">Download
                                            PDF</a>
                                    </td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editPresentation">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('newsLetter.destroy', [$presentation->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                        {{-- Edit Success Modal --}}
                                        <div id="editPresentation" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit News Letter</h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post"
                                                            action="{{ route('presentation.update', $presentation->id) }}"
                                                            enctype="multipart/form-data" id="myform">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container">
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Type</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="type"
                                                                            class="form-control form-select-sm select"
                                                                            data-container-css-class="select-sm"
                                                                            data-placeholder="Chose any type" required>
                                                                            
                                                                            <option @selected($presentation->type == 'sales')
                                                                                value="sales">Sales</option>
                                                                            <option @selected($presentation->type == 'technical')
                                                                                value="technical">Technical</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Category Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="category_id[]"
                                                                            class="form-control form-select-sm multiselect"
                                                                            multiple="multiple"
                                                                            data-include-select-all-option="true"
                                                                            data-container-css-class="select-sm"
                                                                            data-placeholder="Chose any type" required>
                                                                            @php
                                                                                $categoryIds = isset($presentation->category_id) ? json_decode($presentation->category_id, true) : [];
                                                                                $categories = App\Models\Admin\Category::pluck('title', 'id')->toArray();
                                                                            @endphp

                                                                            @foreach ($categories as $id => $title)
                                                                                <option value="{{ $id }}"
                                                                                    {{ is_array($categoryIds) && in_array($id, $categoryIds) ? 'selected' : '' }}>
                                                                                    {{ $title }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Industries Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="industry_id[]"
                                                                            class="form-control form-select-sm multiselect"
                                                                            multiple="multiple"
                                                                            data-include-select-all-option="true"
                                                                            data-container-css-class="select-sm"
                                                                            data-placeholder="Chose any type" required>
                                                                            @php
                                                                                $industryIds = isset($presentation->industry_id) ? json_decode($presentation->industry_id, true) : [];
                                                                                $industries = App\Models\Admin\Industry::pluck('title', 'id')->toArray();
                                                                            @endphp

                                                                            @foreach ($industries as $id => $title)
                                                                                <option value="{{ $id }}"
                                                                                    {{ is_array($industryIds) && in_array($id, $industryIds) ? 'selected' : '' }}>
                                                                                    {{ $title }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Brands Name</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="brand_id[]"
                                                                            class="form-control form-select-sm multiselect"
                                                                            multiple="multiple"
                                                                            data-include-select-all-option="true"
                                                                            data-container-css-class="select-sm"
                                                                            data-placeholder="Chose any type" required>
                                                                            @php
                                                                                $brandIds = isset($presentation->brand_id) ? json_decode($presentation->brand_id, true) : [];
                                                                                $brands = App\Models\Admin\Brand::pluck('title', 'id')->toArray();
                                                                            @endphp

                                                                            @foreach ($brands as $id => $title)
                                                                                <option value="{{ $id }}"
                                                                                    {{ is_array($brandIds) && in_array($id, $brandIds) ? 'selected' : '' }}>
                                                                                    {{ $title }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Presentation</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="file"
                                                                            class="form-control form-control-sm"
                                                                            name="presentation" required />
                                                                        <div class="form-text">Accepts only pdf</div>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                <button type="submit" id="submitbtn"
                                                                    class="submit_btn from-prevent-multiple-submits"
                                                                    style="padding: 5px;">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="addPresentation" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Presentation</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form id="myform" method="post" action="{{ route('presentation.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Type</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="type" class="form-control form-select-sm select"
                                            data-container-css-class="select-sm" data-placeholder="Chose any type"
                                            required>
                                            <option value="sales">Sales</option>
                                            <option value="technical">Technical</option>
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Category Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="category_id[]" class="form-control form-select-sm multiselect"
                                            multiple="multiple" data-include-select-all-option="true"
                                            data-container-css-class="select-sm" data-placeholder="Chose any type"
                                            required>
                                            @foreach ($categories as $id => $categorie)
                                                <option value="{{ $id }}">{{ $categorie }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Industries Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="industry_id[]" class="form-control form-select-sm multiselect"
                                            multiple="multiple" data-include-select-all-option="true"
                                            data-container-css-class="select-sm" data-placeholder="Chose any type"
                                            required>
                                            
                                            @foreach ($industries as $id => $industrie)
                                                <option value="{{ $id }}">{{ $industrie }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Brands Name</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="brand_id[]" class="form-control form-select-sm multiselect"
                                            multiple="multiple" data-include-select-all-option="true"
                                            data-container-css-class="select-sm" data-placeholder="Chose any type"
                                            required>
                                            
                                            @foreach ($brands as $id => $brand)
                                                <option value="{{ $id }}">{{ $brand }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Presentation</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control form-control-sm" name="presentation"
                                            required />
                                        <div class="form-text">Accepts only pdf</div>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="submit" id="submitbtn" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.newsLetterDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2],
                }, ],
            });
        </script>
    @endpush
@endonce
