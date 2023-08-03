@extends('frontend.master')
@section('content')


<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
 #card-element{
    width: 25rem;
    margin: 1rem;
 }
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid black;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #282829;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement::placeholder{
    color: black;
    font-weight: 600;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>


 <div class="page-header breadcrumb-wrap" style="margin-top: 7rem">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span>  &nbsp;>&nbsp;  </span> Stripe Payment
                </div>
            </div>
        </div>
        <div class="container mb-5 mt-5">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <h3 class="heading-2 mb-2">Stripe Payment</h3>
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">


                	<div class="border p-4 cart-totals ml-3 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-3">
        <h4>Your Order Details</h4>

    </div>
    <div class="divider-2 mb-3"></div>
    <div class="table-responsive order_table checkout mb-2">
        <table class="table no-border">
            <tbody>
            @foreach($carts as $item)
                <tr>
                    <td class="image product-thumbnail"><img src="{{$item->options->has('image') ? $item->options->image : ''}} " alt="#" style="width:50px; height: 50px;" ></td>
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
    <div class="table-responsive order_table checkout">

 <table class="table no-border">
        <tbody>

        {{-- @if(Session::has('coupon'))

         <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Subtotal</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ $cartTotal }}</h4>
                </td>
            </tr>

            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Coupn Name</h6>
                </td>
                <td class="cart_total_amount">
                    <h6 class="text-brand text-end">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</h6>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Coupon Discount</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ session()->get('coupon')['discount_amount'] }}</h4>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Grand Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ session()->get('coupon')['total_amount'] }}</h4>
                </td>
            </tr>

        @else --}}



            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted" style="width: 20rem;">Grand Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ $cartTotal }}</h4>
                </td>
            </tr>
     {{-- @endif --}}

        </tbody>
    </table>





    </div>
</div>


                </div> <!-- // end lg md 6 -->


<div class="col-lg-6">
<div class="border p-5 cart-totals ml-3 mb-3">
    <div class="align-items-end justify-content-between mb-3">
        <h4 class="text-center" style="color: #ae0a46">Make Payment </h4>


    </div>
    <div class="divider-2 mb-3"></div>
    <div class="table-responsive order_table checkout">


  <form action="{{ route('stripe.order') }}" method="post" id="payment-form">
        @csrf
    <div class="form-row text-center">

        <label for="card-element">

            <h6 class="pl-4 text-center">Credit or debit card</h6>

                <input type="hidden" name="name" value="{{ $name }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="phone" value="{{ $phone }}">
                <input type="hidden" name="postal" value="{{ $postal }}">
                <input type="hidden" name="city" value="{{ $city }}">
                <input type="hidden" name="country" value="{{ $country }}">
                <input type="hidden" name="state" value="{{ $state }}">
                <input type="hidden" name="address" value="{{ $address }}">
                <input type="hidden" name="notes" value="{{ $notes }}">


        </label>

        <div id="card-element" class="StripeElement">
        <!-- A Stripe Element will be inserted here. -->
        </div>
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
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

@section('scripts')
<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51MIhpNKWkQXfo4eQKRqV6aaB2nDyFN7TCYXzPZ9vdCOsybE637QvJRzadjCLCtMP5vQa1Zx4dfCSDierUo3L2mwG00J3XdT7A5');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>
@endsection




