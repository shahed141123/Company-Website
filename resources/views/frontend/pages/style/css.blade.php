 <!-- google fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap"
     rel="stylesheet">
 <!-- fontAwesome || cdn link -->

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

 <!-- slick slider -->
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css') }}">
 <!-- bootstrap link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <!-- css link -->
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/global.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/component.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">


 <!-- Script -->
 <script src="{{ asset('assets/frontend/js/ajax.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
 <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

 <!-- bootstrap jsBundle -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
 <!-- jquery cdn -->

 <!-- slick slider -->
 <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
 <script src="{{ asset('assets/frontend/js/jquery.scrollUp.min.js') }}"></script>

 <!-- js link -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <!-- medium modal -->
 <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header" style="justify-content: flex-end">
                 <button type="button" style="border:none; background:transparent" class="close" id="close"
                     data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body" id="mediumBody">
             </div>
         </div>
     </div>
 </div>

 <style>
     body::-webkit-scrollbar {
         width: 10px;
     }

     body::-webkit-scrollbar-track {
         background: #f3f3f3;
     }

     body::-webkit-scrollbar-thumb {
         background-color: #AE0A46;
         border-radius: 50px;
     }
 </style>


