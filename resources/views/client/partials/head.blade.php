
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Ngen It | Client Dashboard</title>

	<!-- Global stylesheets -->
    @php
    $setting=App\Models\Admin\Setting::first();
    @endphp
     <link rel="icon" type="image/x-icon" href="{{ (!file_exists($setting->favicon)) ? url('upload/faviconimage/'.$setting->favicon):url('upload/no_image.jpg') }}">

	<link href="{{ asset('/') }}backend/assets/fonts/inter/inter.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/') }}backend/assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('/') }}backend/assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->


    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{ asset('backend/assets/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

    <style> 
        /* From Client Dashboard */
        /*common button*/
         .common_button {
             padding: 10px 40px;
             cursor: pointer;
             font-family: "klinic-slab", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
             font-size: 18px;
             font-weight: 500;
             text-align: center;
             display: inline-block;
             background-color: #fff;
             color: #ae0a46;
             border: 1px solid #5f5753;
        }
         .common_button:hover {
             background-color: #5f5753;
             color: white;
             transition: .3s;
        }
        /*btn_background*/
         .effect01 {
             color: #FFF;
             border: 1px solid #ae0a46;
            /* box-shadow:0px 0px 0px 1px #ae0a46 inset;
             */
             background-color: #ae0a46;
             overflow: hidden;
             position: relative;
             transition: all 0.8s ease-in-out;
        }
         .effect01:hover {
             border: 1px solid #444444;
             background-color: #FFF;
            /* box-shadow:0px 0px 0px 4px #EEE inset;
             */
             color: #ae0a46 !important;
             transition: all 0.8s ease-in-out;
        }
         th {
             background: #3883a3 !important;
             color: white !important;
             font-weight: bold;
             text-align: center;
        }
         .table{
             --table-cell-padding-y: 0.5rem !important;
             --table-cell-padding-x: 0.75rem !important;
        }
         table.td{
             margin: 1px !important;
             padding: 3px !important;
        }
         .table thead td, .table thead th {
             padding: 10px 5px 10px 5px !important;
             font-size: 12px !important;
        }
         .datatable-footer, .datatable-header{
             padding: 3px;
        }
         .card-body{
             padding: 5px;
        }
         table.td{
             margin: 1px !important;
             padding: 3px !important;
        }
         .dataTable thead td, .dataTable thead th {
             padding : 10px 5px 10px 5px !important;
             font-size: 12px !important;
        }
         .datatable-footer, .datatable-header{
             padding: 3px;
        }
         .card-body{
             padding: 5px;
        }
         tbody, td, tfoot, th, thead, tr{
             font-size: 13px !important;
             font-weight: 500 !important;
             padding: 3px 6px 3px 6px !important;
        }
         .card-body{
             color: black !important;
             font-weight: 600 !important;
        }
         .br-7{
             border-radius: 7px;
        }
         .br-5{
             border-radius: 5px;
        }
         .center{
             width: 50%;
             margin: auto;
        }
         .bg-gray{
             background: gray;
             color: white !important;
        }
         .w-6{
             width: 6rem !important;
             border: 1px #d5cece solid !important;
        }
         .w-10{
             width: 10rem !important;
             border: 1px #d5cece solid !important;
        }
         .border-none{
             border: none !important;
        }

        @media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px) {
             table {
                 width: 100%;
            }
            /* Force table to not be like tables anymore */
             table, thead, tbody, th, td, tr {
                 display: block;
            }
            /* Hide table headers (but not display: none;
            , for accessibility) */
             thead tr {
                 position: absolute;
                 top: -9999px;
                 left: -9999px;
            }
             tr {
                 border: 1px solid #ccc;
            }
             td {
                 border: none;
                 border-bottom: 1px solid #eee;
                 position: relative;
                 padding-left: 50%;
            }
             td:before {
                 position: absolute;
                 top: 6px;
                 left: 6px;
                 width: 45%;
                 padding-right: 10px;
                 white-space: nowrap;
                 content: attr(data-column);
                 color: #000;
                 font-weight: bold;
            }
        }
         @media only screen and (min-width: 992px){
             .rfq-top{
                 width: 63% !important;
                 margin-left: 12.5rem !important;
            }
        }
         </style> 
