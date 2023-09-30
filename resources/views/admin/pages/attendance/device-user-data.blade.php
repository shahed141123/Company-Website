@extends('admin.master')
@section('content')
    <style>
        .employee-img img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #307a9d;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }

        .page_titles {
            background-color: #307a9d;
            width: 30%;
            border-radius: 20px;
            color: white;
            margin: auto;
        }
    </style>
    <div class="content-wrapper">
        <div class="d-flex justify-content-between align-items-center shadow-sm">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex px-2">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Device</span>
                        <span class="breadcrumb-item active">Employee Information</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
            <!-- Basic tabs -->
            <div>
                <a href="{{ route('machine.home') }}" class="btn navigation_btn">
                    <div class="d-flex align-items-center ">
                        <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                        <span>Back To Dashboard</span>
                    </div>
                </a>
                <a href="{{ route('machine.deviceuserdata') }}" class="btn navigation_btn">
                    <div class="d-flex align-items-center ">
                        <i class="fa-solid fa-arrow-rotate-right me-1" style="font-size: 10px;"></i>
                        <span>Refresh</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="my-3 text-center page_titles">All Data From Device : <span> Users</span>
                    </h4>
                </div>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-1">


                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <table class="table users table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">UID</th>
                                            <th scope="col">User ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Card No</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sl = 1;
                                        @endphp

                                        @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $sl++ }}</th>
                                                <td>{{ $user['uid'] }}</td>
                                                <td>{{ $user['userid'] }}</td>
                                                <td>{{ $user['name'] }}</td>
                                                <td>{{ $user['role'] }}</td>
                                                <td>{{ $user['password'] }}</td>
                                                <td>{{ $user['cardno'] }}</td>
                                                <td>
                                                    <a class="me-2 main_color" href="" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal_{{ $user['userid'] }}">
                                                        <i class="fa-solid fa-eye"></i></a>
                                                    {{-- {{ route('machine.deviceviewusersingle', $user) }} link  --}}
                                                    <a class=" main_color"
                                                        href="{{ route('machine.deviceremoveusersingle', $user['uid']) }}">
                                                        <i class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    @foreach ($users as $user)
     <div class="modal fade" id="exampleModal_{{ $user['userid'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content rounded-0">
                 <div class="modal-header rounded-0">
                     <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body py-0 pt-1">
                     <div class="row align-items-center">
                         <div class="col-lg-3">
                             <div class="employee-profile-wrapper h-75">
                                 <div class="employee-profile border-0">
                                     <div class="employee-img d-flex justify-content-center">
                                         <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1537638518/Ba%C5%9Fl%C4%B1ks%C4%B1z-1.jpg"
                                             alt="">
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="col-lg-3">
                             {{-- Profile Info --}}
                             <div class="text-start profile-details">
                                 <h4 class="main_color p-0 m-0">{{ $user['name'] }}</h4>
                                 <p class="p-0 m-0">Front-End</p>
                                 <p class="p-0 m-0 main_color">Mesopotamia</p>
                                 <p class="p-0 m-0"><i class="fa-solid fa-location-dot pe-1"></i></i> <strong
                                         class="main_color">Istanbul, Turkey</strong></p>
                             </div>
                         </div>
                         <div class="col-lg-3">
                             {{-- Profile Info --}}
                             <div class="text-start profile-details mt-2">
                                <div class="card p-2">
                                    <p class="p-0 m-0 main_color">In Time</p>
                                    <h3 class="p-0 m-0 main_color">70%</h3>
                                </div>
                             </div>
                         </div>
                         <div class="col-lg-3">
                             {{-- Profile Info --}}
                             <div class="text-start profile-details mt-2">
                                <div class="card p-2">
                                    <p class="p-0 m-0 main_color">Late</p>
                                    <h3 class="p-0 m-0 text-danger">30%</h3>
                                </div>
                             </div>
                         </div>
                         <div class="col-lg-12">
                             <div class="profile-details mt-4">
                                 <div class="row">
                                     <div class="col-lg-3 col-sm-12 text-center">
                                         <div class="card p-3">
                                             <p class="p-0 m-0 main_color">Card No</p>
                                             <p class="p-0 m-0">{{ $user['cardno'] }}</p>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-sm-12 text-center">
                                         <div class="card p-3">
                                             <p class="p-0 m-0 main_color">User Id</p>
                                             <p class="p-0 m-0">{{ $user['userid'] }}</p>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-sm-12 text-center">
                                         <div class="card p-3">
                                             <p class="p-0 m-0 main_color">UID</p>
                                             <p class="p-0 m-0">{{ $user['uid'] }}</p>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-sm-12 text-center">
                                         <div class="card p-3">
                                             <p class="p-0 m-0 main_color">Category</p>
                                             <p class="p-0 m-0">Intern</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer border-0 p-0">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
   @endforeach
@endsection


@once
    @push('scripts')
        <script type="text/javascript">
            $('.users').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 2, 3, 4, 5, 6, 7],
                }, ],
            });
        </script>
    @endpush
@endonce
