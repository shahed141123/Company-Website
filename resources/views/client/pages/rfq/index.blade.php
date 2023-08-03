@extends('client.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('homepage') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('client.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Deal Management</span>
                    </div>
                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
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
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Deals</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="js-tab1">
                                    <div id="table1" class="card p-1">
                                        <div class="table-responsive card-body">
                                            <table class="table table-bordered table-hover contactDT">
                                                <thead>
                                                    <tr>
                                                        <th width="10%">Id</th>
                                                        <th width="15%">Code</th>
                                                        <th width="40%">Product Name</th>
                                                        <th width="15%">Deal Status</th>
                                                        <th width="20%">Work order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if ($rfqs)
                                                        @foreach ($rfqs as $key => $rfq)
                                                            <tr>
                                                                <td>{{ ++$key }}</td>
                                                                <td>{{ $rfq->rfq_code }}</td>
                                                                <td>{{ App\Models\Admin\Product::where('id',$rfq->product_id)->value('name') }}</td>
                                                                <td>{{ $rfq->status }}</td>
                                                                <td></td>
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
        </div>
    </div>
    <!-- /content area -->

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.contactDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2,3,4],
                }, ],
            });
        </script>
    @endpush
@endonce
