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
                        <a href="{{route('client.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">All Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="brandDT table table-bordered table-hover">
                            <thead>
                                <tr>

                                    <th width="20%">Order Number</th>
                                    <th width="20%">Order Date</th>
                                    <th width="15%">Total Amount</th>
                                    <th width="15%">Payment Method</th>
                                    <th width="15%">Status</th>
                                    <th width="15%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <td>{{$item->order_number}}</td>
                                    <td>{{$item->order_date}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{ucfirst($item->payment_method)}}</td>
                                    <td>{{ucfirst($item->status)}}</td>
                                    <td class="text-center">
                                        @if ($item->status == 'unpaid')
                                        <a href="{{ route('payment.page', $item->order_number) }}" class="text-success" title="Go to Payment Page">
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
                    targets: [2, 3, 4 , 5 ],
                }, ],
            });
        </script>
    @endpush
@endonce
