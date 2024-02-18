@extends('admin.master')
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

        .bootstrap-tagsinput {
            border: none;
            border-bottom: 1px solid #ccc;
        }


        .rdmore {
            cursor: pointer;
        }

        .more {
            font-family: system-ui;
            display: none;
        }

        .upper_title_text {
            border-radius: 0 !important;
            padding: 0 !important;
            margin-left: 7px !important;
            margin-right: 0 !important;
            margin-top: -22px !important;
        }

        .chat-container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .messages {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .sender {
            background-color: #a4daf0cb;
            /* color: #fff; */
            align-self: flex-end;
        }

        .receiver {
            background-color: #e0e0e0;
            align-self: flex-start;
        }

        .message-label {
            font-weight: bold;
        }

        .message-input {
            padding: 10px;
            border-top: 1px solid #ccc;
            display: flex;
            align-items: center;
        }

        .message-input input[type="text"] {
            flex: 1;
            padding: 5px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .reply {
            color: #ae0a46;
            text-decoration: underline;
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
        }

        .devider_title {
            margin-top: -30px;
            width: 20%;
            margin-left: 10px;
            background-color: #222222;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        .page-wrapper .page-content>div {
            padding: 0px;
        }

        .sticky-top {
            z-index: 1021;
        }

        .border-bottom {
            border: 0px;
            border-bottom: 1px solid #a3a2a2;
        }
    </style>

    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('support-case.index') }}" class="breadcrumb-item">Support Cases</a>
                        <span class="breadcrumb-item active">{{ $case->code }}</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card rounded-0 bg-transparent shadow-none">
                        <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                            <div class="row shadow-lg bg-white border">
                                <div class="area-container mb-1 ">
                                    <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title">
                                        Case Details - {{ $case->code }}
                                    </p>
                                </div>
                                <div class="row my-1 gx-1 p-3">
                                    <div class="col-lg-12 p-0">
                                        <div class="table-responsive px-3">
                                            <table class="table border-0 mb-0">
                                                <tbody class="border-0">
                                                    <tr class="border-0">
                                                        <th width="15%" class="border-0 border-bottom">
                                                            <p class="p-0 m-0">
                                                                <span class="fw-bold main_color">Date</span>
                                                                :
                                                                &nbsp;&nbsp;
                                                                {{ date('y-m-d', strtotime($case->create_time)) }}
                                                            </p>
                                                        </th>
                                                        <th width="20%" class="border-0 border-bottom">
                                                            <p class="p-0 m-0">
                                                                <span class="fw-bold main_color">Category</span> :
                                                                &nbsp;&nbsp;
                                                                {{ ucfirst($case->msg_category) }}
                                                            </p>
                                                        </th>
                                                        <th width="25%" class="border-0 border-bottom">
                                                            <p class="p-0 m-0">
                                                                <span class="fw-bold main_color">Problem Type</span>
                                                                :
                                                                &nbsp;&nbsp;
                                                                {{ ucfirst($case->msg_type) }}
                                                            </p>
                                                        </th>
                                                        <th width="40%" class="border-0 border-bottom">
                                                            <p class="p-0 m-0">
                                                                <span class="fw-bold main_color">Attachments</span>
                                                                :
                                                                &nbsp;&nbsp;
                                                                @if (count($attachments) > 0)
                                                                    @foreach ($attachments as $attachment)
                                                                        <a href="{{ asset('storage/files/' . $attachment->attachment) }}"
                                                                            target="blank" title="Open File"
                                                                            class="me-3 text-primary">
                                                                            <i class="fa-solid fa-file-arrow-down"></i>
                                                                        </a>
                                                                    @endforeach
                                                                @else
                                                                    No File
                                                                @endif
                                                            </p>
                                                        </th>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <th colspan="4" class="border-0 border-bottom mb-4">
                                                            <p class="p-0 m-0">
                                                                <span class="fw-bold main_color">Subject</span>
                                                                :
                                                                &nbsp;&nbsp;
                                                                {{ ucfirst($case->subject) }}
                                                            </p>
                                                        </th>
                                                    </tr>
                                                    <tr class="border-0">
                                                        <th colspan="4" class="border-0 pt-4">
                                                            <p class="p-0 m-0 contid">
                                                                <span class="fw-bold main_color">Message</span>
                                                                : &nbsp;&nbsp;
                                                                <span
                                                                    class="message-short">{{ Str::limit(ucfirst($case->message), 60) }}</span>
                                                                <span class="message-full"
                                                                    style="display: none;">{{ ucfirst($case->message) }}</span>
                                                                {{-- <span class="limit"> ..... </span> --}}
                                                                <span class="ms-3 rdmore" style="color: #ae0a46">Read
                                                                    More</span>
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
                    </div>
                    <div class="card rounded-0 bg-transparent shadow-none">
                        <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                            <div class="row shadow-lg bg-white border">
                                <div class="area-container mb-1 ">
                                    <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title">
                                        Case Messages
                                    </p>
                                </div>
                                <div class="row my-1 gx-1 p-3">
                                    <div class="col-lg-12 p-0">
                                        <div class="col-lg-12 p-0">
                                            @if (count($messages) > 0)
                                                @foreach ($messages as $message)
                                                    @php
                                                        $mail_cc = json_decode($message->cc);
                                                    @endphp
                                                    <div class="row p-3 pt-0">
                                                        @if ($message->sender_type == 'admin')
                                                            <div
                                                                class="col-2 d-flex align-items-center justify-content-end">
                                                                <a href="javascript:void(0);" data-id="{{ $message->id }}"
                                                                    title="Remove This Message"
                                                                    class="remove_div fw-bolder fs-1 text-danger mx-2">X</a>
                                                                <a href="javascript:void(0);" data-id="{{ $message->id }}"
                                                                    onclick="location.reload()"
                                                                    class="text-success fw-bolder fs-1 mx-2"
                                                                    title="Undo the message">
                                                                    <i class="fa-solid fa-rotate-left"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-10 message sender text-end">
                                                                <div class="message-label">
                                                                    {{ $message->name }} &nbsp;&nbsp;&nbsp; @if (!empty($mail_cc))
                                                                        [CC :
                                                                        {{ implode(', ', $mail_cc) }}]
                                                                    @endif

                                                                </div>
                                                                <p>{!! nl2br($message->message) !!}</p>
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <p>{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}
                                                                    </p>
                                                                    @if (count($message->attachments) > 0)
                                                                        <p> Attachment : </p>
                                                                        @foreach ($message->attachments as $message_attachment)
                                                                            <p>
                                                                                <a href="{{ asset('storage/files/caseMessage/' . $message_attachment->attachment) }}"
                                                                                    target="blank" title="Open File"
                                                                                    class="me-3 text-primary">
                                                                                    <i
                                                                                        class="fa-solid fa-file-arrow-down"></i>
                                                                                </a>
                                                                            </p>
                                                                        @endforeach
                                                                    @endif
                                                                    <p class="reply">Reply</p>
                                                                </div>

                                                            </div>
                                                        @else
                                                            <div class="col-10 message receiver">
                                                                <div class="message-label">
                                                                    {{ $message->name }} &nbsp;&nbsp;&nbsp; @if (!empty($mail_cc))
                                                                        [CC :
                                                                        {{ implode(', ', $mail_cc) }}]
                                                                    @endif
                                                                </div>
                                                                <p>{!! nl2br($message->message) !!}</p>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-start">
                                                                    <p>{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}
                                                                    </p>
                                                                    @if (count($message->attachments) > 0)
                                                                        <p> Attachment : </p>
                                                                        @foreach ($message->attachments as $message_attachment)
                                                                            <p>
                                                                                <a href="{{ asset('storage/files/caseMessage/' . $message_attachment->attachment) }}"
                                                                                    target="blank" title="Open File"
                                                                                    class="me-3 text-primary">
                                                                                    <i
                                                                                        class="fa-solid fa-file-arrow-down"></i>
                                                                                </a>
                                                                            </p>
                                                                        @endforeach
                                                                    @endif
                                                                    <p class="reply">Reply</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-2 d-flex align-items-center justify-content-start">
                                                                <a href="javascript:void(0);"
                                                                    data-id="{{ $message->id }}"
                                                                    title="Remove This Message"
                                                                    class="remove_div fw-bolder fs-1 text-danger mx-2">X</a>
                                                                <a href="javascript:void(0);"
                                                                    data-id="{{ $message->id }}"
                                                                    onclick="location.reload()"
                                                                    class="text-success fw-bolder fs-1 mx-2"
                                                                    title="Undo the message">
                                                                    <i class="fa-solid fa-rotate-left"></i>
                                                                </a>
                                                            </div>
                                                        @endif

                                                    </div>

                                                    <div class="col-lg-12 sticky-bottom chat_box" style="display: none;">
                                                        <div class="card rounded-0 client_card border my-1">

                                                            <div class="card-body py-0">
                                                                <div class="col-lg-12 p-0">
                                                                    <div class="row align-items-center">
                                                                        <form method="POST"
                                                                            action="{{ route('admin.message.store') }}"
                                                                            enctype="multipart/form-data"
                                                                            id="message-form">
                                                                            @csrf
                                                                            <div class="row px-3">

                                                                                <input type="hidden" name="name"
                                                                                    value="{{ Auth::user()->name }}">
                                                                                <input type="hidden" name="case_id"
                                                                                    value="{{ $case->id }}">
                                                                                <input type="hidden" name="case_code"
                                                                                    value="{{ $case->code }}">
                                                                                <input type="hidden" name="sender_id"
                                                                                    value="{{ Auth::user()->id }}">
                                                                                <input type="hidden" name="sender_type"
                                                                                    value="admin">

                                                                                <div class="row mb-2">

                                                                                    <div class="col-lg-1 my-2">
                                                                                        <label for="validationCustom02"
                                                                                            class="form-label mt-3">
                                                                                            Sub <span
                                                                                                class="text-danger">*</span>
                                                                                            :
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-5 my-2 pt-2">
                                                                                        <input type="text"
                                                                                            class="form-control form-control-sm border-0"
                                                                                            style="border-bottom: 1px solid #999898 !important;"
                                                                                            placeholder="Case Subject"
                                                                                            id="validationCustom03"
                                                                                            name="subject"
                                                                                            value="Re:{{ $case->subject }} "
                                                                                            required>
                                                                                        <div class="valid-feedback">
                                                                                            Looks good!
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            Please provide a Subject.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-2">

                                                                                    <div class="col-lg-2 my-2">
                                                                                        <label for="validationCustom02"
                                                                                            class="form-label mt-3">
                                                                                            CC :
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-lg-10 my-2 pt-2">

                                                                                        <input type="text"
                                                                                            name="mail_cc"
                                                                                            class="form-control form-control-sm visually-hidden border-0"
                                                                                            style="border-bottom: 1px solid #999898 !important;"
                                                                                            data-role="tagsinput"
                                                                                            value="{{ is_array($mail_cc) ? implode(', ', $mail_cc) : $mail_cc }}"
                                                                                            placeholder="Mail CC">

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row gx-1">
                                                                                    <div class="col-lg-12 mb-3">
                                                                                        <textarea class="form-control form-control-sm w-100 border-bottom" name="message" placeholder="Enter Your Message"
                                                                                            rows="2">{{ old('message') }}</textarea>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
                                                                                        <div>
                                                                                            <input type="file"
                                                                                                class="form-control mx-4 w-lg-75"
                                                                                                id="multipleFile"
                                                                                                multiple="multiple"
                                                                                                name="attachment[]">
                                                                                            <div id="file-size-error"
                                                                                                class="text-danger"
                                                                                                style="display: none;">File
                                                                                                size should not exceed 22
                                                                                                MB.
                                                                                            </div>
                                                                                        </div>
                                                                                        <div>
                                                                                            <button
                                                                                                class="btn btn-info p-1 px-2"
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
                        </div>
                    </div>
                    @if (count($messages) > 0)
                    @else
                        <div class="col-lg-12 sticky-bottom">
                            <div class="card rounded-0 client_card border my-1">

                                <div class="card-body py-0">
                                    <div class="col-lg-12 p-0">
                                        <div class="row align-items-center">
                                            <form method="POST" action="{{ route('admin.message.store') }}"
                                                enctype="multipart/form-data" id="message-form">
                                                @csrf
                                                <div class="row px-3">

                                                    <input type="hidden" name="name"
                                                        value="{{ Auth::user()->name }}">
                                                    <input type="hidden" name="case_id" value="{{ $case->id }}">
                                                    <input type="hidden" name="case_code" value="{{ $case->code }}">
                                                    <input type="hidden" name="sender_id"
                                                        value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="sender_type" value="admin">

                                                    <div class="col-lg-1 my-2">
                                                        <label for="validationCustom02" class="form-label mt-3">
                                                            Sub <span class="text-danger">*</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-5 my-2 pt-2">
                                                        <input type="text"
                                                            class="form-control form-control-sm border-0"
                                                            style="border-bottom: 1px solid #999898 !important;"
                                                            placeholder="Case Subject" id="validationCustom03"
                                                            name="subject" value="Re:{{ $case->subject }} " required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please provide a Subject.
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 my-2">
                                                        <label for="validationCustom02" class="form-label mt-3">
                                                            CC
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-5 my-2 pt-2">
                                                        <input type="text" name="mail_cc"
                                                            class="form-control form-control-sm visually-hidden border-0"
                                                            style="border-bottom: 1px solid #999898 !important;"
                                                            data-role="tagsinput" placeholder="Mail CC">

                                                    </div>

                                                    <div class="row gx-1">
                                                        <div class="col-lg-12 mb-2">
                                                            <textarea class="form-control form-control-sm w-100 border-bottom" name="message" placeholder="Enter Your Message"
                                                                rows="1">{{ old('message') }}</textarea>
                                                        </div>

                                                        <div
                                                            class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
                                                            <div>
                                                                <input type="file" class="form-control mx-4 w-lg-75"
                                                                    id="multipleFile" multiple="multiple"
                                                                    name="attachment[]">
                                                                <div id="file-size-error" class="text-danger"
                                                                    style="display: none;">File size should not exceed 22
                                                                    MB.
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-info p-1 px-2"
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
                    @endif
                </div>
            </div>
        </div>
        <!-- /page header -->

    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.supportDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 2, 5],
                }, ],
            });
        </script>
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
            });
        </script>
        <script>
            $(document).ready(function() {
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
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.reply').click(function() {
                    // Find the closest chat box related to the clicked "Reply" button
                    var chatBox = $(this).closest('.row').next('.chat_box');

                    // Toggle the visibility of the found chat box
                    chatBox.toggle();
                });

                $('.remove_div').on('click', function() {
                    $(this).closest('.row').remove();
                });
            });
        </script>
    @endpush
@endonce
