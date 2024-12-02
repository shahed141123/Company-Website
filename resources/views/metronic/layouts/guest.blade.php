<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="{{ asset('storage/' . optional($setting)->site_favicon) }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('storage/' . optional($setting)->site_favicon) }}" rel="shortcut icon" type="image/png">
    <meta name="title" content="{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}" />
    <meta name="description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ optional($setting)->site_url ?: config('app.url') }}" />
    <meta property="og:title" content="{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}" />
    <meta property="og:description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="og:image"
        content="{{ optional($setting)->site_logo && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ optional($setting)->site_url ?: config('app.url') }}" />
    <meta property="twitter:title"
        content="{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}" />
    <meta property="twitter:description" content="{{ optional($setting)->meta_description ?: config('app.name') }}" />
    <meta property="twitter:image"
        content="{{ optional($setting)->site_logo && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/brandPage-logo-no-img(217-55).jpg') }}" />

    <title>{{ optional($setting)->site_title ?: config('app.name', 'E-Commerce') }}</title>

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> --}}


    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>



<body id="kt_body" class="bg-body">


    <div class="d-flex flex-column flex-root">
        {{ $slot }}
    </div>



    <script>
        var hostUrl = "assets/";
    </script>

    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>


    <script src="{{ asset('admin/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/apps/user-management/users/view/update-password.js') }}"></script>

		@stack('scripts')

</body>


</html>
