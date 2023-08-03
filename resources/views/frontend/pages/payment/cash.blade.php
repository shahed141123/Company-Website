@extends('frontend.master')
@section('content')
    <div class="page-header breadcrumb-wrap" style="margin-top: 100px">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('homepage') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span> &nbsp;>&nbsp; </span> Cash On Delivery
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-4">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <h3 class="heading-2 mb-10 text-center" style="color: #ae0a46;">Cash On Delivery Payment</h3>
                <div class="d-flex justify-content-between">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">


                <div class="border p-4 cart-totals ml-2 mb-5">
                    <div class="align-items-end justify-content-between mb-3">
                        <h4 class="text-center">Your Order Details</h4>

                    </div>
                    <div class="divider-2 mb-3"></div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody>
                            @foreach($carts as $item)
                                    <tr>
                                        <td class="image product-thumbnail">
                                            <img src="{{asset($item->options->has('image') ? $item->options->image: '')}} " alt="#" style="width:50px; height: 50px;" >
                                        </td>
                                        <td>
                                            @php
                                            $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                        @endphp
                                            <p class="w-160 mb-5"><a href="{{ route('product.details',$slug) }}" class="text-heading">{{ $item->name }}</a></p></span>
                                            <div class="product-rate-cover">

                                            {{-- <strong>Color :{{ $item->options->color }} </strong>
                                            <strong>Size : {{ $item->options->size }}</strong> --}}

                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-muted pl-20 pr-20">x {{ $item->qty }}</h6>
                                        </td>
                                        <td>
                                            <h4 class="text-brand">${{ $item->price }}</h4>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">

                        <table class="table no-border">
                            <tbody>


                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Grand Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">${{ $cartTotal }}</h4>
                                        </td>
                                    </tr>


                            </tbody>
                        </table>





                    </div>
                </div>


            </div> <!-- // end lg md 6 -->


            <div class="col-lg-6">
                <div class="border p-4 cart-totals ml-2 mb-5">
                    <div class="align-items-end justify-content-between mb-3">
                        <h4 class="text-center">Make Cash Payment </h4>

                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">


                        <form action="{{ route('cash.order') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <label for="card-element">


                                    <input type="hidden" name="name" value="{{ $name }}">
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <input type="hidden" name="phone" value="{{ $phone }}">
                                    <input type="hidden" name="postal" value="{{ $postal }}">
                                    <input type="hidden" name="country" value="{{ $country }}">
                                    <input type="hidden" name="city" value="{{ $city }}">
                                    <input type="hidden" name="state" value="{{ $state }}">
                                    <input type="hidden" name="address" value="{{ $address }}">
                                    <input type="hidden" name="notes" value="{{ $notes }}">


                                </label>

                                <!-- Used to display form errors. -->

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-5">
                                    <button class=" p-2 mb-2 common_button2">Submit Payment</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
