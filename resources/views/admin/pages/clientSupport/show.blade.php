@extends('admin.master')
@section('content')
    <style>
        .main-width {
            width: 115px !important;
        }


        .devider_title {
            /* margin-top: -15px; */
            margin-top: -30px;
            width: 16%;
            margin-left: 10px;
        }


        @media only screen and (max-width: 600px) {
            .devider_title {
                width: 100%;
                margin-top: 0px;
                margin-left: 0px;
            }


            .area-container {
                padding: 0px;
            }


            .main_table_start {
                flex-direction: column;
            }


            .table th,
            table td a {
                font-size: 10px !important;
            }


            .content {
                padding: 0px;
            }
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
                        <a href="{{ route('client-support.index') }}" class="breadcrumb-item">Available Supports</a>
                        <span class="breadcrumb-item active">{{ $support->support_title }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid ">
                {{-- Support Details --}}
                <div class="card rounded-0 bg-transparent shadow-none">
                    <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                        <div class="row shadow-lg bg-white border">
                            <div class="area-container mb-1 ">
                                <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title">Support
                                    Details</p>
                            </div>
                            <div class="row my-1 gx-1 p-3" style="margin-top: -25px !important; ">
                                <div class="col-lg-12">
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom shadow-sm p-2 main_table_start">
                                        <div class="d-flex ">
                                            <p class="p-0 m-0 fw-bold main_color">Support Id</p>
                                            <p class="p-0 m-0">:</p>
                                            <p class="p-0 m-0 ms-2">
                                                {{ $support->support_id }}</p>
                                        </div>
                                        <div class="d-flex ">
                                            <p class="p-0 m-0 fw-bold main_color">Support Title</p>
                                            <p class="p-0 m-0">:</p>
                                            <p class="p-0 m-0 ms-2">
                                                {{ $support->support_title }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-1">
                                    <div class="row gx-1 pb-2">
                                        <div class="col-lg-4">
                                            <div class="rounded-0 p-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0 mb-0">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1 px-2">
                                                                    Support Type</th>
                                                                <th width="10%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="50%" class="border-0 p-1 px-2">
                                                                    @if ($support->support_type == 'amc_support')
                                                                        <span class="text-info badge-text rounded-1">
                                                                            AMC Support
                                                                        </span>
                                                                    @elseif($support->support_type == 'implementation_support')
                                                                        <span
                                                                            class="fw-bold badge-text text-info rounded-1">
                                                                            Implementation Support
                                                                        </span>
                                                                    @else
                                                                        <span
                                                                            class="fw-bold badge-text text-info rounded-1">
                                                                            Others Support
                                                                        </span>
                                                                    @endif
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1 px-2">
                                                                    Support Tier</th>
                                                                <th width="10%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="50%" class="border-0 p-1 px-2">
                                                                    <span class="fw-bold badge-text text-black rounded-1">
                                                                        {{ ucfirst($support->support_tier) }}
                                                                    </span>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1 px-2">
                                                                    Status
                                                                </th>
                                                                <th width="10%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="50%" class="border-0 p-1 px-2">
                                                                    @if ($support->status == 'pending')
                                                                        <p
                                                                            class="fw-bolder support_title_triger mb-0 badge-text p-0 text-warning">
                                                                            Pending</p>
                                                                    @elseif($support->status == 'on_going')
                                                                        <p
                                                                            class="fw-bolder support_title_triger mb-0 badge-text p-0 text-success">
                                                                            On Going</p>
                                                                    @else
                                                                        <p
                                                                            class="fw-bolder support_title_triger mb-0 badge-text p-0 text-danger">
                                                                            Closed</p>
                                                                    @endif
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1 px-2">
                                                                    Support Duration</th>
                                                                <th width="10%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="50%" class="border-0 p-1 px-2">
                                                                    {{ $support->support_duration }}
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="rounded-0 p-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0 mb-0">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width=25" class="main_color border-0 p-1 px-2">
                                                                    Scope Of Work</th>
                                                                <th width="5%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="70%" class="border-0 p-1 px-2">
                                                                    {!! $support->scope_work !!}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="25%" class="main_color border-0 p-1 px-2">
                                                                    Support Tier Description</th>
                                                                <th width="5%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="70%" class="border-0 p-1 px-2">
                                                                    {!! $support->support_tier_description !!}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="25%" class="main_color border-0 p-1 px-2">
                                                                    Status Description</th>
                                                                <th width="5%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="70%" class="border-0 p-1 px-2">
                                                                    {!! $support->status_description !!}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="25%" class="main_color border-0 p-1 px-2">
                                                                    Attachments</th>
                                                                <th width="5%" class="border-0 p-1 px-2">
                                                                    :
                                                                </th>
                                                                <th width="70%" class="border-0 p-1 px-2">
                                                                    @if (!empty($support->attachment))
                                                                        <a href="{{ asset('storage/files/' . $support->attachment) }}"
                                                                            target="blank"
                                                                            class="border-bottom-link text-primary">
                                                                            <i class="fa-solid fa-file-arrow-down"></i>
                                                                        </a>
                                                                    @else
                                                                        No File
                                                                    @endif
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
                        </div>
                    </div>
                </div>


                {{-- Support Details --}}


                {{-- Support Cases --}}
                <div class="card rounded-0 bg-transparent shadow-none">
                    <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                        <div class="row shadow-lg bg-white border">
                            <div class="area-container mb-1 ">
                                <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title">Available Cases</p>
                            </div>
                            <div class="row my-1 gx-1 p-3" style="margin-top: -25px !important; ">
                                <div class="table-responsive px-3 my-3">
                                    <table class="table text-center caseDT">
                                        <thead style="background-color:#24729759 !important">
                                            <tr>
                                                <th width="20%" class="p-2" scope="col">Case
                                                    ID</th>
                                                <th width="60%" class="p-2" scope="col">
                                                    Case Subject</th>
                                                <th width="20%" class="p-2" scope="col">
                                                    Created At
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($support->cases)
                                                @foreach ($support->cases as $item)
                                                    <tr class="clickable-row"
                                                        onclick="window.location='{{ route('client.case.details', $item->code) }}'">
                                                        <td>
                                                            <span class="border-bottom-link">{{ $item->code }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="border-bottom-link">{{ $item->subject }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="border-bottom-link">
                                                                {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                            </span>
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
                {{-- Support Cases --}}
                <div class="card rounded-0 bg-transparent shadow-none">
                    <div class="card-body m-lg-3 mt-lg-0 m-sm-0 bg-transparent">
                        <div class="row shadow-lg bg-white border">
                            <div class="area-container mb-1">
                                <p class="fw-bold area-title bg-secondary p-1 text-white text-center devider_title" style="width: ">
                                    Associated Project Details</p>
                            </div>
                            <div class="row my-1 gx-1 p-3" style="margin-top: -25px !important; ">
                                <div class="col-lg-12">
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom shadow-sm p-2 main_table_start">
                                        <div class="d-flex ">
                                            <p class="p-0 m-0 fw-bold main_color">Project Id</p>
                                            <p class="p-0 m-0">:</p>
                                            <p class="p-0 m-0 ms-2">
                                                {{ $support->project->project_code }}</p>
                                        </div>
                                        <div class="d-flex ">
                                            <p class="p-0 m-0 fw-bold main_color">Project Title</p>
                                            <p class="p-0 m-0">:</p>
                                            <p class="p-0 m-0 ms-2">
                                                {{ $support->project->project_title }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-1">
                                    <div class="row gx-1 pb-2">
                                        <div class="col-lg-4">
                                            <div class="rounded-0 p-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0 mb-0">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Client Name</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->client_name }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Client Code</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->client_code }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Duration
                                                                </th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->project_duration }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Contact Agreement</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    @if (!empty($support->project->contact_agreement))
                                                                        <a href="{{ asset('storage/files/' . $support->project->contact_agreement) }}"
                                                                            class="main_color mx-2" title="Open File">
                                                                            {{-- <i class="fa fa-xl fa-download me-2"></i> --}}
                                                                            <span
                                                                                class="text-primary border-bottom-link">Download</span>
                                                                        </a>
                                                                    @else
                                                                        <strong class="site_color">No
                                                                            File</strong>
                                                                    @endif
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="rounded-0 p-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0 mb-0">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Partner Name</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->partner_name }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Start Date</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->create_time }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Team Membar</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->team_member }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Order Number</th>
                                                                <th width="2%" class="border-0 p-1">
                                                                    :
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->order_id }}
                                                                </th>
                                                            </tr>
                                                            {{-- <tr>
                                                            <th width="40%"
                                                                class="main_color border-0 p-1"
                                                                title="Partner Primary Contact">Partner
                                                            </th>
                                                            <th width="2%" class="border-0 p-1">:
                                                            </th>
                                                            <th width="58%" class="border-0 p-1">
                                                                01568565</th>
                                                        </tr> --}}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" style="border-left: border-left: 2px solid #d0cece;">
                                            <div class="rounded-0 p-0">
                                                <div class="table-responsive border-0">
                                                    <table class="table border-0 mb-0">
                                                        <tbody class="border-0">
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Industry Name</th>
                                                                <th width="2%" class="border-0 p-1">:
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->industry->title }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    End Date</th>
                                                                <th width="2%" class="border-0 p-1">:
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->closed_time }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Order Date</th>
                                                                <th width="2%" class="border-0 p-1">:
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    {{ $support->project->order_date }}
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th width="40%" class="main_color border-0 p-1">
                                                                    Status
                                                                </th>
                                                                <th width="2%" class="border-0 p-1">:
                                                                </th>
                                                                <th width="58%" class="border-0 p-1">
                                                                    <span class="fw-bold badge-text text-success">
                                                                        {{ ucfirst($support->project->status) }}
                                                                    </span>
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
                        </div>
                    </div>
                </div>
                {{-- Project Details --}}

                {{-- Project Details --}}
            </div>
        </div>

    </div>

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.caseDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 1],
                }, ],
            });
        </script>
    @endpush
@endonce
