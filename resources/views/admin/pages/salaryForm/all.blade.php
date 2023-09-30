@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('salary-form.index') }}" class="breadcrumb-item"><span
                                    class="breadcrumb-item active">Salary Form</span></a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
                <!-- Basic tabs -->
        </section>
        <!-- /page header -->

        <div class="content pt-0 w-75 mx-auto mt-2">
            <div class="d-flex align-items-center py-1 bg-white">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#salartAddModal" title="Add Salary"
                        class="mx-1 btn btn-sm btn-info btn-labeled custom_btn btn-labeled-start float-start">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add
                    </a>
                    <h5 class="ms-1 mb-0 text-uppercase" style="color: #247297;">Salary Form</h5>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table table-bordered table-hover text-center data_attribute">
                    <thead>
                        <tr>
                            <th width="15%">User Id</th>
                            <th width="65%">Monthly Salary</th>
                            <th width="20%"class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>105</td>
                        <td>11,664 TK</td>
                        <td class="text-center">
                            <a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#salaryEditModal">
                                <i class="fa-regular fa-pen-to-square main_color"></i>
                            </a>
                            <a href="#" class="text-danger delete mx-2">
                                <i class="fa-solid fa-trash delete"></i>
                            </a>
                        </td>
                        <tr class="bg-white">
                            <td colspan="3">No Data Found</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /inner content -->
    </div>
    <!--Salary Add Modal -->
    <div class="modal fade" id="salartAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <form class="row g-3 needs-validation" novalidate>
                <div class="modal-content rounded-0 p-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title" id="exampleModalLabel">Salary Add Modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <label for="user_id">User Name<span class="text-danger">*</span></label>
                                <select class="form-control multiselect" data-enable-filtering="true" name="user_id"
                                    multiple="multiple" data-include-select-all-option="true" data-allow-clear="true"
                                    id="user_id" required>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label for="monthly_salary">Monthly Salary <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm " id="monthly_salary"
                                    name="monthly_salary" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label for="category_ids">Category Name <span
                                        class="text-danger">*</span></label>
                                <select class="form-control multiselect" data-enable-filtering="true" name="category_ids"
                                    multiple="multiple" data-include-select-all-option="true" data-allow-clear="true"
                                    id="category_ids" required>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label for="selected_attributes">Selected Attributes Name <span
                                        class="text-danger">*</span></label>
                                <select class="form-control multiselect" data-enable-filtering="true"
                                    id="selected_attributes" name="selected_attributes" multiple="multiple"
                                    data-include-select-all-option="true" data-allow-clear="true" required>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--Salary Edit Modal -->
    <div class="modal fade" id="salaryEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <form class="row g-3 needs-validation" novalidate>
                <div class="modal-content rounded-0 p-0">
                    <div class="modal-header rounded-0">
                        <h5 class="modal-title" id="exampleModalLabel">Salary Edit Modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <label for="user_id">User Name<span class="text-danger">*</span></label>
                                <select class="form-control multiselect" data-enable-filtering="true" name="user_id"
                                    multiple="multiple" data-include-select-all-option="true" data-allow-clear="true"
                                    id="user_id" required>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label for="monthly_salary">Monthly Salary <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-sm " id="monthly_salary"
                                    name="monthly_salary" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label for="category_ids">Category Name <span
                                        class="text-danger">*</span></label>
                                <select class="form-control multiselect" data-enable-filtering="true" name="category_ids"
                                    multiple="multiple" data-include-select-all-option="true" data-allow-clear="true"
                                    id="category_ids" required>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label for="selected_attributes">Selected Attributes Name <span
                                        class="text-danger">*</span></label>
                                <select class="form-control multiselect" data-enable-filtering="true"
                                    id="selected_attributes" name="selected_attributes" multiple="multiple"
                                    data-include-select-all-option="true" data-allow-clear="true" required>
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.data_attribute').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 2,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [2],
            }, ],
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endpush
