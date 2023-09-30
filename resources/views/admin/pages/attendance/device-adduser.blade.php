@extends('admin.master')
@section('content')
<style>
    .page_titles {
            background-color: #307a9d;
            width: 17%;
            border-radius: 20px;
            color: white;
            margin: auto;
        }
</style>
    <div class="content-wrapper">
        <div class="d-flex justify-content-between align-items-center shadow-sm">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex px-2">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Device</span>
                        <span class="breadcrumb-item active">Add Employee</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
            <!-- Basic tabs -->
            <div>
                <a href="{{ route('machine.home') }}" class="btn navigation_btn">
                    <div class="d-flex align-items-center ">
                        <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                        <span>Back To Dashboard</span>
                    </div>
                </a>
            </div>
        </div>

        {{-- Content Start --}}
        <div class="container">
            <div class="row mt-2">
                <div class="col-lg-12">
                    <h4 class="my-3 text-center page_titles">Add Employee </h4>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="p-2 card rounded-0 border-0 w-50 mx-auto">
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate action="{{ route('machine.devicesetuser') }}"
                                method="post">
                                @csrf
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">UID :</label>
                                    <input type="text" name="uid" class="form-control form-control-sm" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Field Is Required Please Fill It.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">User ID :</label>
                                    <input type="text" name="userid" class="form-control form-control-sm" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Field Is Required Please Fill It.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustomUsername" class="form-label">Name :</label>
                                    <input type="text" name="name" class="form-control form-control-sm" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustomUsername" class="form-label"> Role :</label>
                                    <input type="text" name="role" class="form-control form-control-sm" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustomUsername" class="form-label"> Password :</label>
                                    <input type="text" name="password" class="form-control form-control-sm" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustomUsername" class="form-label">Card No :</label>
                                    <input type="text" name="cardno" class="form-control form-control-sm" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
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
