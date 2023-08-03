@php

    $resulNotify = [];
    $presentDate = date('Y-m-d');
    $createDateNotificationDays = App\Models\Admin\Product::all('create_date', 'notification_days')->whereNotNull('notification_days');
    foreach ($createDateNotificationDays as $createDateNotificationDay) {
        $value = date('Y-m-d', strtotime($createDateNotificationDay->create_date . ' + ' . $createDateNotificationDay->notification_days . ' days'));
        if ($value <= $presentDate) {
            $notification = 1;
        } else {
            $notification = 0;
        }
        $resulNotify[] = $notification;
    }
@endphp


{{-- @if (in_array(1, $resulNotify))
    <div class="alert alert-danger alert-icon-start alert-dismissible text-truncate rounded-pill fade show mt-3 mx-3">

        <span class="alert-icon bg-danger text-white rounded-pill">
            <i class="ph-bell-ringing"></i>
        </span>
        <span class="fw-semibold">Warning!</span> Some Products from our Database have exceeded the update period. <a href="{{ route('toastr.index') }}"
            class="alert-link fw-bolder fs-lg text-info">Click Here</a> to check and update the Products.
        <button type="button" class="btn-close rounded-pill" data-bs-dismiss="alert"></button>
    </div>
@endif --}}
