@extends('client.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('homepage') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('client.dashboard') }}" class="breadcrumb-item">Dashboard</a>
                        <span class="breadcrumb-item active">Ordeer</span>
                    </div>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">

                <div class="card-body">
                    <div class="row gy-0">
                        <div class="col-12" style="background-color: rgb(74, 166, 206); color:white;">
                            <h5 class="text-center">All Orders</h5>
                        </div>
                        <div class="col-12 table-responsive px-0">
                            <table class="brandDT table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center" style="background: rgb(221, 220, 220);">
                                        <td width="20%">Order Number</td>
                                        <td width="20%">Order Date</td>
                                        <td width="15%">Total Amount</td>
                                        <td width="15%">Payment Method</td>
                                        <td width="15%">Status</td>
                                        <td width="15%" class="text-center">Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <td>{{ $item->order_number }}</td>
                                        <td>{{ $item->order_date }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>{{ ucfirst($item->payment_method) }}</td>
                                        <td>{{ ucfirst($item->status) }}</td>
                                        <td class="text-center">
                                            @if ($item->status == 'unpaid')
                                                <a href="{{ route('payment.page', $item->order_number) }}"
                                                    class="text-success" title="Go to Payment Page">
                                                    <i class="fa fa-dollar-sign fa-1x"></i>
                                                </a>
                                            @endif
                                        </td>
                                    @endforeach
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
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.brandDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 3, 4, 5],
                }, ],
            });
        </script>
    @endpush
@endonce
