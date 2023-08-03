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
                    <h2 class="mb-0 text-center">All Products List</h2>
                    <a href="{{route('add.product')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Add New
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover productDt">
                            <thead>
                                <tr>
                                    <th width="7%">Sl</th>
                                    <th width="10%">Image </th>
                                    <th width="45%">Product Name </th>
                                    <th width="8%">Price </th>
                                    <th width="10%">Stock </th>
                                    <th width="10%">Discount </th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td> <img src="{{ asset($item->thumbnail) }}" style="width: 70px; height:40px;">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ ucfirst($item->stock) }}</td>

                                        <td>
                                            @if ($item->discount == null)
                                                <span class="badge rounded-pill bg-info">No Discount</span>
                                            @else
                                                @php
                                                    $amount = $item->price - $item->discount;
                                                    $discount = ($amount / $item->price) * 100;
                                                @endphp
                                                <span class="badge rounded-pill bg-danger"> {{ round($discount) }}%</span>
                                            @endif
                                        </td>

                                        <td>

                                            <a href="{{ route('edit.product',$item->id) }}" class="text-primary">
                                                <i class="icon-pencil"></i>
                                            </a>
                                            <a href="{{ route('product.destroy', [$item->id]) }}"
                                                class="text-danger delete mx-2">
                                                <i class="delete icon-trash"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
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
        $('.productDt').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 26, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [0,1,2,5,6],
            }, ],
        });
    </script>
@endpush
