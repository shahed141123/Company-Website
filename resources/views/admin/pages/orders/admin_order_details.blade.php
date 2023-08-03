

@extends('admin.master')
@section('content')

    <div class="content-wrapper">

         <!-- Page header -->
         <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Order Management</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h4 class="text-center">Admin Order Details</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card">

                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Shipping Details</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                                            <tr>
                                                <th>Shipping Name:</th>
                                                <th>{{ $order->name }}</th>
                                            </tr>

                                            <tr>
                                                <th>Shipping Phone:</th>
                                                <th>{{ $order->phone }}</th>
                                            </tr>

                                            <tr>
                                                <th>Shipping Email:</th>
                                                <th>{{ $order->email }}</th>
                                            </tr>

                                            <tr>
                                                <th>Shipping Address:</th>
                                                <th>{{ $order->adress }}</th>
                                            </tr>


                                            <tr>
                                                <th>State:</th>
                                                <th>{{ $order->state }}</th>
                                            </tr>

                                            <tr>
                                                <th>Zip Code:</th>
                                                <th>{{ $order->postal }}</th>
                                            </tr>

                                            <tr>
                                                <th>Country :</th>
                                                <th>{{ $order->country }}</th>
                                            </tr>



                                            <tr>
                                                <th>Order Date :</th>
                                                <th>{{ $order->order_date }}</th>
                                            </tr>

                                        </table>

                                    </div>

                                </div>
                            </div>


                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Order Details
                                            <span class="text-danger">Invoice : {{ $order->invoice_no }} </span>
                                        </h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                                            <tr>
                                                <th> Name :</th>
                                                <th>{{ $order->user->name }}</th>
                                            </tr>

                                            <tr>
                                                <th>Phone :</th>
                                                <th>{{ $order->user->phone }}</th>
                                            </tr>

                                            <tr>
                                                <th>Payment Type:</th>
                                                <th>{{ $order->payment_method }}</th>
                                            </tr>


                                            <tr>
                                                <th>Transx ID:</th>
                                                <th>{{ $order->transaction_id }}</th>
                                            </tr>

                                            <tr>
                                                <th>Invoice:</th>
                                                <th class="text-danger">{{ $order->invoice_no }}</th>
                                            </tr>

                                            <tr>
                                                <th>Order Amonut:</th>
                                                <th>${{ $order->amount }}</th>
                                            </tr>

                                            <tr>
                                                <th>Order Status:</th>
                                                <th><span class="badge bg-danger" style="font-size: 15px;">{{ $order->status }}</span></th>
                                            </tr>


                                            <tr>
                                                <th> </th>
                                                <th>
                                                    @if ($order->status == 'pending')
                                                        <a href="{{ route('pending-confirm', $order->id) }}"
                                                            class="btn btn-block btn-success" id="confirm">Confirm Order</a>
                                                    @elseif($order->status == 'confirm')
                                                        <a href="{{ route('confirm-processing', $order->id) }}"
                                                            class="btn btn-block btn-success" id="processing">Processing Order</a>
                                                    @elseif($order->status == 'processing')
                                                        <a href="{{ route('processing-delivered', $order->id) }}"
                                                            class="btn btn-block btn-success" id="delivered">Delivered Order</a>
                                                    @endif



                                                </th>
                                            </tr>

                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>






                        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-1">
                            <div class="col">
                                <div class="card">


                                    <div class="table-responsive">
                                        <table class="table" style="font-weight: 600;">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-1">
                                                        <label>Image </label>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <label>Product Name </label>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <label>Vendor Name </label>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <label>Product Code </label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label>Color </label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label>Size </label>
                                                    </td>
                                                    <td class="col-md-1">
                                                        <label>Quantity </label>
                                                    </td>

                                                    <td class="col-md-3">
                                                        <label>Price </label>
                                                    </td>

                                                </tr>


                                                @foreach ($orderItem as $item)
                                                    <tr>
                                                        <td class="col-md-1">
                                                            <label><img src="{{ asset($item->product->product_thambnail) }}"
                                                                    style="width:50px; height:50px;"> </label>
                                                        </td>
                                                        <td class="col-md-2">
                                                            <label>{{ $item->product->product_name }}</label>
                                                        </td>
                                                        @if ($item->vendor_id == null)
                                                            <td class="col-md-2">
                                                                <label>Owner </label>
                                                            </td>
                                                        @else
                                                            <td class="col-md-2">
                                                                <label>{{ $item->product->vendor->name }} </label>
                                                            </td>
                                                        @endif

                                                        <td class="col-md-2">
                                                            <label>{{ $item->product->product_code }} </label>
                                                        </td>
                                                        @if ($item->color == null)
                                                            <td class="col-md-1">
                                                                <label>.... </label>
                                                            </td>
                                                        @else
                                                            <td class="col-md-1">
                                                                <label>{{ $item->color }} </label>
                                                            </td>
                                                        @endif

                                                        @if ($item->size == null)
                                                            <td class="col-md-1">
                                                                <label>.... </label>
                                                            </td>
                                                        @else
                                                            <td class="col-md-1">
                                                                <label>{{ $item->size }} </label>
                                                            </td>
                                                        @endif
                                                        <td class="col-md-1">
                                                            <label>{{ $item->qty }} </label>
                                                        </td>

                                                        <td class="col-md-3">
                                                            <label>${{ $item->price }} <br> Total = ${{ $item->price * $item->qty }}
                                                            </label>
                                                        </td>

                                                    </tr>
                                                @endforeach

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


@endsection




















