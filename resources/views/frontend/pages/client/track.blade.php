@extends('frontend.master')


@section('content')
    @include('frontend.header')


    <!--=========Content Wrapper=============-->
    @include('frontend.client.sidebar')

    <!--Content Wrapper-->
    <div class="d-flex">
        <div id="userSideButton_wrapper">
            <button class="sidebarButtonStyle" onclick="userDashboardSidebarClicked()">☰</button>
        </div>
        <div id="Content_Wrapper">
            <section class="client_dashboard_content_wp">
                <!--=====// Content body //=====-->
                <div id="client_dashboard_content_wp" class="row">
                    @include('frontend.flash-message')
                    <!----Order Tracking start---->
                    <section class="row">
                        <!--------Serch & Title------->
                        <div class="col-lg-12 col-sm-12 d-flex justify-content-center">
                            <h2>Order Tracking</h2>
                        </div>
                        <div class="col-lg-12 col-sm-12 d-flex justify-content-center search_order_tracking">
                            <form id="form" role="search">
                                <input type="search" id="query" name="q" placeholder="Search..."
                                    aria-label="Search through site content">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                        <!--------Managing item------->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card-thumb">
                                <div class="card-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/frontend/image/icon/managing-orders.png') }}" alt="">
                                </div>
                                <h4>Managing orders </h4>
                                <ul>
                                    <li><a href="">Order status</a></li>
                                    <li><a href="">Stock status</a></li>
                                    <li><a href="">Cancelling an order</a></li>
                                </ul>
                                <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                    <a href="">Learn more</a>
                                </div>

                            </div>
                        </div>
                        <!--------Pricing item------->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card-thumb">
                                <div class="card-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/frontend/image/icon/pricing-payments.png') }}"
                                        alt="">
                                </div>
                                <h4>Pricing & payments</h4>
                                <ul>
                                    <li><a href="">Payment options</a></li>
                                    <li><a href="">Leasing options</a></li>
                                    <li><a href="">Find paid invoices</a></li>
                                </ul>
                                <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                    <a href="">Learn more</a>
                                </div>

                            </div>
                        </div>
                        <!--------Shipping item------->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card-thumb">
                                <div class="card-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/frontend/image/icon/shipping-information.png') }}"
                                        alt="">
                                </div>
                                <h4>Shipping information</h4>
                                <ul>
                                    <li><a href="">Delivery options</a></li>
                                    <li><a href="">Shipping to different address</a></li>
                                    <li><a href="">Estimated delivery date</a></li>
                                </ul>
                                <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                    <a href="">Learn more</a>
                                </div>

                            </div>
                        </div>
                        <!--------item------->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card-thumb">
                                <div class="card-img d-flex justify-content-center">
                                    <img src="{{ asset('assets/frontend/image/icon/privacy-policies.png') }}"
                                        alt="">
                                </div>
                                <h4>Product Processing</h4>
                                <ul>
                                    <li><a href="">Order status</a></li>
                                    <li><a href="">Stock status</a></li>
                                    <li><a href="">Cancelling an order</a></li>
                                </ul>
                                <div class="d-flex justify-content-center order_tracking_btn mb-4">
                                    <a href="#">Learn more</a>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!--Order Tracking End-->
                    <!--Order Details Start-->
                    @if ($orders != null)
                        <section class="client_db_oredr_details">
                            <div class="d-flex justify-content-center mb-4">
                                <h2>Order Details</h2>
                            </div>

                            <table class="table table-striped" style="font-size: 11px">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Delivery Status</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach ($orders as $items)
                                        @foreach ($items->orderDetails as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->unit_price }}</td>
                                                <td>{{ $item->total_amount }}</td>
                                                <td>
                                                    @if ($item->delivery_status == 'Processing')
                                                        <a class="btn_action bg-primary">{{ $item->delivery_status }}</a>
                                                    @elseif ($item->delivery_status == 'Shipped')
                                                        <a class="btn_action bg-secondary">{{ $item->delivery_status }}</a>
                                                    @elseif ($item->delivery_status == 'Delivered')
                                                        <a class="btn_action btn-success">{{ $item->delivery_status }}</a>
                                                    @else
                                                        <a class="btn_action btn-warning">{{ $item->delivery_status }}</a>
                                                    @endif

                                                </td>
                                                <td>
                                                    @if ($item->payment_status == 'Unpaid')
                                                        <a class="btn_action bg-danger">{{ $item->payment_status }}</a>
                                                    @elseif($item->payment_status == 'Checking')
                                                        <a class="btn_action bg-info">{{ $item->payment_status }}</a>
                                                    @elseif($item->payment_status == 'Paid')
                                                        <a class="btn_action bg-success">{{ $item->payment_status }}</a>
                                                    @else
                                                        <a class="btn_action bg-warning">{{ $item->payment_status }}</a>
                                                    @endif
                                                </td>
                                                <td>

                                                    @if ($item->payment_status == 'Unpaid')
                                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                            style="cursor:pointer; color:rgba(241, 8, 43, 0.781)">
                                                            Payment Info
                                                        </a>
                                                    @else
                                                        <p>No Action Needed</p>
                                                    @endif
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Payment Details
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <strong>Bank Name:</strong>
                                                            <p> Dutch Bangla Bank</p>
                                                            <strong>Account Title:</strong>
                                                            <p> NGen IT</p>
                                                            <strong>Account Number:</strong>
                                                            <p> 234***********</p>
                                                            <strong>Branch Title:</strong>
                                                            <p>West Panthapath</p>

                                                            <h5>Submit Payment Slip</h5>
                                                            <form action="{{ url('payment/update/' . $items->id) }}"
                                                                method="post" enctype="multipart/form-data"
                                                                class="form-group">
                                                                @csrf
                                                                <input class="form-control" type="file"
                                                                    name="payment_slip" id="" required>
                                                                <button type="submit"
                                                                    style="border-radius: 50px; float:right"
                                                                    class="btn btn-sm btn-primary mt-2">Submit</button>
                                                            </form>

                                                        </div>
                                                        {{-- <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                    @endif
                    <!--Order Details End-->
                </div>
            </section>
        </div>
    </div>
    </div>
    @include('frontend.footer')

@endsection
