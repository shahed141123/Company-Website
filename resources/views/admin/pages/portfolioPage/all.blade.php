@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item">Portfolio Page</a>
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
        <!-- Highlighting rows and columns -->
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Tax Vat Modal --}}
                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                    data-bs-target="#portfolioPageAdd"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <div class="d-flex justify-content-between">
                        <span class="ms-1">Add</span>
                    </div>
                    <div class="d-flex justify-content-between w-100">
                        <h6 class="ms-5 text-black text-center hide_mobile" style="margin-left: 15rem !important;">Portfolio
                            Page Details</h6>
                    </div>
                </a>
            </div>
            <div>
                <table class="table portfolioPageDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="75%">Banner Title</th>
                            <th width="20%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolioPages as $key => $item)
                            <tr>
                                <td class="text-center">{{++$key}}</td>
                                <td>{{$item->banner_title}}</td>

                                <td>
                                    <a href="#" class="text-primary" data-bs-toggle="modal"
                                        data-bs-target="#portfolioPageEdit_{{$item->id}}">
                                        <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        {{-- Edit Expense Modal --}}
                                        <div id="portfolioPageEdit_{{$item->id}}" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header  text-white" style="background-color: #247297">
                                                        <h5 class="modal-title text-white">Edit Portfolio Page
                                                        </h5>
                                                        <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i></a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form action="{{route('portfolio-page.update',$item->id)}}" method="post" class="from-prevent-multiple-submits pt-2"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Title</label>
                                                                <div class="input-group">
                                                                    <input name="banner_title" type="text" maxlength="250"
                                                                        class="form-control form-control-sm" placeholder="Enter Your Banner Title"
                                                                        required value="{{$item->banner_title}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Short Desc</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control form-control-sm" name="banner_short_desc"
                                                                        placeholder="Banner Short Desc" rows="2">{{$item->banner_short_desc}}</textarea>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Btn Name</label>
                                                                <div class="input-group">
                                                                    <input name="banner_btn_name" maxlength="250" type="text"
                                                                        class="form-control form-control-sm" placeholder="Enter Your Banner Btn Name"
                                                                        value="{{$item->banner_btn_name}}" style="padding: 2px 10px 0px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Btn Link</label>
                                                                <div class="input-group">
                                                                    <input name="banner_btn_link" maxlength="250" type="url"
                                                                        class="form-control form-control-sm" placeholder="Enter Your Banner Btn Link"
                                                                        value="{{$item->banner_btn_link}}" style="padding: 2px 10px 0px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Choose Us Badge</label>
                                                                <div class="input-group">
                                                                    <input name="choose_us_badge" maxlength="250" type="text"
                                                                        class="form-control form-control-sm" placeholder="Enter Your Choose Us Badge"
                                                                        value="{{$item->choose_us_badge}}" style="padding: 2px 10px 0px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Choose Us Title</label>
                                                                <div class="input-group">
                                                                    <input name="choose_us_title" maxlength="250" type="text"
                                                                        class="form-control form-control-sm" placeholder="Enter Your Choose Us Title"
                                                                        value="{{$item->choose_us_title}}" style="padding: 2px 10px 0px 10px;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                                                <label class="col-form-label col-lg-3 p-0 text-start text-black">Choose Us Short Desc</label>
                                                                <div class="input-group">
                                                                    <textarea class="form-control form-control-sm" placeholder="Enter Your Choose Us Short Desc"
                                                                       name="choose_us_short_desc" rows="2">{{$item->choose_us_short_desc}}</textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer border-0 pt-3 pb-0 pe-0 mb-3">
                                                            <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                                                style="padding: 4px 9px;;">Submit</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Tax Modal End --}}
                                    </a>
                                    <a href="{{route('portfolio-page.destroy',$item->id)}}" class="text-danger delete">
                                        <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- add Tax Modal Content --}}
        <div id="portfolioPageAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Portfolio Page</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-4">
                        <form action="{{route('portfolio-page.store')}}" method="post" class="from-prevent-multiple-submits pt-2"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Title</label>
                                    <div class="input-group">
                                        <input name="banner_title" type="text" maxlength="250"
                                            class="form-control form-control-sm" placeholder="Enter Your Banner Title"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Short Desc</label>
                                    <div class="input-group">
                                        <textarea class="form-control form-control-sm" name="banner_short_desc"
                                            placeholder="Banner Short Desc" rows="2"></textarea>

                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Btn Name</label>
                                    <div class="input-group">
                                        <input name="banner_btn_name" maxlength="250" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Banner Btn Name" style="padding: 2px 10px 0px 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Banner Btn Link</label>
                                    <div class="input-group">
                                        <input name="banner_btn_link" maxlength="250" type="url"
                                            class="form-control form-control-sm" placeholder="Enter Your Banner Btn Link" style="padding: 2px 10px 0px 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Choose Us Badge</label>
                                    <div class="input-group">
                                        <input name="choose_us_badge" maxlength="250" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Choose Us Badge" style="padding: 2px 10px 0px 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Choose Us Title</label>
                                    <div class="input-group">
                                        <input name="choose_us_title" maxlength="250" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Your Choose Us Title" style="padding: 2px 10px 0px 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex align-items-center pt-1 mb-2">
                                    <label class="col-form-label col-lg-3 p-0 text-start text-black">Choose Us Short Desc</label>
                                    <div class="input-group">
                                        <textarea class="form-control form-control-sm" placeholder="Enter Your Choose Us Short Desc"
                                           name="choose_us_short_desc" rows="2"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0 mb-3">
                                <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Expense Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.portfolioPageDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2],
                }, ],
            });
        </script>
    @endpush
@endonce
