@extends('admin.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-form-repeater/dist/css/bootstrap-form-repeater.css">
    <style>
        .repeater-add {
            width: 30px !important;
            right: 50px;
            background: transparent;
            color: white;
            border: 0;
        }

        .repeater-delete {
            background: transparent;
            color: white;
            border: 0;
        }
    </style>
    <div class="content-wrapper">
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
                                style="background: #247297;color: white;">
                                <h4 class="text-start mb-0 ps-3">Employe Task Add</h4>
                                <div>
                                    <a href="{{ route('employee-project.index') }}"
                                        class="btn btn-icon btn-light w-auto px-3 rounded-0">
                                        <i class="fa-solid fa-arrow-left-long me-2"></i> Back</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('store.subcategory') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row py-3">
                                        <div class="col-lg-6 offset-lg-3 mx-auto py-2 pt-1"
                                            style="border: 1px dashed #247297;">
                                            <label for="weight" class="form-label mb-0">Select Employee
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select form-select-sm select" name="type"
                                                data-placeholder="Select Category..." required>
                                                <option value="">News</option>
                                                <option value="">Update</option>
                                                <option value="">New Version</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <span class="badge badge-primary bg-dark"
                                                style="z-index: 2; position: relative;">General Info
                                            </span>
                                        </div>
                                        <div class="col-lg-12 pt-2 pb-1"
                                            style="border: 1px dashed #247297; margin-top: -10px;">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <label for="name">Title</label>
                                                    <input type="text" name="" id=""
                                                        placeholder="Enter Your Name" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="weight" class="form-label mb-0">Fiscal Year
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-select form-select-sm select" name="type"
                                                        data-placeholder="Select Category..." required>
                                                        <option value="">News</option>
                                                        <option value="">Update</option>
                                                        <option value="">New Version</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="weight" class="form-label mb-0">Month
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-select form-select-sm select" name="type"
                                                        data-placeholder="Select Category..." required>
                                                        <option value="">News</option>
                                                        <option value="">Update</option>
                                                        <option value="">New Version</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="weight" class="form-label mb-0">Quarter
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-select form-select-sm select" name="type"
                                                        data-placeholder="Select Category..." required>
                                                        <option value="">News</option>
                                                        <option value="">Update</option>
                                                        <option value="">New Version</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="">Supervisor</label>
                                                    <select name="supervisor[]"
                                                        class="form-control-sm multiselect btn btn-sm industry_multiselect"
                                                        id="select" multiple="multiple"
                                                        data-include-select-all-option="true" data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true" required>
                                                        <option value="">News</option>
                                                        <option value="">Update</option>
                                                        <option value="">New Version</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label for="">Notifications To</label>
                                                    <select name="supervisor[]"
                                                        class="form-control-sm multiselect btn btn-sm industry_multiselect"
                                                        id="select" multiple="multiple"
                                                        data-include-select-all-option="true" data-enable-filtering="true"
                                                        data-enable-case-insensitive-filtering="true" required>
                                                        <option value="">News</option>
                                                        <option value="">Update</option>
                                                        <option value="">New Version</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div>
                                            <span class="badge badge-primary bg-dark"
                                                style="z-index: 2; position: relative;">Tasks
                                            </span>
                                        </div>
                                        <div class="col-lg-12 pt-2 pb-1"
                                            style="border: 1px dashed #247297; margin-top: -10px;">
                                            {{-- Form Repeater --}}
                                            <div id="repeaterForm">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h3 class="mb-0">Add Task Details Here Fill The Field.</h3>
                                                    <div class="text-end mb-2">
                                                        <button data-repeater-create type="button" class="btn btn-primary">
                                                            <i class="fa-solid fa-plus pe-2 text-white"></i> Add More
                                                        </button>
                                                    </div>
                                                </div>
                                                <div data-repeater-list="items">
                                                    <div data-repeater-item style="border: 1px dashed #247297;" class="mb-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="row p-2">
                                                                    <div class="col-lg-6">
                                                                        <label for="">Task Name</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Start Date</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">End Date</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Start Time</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label for="">Task Description</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">End Time</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Buffer Time</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Location</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Supervisor</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Notify To</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Add Standby</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Task Target</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Task Rating</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label for="">Task Weight</label>
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Task Name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 text-center">
                                                                <button data-repeater-delete type="button"
                                                                    class="repeater-delete">
                                                                    <img width="20px"
                                                                        src="https://i.ibb.co/qr49zm6/Asset-1-2x-8.png"
                                                                        alt="">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- End Form Repeater --}}
                                        </div>
                                    </div>
                                    {{-- Submit Button --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pt-3 text-end">
                                                <button class="btn btn-primary text-end" type="submit">Submit</button>
                                            </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
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

        {{-- Form Repeater --}}
        <!-- Initialize the repeater -->
        <script>
            $(document).ready(function() {
                $('#repeaterForm').repeater({
                    show: function() {
                        $(this).slideDown();
                    },
                    hide: function(deleteElement) {
                        if (confirm('Are you sure you want to delete this item?')) {
                            $(this).slideUp(deleteElement);
                        }
                    }
                });
            });
        </script>
    @endpush
@endonce
