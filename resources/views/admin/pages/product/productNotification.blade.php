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
                        <span class="breadcrumb-item active">Product Management</span>
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
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0 float-start">All Product List</h2>
                    <a href="{{ route('add.product') }}" type="button"
                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add New
                    </a>
                </div>
                <table class="table table-bordered table-hover datatable-highlight">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image </th>
                            <th>Product Name </th>
                            <th>Create Date </th>
                            <th>Notification Days </th>
                            <th>Price </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $resulValues = [];
                            $presentDate = date('Y-m-d');
                            $createDateNotificationDays = App\Models\Admin\Product::all('id', 'name', 'thumbnail', 'price', 'create_date', 'notification_days')->whereNotNull('notification_days');
                            foreach ($createDateNotificationDays as $createDateNotificationDay) {
                                $value = date('Y-m-d', strtotime($createDateNotificationDay->create_date . ' + ' . $createDateNotificationDay->notification_days . ' days'));
                                if ($value <= $presentDate) {
                                    $product = App\Models\Admin\Product::where('id', $createDateNotificationDay->id)->first();
                                } else {
                                    $product = '';
                                }
                                $resulValues[] = $product;
                            }

                        @endphp
                        @foreach ($resulValues as $key => $resulValue)
                            @if (!empty($resulValue))
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td> <img src="{{ asset($resulValue->thumbnail) }}" style="width: 70px; height:40px;">
                                    </td>
                                    <td>{{ $resulValue->name }}</td>
                                    <td>{{ $resulValue->create_date }}</td>
                                    <td>{{ $resulValue->notification_days }}</td>
                                    <td>{{ $resulValue->price }}</td>
                                    <td>
                                        <a href="{{ route('edit.product', $resulValue->id) }}" class="text-primary">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        <a href="{{ route('product.destroy', [$resulValue->id]) }}"
                                            class="text-danger delete mx-2">
                                            <i class="delete icon-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection
