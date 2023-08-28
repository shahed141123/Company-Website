<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontend.partials.head')
</head>
{{-- <body onload="myFunction()"> --}}

<body>

    <div id="loading" style="margin-top: 0rem !important"></div>

    <!--======// Nav Menu //========-->
    @include('frontend.partials.header')
    <!--------End---------->
    <div class="page-wrapper">
        @yield('content')

        <!--=======// Footer Section//=========-->
        @include('frontend.partials.footer')
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
                }, 200); // Same duration as preloader CSS animation
            }, 800); // Simulated delay in milliseconds
        });
    </script>


    {{ \TawkTo::widgetCode() }}

</body>

</html>
