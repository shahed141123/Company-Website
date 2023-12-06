<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Title-->
<title>{{ !empty($setting->site_name) ? $setting->site_name : 'NGen IT Ltd.' }}</title>

<!--Fav-Icon-->
<link rel="icon" type="image/x-icon"
    href="{{ !empty($setting->favicon) ? asset('storage/' . $setting->favicon) : url('upload/no_image.jpg') }}">





<!--CSS Start-->


<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/sliders/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/sliders/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/sliders/slick-theme.css') }}">

<!-- Library link -->
<link href="{{ asset('frontend/css/bootstrap/bootstrap@5.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend/css/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/select-2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/toastr/toastr.min.css') }}">


<!-- Css link -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_global.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom_responsive.css') }}">

{{-- Custom Style 6-7-2023 End --}}

@yield('styles')
<meta property="og:image:width" content="700"> {{-- Set the width of your image --}}
<meta property="og:image:height" content="630"> {{-- Set the height of your image --}}
