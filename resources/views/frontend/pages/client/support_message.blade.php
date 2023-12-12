@extends('frontend.master')
@section('content')
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        .upper_title {
            font-family: system-ui;
        }

        .rdmore {
            cursor: pointer;
        }

        .more {
            font-family: system-ui;
            display: none;
        }

        .note-placeholder {
            font-weight: 400;
        }

        .message {
            margin-bottom: 10px;
            padding: 15px 25px;
            border-radius: 5px;
        }

        .sender {
            background-color: #dfecf1cb;
            /* color: #fff; */
            align-self: flex-end;
            border-radius: 0px;
        }

        .receiver {
            background-color: #e0e0e069;
            border-radius: 0px;
            align-self: flex-start;
        }

        .message-label {
            font-weight: bold;
        }


        .reply {
            color: #ae0a46;
            text-decoration: underline;
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
        }


        .border-bottom {
            border: 0px;
            border-bottom: 1px solid #a3a2a24f !important;
        }
    </style>
    <!--=========Content Wrapper=============-->
    <section class="content_wrapper">
        <div class="page-wrapper chiller-theme toggled">
            @include('frontend.pages.client.partials.sidebar')
            <main class="page-content">
                <div class="content_wrapper">
                    <div class="container pt-2 dashboard-container">
                        <div class="section_wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="my-3">
                                        <div class="profile_title pb-3">
                                            <h3>Good Day, <strong
                                                    class="main_color">{{ Auth::guard('client')->user()->name }}</strong>
                                            </h3>
                                        </div>
                                        <div class="menu-items d-flex justify-content-between"
                                            style="border-bottom: 1px solid #c0c0c0">
                                            <ul class="d-flex profile-menu mb-0">
                                                <li class="">
                                                    <a href="{{ route('client.project.overview') }}"
                                                        class="pt-1">Overview</a>
                                                </li>
                                                <li class="mx-3 pb-2">
                                                    <a href="{{ route('client.project') }}" class="pt-1">Projects</a>
                                                </li>
                                                <li class="mx-3 pb-2">
                                                    <a href="{{ route('client.support') }}">Support</a>
                                                </li>
                                                <li class="mx-3 pb-2">
                                                    <a href="{{ route('client.case') }}">Support Cases</a>
                                                </li>
                                                <li class="mx-3 pb-2">
                                                    <a class="pt-1 menu-active" href="javascript:void(0);">Case Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 client_card border">
                                        <div class="card-header rounded-0 border-0 p-2 card_main_support">
                                            <div class="px-3 p-2 d-flex justify-content-between">
                                                <p class="m-0 text-center text-white px-3 py-1 upper_title">
                                                    Case Details - {{ $case->code }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-lg-12 p-0">
                                                <div class="table-responsive px-3">
                                                    <table class="table border-0 mb-0">
                                                        <tbody class="border-0">
                                                            <tr class="border-0">
                                                                <th width="18%" class="border-0 p-2">
                                                                    <p class="p-0 m-0">
                                                                        <span class="fw-bold main_color">Date</span>
                                                                        :
                                                                        &nbsp;&nbsp;
                                                                        {{ date('y-m-d', strtotime($case->create_time)) }}
                                                                    </p>
                                                                </th>
                                                                <th width="18%" class="border-0 p-2">
                                                                    <p class="p-0 m-0">
                                                                        <span class="fw-bold main_color">Category</span> :
                                                                        &nbsp;&nbsp;
                                                                        {{ ucfirst($case->msg_category) }}
                                                                    </p>
                                                                </th>
                                                                <th width="29%" class="border-0 p-2">
                                                                    <p class="p-0 m-0">
                                                                        <span class="fw-bold main_color">Problem Type</span>
                                                                        :
                                                                        &nbsp;&nbsp;
                                                                        {{ ucfirst($case->msg_type) }}
                                                                    </p>
                                                                </th>
                                                                <th width="35%" class="border-0 p-2">
                                                                    <p class="p-0 m-0">
                                                                        <span class="fw-bold main_color">Attachments</span>
                                                                        :
                                                                        &nbsp;&nbsp;
                                                                        @if (count($attachments) > 0)
                                                                            @foreach ($attachments as $attachment)
                                                                                <a href="{{ asset('storage/files/' . $attachment->attachment) }}"
                                                                                    target="blank" title="Open File"
                                                                                    class="me-3 text-primary">
                                                                                    <i
                                                                                        class="fa-solid fa-file-arrow-down"></i>
                                                                                </a>
                                                                            @endforeach
                                                                        @else
                                                                            No File
                                                                        @endif
                                                                    </p>
                                                                </th>
                                                            </tr>
                                                            <tr class="border-0">
                                                                <th colspan="4" class="border-0 p-2 py-4">
                                                                    <p class="p-0 m-0">
                                                                        <span class="fw-bold main_color">Subject</span>
                                                                        :
                                                                        &nbsp;&nbsp;
                                                                        {{ ucfirst($case->subject) }}
                                                                    </p>
                                                                </th>
                                                            </tr>
                                                            <tr class="border-0">
                                                                <th colspan="4" class="border-0 p-2">
                                                                    <p class="p-0 m-0 contid">
                                                                        <span class="fw-bold main_color">Message</span>
                                                                        : &nbsp;&nbsp;
                                                                        <span
                                                                            class="message-short">{{ Str::limit(ucfirst($case->message), 60) }}</span>
                                                                        <span class="message-full"
                                                                            style="display: none;">{{ ucfirst($case->message) }}</span>
                                                                        {{-- <span class="limit"> ..... </span> --}}
                                                                        <span class="main_color rdmore">Read More</span>
                                                                    </p>
                                                                </th>
                                                            </tr>

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card rounded-0 client_card border">
                                        <div class="card-header rounded-0 border-0 p-2 card_main_support">
                                            <div class="px-3 p-2 d-flex justify-content-between">
                                                <p class="m-0 text-center text-white px-3 py-1 upper_title">
                                                    Case Messages
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-lg-12 p-0">
                                                @if (count($messages) > 0)
                                                    @foreach ($messages as $message)
                                                        <div class="row p-3 pt-0">
                                                            @if ($message->sender_type == 'client')
                                                                <div
                                                                    class="col-1 d-flex align-items-center justify-content-end">
                                                                    <a href="javascript:void(0);"
                                                                        data-id="{{ $message->id }}"
                                                                        title="Remove This Message"
                                                                        class="remove_div fw-bolder text-danger mx-2">X
                                                                    </a>
                                                                    {{-- <a href="javascript:void(0);" data-id="{{ $message->id }}" onclick="location.reload()"
                                                                   class="text-success fw-bolder mx-2" title="Undo the message">
                                                                    <i class="fa-solid fa-rotate-left"></i>
                                                                </a> --}}
                                                                </div>
                                                            @endif
                                                            <div
                                                                class="col-11 message {{ $message->sender_type === 'client' ? 'sender' : 'receiver' }}">
                                                                <div
                                                                    class="message-label d-flex align-items-center justify-content-between border-bottom pb-2">
                                                                    <p class="mb-1">{{ $message->name }}</p>
                                                                    <p class="fw-normal mb-1">
                                                                        {{ $message->created_at }}
                                                                        <span
                                                                            class="ms-2">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="mt-1">
                                                                    <p class="mb-0"><b>Sub : </b> {{ $message->subject }}
                                                                    </p>
                                                                </div>
                                                                <div class="my-3 fw-normal">{!! $message->message !!}</div>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between border-top pt-2">
                                                                    @if (count($message->attachments) > 0)
                                                                        <p class="mx-1"> Attachments :
                                                                            @foreach ($message->attachments as $message_attachment)
                                                                                <a href="{{ asset('storage/files/caseMessage/' . $message_attachment->attachment) }}"
                                                                                    target="blank" title="Open File"
                                                                                    style="font-size: 20px;"
                                                                                    class="me-3 text-primary">
                                                                                    <i
                                                                                        class="fa-solid fa-file-arrow-down"></i>
                                                                                </a>
                                                                            @endforeach
                                                                        </p>
                                                                    @endif
                                                                    <p class="reply mx-2">Reply</p>
                                                                </div>
                                                            </div>
                                                            @if ($message->sender_type != 'client')
                                                                <div
                                                                    class="col-1 d-flex align-items-center justify-content-start">
                                                                    <a href="javascript:void(0);"
                                                                        data-id="{{ $message->id }}"
                                                                        title="Remove This Message"
                                                                        class="remove_div fw-bolder text-danger mx-2">X
                                                                    </a>
                                                                    {{-- <a href="javascript:void(0);" data-id="{{ $message->id }}" onclick="location.reload()"
                                                                   class="text-success fw-bolder mx-2" title="Undo the message">
                                                                    <i class="fa-solid fa-rotate-left"></i>
                                                                </a> --}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="row p-3 pt-0">
                                                        <h6 class="main_color text-center"> No Message Available for this
                                                            case.</h6>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-12 sticky-bottom chat_box"
                                    @if (count($messages) > 0) style="display: none;" @endif>
                                    <div class="card rounded-0 client_card border my-1">

                                        <div class="card-body py-0">
                                            <div class="col-lg-12 p-0">
                                                <div class="row align-items-center">
                                                    <form method="POST" action="{{ route('client.message.store') }}"
                                                        enctype="multipart/form-data" id="message-form">
                                                        @csrf
                                                        <div class="row px-3 py-3">

                                                            <input type="hidden" name="name"
                                                                value="{{ Auth::user()->name }}">
                                                            <input type="hidden" name="case_id"
                                                                value="{{ $case->id }}">
                                                            <input type="hidden" name="case_code"
                                                                value="{{ $case->code }}">
                                                            <input type="hidden" name="sender_id"
                                                                value="{{ Auth::user()->id }}">
                                                            <input type="hidden" name="sender_type" value="client">


                                                            <div class="col-lg-12 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="form-label mt-3 me-3">CC
                                                                    </label>
                                                                    <div class="d-flex align-items-center ms-2"
                                                                        style="border-bottom: 1px solid #999898 !important; margin-top: 16px;">

                                                                        <div class="">
                                                                            @foreach ($teams as $team)
                                                                                <div
                                                                                    class="form-check form-check-inline mx-2 my-2">
                                                                                    <input class="form-check-input"
                                                                                        name="mail_cc[]" type="checkbox"
                                                                                        style="left: 30px; top:5px;"
                                                                                        id="inlineCheckbox{{ $team->id }}"
                                                                                        value="{{ $team->email }}">
                                                                                    <label class="form-check-label"
                                                                                        style="font-size: 12px; font-weight:400;"
                                                                                        for="inlineCheckbox{{ $team->id }}">{{ $team->name }}</label>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="">
                                                                        <label class="form-label mt-3 me-1">Sub<span
                                                                                class="text-danger">*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="w-100">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm border-0"
                                                                            style="border-bottom: 1px solid #999898 !important;"
                                                                            placeholder="Case Subject"
                                                                            value="Re:{{ $case->subject }}"
                                                                            id="validationCustom03" name="subject"
                                                                            required>
                                                                        <div class="valid-feedback">
                                                                            Looks good!
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            Please provide a Subject.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-3">
                                                                <textarea id="common" class="form-control form-control-sm w-100 border-bottom" name="message"
                                                                    placeholder="Enter Your Message" rows="1"></textarea>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <input type="file"
                                                                        class="form-control form-control-sm me-3 w-50"
                                                                        id="multipleFile" multiple="multiple"
                                                                        name="attachment[]">
                                                                    <div id="file-size-error" class="text-danger"
                                                                        style="display: none;">File size should
                                                                        not
                                                                        exceed 22 MB.
                                                                    </div>
                                                                    <div>
                                                                        <button class="btn btn-primary p-1 px-2 rounded-0"
                                                                            type="submit">Send</button>
                                                                    </div>
                                                                </div>
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
            </main>
            {{-- @include('frontend.pages.client.partials.case_modal') --}}
            <!-- Modal -->
        </div>
        <!-- page-wrapper" -->
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(".rdmore").click(function() {
                var messageShort = $(this).siblings('.message-short');
                var messageFull = $(this).siblings('.message-full');

                messageShort.toggle();
                messageFull.toggle();

                if ($(this).text() === 'Read More') {
                    $(this).text('Read Less');
                } else {
                    $(this).text('Read More');
                }
            });
            // Get references to the file input and error message
            var fileInput = $('#multipleFile')[0];
            var fileSizeError = $('#file-size-error');

            // Add an event listener to the file input to clear the error message when the file selection changes
            fileInput.addEventListener('change', function() {
                fileSizeError.hide();
            });

            $('#message-form').submit(function(e) {
                // Check if any files are selected
                if (fileInput.files.length > 0) {
                    var file = fileInput.files[0];
                    // Check the file size
                    if (file.size > 22 * 1024 * 1024) {
                        fileSizeError.show();
                        e.preventDefault();
                    }
                }
            });

            $('.reply').click(function() {
                $(".chat_box").toggle();
            });
            $('.remove_div').on('click', function() {
                $(this).closest('.row').remove();
            });
        });
    </script>
@endsection
