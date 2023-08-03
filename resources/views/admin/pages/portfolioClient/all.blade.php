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
                        <a href="" class="breadcrumb-item">Portfolio Client</a>
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
        <div class="content pt-0 w-50 mx-auto">
            <!-- Highlighting rows and columns -->
            <div class="d-flex justify-content-start align-items-center py-2">
                {{-- Add Tax Vat Modal --}}
                <a href="" class=" text-success nav-link cat-tab3" data-bs-toggle="modal"
                    data-bs-target="#portfolioClientAdd"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Add Expense">
                        <i class="ph-plus icons_design"></i>
                    </span>
                    <span class="ms-1">Add</span>
                </a>

            </div>
            <div>
                <table class="table portfolioClientDT table-bordered table-hover datatable-highlight text-center ">
                    <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th width="15%">Logo</th>
                            <th width="10%">Link</th>
                            <th width="10%">Status</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($portfolioClients)
                            @foreach ($portfolioClients as $key => $portfolioClient)
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>
                                        <img src="{{ asset('storage/thumb/' . $portfolioClient->logo) }}" alt=""
                                            width="25" height="25">
                                    </td>
                                    <td><a href="">{{ $portfolioClient->link }}</a></td>
                                    <td>{{ $portfolioClient->status }}</td>
                                    <td>
                                        <a href="#" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#portfolioClientedit_{{ $portfolioClient->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                            {{-- Edit Expense Modal --}}
                                            <div id="portfolioClientedit_{{ $portfolioClient->id }}" class="modal fade"
                                                tabindex="-1">
                                                <div class="modal-dialog  modal-dialog-centered modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header  text-white"
                                                            style="background-color: #247297">
                                                            <h5 class="modal-title text-white">Edit Add Client Portfolio
                                                            </h5>
                                                            <a type="button" data-bs-dismiss="modal"> <i
                                                                    class="ph ph-x text-white"
                                                                    style="font-weight: 800;font-size: 10px;"></i></a>
                                                        </div>
                                                        <div class="modal-body p-0 px-2">
                                                            <form
                                                                action="{{ route('portfolio-client.update', $portfolioClient->id) }}"
                                                                method="post" class="from-prevent-multiple-submits pt-2"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row mt-2">
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Logo</label>
                                                                        <div class="input-group">
                                                                            <input name="logo" type="file"
                                                                                class="form-control form-control-sm"
                                                                                required
                                                                                style="padding: 2px 10px 0px 10px;">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Status</label>
                                                                        <select name="status"
                                                                            value="{{ $portfolioClient->status }}"
                                                                            class="form-control form-select-sm select"
                                                                            data-container-css-class="select-sm"
                                                                            data-minimum-results-for-search="Infinity"
                                                                            data-placeholder="Chose status" required>
                                                                            <option></option>
                                                                            <option @selected($portfolioClient->status == 'active')
                                                                                value="active">Active</option>
                                                                            <option @selected($portfolioClient->status == 'in_active')
                                                                                value="in_active">In Active</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-12 d-flex pt-1">
                                                                        <label
                                                                            class="col-form-label col-lg-2 p-0 text-start text-black">Link</label>
                                                                        <input name="link"
                                                                            value="{{ $portfolioClient->link }}"
                                                                            type="url" maxlength="150"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Your Link" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                    <button type="button" class="submit_close_btn "
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="submit_btn from-prevent-multiple-submits"
                                                                        style="padding: 10px;">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Edit Tax Modal End --}}
                                        </a>
                                        <a href="{{ route('portfolio-client.destroy', $portfolioClient->id) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /highlighting rows and columns -->
        </div>
        <!-- /content area End-->
        {{-- add Tax Modal Content --}}
        <div id="portfolioClientAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header  text-white" style="background-color: #247297">
                        <h5 class="modal-title">Add Client Portfolio</h5>
                        <a type="button" data-bs-dismiss="modal"> <i class="ph ph-x text-white"
                                style="font-weight: 800;font-size: 10px;"></i></a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form action="{{ route('portfolio-client.store') }}" method="post"
                            class="from-prevent-multiple-submits pt-2" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Logo</label>
                                    <div class="input-group">
                                        <input name="logo" type="file" class="form-control form-control-sm"
                                            required style="padding: 2px 10px 0px 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Link</label>
                                    <input name="link" type="url" maxlength="150"
                                        class="form-control form-control-sm" placeholder="Enter Your Link" required>
                                </div>
                                <div class="col-lg-12 d-flex pt-1">
                                    <label class="col-form-label col-lg-2 p-0 text-start text-black">Status</label>
                                    <select name="status" class="form-control form-select-sm select"
                                        data-container-css-class="select-sm" data-minimum-results-for-search="Infinity"
                                        data-placeholder="Chose status" required>
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="in_active">In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="button" class="submit_close_btn " data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 4px 9px;">Submit</button>
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
            $('.portfolioClientDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 4],
                }, ],
            });
        </script>
    @endpush
@endonce
