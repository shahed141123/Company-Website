<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')

</head>
{{-- <body onload="myFunction()"> --}}

<body>
    <div id="loading" style="margin-top: 0rem !important"></div>

    <!--======// Nav Menu //========-->
    @include('frontend.partials.header')

    @php
        // Get the cart content

        $cartItems = Cart::content();
        $cart_items = [];
        if ($cartItems->isNotEmpty()) {
            $cartProductIds = $cartItems->pluck('id')->toArray();

            $cart_items = \App\Models\Admin\Product::whereIn('id', $cartProductIds)->get([
                'id',
                'slug',
                'name',
                'thumbnail',
                'price',
                'discount',
            ]);
        } else {
            $cart_items = collect();
        }
    @endphp
    <!--------End---------->
    <div class="page-wrapper">
        @yield('content')

        <!--=======// Footer Section//=========-->
        @if (Route::current() && Route::current()->getName() && str_contains(Route::current()->getName(), 'client'))
        @else
            @include('frontend.partials.footer')
        @endif

    </div>
    <!----------End--------->

    <!--=======// Cookises Modals //=======-->
    @include('frontend.partials.cookies')
    <!----------End--------->

    <!--=======// Feedback Modals //=======-->
    @include('frontend.partials.feedback')
    <!----------End--------->

    <!--============///* USE LINK *///=============-->
    @include('frontend.partials.script')
    <script>
        // var preloader = document.getElementById('loading');

        // function myFunction() {
        //   preloader.style.display = "none";
        // }

        document.addEventListener("DOMContentLoaded", function() {
            const preloader = document.getElementById('loading');

            // Simulate a delay (you can replace this with actual logic)
            setTimeout(function() {
                preloader.style.opacity = 0;
                setTimeout(function() {
                    preloader.style.display = "none";
                }, 100); // Same duration as preloader CSS animation
            }, 800); // Simulated delay in milliseconds
        });
    </script>


    {{-- {{ \TawkTo::widgetCode() }} --}}


</body>

</html>
