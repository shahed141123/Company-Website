@extends('admin.master')
@section('content')
<div class="content-wrapper">
    <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">SAS of Dealss</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            {{-- Add Details Start --}}
            <div class="text-success nav-link cat-tab3"
            style="position: relative;
            z-index: 999;
            margin-bottom: -40px;">
            <a href="{{ route('knowledge.create') }}">
                <div class="d-flex align-items-center">
                    <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Add Solution Details">
                        <i class="ph-plus icons_design"></i> </span>
                    <span class="ms-1" style="color: #247297;">Add</span>
                </div>
            </a>
            <div class="text-center" style="margin-left: 480px">
                <h5 class="ms-1 " style="color: #247297;">SAS of Deals List</h5>
            </div>
        </div>
        {{-- Add Details End --}}
            <table class="table table-bordered table-hover datatable-highlight sourcingDT text-center">
                <thead>
                    <tr>
                        <th width="15%">Sl</th>
                        <th width="15%">RFQ ID </th>
                        <th width="25%">Sales Manager Name </th>
                        <th width="15%">Created At</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($deal_sas)
                    @foreach ($deal_sas as $key => $item)
                        @php
                            $rfq = App\Models\Admin\Rfq::where('id', $item->rfq_id)->first();
                        @endphp
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td>
                                {{ $item->rfq_code }}
                            </td>
                            <td>{{ App\Models\User::where('id', $rfq->sales_man_id_L1)->value('name') }}</td>
                            <td>{{$item->create}}</td>
                            <td>
                                <a href="javascript:void(0);" class="text-info mx-2" title="Show Deal"
                                    data-bs-toggle="modal"
                                    data-bs-target="#update_category_{{ $item->rfq_code }}">
                                    <i class="icon-eye"></i>
                                </a>

                                <a href="{{ route('deal-sas.edit',$item->rfq_code) }}" class="text-info mx-2">
                                    <i class="icon-pencil"></i>
                                </a>
                                <a href="{{ route('dealsasapprove',$item->rfq_code) }}" class="text-warning">
                                    <i class="mi-check-circle"></i>
                                </a>

                               
                                <!---Category Update modal--->
                                <div id="update_category_{{ $item->rfq_code }}" class="modal fade"
                                    tabindex="-1" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                @php
                                                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $item->rfq_code)->first();
                                                @endphp
                                                <h5 class="modal-title">Deal Details : {{ $rfq_details->rfq_code }}</h5>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body border br-7">
                                                    <div class="row mb-3">
                                                        <div class="card">
                                                            <div class="row">
                                                                <table class="table table-bordered table-striped p-1">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                Client Type : {{ ucfirst($rfq_details->client_type) }}
                                                                            </th>
                                                                            <th>
                                                                                Name : {{ ucfirst($rfq_details->name) }}
                                                                            </th>
                                                                            <th>
                                                                                Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th colspan="3" style="background: #7e7d7c">
                                                                                <p class="text-center pt-1 text-white">Product Name : {{App\Models\Admin\Product::where('id' , $rfq_details->product_id)->value('name')}}</p>
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Asking Quantity : {{ $rfq_details->qty }}</th>
                                                                            <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                                            <th>
                                                                                @if (($rfq_details->call) == 1)
                                                                                    Need To be Called.
                                                                                @else

                                                                                @endif
                                                                            </th>

                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Assigned Sales Manager (L1) : {{ App\Models\User::where('id',$rfq_details->sales_man_id_L1)->value('name') }} <br>
                                                                                @if ($rfq_details->sales_man_id_T1)
                                                                                   Assigned Sales Manager (T1) : {{ App\Models\User::where('id',$rfq_details->sales_man_id_T1)->value('name') }} <br>
                                                                                @endif
                                                                                @if ($rfq_details->sales_man_id_T2)
                                                                                    Assigned Sales Manager (T2) : {{ App\Models\User::where('id',$rfq_details->sales_man_id_T2)->value('name') }}
                                                                                @endif

                                                                            </th>
                                                                            <th>
                                                                                Status : <span class="rounded-pill bg-success p-2">{{ucfirst(($rfq_details->status))}}</span>


                                                                            </th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!---Category Update modal--->
                            </td>
                        </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>
        <!-- /content area -->





    <!-- /inner content -->

</div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.sasDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 5],
                }, ],
            });
        </script>
    @endpush
@endonce
