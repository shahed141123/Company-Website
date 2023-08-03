@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Client Databases Management</span>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-auto mb-2" style="width: 50%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Client Databases</h4>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ route('client-database.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="content">
                            <div class="card">
                                <div class="card-body">
                                    <table class="datatable table table-bordered text-center table-hover clientDatabaseDT">
                                        <thead>
                                            <tr>
                                                <th width="20%">Sl No:</th>
                                                <th width="35%">Deal Type</th>
                                                <th width="30%">Value</th>
                                                <th width="20%" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($clientDatabases)
                                                @foreach ($clientDatabases as $key => $clientDatabase)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ ucfirst($clientDatabase->deal_type) }}</td>
                                                        <td>{{ $clientDatabase->value }}</td>
                                                        <td class="text-center">
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#update-deal-type-{{ $clientDatabase->id }}"
                                                                class="text-primary">
                                                                <i class="icon-pencil"></i>
                                                            </a>
                                                            <a href="{{ route('deal-type-settings.destroy', [$clientDatabase->id]) }}"
                                                                class="text-danger delete mx-2">
                                                                <i class="delete icon-trash"></i>
                                                            </a>
                                                            <!---Add modal--->
                                                            <div id="update-deal-type-{{ $clientDatabase->id }}"
                                                                class="modal fade" tabindex="-1" style="display: none;"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Edit Deal Type Value
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"></button>
                                                                        </div>

                                                                        <div class="modal-body border br-7">
                                                                            <div class="card-body m-auto">
                                                                                <form method="post"
                                                                                    action="{{ route('deal-type-settings.update', $clientDatabase->id) }}">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm-4">
                                                                                            <h6 class="mb-0">Deal Type
                                                                                            </h6>
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group text-secondary col-sm-8">
                                                                                            <select name="deal_type"
                                                                                                class="form-control select"
                                                                                                data-minimum-results-for-search="Infinity"
                                                                                                data-placeholder="Chose deal type ">
                                                                                                <option></option>
                                                                                                <option
                                                                                                    @selected($clientDatabase->deal_type == 'new')
                                                                                                    value="new">New
                                                                                                </option>
                                                                                                <option
                                                                                                    @selected($clientDatabase->deal_type == 'renew')
                                                                                                    value="renew">Renew
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm-4">
                                                                                            <h6 class="mb-0">Value </h6>
                                                                                        </div>
                                                                                        <div
                                                                                            class="form-group col-sm-8 text-secondary">
                                                                                            <input type="text"
                                                                                                value="{{ $clientDatabase->value }}"
                                                                                                name="value"
                                                                                                class="form-control maxlength"
                                                                                                maxlength="100" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4"></div>
                                                                                        <div
                                                                                            class="col-sm-8 text-secondary">
                                                                                            <input type="submit"
                                                                                                class="btn btn-primary px-4 mt-5"
                                                                                                value="Submit" />
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!---Add modal--->

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
            </div>
        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>


    <!---Add modal--->
    <div id="add-deal-type" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Deal Type Value</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">
                    <div class="card-body">
                        <form method="post" action="{{ route('deal-type-settings.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Deal Type</h6>
                                </div>
                                <div class="form-group text-secondary col-sm-8">
                                    <select name="deal_type" class="form-control select"
                                        data-minimum-results-for-search="Infinity" data-placeholder="Chose deal type ">
                                        <option></option>
                                        <option value="new">New </option>
                                        <option value="renew">Renew </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Value </h6>
                                </div>
                                <div class="form-group col-sm-8 text-secondary">
                                    <input type="text" name="value" class="form-control maxlength allow_decimal"
                                        maxlength="100" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!---Add modal--->


@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.clientDatabaseDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce
