@extends('admin.master')
@section('content')
    <style>
        .nav-tabs .nav-link.active{
            color:white !important;
        }
        .nav-tabs .nav-link:hover{
            color:white !important;
        }
        .nav-link {
            /* color: rgb(10 10 10); */
        }
        .nav-tabs .nav-link:hover {
            /* color: #000000 !important;
            background-color: #c3c3c3; */
            border: none !important;
            border-color: transparent !important;
        }
        .submit_btn {
            padding: 10px;
        }

        .submit_btn:hover {
            padding: 10px;
        }

        .pagination-flat .disabled {
            width: 60px !important;
            padding-left: 10px;
            padding-right: 10px;

        }

        #DataTables_Table_0_previous {
            margin-right: 0px !important;
        }
    </style>

    <div class="content-wrapper">


        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Supply Chain</a>
                            <span class="breadcrumb-item active">Product Sourcing</span>
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
                <div>
                    <ul class="nav nav-tabs border-bottom-0">
                        <li class="nav-item d-flex align-items-center">
                            <a href="#category" class="navigation_btn p-0 me-2 btn nav-link active cat-tab1" data-bs-toggle="tab">
                                <p class="p-1 mb-0" >
                                    Category</p>
                            </a>
                        </li>

                        <li class="nav-item d-flex align-items-center">
                            <a href="#sub_category" class="navigation_btn p-0 me-2 btn nav-link cat-tab2" data-bs-toggle="tab">
                                <p class="p-1 mb-0">
                                    Sub Category</p>
                            </a>
                        </li>

                        <li class="nav-item d-flex align-items-center">
                            <a href="#sub_sub_category" class="navigation_btn p-0 me-2 btn nav-link cat-tab3" data-bs-toggle="tab">
                                <p class="p-1 mb-0">
                                   Sub Sub Category</p>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="#sub_sub_sub_category" class="navigation_btn p-0 me-2 btn nav-link cat-tab3" data-bs-toggle="tab">
                                <p class="p-1 mb-0">
                                    Sub Sub Sub Category</p>
                            </a>
                        </li>


                    </ul>
                </div>
        </section>
        <!-- product-sourcing Content Start style="position: relative;z-index: 999;"
        -->
        <section>

            <div class="container-fluid mt-3
             ">
                {{-- <div class="row rounded mb-3" id="exTab3" >
                    <div class="d-flex justify-content-center align-items-center p-0">
                        <ul class="nav nav-tabs border-0">
                            <li class="nav-item ">
                                <a href="#category" class=" nav-link text-black active cat-tab1 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1">
                                        Category <span class="ms-2">|</span></p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#sub_category" class=" nav-link text-black cat-tab2 p-1 " data-bs-toggle="tab">
                                    <p class="m-0 p-1"> Sub Category <span class="ms-2">|</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sub_sub_category" class=" nav-link text-black cat-tab3 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1"> Sub Sub Category <span class="ms-2">|</span></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sub_sub_sub_category" class=" nav-link text-black cat-tab3 p-1" data-bs-toggle="tab">
                                    <p class="m-0 p-1"> Sub Sub Sub Category <span class="ms-2"></span></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="row rounded mt-2">
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        @include('admin.pages.category.partials.category_partial')
                    </div>
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        @include('admin.pages.category.partials.sub_category_partial')


                    </div>
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        @include('admin.pages.category.partials.sub_sub_category_partial')

                    </div>
                    <div class="tab-content p-0 mx-auto" style="width: 90%;">
                        @include('admin.pages.category.partials.sub_sub_sub_category_partial')


                    </div>
                </div>
                {{-- Add Modal Content Start --}}
                @include('admin.pages.category.partials.add_modals')

                

            </div>
        </section>



    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.category ').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2,3,4,5],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.sub_category').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2,3,4,5],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.sub_sub_category').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2,3,4,5,6],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.sub_sub_sub_category').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 10],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2,3,4,5,6,7],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".approved_title").addClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });
                $(".cat-tab3").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").removeClass('d-none');
                });

            });
        </script>
    @endpush
@endonce
