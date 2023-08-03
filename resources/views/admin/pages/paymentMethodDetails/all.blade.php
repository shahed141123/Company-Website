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
                        <span class="breadcrumb-item active">Payment Method Details</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="{{ route('payment-method-details.create') }}">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Payment Method Details</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table paymentMethodsDetails table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="10%">Id</th>
                            <th width="30%">region_id</th>
                            <th width="20%">type</th>
                            <th width="25%">Details</th>
                            <th width="15%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($paymentMethodDetails)
                        @foreach ($paymentMethodDetails as $key => $paymentMethodDetail)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ App\Models\Admin\Region::where('id',$paymentMethodDetail->region_id)->value('region_name') }}</td>
                                <td>{{ $paymentMethodDetail->type }}</td>
                                <td>
                                    {{ $paymentMethodDetail->card_link }}
                                    {{ $paymentMethodDetail->card_note }}
                                    {{ $paymentMethodDetail->bank_name }}
                                    {{ $paymentMethodDetail->bank_address }}
                                    {{ $paymentMethodDetail->account_name }}
                                    {{ $paymentMethodDetail->account_address }}
                                    {{ $paymentMethodDetail->account_type }}
                                    {{ $paymentMethodDetail->branch }}
                                    {{ $paymentMethodDetail->routing }}
                                    {{ $paymentMethodDetail->check_address }}
                                    {{ $paymentMethodDetail->check_note }}
                                </td>
                                    <td>
                                        <a href="{{ route('payment-method-details.edit', [$paymentMethodDetail->id]) }}" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editNewsLetter">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('payment-method-details.destroy', [$paymentMethodDetail->id]) }}"
                                            class="text-danger delete">
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
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.paymentMethodsDetails').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2],
                }, ],
            });
        </script>
    @endpush
@endonce
