<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />

@if (!empty($__env->yieldContent('title')))
    @yield('title')
@else
    <title>Ngen It | Admin Panel</title>
@endif


<!-- Global stylesheets -->
@php
    $setting = App\Models\Site::first();
@endphp



<link rel="icon" type="image/x-icon"
    href="{{ !empty($setting->favicon) ? asset('storage/' . $setting->favicon) : url('upload/no_image.jpg') }}">


<link href="{{ asset('backend/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/css/ltr/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/css/ltr/custom_main.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"> --}}

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">

<link href="{{ asset('backend/assets/icons/material/styles.min.css') }}" rel="stylesheet">
<!-- /global stylesheets -->
<link href="{{ asset('backend/assets/css/oliullah.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/css/toastr.min.css') }}" rel="stylesheet">

{{-- <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> --}}
<link href="{{ asset('backend/assets/input-tags/css/tagsinput.css') }}" rel="stylesheet">

<link href="{{ asset('backend/assets/css/ltr/custom_global.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
@stack('styles')
<style type="text/css">
    .padding {
        padding: 0px !important;
    }

    .quotaed-lbg {
        background: #659EC7 !important;
    }

    .quotaed-ltbg {
        background: #306754 !important;
    }

    .quotaed-rbg {
        background: #4C787E !important;
    }

    .quotaed-rtbg {
        background: #1F6357 !important;
    }

    .clickable-row {
        cursor: pointer;
    }

    .border-bottom-link {
        border-bottom: 1px solid #007bff;
    }
</style>
