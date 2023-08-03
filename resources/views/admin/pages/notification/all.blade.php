@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Notification Management</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
            <div class="row mx-3">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex align-items-center py-2">
                                {{-- Add Details Start --}}
                                <div class="text-success nav-link cat-tab3"
                                    style="position: relative;z-index: 999;margin-bottom: -47px;">
                                    {{-- <a href="{{ route('notification.create') }}">
                                        <div class="d-flex align-items-center">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Add Solution Details">
                                                <i class="ph-plus icons_design"></i> </span>
                                            <span class="ms-1 " style="color: #247297;">Add</span>
                                        </div>
                                    </a> --}}
                                    {{-- <a href="{{ route('notifiy.multi-delete') }}" id="delete-selected-records">
                                        <div class="d-flex align-items-center">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Add Solution Details">
                                                <i class="fa-solid fa-trash text-danger icons_design" style="font-size: 14px;"></i>
                                            </span>
                                            <span class="ms-1 " style="color: #247297;">Add</span>
                                        </div>
                                    </a> --}}
                                    <div class="text-center" style="margin-left: 30rem">
                                        <h5 class="ms-1" style="color: #247297;">All Notifications</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <table class="table newsLetterDt table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th width="5%">
                                            <input id="select-all-checkbox" type="checkbox" class="form-check-input">
                                        </th>
                                        <th width="25%">Name</th>
                                        <th width="50%">Message</th>
                                        <th width="15%">Created Time</th>
                                        <th width="5%" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($notifications)
                                        @foreach ($notifications as $key => $notification)
                                            @php
                                                $notificationObject = json_decode($notification->data, true);
                                                // $notificationObject = cache()->remember("notification.{$notification->id}", now()->addHour(), function () use ($notification) {
                                                //     return json_decode($notification->data, true);
                                                // });
                                                //dd($notificationObject['link']);
                                            @endphp
                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="id[]" class="form-check-input"
                                                        value="{{ $notification->id }}" />
                                                </td>
                                                <td>{{ $notificationObject['name'] }}</td>
                                                <td>
                                                    @if (isset($notificationObject['message1']))
                                                        @if (!empty($notification->read_at))
                                                            <span>
                                                                {{ $notificationObject['name'] }}
                                                                {{ $notificationObject['message1'] }}
                                                                <a href="{{ $notificationObject['link'] }}"
                                                                    data-id="{{ $notification->id }}"
                                                                    class="fw-semibold mark-as-read">
                                                                    {{ $notificationObject['message2'] }}
                                                            </span>
                                                        @else
                                                            <span class="text-danger">
                                                                {{ $notificationObject['name'] }}
                                                                {{ $notificationObject['message1'] }}
                                                                <a href="{{ $notificationObject['link'] }}"
                                                                    data-id="{{ $notification->id }}"
                                                                    class="fw-semibold mark-as-read">
                                                                    {{ $notificationObject['message2'] }}
                                                            </span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('notification.destroy', [$notification->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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
    <!-- /content area -->
    <!-- /inner content -->
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $('.newsLetterDt').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0, 4],
            }, ],
        });
    </script>
    <script type="text/javascript">
        const selectAllCheckbox = $('#select-all-checkbox');
        const tableBody = $('#notificationTable tbody');

        // Instead of selecting all the checkboxes again and again, we can cache them and reuse the selection.
        const allCheckboxes = $('input[type="checkbox"]');

        // Simplify click event handler since we already have cached all checkboxes.
        selectAllCheckbox.on('click', function() {
            allCheckboxes.prop('checked', this.checked);
        });

        // Change to document instead of table body to simplify the code & reduce operations.
        $(document).on('change', 'input[type="checkbox"]', function() {
            if (this.checked) {
                // Check if all checkboxes are checked or not, update selectAllCheckbox accordingly.
                if (allCheckboxes.not(':checked').length === 0) {
                    selectAllCheckbox.prop('checked', true);
                } else {
                    selectAllCheckbox.prop('checked', false);
                }
            } else {
                // If any checkbox is unchecked, uncheck selectAllCheckbox.
                selectAllCheckbox.prop('checked', false);
            }

            // check if any checkbox is unchecked after checking selectAllCheckbox and set indeterminate state accordingly.
            if (!this.checked && selectAllCheckbox.prop('checked') && ('indeterminate' in selectAllCheckbox[0])) {
                selectAllCheckbox.prop('indeterminate', true);
            }
        });

        $('#delete-selected-records').on('click', function() {
            const id = [];
            $('input[name="id[]"]:checked').each(function() {
                id.push($(this).val());
            });
            if (id.length > 0) {
                const url = "{{ route('notifiy.multi-delete') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': id
                    },
                    success: function(data) {
                        swalInit.fire({
                            title: "Deleted!",
                            text: "This data has been deleted!",
                            confirmButtonColor: "#66BB6A",
                            icon: "success",
                            type: "success",
                            preConfirm: function() {
                                location.reload();
                            },
                        });
                    },
                    error: function() {
                        swalInit.fire({
                            title: "Error",
                            icon: 'error',
                            text: "Please refresh your form & try again",
                            icon: "error",
                            allowEscapeKey: false,
                            allowEnterKey: false,
                        });
                    },
                });
            } else {
                swalInit.fire({
                    icon: 'warning',
                    title: "Oops...",
                    text: "Please select at least one record to delete.",
                    confirmButtonColor: "#66BB6A",
                    timer: 150000
                })
            }
        });
    </script>
@endpush
