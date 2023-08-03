@extends('admin.master')
@section('content')
    <style>
        #DataTables_Table_1_previous {
            margin-right: 30px;
        }

        #DataTables_Table_1_wrapper {
            margin-top: -10px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Region & Country Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    {{-- First Table Start --}}
                    <div>
                        <!-- /page header -->
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative; z-index: 999; margin-bottom: -46px;">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addRegion">
                                        <div class="d-flex align-items-center">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Add Solution Details">
                                                <i class="ph-plus icons_design"></i> </span>
                                            <span class="ms-1" style="color: #247297;">Add</span>
                                        </div>
                                    </a>
                                    <div class="text-center" style="margin-left: 115px">
                                        <h5 class="ms-1" style="color: #247297;">All Region</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table countryDT table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Region Name</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($regions)
                                            @foreach ($regions as $key => $region)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $region->region_name }}</td>
                                                    <td>
                                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                                            data-bs-target="#update_region-{{ $region->id }}">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('region.destroy', [$region->id]) }}"
                                                            class="text-danger delete">
                                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                        <!---Region Update modal--->
                                                        <div id="update_region-{{ $region->id }}" class="modal fade"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Update Region</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>
                                                                    <div class="modal-body p-0 px-2">
                                                                        <form method="post"
                                                                            action="{{ route('region.update', $region->id) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row my-2 d-flex align-items-center">
                                                                                <div class="col-sm-4">
                                                                                    <span>Region Name :</span>
                                                                                </div>
                                                                                <div class="col-sm-8 text-secondary">
                                                                                    <input type="text" name="region_name"
                                                                                        class="form-control form-control-sm"
                                                                                        value="{{ $region->region_name }}"
                                                                                        maxlength="100" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row my-2">
                                                                                <div
                                                                                    class="col-sm-12 text-secondary d-flex justify-content-end mb-2">
                                                                                    <button type="submit"
                                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                                        style="padding: 4px 9px;">Add Region
                                                                                        &nbsp;<i
                                                                                            class="icon-paperplane ml-2"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Region Update modal--->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Add Region Modal --}}
                        <div id="addRegion" class="modal fade" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title text-white">Add Rigion</h6>
                                        <a type="button" data-bs-dismiss="modal">
                                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                                        </a>
                                    </div>
                                    <div class="modal-body p-0 px-2">
                                        <form method="post" action="{{ route('region.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row my-2 d-flex align-items-center">
                                                <div class="col-sm-4">
                                                    <span>Region Name :</span>
                                                </div>
                                                <div class="col-sm-8 text-secondary">
                                                    <input type="text" name="region_name"
                                                        class="form-control form-control-sm" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-sm-12 text-secondary d-flex justify-content-end mb-2">
                                                    <button type="submit"
                                                        class="submit_btn from-prevent-multiple-submits"
                                                        style="padding: 4px 9px;">Add Region &nbsp;<i
                                                            class="icon-paperplane ml-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Add Rigion Modal End --}}
                    </div>
                    {{-- First Table End --}}
                </div>
                <div class="col-lg-6 col-sm-12">
                    {{-- Second Table Start --}}
                    <div>
                        <!-- /page header -->
                        <div class="content pt-0">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative; z-index: 999; margin-bottom: -46px;">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addCountry">
                                        <div class="d-flex align-items-center">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add Solution Details">
                                                <i class="ph-plus icons_design"></i> </span>
                                            <span class="ms-1" style="color: #247297;">Add</span>
                                        </div>
                                    </a>
                                    <div class="text-center" style="margin-left: 115px">
                                        <h5 class="ms-1" style="color: #247297;">All Country</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <div>
                                <table class="table coutryRegionDT table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Region Name</th>
                                            <th>Country Name</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($countrys)
                                            @foreach ($countrys as $key => $country)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ App\Models\Admin\Region::where('id', $country->region_id)->value('region_name') }}
                                                    </td>
                                                    <td>{{ $country->country_name }}</td>
                                                    <td>
                                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                                            data-bs-target="#country-{{ $country->id }}">
                                                            <i
                                                                class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                        </a>
                                                        <a href="{{ route('country.destroy', [$country->id]) }}"
                                                            class="text-danger delete">
                                                            <i
                                                                class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                        </a>
                                                        <!---Region Update modal--->
                                                        <div id="country-{{ $country->id }}" class="modal fade"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit Country</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"></button>
                                                                    </div>
                                                                    <div class="modal-body p-0 px-2">
                                                                        <form method="post"
                                                                            action="{{ route('country.store') }}">
                                                                            @csrf
                                                                            <div class="row my-2">
                                                                                <div class="col-sm-4">
                                                                                    <span>Region Name </span>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <input type="text"
                                                                                        value="{{ $country->region_name }}"
                                                                                        name="region_name"
                                                                                        class="form-control form-control-sm"
                                                                                        maxlength="100" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-2">
                                                                                <div class="col-sm-4">
                                                                                    <span>Country Name </span>
                                                                                </div>
                                                                                <div
                                                                                    class="form-group col-sm-8 text-secondary">
                                                                                    <input type="text"
                                                                                        value="{{ $country->country_name }}"
                                                                                        name="country_name"
                                                                                        class="form-control form-control-sm"
                                                                                        maxlength="100" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="row my-2">
                                                                                <div
                                                                                    class="col-sm-12 d-flex justify-content-end text-secondary">
                                                                                    <button type="submit"
                                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                                        style="padding: 4px 9px;">Add
                                                                                        Country &nbsp;<i
                                                                                            class="icon-paperplane ml-2"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---Region Update modal--->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Add Country Modal --}}
                        <div id="addCountry" class="modal fade" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title text-white">Add Country</h6>
                                        <a type="button" data-bs-dismiss="modal">
                                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                                        </a>
                                    </div>
                                    <div class="modal-body p-0 px-2">
                                        <form method="post" action="{{ route('country.store') }}">
                                            @csrf
                                            <div class="row my-2">
                                                <div class="col-sm-4">
                                                    <span>Region Name </span>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <select name="region_id" class="form-control form-control-sm select"
                                                        data-placeholder="Choose Region name">
                                                        <option></option>
                                                        @foreach ($regions as $region)
                                                            <option value="{{ $region->id }}">
                                                                {{ $region->region_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-4">
                                                    <span>Country Name </span>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="country_name"
                                                        class="form-control form-control-sm" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-sm-12 d-flex justify-content-end text-secondary">
                                                    <button type="submit"
                                                        class="submit_btn from-prevent-multiple-submits"
                                                        style="padding: 4px 9px;">Add Country &nbsp;<i
                                                            class="icon-paperplane ml-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Add Success Modal End --}}
                    </div>
                    {{-- Second Table End --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.countryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.coutryRegionDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce
