@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex justify-content-between align-items-center border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Contact Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
                {{-- Inner Page Tab --}}
                <div>
                    <!-- Leave Dashboard link -->
                    <a href="{{ route('contact.create') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="ph-plus me-1" style="font-size: 10px;"></i>
                            <span>Add</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="content container-fluid">
            <div class="text-center">
                <h4 class="m-0" style="color: #247297;">All Contacts Message</h4>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mx-auto">
                    <div class="card p-0 border-0">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table contactDT table-striped table-bordered table-hover text-center">
                                    <thead>
                                        <tr class="text-center">
                                            <th width="5%">Id</th>
                                            <th width="30%">Name</th>
                                            <th width="25%">Email</th>
                                            <th width="20%">Date</th>
                                            <th width="10%">Message</th>
                                            <th width="10%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($contacts)
                                            @foreach ($contacts as $key => $contact)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ $contact->created_at }}</td>
                                                    <td><a href="" class="text-info" data-bs-toggle="modal"
                                                            data-bs-target="#userMessageShow-{{ $contact->id }}">
                                                            <i class="fa-solid fa-eye dash-icons"></i>
                                                        </a></td>
                                                    <td class="text-center">
                                                        <a href="" class="text-info" data-bs-toggle="modal"
                                                            data-bs-target="#userMessage-{{ $contact->id }}">
                                                            <i class="fa-solid fa-reply dash-icons me-2"></i>
                                                        </a>
                                                        <a href="{{ route('contact.edit', [$contact->id]) }}" class="text-primary">
                                                            <i class="fa-solid fa-pen-to-square dash-icons me-2"></i>
                                                        </a>
                                                        <a href="{{ route('contact.destroy', [$contact->id]) }}"
                                                            class="text-danger delete">
                                                            <i class="fa-solid fa-trash dash-icons"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Show User Contact Message Modal Start --}}
    @if ($contacts)
        @foreach ($contacts as $key => $contact)
            <div class="modal fade" id="userMessage-{{ $contact->id }}" tabindex="-1" aria-labelledby="userMessageLabel"
                aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> --}}
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header p-1 px-4">
                            <h5 class="modal-title" id="userMessageLabel">User Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="main_text_color">{{ $contact->name }}</p>
                                        <p>{{ $contact->created_at }}</p>
                                        <p>{{ $contact->email }}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="main_text_color pt-3">User Message</p>
                                        <p>
                                            {{ $contact->message }}
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-primary replay_toggler">Reply User <i
                                                    class="fa-solid fa-reply ps-2"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 replay_toggler_show">
                                        <div class="card mt-3">
                                            <div class="card-header p-1" style="background-color: #247297;">
                                                <div>
                                                    <h3 class="text-center m-0 p-0 text-white">Reply The Mail</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="post" class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">User
                                                                Email</label>
                                                            <input type="email" class="form-control form-control-sm"
                                                                name="user_email" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" placeholder="Enter User Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Reply
                                                                Subjuct</label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="reply_subject" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp"
                                                                placeholder="Enter Replay Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Reply
                                                                Message</label>
                                                            <textarea id="common" class="form-control form-control-sm" name="reply_message" rows="3"
                                                                placeholder="Enter Reply Message..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-info">Submit <i
                                                                    class="fa-solid fa-envelope-circle-check ps-2"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    {{-- Show User Contact Message Modal End --}}
    {{-- Show User Contact Message Modal Start --}}
    @if ($contacts)
        @foreach ($contacts as $key => $contact)
            <div class="modal fade" id="userMessageShow-{{ $contact->id }}" tabindex="-1"
                aria-labelledby="userMessageLabel" aria-hidden="true" data-bs-backdrop="static"
                data-bs-keyboard="false">
                {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> --}}
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header p-1 px-4">
                            <h5 class="modal-title" id="userMessageLabel">User Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="main_text_color text-center">User Message</h4>
                                        <p class="main_text_color">{{ $contact->name }}</p>
                                        <p>{{ $contact->created_at }}</p>
                                        <p>
                                            {{ $contact->message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    {{-- Show User Contact Message Modal End --}}
@endsection
@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Hide the replay_toggler_show container by default
                $('.replay_toggler_show').hide();

                // Add click event to the "Reply User" button
                $('.replay_toggler').click(function() {
                    // Toggle the visibility of the replay_toggler_show container with a transition
                    $('.replay_toggler_show').fadeToggle();
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.contactDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 4],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce
