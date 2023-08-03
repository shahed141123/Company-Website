@extends('admin.master')
@section('content')

<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light shadow">


        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Product Management</span>
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
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-6 text-center">
                        <h2 class="mb-0">Product Approval</h2>
                    </div>

                    <div class="col-lg-3">
                        <a href="{{route('product-sourcing.create')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                            <span class="btn-labeled-icon bg-black bg-opacity-20">
                                <i class="icon-plus2"></i>
                            </span>
                            Source New Product
                        </a>
                    </div>
                </div>


            </div>


                    <div class="card-body">

                        <table class="table table-bordered table-hover datatable-highlight approveDT">
                            <thead>
                                <tr class="text-center">
                                    <th width="10%">Sl</th>
                                    <th width="10%">Image </th>
                                    <th width="40%">Product Name </th>
                                    <th width="10%">Selected Price</th>
                                    <th width="15%">Sourcing Status</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($products)

                                @foreach ($products as $key => $item)
                                    @php
                                        $sas = App\Models\Admin\Sas::where('product_id', $item->id)->first();
                                    @endphp
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td> <img src="{{ asset($item->thumbnail) }}" style="width: 70px; height:40px;">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{$sas->sales_price}}</td>
                                        <td>@if ($item->action_status == 'seek_approval')
                                            <span class="badge rounded-pill bg-success">{{ $item->action_status }}</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">Not Completed</span>
                                        @endif</td>

                                        <td class="text-center">

                                             <a href="{{ route('product-sourcing.edit',$item->id) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>
                                            
                                            {{-- <a href="{{ route('sas.edit', [$sas->ref_code]) }}" class="text-info mx-2" title="Sas Edit">
                                                <i class="icon-pencil"></i>
                                            </a> --}}
                                            <a href="javascript:void(0);" class="text-success" data-bs-toggle="modal" title="Approve As Product"
                                                            data-bs-target="#approve_product_{{ $item->id }}">
                                                            <i class="mi-check-circle"></i>
                                                        </a>
                                                        <!---Category Update modal--->
                                                        <div id="approve_product_{{ $item->id }}" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        @php
                                                                            $product = App\Models\Admin\Product::where('product_status' , 'sourcing')->where('id', $item->id)->first();
                                                                            $product_sas = App\Models\Admin\Sas::where('product_id', $item->id)->first()
                                                                        @endphp
                                                                        <h5 class="modal-title">Product Approval</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                    </div>

                                                                    <div class="modal-body border br-7">

                                                                        <form method="post" action="{{ route('product-approve.store', $product->slug) }}"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="row mb-3">
                                                                                <div class="card">
                                                                                    <div class="row">
                                                                                        <table class="table table-bordered table-striped p-1">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th colspan="4" class="text-center">
                                                                                                        <img src="{{ asset($product->thumbnail) }}" style="width: 120px; height:70px;">
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th colspan="4" style="background: #7e7d7c">
                                                                                                        <p class="text-center pt-1 text-white">Product Name : {{ $product->name }}</p>
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th>Product Code: {{ $product->product_code }}</th>
                                                                                                    <th>
                                                                                                        Sale Price : $ {{$product_sas->sales_price}}
                                                                                                        <input type="hidden" name="price" value="{{$product_sas->sales_price}}">
                                                                                                    </th>
                                                                                                    <th>competetor one price : $ {{ $product->competetor_one_price }}</th>
                                                                                                    <th>competetor two price : $ {{ $product->competetor_two_price }}</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </div>

                                                                                </div>
                                                                            </div>




                                                                            <div class="row">
                                                                                <div class="col-sm-12 text-secondary text-center">
                                                                                    <button type="submit" class="btn btn-primary me-3">Approve &nbsp;
                                                                                        <i class="me-2 ph-paper-plane-tilt"></i>
                                                                                    </button>
                                                                                    <a href="{{ route('sas.edit', [$sas->ref_code]) }}" class="btn btn-success me-3">
                                                                                        <i class="icon-pencil"> &nbsp;Sas Edit</i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                        </form>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>

                    </div>


        </div>
    </div>
    <!-- /content area -->
</div>


@endsection
@once
@push('scripts')
<script type="text/javascript">
    $('.approveDT').DataTable({
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        "iDisplayLength": 10,
        "lengthMenu": [10, 25, 30, 50],
        columnDefs: [{
            orderable: false,
            targets: [1, 2,3,5],
        }, ],
    });

</script>
@endpush
@endonce

