@extends('backend.master')
@section('content')
    <!-- /# Sidebar -->
    @include('backend.sidebar');
    <!-- /# Header -->
    @include('backend.header');

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!--/# row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Order Details Page </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order id</th>
                                                <th>Customer Name</th>
                                                <th>Shipping Address</th>

                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                                <th>Payment Status</th>
                                                <th>Delivery Status</th>
                                                <th>Payment_Slip</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->user_name }}</td>
                                                    <td>{{ $item->address }},{{ $item->city }},{{ $item->country }},{{ $item->zip }}
                                                    </td>
                                                    @foreach ($item->orderDetails as $item1)
                                                        <td>{{ $item1->product_name }}</td>
                                                        <td>{{ $item1->quantity }}</td>
                                                        <td>{{ $item1->total_amount }}</td>
                                                        <td>
                                                            <form method="post"
                                                                action="{{ url('order/update/' . $item1->id) }}">
                                                                @csrf
                                                                <select name="payment_status"
                                                                    onchange='if(this.value != 0) { this.form.submit(); }'>
                                                                    <option value="{{ $item1->payment_status }}">
                                                                        {{ $item1->payment_status }}</option>
                                                                    @foreach (payment_status() as $pay)
                                                                        <option value="{{ $pay }}">
                                                                            {{ $pay }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form method="post"
                                                                action="{{ url('order/update/' . $item1->id) }}">
                                                                @csrf
                                                                <select name="delivery_status"
                                                                    onchange='if(this.value != 0) { this.form.submit(); }'>
                                                                    <option value="{{ $item1->delivery_status }}">
                                                                        {{ $item1->delivery_status }}</option>
                                                                    @foreach (delivery_status() as $deliver)
                                                                        <option value="{{ $deliver }}">
                                                                            {{ $deliver }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </form>
                                                        </td>
                                                    @endforeach
                                                    @if ($item->payment_slip != 0)
                                                        <td><a href="{{ url('storage/Payment_Slip/' . $item->payment_slip) }}"
                                                                target="_blank"><i class="fa-solid fa-file"></i></a></td>
                                                    @else
                                                        <td>Unpaid</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    {{ $products->links() }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
