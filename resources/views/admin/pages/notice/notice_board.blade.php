@extends('admin.master')
@section('content')
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
                        <h5 class="text-center pt-2">All Official Notices</h5>
                    </div>
                </div>
                {{-- First Row --}}
                <div class="row">
                    <!-- Loop through notices -->
                    @foreach ($notices as $notice)
                        @php
                            $randomClass = 'notes-' . rand(1, 4);
                        @endphp
                        <div id="card-{{ $notice->id }}" class="col-lg-4 col-sm-12 draggable-card">
                            <!-- Notice Card -->
                            <div class="card sticky1 notes {{ $randomClass }} rounded-0 text-white notice-card">
                                <!-- Card Header -->
                                <div
                                    class="card-header sticky-top card-headers-border py-2 my-0 d-flex justify-content-between align-content-center">
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
                                        <a href="javascript:void(0);" class="btn btn-light rounded-circle delete-btns"
                                            data-card-id="{{ $notice->id }}">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-header border-0 py-0 my-0">
                                    <h4 class="mb-0 text-black">{{ $notice->title }}</h4>
                                    <p class="p-0 m-0 post-date py-2">
                                        <span class="fw-bold text-muted">Post On</span><span
                                            class="ms-2 text-black">{{ $notice->publish_date }}</span>
                                    </p>
                                </div>
                                <div class="card-body pt-0 mt-0 text-black"> 
                                    <p class="ps-0 text-black">{!! $notice->content !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
