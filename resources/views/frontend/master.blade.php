<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="rvHWL3HPw7hzVuxHE37nPByXS604wH6gpUPzjZiWNy8" />
    <meta name="title" content="NGen IT Ltd.">
    <meta name="description"
        content="NGEN IT Ltd. is a System Integration, Software & Hardware based License Provider & Software development based company established at 2008. Our technical expertise, broad solutions portfolio and supply chain capabilities give us the right resources and scale to achieve more for you. Cloud Services.">
    <meta name="keywords"
        content="software, hardware, training, books, license, Microsoft, Adobe, Software License, Acronis, Veeam, Industry, Solution, Health Industry, Financial Industry,">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="NGen IT">

    @include('frontend.partials.head')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KB1NVD4FHE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KB1NVD4FHE');
    </script>
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
        @if (str_contains(Route::current()->getName(), 'client'))
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


    {{ \TawkTo::widgetCode() }}


</body>

</html>
