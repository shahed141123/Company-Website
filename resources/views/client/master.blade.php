<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	@include('client.partials.head')
</head>

<body>

	<!-- Main navbar -->
    @include('client.partials.header')
	<!-- /main navbar -->


        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            @include('client.partials.sidebar')
            <!-- /main sidebar -->
            <div class="content-wrapper">
                <div class="content-inner">
                    <!-- Main content -->
                    @yield('content')
                    <!-- /main content -->
                    <!-- Footer -->
                    @include('client.partials.footer')
                    <!-- /footer -->
                </div>
            </div>
        </div>
        <!-- /page content -->

	<!-- /notifications -->
    @php
        $notifications = auth()->user()->unreadNotifications;
        $old_notifications = auth()->user()->readNotifications;
    @endphp

    <!-- Notifications -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
            <div class="offcanvas-header py-0">
                <h5 class="offcanvas-title py-3">Activity</h5>
                <button type="button" class="btn btn-light btn-sm btn-icon p-0 border-transparent rounded-pill"
                    data-bs-dismiss="offcanvas">
                    <i class="ph-x"></i>
                </button>
            </div>

            <div class="offcanvas-body p-0">
                <div class="bg-light fw-medium py-2 px-3">New notifications</div>


                <div class="p-3">
                    @if (auth()->user()->role)
                    @forelse($notifications as $notification)
                    <div class="d-flex align-items-start mb-3">
                        <a href="#" class="status-indicator-container me-3">
                            <i class="icon-envelope w-40px h-40px rounded-pill"></i>
                            <span class="status-indicator bg-success"></span>
                        </a>
                        <div class="flex-fill">
                            {{-- <a href="{{ route('rfq.edit'),$notification->data['link'] }}" class="fw-semibold">{{ $notification->data['name'] }}</a> {{ $notification->data['message'] }} --}}
                            <a href="javascript:void(0);" data-id="{{ $notification->id }}" class="mark-read">
                                @if ($notification->link)
                                    <a href="{{ $notification->data['link'] }}" class="fw-semibold">
                                        {{ $notification->data['name'] }}</a> {{ $notification->data['message'] }}
                                    </a>
                                @else
                                    <a href="" class="fw-semibold">
                                        {{ $notification->data['name'] }}</a> {{ $notification->data['message'] }}
                                    </a>
                                @endif


                            <div class="fs-sm text-muted mt-1">{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</div>
                        </div>
                        <a href="#" class="float-right mark-as-read px-3" data-id="{{ $notification->id }}">
                            Mark as read
                        </a>
                    </div>
                                @if ($loop->last)
                                <a href="#" id="mark-all">
                                    Mark all as read
                                </a>
                            @endif
                        @empty
                            There are no new notifications
                        @endforelse
                    @endif

                </div>

                <div class="bg-light fw-medium py-2 px-3">Older notifications</div>

                <div class="p-3">
                    @if (auth()->user()->role)
                    @forelse($old_notifications as $old_notification)
                    <div class="d-flex align-items-start mb-3">
                        <a href="#" class="status-indicator-container me-3">
                            <i class="ph-envelope-open w-40px h-40px rounded-pill"></i>
                            {{-- <img src="{{ asset('/') }}backend/assets/images/demo/users/face1.jpg"
                                class="w-40px h-40px rounded-pill" alt=""> --}}
                            <span class="status-indicator bg-success"></span>
                        </a>
                        <div class="flex-fill">
                            {{-- @if ($old_notification->data['link'])
                            <a href="{{ $old_notification->data['link'] }}" class="fw-semibold">{{ $old_notification->data['name'] }}</a> {{ $old_notification->data['message'] }}
                            @else --}}
                            <a href="" class="fw-semibold">{{ $old_notification->data['name'] }}</a> {{ $old_notification->data['message'] }}
                            {{-- @endif --}}


                            <div class="fs-sm text-muted mt-1">{{ Carbon\Carbon::parse($old_notification->created_at)->diffForHumans() }}</div>
                        </div>

                    </div>

                        @empty
                            There are no Old notifications
                        @endforelse
                    @endif

                </div>

            </div>
        </div>
    <!-- /notifications -->


	<!-- Demo config -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
		<div class="position-absolute top-50 end-100 visible">

		</div>

		<div class="offcanvas-header border-bottom py-0">
			<h5 class="offcanvas-title py-3">Change Style</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon p-0 border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body">
			<div class="fw-semibold mb-2">Color mode</div>
			<div class="list-group mb-3">
				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-sun ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Light theme</span>
								<div class="fs-sm text-muted">Set light theme or reset to default</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light" checked>
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-moon ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Dark theme</span>
								<div class="fs-sm text-muted">Switch to dark theme</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="dark">
					</div>
				</label>

				<label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
					<div class="d-flex flex-fill my-1">
						<div class="form-check-label d-flex me-2">
							<i class="ph-translate ph-lg me-3"></i>
							<div>
								<span class="fw-bold">Auto theme</span>
								<div class="fs-sm text-muted">Set theme based on system mode</div>
							</div>
						</div>
						<input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="auto">
					</div>
				</label>
			</div>
		</div>
	</div>
	<!-- /demo config -->
    @include('client.partials.script')
</body>
</html>
