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
                        <span class="breadcrumb-item active">Contact Management</span>
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
        <div class="content">
            <div class="card mx-4">
                <div class="card-header p-1 bg-info">
                    <div class="row offset-1">
                        <div class="col-lg-2">
                            <a href="{{route('document.create')}}" type="button"
                                class="btn btn-flat-light btn-labeled btn-labeled-start"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Add Document Pdf">
                                <span class="btn-labeled-icon bg-light bg-opacity-20">
                                    <i class="ph-plus"></i>
                                </span>
                                Add
                            </a>

                        </div>
                        <div class="col-lg-6">
                            <h5 class="ms-1 text-center mb-0 mt-1 text-white">All Documents</h5>
                        </div>
                    </div>

                </div>
                <div class="card-body p-1">
                    <div class="mt-2">
                        <table class="documentDT table table-bordered table-striped table-xl text-center">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th class="p-2" width="8%">#</th>
                                    <th class="p-2 text-start" width="25%">Category</th>
                                    <th class="p-2 text-start" width="45%">Source Name</th>
                                    <th class="p-2 text-start" width="12%">PDF</th>
                                    <th class="p-2" width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pdfs as $pdf)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-start">{{ ucfirst($pdf->category) }}</td>
                                        <td class="text-start">
                                            @if (($pdf->category== 'brand'))
                                            {{ $pdf->getBrandName() }}
                                            @elseif (($pdf->category) == 'product')
                                            {{ $pdf->getProductName() }}
                                            @elseif (($pdf->category) == 'industry')
                                            {{ $pdf->getIndustryName() }}
                                            @elseif (($pdf->category) == 'solution')
                                            {{ $pdf->getSolutionName() }}
                                            @elseif (($pdf->category) == 'company')
                                                Company Documents
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ asset('storage/files/' . $pdf->document) }}">
                                                <i class="ph-download-simple text-success fw-bolder"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-inline-flex text-center">
                                                <a href="{{ route('document.edit',$pdf->id) }}"
                                                    class="text-primary">
                                                    <i class="ph-pen"></i>
                                                </a>
                                                <a href="{{ route('document.destroy',$pdf->id) }}" class="text-danger mx-2 delete">
                                                    <i class="ph-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.documentDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 2, 3, 4],
                    }, ],
                });


            });
        </script>
    @endpush
@endonce
