@extends('admin.master')
@section('content')
<style>
    .notes{
        height: 25rem !important;
    }
</style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light" style="border-bottom: 1px solid #eee;">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex">
                    <!-- Breadcrumb -->
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <span class="breadcrumb-item active">Notice Board</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
                <div>
                    <!-- Add Notice Button -->
                    <a href="javascript:void(0);" class="btn navigation_btn" data-bs-toggle="modal"
                        data-bs-target="#noticeAdd">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
                            <span>Add Notice</span>
                        </div>
                    </a>
                    <!-- All Notices Button -->
                    <a href="{{ route('notice.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
                            <span>All Notices</span>
                        </div>
                    </a>
                    <!-- Rearrange Cards Button -->
                    <a href="javascript:void(0);" id="resetButton" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-redo me-1" style="font-size: 14px;"></i>
                            <span>Rearrange Cards</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Content area -->
        <div class="container-fluid main-bg-image">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center py-2">All Notice</h2>
                    </div>
                </div>
                {{-- First Row --}}
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mb-2">
                            <input type="text" name="" class="form-control form-control-sm" id="" placeholder="Search Notice">
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">
                                    Holiday Notice
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">
                                    Gov Holiday Notice
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#office"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Office Circular Notice
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#common"
                                    type="button" role="tab" aria-controls="messages" aria-selected="false">
                                    General Notice
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#meating"
                                    type="button" role="tab" aria-controls="messages" aria-selected="false">
                                    Meating Notice
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <!-- Loop through notices -->
                                    @foreach ($notices as $notice)
                                        @php
                                            $randomClass = 'notes-' . rand(1, 4);
                                        @endphp
                                        <div id="card-{{ $notice->id }}" class="col-lg-2 col-sm-12 draggable-card">
                                            <!-- Notice Card -->
                                            <div
                                                class="card sticky1 notes {{ $randomClass }} rounded-0 text-white notice-card">
                                                <!-- Card Header -->
                                                <div
                                                    class="card-header sticky-top rounded-0 card-headers-border py-2 my-0 d-flex justify-content-between align-content-center bg-light">
                                                    <div>
                                                        <img class="pin-img"
                                                            src="https://www.pngall.com/wp-content/uploads/4/Red-Pin-PNG-Clipart.png"
                                                            width="30px" height="30px" alt="">
                                                    </div>
                                                    <div>
                                                        <!-- Edit and Delete Buttons -->
                                                        @if (auth()->check() && in_array('hr', json_decode(auth()->user()->department, true)))
                                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                                data-bs-target="#notice_{{ $notice->id }}"
                                                                class="text-info p-1 bg-light rounded-circle me-1">
                                                                <i class="fa-solid fa-pencil text-info"></i>
                                                            </a>
                                                            <a href="{{ route('notice.destroy', $notice->id) }}"
                                                                class="btn btn-light rounded-circle delete">
                                                                <i class="fa-solid fa-trash text-danger"></i>
                                                            </a>
                                                        @endif
                                                        <!-- Delete Button (smaller version) -->
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light rounded-circle delete-btns"
                                                            data-card-id="{{ $notice->id }}">
                                                            <i class="fa-solid fa-trash text-danger"></i>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light rounded-circle delete-btns"
                                                            data-bs-toggle="modal" data-bs-target="#modalId">
                                                            <i class="fa-solid fa-vector-square text-info"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Card Body -->
                                                <div class="card-header border-0 py-0 my-0 px-1">
                                                    {{-- <h5 class="mb-0 text-black">{{ $notice->title }}</h5> --}}
                                                    <p class="text-black fw-bold">{{ $notice->title }}</p>
                                                    <p class="p-0 m-0 post-date">
                                                        <span class="fw-bold text-muted">Ref: </span><span
                                                            class="ms-2 text-black">JG/HR_ADMIN/HOLIDAY</span>
                                                    </p>
                                                    <p class="p-0 m-0 post-date mb-3">
                                                        <span class="fw-bold text-muted">Post On: </span><span
                                                            class="ms-2 text-black">{{ $notice->publish_date }}</span>
                                                    </p>
                                                </div>
                                                <div class="card-body pt-0 mt-0 text-black px-1">
                                                    <p class="ps-0 text-black" style="text-align: justify;">
                                                        {!! $notice->content !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane" id="office" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="d-flex justify-content-center align-items-center">
                                    Office Notice Gose Here .
                                </div>
                            </div>
                            <div class="tab-pane" id="common" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="d-flex justify-content-center align-items-center">
                                    Common Notice Gose Here .
                                </div>
                            </div>
                            <div class="tab-pane" id="meating" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="d-flex justify-content-center align-items-center">
                                    Meating Notice Gose Here .
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header p-1">
                    <h5 class="modal-title" id="modalTitleId">
                        {{ $notice->title }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div>
                        <h6>{{ $notice->title }}</h6>
                        <p>Ref: JG/HR_ADMIN/HOLIDAY</p>
                        <p>Post Date: {{ $notice->publish_date }}</p>
                        <p>{!! $notice->content !!}</p>
                    </div> --}}
                    <div>

                        <p class="mb-0">Date: 24th December'23</p>
                        <p class="mb-0">CIRCULAR</p>
                        <p class="mb-0">Ref: JG/HR_ADMIN/HOLIDAY NOTICE</p>
                        <p class="mb-0 pb-2">Dear all,</p>
                        <p class="mb-0" style="text-align: justify">
                            Assalamu Alaikum. A Government holiday on Christmas Day, please be informed that all the sister
                            concerns of Jara Groups will remain closed on Monday 25th December’23.
                            We will resume operations from Tuesday, 26th December’23 onwards.
                        </p>
                        <p class="pt-4 mb-1">Thanks & Regards,</p>
                        <p class="mb-0">Mohammad Habibur Rahman</p>
                        <p class="mb-0">HR & Admin | 01958021211</p>
                        <p class="mb-0">JARA GROUPS</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Notice Modals -->
    @include('admin.pages.notice.notice_modals')
@endsection

@push('scripts')
    <!-- Include jQuery UI for drag-and-drop functionality -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            // Make cards draggable
            $(".draggable-card").draggable();

            // Handle delete button click
            $(".delete-btns").click(function(e) {
                e.preventDefault();
                var cardId = $(this).data('card-id');
                $("#card-" + cardId).remove();
            });

            // Handle reset button click
            $("#resetButton").click(function() {
                // Reset the positions of all draggable cards
                $(".draggable-card").css({
                    top: 0,
                    left: 0
                });
            });
        });
    </script>
@endpush
