@extends('admin.master')
@section('content')
    <style>
        .delete-btns {
            width: 30px;
            height: 30px;
            border: 0;
        }

        .delete-btns:hover {}

        .delete {}

        .delete:hover {}

        .notes {
            height: 40vh;
            overflow: auto;
        }

        .notes::-webkit-scrollbar {
            width: 2px;
        }

        .notes::-webkit-scrollbar-track {
            box-shadow: none;
        }

        .notes::-webkit-scrollbar-thumb {
            background-color: white;
            outline: 0px solid slategrey;
        }

        .main-bg-image {
            background: #fff;
            width: 100%;
            height: 100%;
        }

        .notice-card {
            position: relative;
            background-image: url('https://img.freepik.com/premium-vector/abstract-style-halftone-concept-your-graphic-design_29865-2643.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .notice-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
        }

        .notice-card p,
        .notice-card h2, h4 {
            /* Adjust this value to counteract the blur effect on text elements */
            filter: blur(0);
        }

        .notice-card-header {
            /* Your styles for the card header, for example: */
            background-color: blue;
            color: white;
            padding: 10px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light" style="border-bottom: 1px solid #eee;">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex">
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
                    <a href="javascript:void(0);" class="btn navigation_btn" data-bs-toggle="modal"
                        data-bs-target="#noticeAdd">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
                            <span>Add Notice</span>
                        </div>
                    </a>
                    <a href="{{ route('notice.index') }}" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
                            <span>All Notices</span>
                        </div>
                    </a>
                    <a href="javascript:void(0);" id="resetButton" class="btn navigation_btn">
                        <div class="d-flex align-items-center ">
                            <i class="fa-solid fa-redo me-1" style="font-size: 14px;"></i>
                            <span>Rearrange Cards</span>
                        </div>
                    </a>
                </div>
                <!-- Basic tabs -->
            </div>
        </div>
        <div class="container-fluid main-bg-image">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="text-center pt-2">All Official Notice</h5>
                    </div>
                </div>
                {{-- first Row --}}
                <div class="row">
                    @foreach ($notices as $notice)
                        @php
                            $randomClass = 'notes-' . rand(1, 4);
                        @endphp
                        <div id="card-{{ $notice->id }}" class="col-lg-4 col-sm-12 draggable-card">
                            <div class="card sticky1 notes {{ $randomClass }} rounded-0 text-white notice-card">
                                <div
                                    class="card-header sticky-top card-headers-border py-2 my-0 d-flex justify-content-between align-content-center">
                                    <div>
                                        <img class="pin-img"
                                            src="https://www.pngall.com/wp-content/uploads/4/Red-Pin-PNG-Clipart.png"
                                            width="30px" height="30px" alt="">
                                    </div>
                                    <div>
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
                                        <a href="javascript:void(0);" class="btn btn-light rounded-circle delete-btns"
                                            data-card-id="{{ $notice->id }}">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>

                                    </div>
                                </div>
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
    @include('admin.pages.notice.notice_modals')
@endsection

@push('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {

            $(".draggable-card").draggable();

            $(".delete-btns").click(function(e) {
                e.preventDefault();

                var cardId = $(this).data('card-id');
                $("#card-" + cardId).remove();
            });

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
