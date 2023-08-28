@extends('admin.master')
@section('content')
    <style>
        .nav-tabs .nav-link.active {
            color: white !important;
        }

        .nav-tabs .nav-link:hover {
            color: white !important;
        }
    </style>
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
                            <a href="{{ route('site-setting.index') }}" class="breadcrumb-item">Site Setting</a>
                            <span class="breadcrumb-item active">FAQs</span>
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
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-10 offset-1">
                    <div class="d-flex align-items-center">
                        <div class="text-success nav-link cat-tab3"
                            style="position: relative;z-index: 999;margin-bottom: -24px;">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#faqAdd" type="button"
                                class="mx-3 btn btn-sm btn-info custom_btn btn-labeled btn-labeled-start float-start">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Add
                            </a>

                            <div class="text-center">
                                <h5 class="ms-1 mb-0" style="color: #247297;">FAQs</h5>
                            </div>
                        </div>

                    </div>
                    <div>
                        <table class="table faqDT table-bordered table-hover text-center ">
                            <thead>
                                <tr>
                                    <th width="7%">Sl No:</th>
                                    <th width="7%">Order</th>
                                    <th width="45%">Question</th>
                                    <th width="30%">Answer</th>
                                    <th width="11%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($faqs)
                                    @foreach ($faqs as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td class="text-center">{{ $item->order }}</td>
                                            <td class="text-center">{{ $item->question }}</td>
                                            <td class="text-center">{{ Str::limit($item->answer, 40, '...') }}</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#update_module_{{ $item->id }}">
                                                    <i class="icon-pencil"></i>
                                                </a>

                                                <a href="{{ route('faq.destroy', [$item->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>
    <!------Modals---->
    @if (!empty($faqs))
        @foreach ($faqs as $item)
            <div id="update_module_{{ $item->id }}" class="modal fade" tabindex="-1" style="display: none;"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">FAQ Update Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body border br-7">

                            <form method="post" action="{{ route('faq.update', $item->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="container p-2 mx-2">
                                    <div class="row mb-1">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-firstname-input">FAQ
                                                    Category</label>
                                                <input type="text" maxlength="80" class="form-control form-control-sm"
                                                    placeholder="Enter FAQ Category Name" name="category"
                                                    value="{{ $item->category }}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicpill-email-input">FAQ Order</label>
                                                <input type="text" maxlength="80"
                                                    class="form-control form-control-sm allow_decimal"
                                                    placeholder="Enter Faq Order" name="order"
                                                    value="{{ $item->order }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">FAQ Question</label>
                                            <textarea name="question" rows="3" class="form-control form-control-sm">{{ $item->question }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">FAQ Answer</label>
                                            <textarea name="answer" rows="3" class="form-control form-control-sm">{{ $item->answer }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                                    <button type="button" class="submit_close_btn "
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                        style="padding: 10px;">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <!------Modals---->

    <!------Modals---->
    <div id="faqAdd" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">FAQ Question Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border br-7">

                    <form method="post" action="{{ route('faq.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container p-2 mx-2">
                            <div class="row mb-1">
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicpill-firstname-input">FAQ Category</label>
                                        <input type="text" maxlength="80" class="form-control form-control-sm"
                                            placeholder="Enter FAQ Category Name" name="category" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicpill-email-input">FAQ Order</label>
                                        <input type="text" maxlength="80"
                                            class="form-control form-control-sm allow_decimal"
                                            placeholder="Enter Faq Order" name="order" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-firstname-input">FAQ Question</label>
                                    <textarea name="question" rows="3" class="form-control form-control-sm"></textarea>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="mb-1">
                                    <label class="form-label" for="basicpill-firstname-input">FAQ Answer</label>
                                    <textarea name="answer" rows="3" class="form-control form-control-sm"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                            <button type="submit" class="btn btn-info from-prevent-multiple-submits"
                                style="padding: 10px;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!------Modals---->

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.faqDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 26, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 3, 4],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce
