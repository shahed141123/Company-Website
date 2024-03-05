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
                        <span class="breadcrumb-item active">Category Management</span>
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


        <!-- Content area -->
        <div class="content">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0">
                            <div class="card-header rounded-0 d-flex justify-content-between align-items-center p-0"
                                style="background: #247297;
                            color: white;">
                                <h4 class="text-start mb-0 ps-3">Employe Prject Add</h4>
                                <div>
                                    <a href="{{ route('employee-project.index') }}"
                                        class="btn btn-icon btn-primary w-auto px-3 rounded-0">
                                        <i class="fa-solid fa-arrow-left-long me-2"></i> Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('store.subcategory') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="" id=""
                                                placeholder="Enter Your Name" class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="weight" class="form-label mb-0">Type
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select form-select-sm select" name="type"
                                                data-placeholder="Select Category..." required>
                                                <option value="">News</option>
                                                <option value="">Update</option>
                                                <option value="">New Version</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Start Date</label>
                                            <input type="date" name="start_date" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Start Date</label>
                                            <input type="date" name="end_date" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Start Time</label>
                                            <input type="time" name="start_date" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">End Time</label>
                                            <input type="time" name="end_date" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Supervisor</label>
                                            <select name="supervisor[]"
                                                class="form-control-sm multiselect btn btn-sm industry_multiselect"
                                                id="select" multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true" data-enable-case-insensitive-filtering="true"
                                                required>
                                                <option value="">News</option>
                                                <option value="">Update</option>
                                                <option value="">New Version</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="">Assigned Employee</label>
                                            <select name="assigned_employee[]"
                                                class="form-control-sm multiselect btn btn-sm industry_multiselect"
                                                id="select" multiple="multiple" data-include-select-all-option="true"
                                                data-enable-filtering="true" data-enable-case-insensitive-filtering="true"
                                                required>
                                                <option value="">News</option>
                                                <option value="">Update</option>
                                                <option value="">New Version</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="weight" class="form-label mb-0">Project Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select form-select-sm select" name="project_status"
                                                data-placeholder="Select Category..." required>
                                                <option value="">News</option>
                                                <option value="">Update</option>
                                                <option value="">New Version</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="weight" class="form-label mb-0">Review
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control form-control-solid form-control-sm" name="review" id="" cols="30"
                                                rows="1" placeholder="Enter Your Review"></textarea>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="weight" class="form-label mb-0">Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="status" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="weight" class="form-label mb-0">Weight
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="weight" id=""
                                                class="form-control form-control-sm">
                                        </div>

                                        <div class="col-lg-4">
                                            <label for="weight" class="form-label mb-0">Kpi Rating
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="number" name="kpi_rating" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="weight" class="form-label mb-0">Total Working Day (In Days)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="number" name="total_working_day" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="weight" class="form-label mb-0">Total Working Man Hour
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="number" name="total_working_man_hour" id=""
                                                class="form-control form-control-sm">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="weight" class="form-label mb-0">Project Description
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" name="description" id="accessories" style=" font-size: 12px; font-weight: 500;"></textarea>
                                        </div>
                                    </div>
                                </form>
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
