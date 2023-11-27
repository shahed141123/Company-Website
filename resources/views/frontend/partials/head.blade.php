<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!--Fav-Icon-->
@php
    $setting = App\Models\Site::first();
@endphp

<title>{{ !empty($setting->site_name) ? $setting->site_name : 'NGen IT Ltd.' }}</title>




{{-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63b14113592bb2001af01a1d&product=inline-share-buttons&source=platform" async="async"></script> --}}
<link rel="icon" type="image/x-icon"
    href="{{ !empty($setting->favicon) ? asset('storage/' . $setting->favicon) : url('upload/no_image.jpg') }}">

<link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome-6.2.0.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-icons.css') }}">

<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome-6.css') }}">

<!-- Plugin link -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.css') }}">
<link href="{{ asset('frontend/assets/css/bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/font-awesome/css/font-awesome.css') }}">

<!-- Css link -->

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/sidebar_tab.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/toastr.min.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> --}}

<link href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">

{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" type="text/css" /> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/select2.min.css') }}">

{{-- Custom Style 12-03-2023 Start --}}
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_style_main.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/modification_style.css') }}">
{{-- Custom Style 12-03-2023 End --}}

{{-- Custom Style 6-7-2023 Start --}}
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_global.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_responsive_tablet.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_responsive_phone.css') }}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

{{-- Custom Style 6-7-2023 End --}}

<style>
        .og-image{
            width: 100%; /* Set the desired width */
            height: 100%; /* Set the desired height */
            object-fit: contain; /* Apply object-fit: contain; styling */
        }
    </style>
@yield('styles')
<meta property="og:image:width" content="700"> {{-- Set the width of your image --}}
<meta property="og:image:height" content="630"> {{-- Set the height of your image --}}
    