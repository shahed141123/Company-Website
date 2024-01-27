<table class="rfqDT1 table table-bordered table-hover">
    <thead>
        <tr class="text-center">
            <th width="10%">RFQ Code</th>
            <th width="12%">Created At</th>
            <th width="18%">Client Name</th>
            <th width="20%">Client Email</th>
            <th width="5%">Details</th>
            <th width="8%">Status</th>
            <th width="15%" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @if ($rfqs)
            @foreach ($rfqs as $key => $rfq)
                <tr class="text-center">
                    <td>{{ ucfirst($rfq->rfq_code) }}</td>
                    <td>{{ ucfirst($rfq->create_date) }}</td>
                    <td>{{ ucfirst($rfq->name) }}</td>
                    <td style="text-transform: lowercase;">{{ ucfirst($rfq->email) }}</td>
                    <td><span class="badge bg-success p-1">{{ ucfirst($rfq->status) }}</span></td>
                    <td>
                        <!-- Show RFQ Details Modal Trigger -->
                        <a href="javascript:void(0);" class="text-info mx-2" title="Show RFQ Details"
                            data-bs-toggle="modal" data-bs-target="#assign-manager-{{ $rfq->rfq_code }}">
                            <i class="fa-regular fa-eye dash-icons"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <!-- Go to Details Link -->
                        <a href="{{ route('single-rfq.show', $rfq->rfq_code) }}" class="text-success"
                            title="Go to Details">
                            <i class="fa-solid fa-display dash-icons me-3"></i>
                        </a>

                        @if ($rfq->status == 'rfq_created')
                            <!-- View & Assign Sales Manager Modal Trigger -->
                            <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                title="View & Assign Sales Manager"
                                data-bs-target="#assign-manager-{{ $rfq->rfq_code }}">
                                <i class="fa-solid fa-user-tie dash-icons me-3"></i>
                            </a>
                        @endif

                        @if ($rfq->status == 'assigned')
                            <!-- Convert To Deal Link -->
                            <a href="{{ route('deal.convert', [$rfq->id]) }}" class="text-success"
                                title="Convert To Deal">
                                <i class="icon-pen-plus dash-icons me-3"></i>
                            </a>
                        @endif

                        <!-- Delete Deal Link -->
                        <a href="{{ route('rfq.destroy', [$rfq->id]) }}" class="text-danger delete"
                            title="Delete Deal">
                            <i class="delete fa-solid fa-trash dash-icons me-3"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{-- Modals --}}
@foreach ($rfqs as $rfq)
    <div id="assign-manager-{{ $rfq->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Assign Sales Manager For RFQ No : {{ $rfq->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">
                    <form method="post" action="{{ route('assign.salesman', $rfq->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-1">
                            <div class="card">
                                <table class="mb-2">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-black" colspan="3">
                                                <h6 class="text-black">Product :
                                                    {{ App\Models\Admin\Product::where('id', $rfq->product_id)->value('name') }}
                                                </h6>
                                            </th>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Asking Quantity : {{ $rfq->qty }}</td>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="table border p-1">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Client Type :
                                                {{ !empty($rfq->client_type) ? ucfirst($rfq->client_type) : 'Anonymous' }}
                                            </td>
                                            <td>
                                                Name : {{ ucfirst($rfq->name) }}
                                            </td>
                                            <td>
                                                Company Name : {{ ucfirst($rfq->company_name) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number : {{ $rfq->phone }}</td>
                                            <td>
                                                @if ($rfq->call == 1)
                                                    <span class="badge bg-success">Call Required</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Assigned Sales Manager (L1) :
                                                {{ App\Models\User::where('id', $rfq->sales_man_id_L1)->value('name') }}
                                                <br>
                                                @if ($rfq->sales_man_id_T1)
                                                    Assigned Sales Manager (T1) :
                                                    {{ App\Models\User::where('id', $rfq->sales_man_id_T1)->value('name') }}
                                                    <br>
                                                @endif
                                                @if ($rfq->sales_man_id_T2)
                                                    Assigned Sales Manager (T2) :
                                                    {{ App\Models\User::where('id', $rfq->sales_man_id_T2)->value('name') }}
                                                @endif
                                            </td>
                                            <td>
                                                Status :
                                                <span class="badge bg-success p-1">{{ ucfirst($rfq->status) }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row p-2">
                                    <div class="col-12 text-center">
                                        <strong>Assign Sales Manager :</strong>
                                        <a class="p-1 editRfquser" href="javascript:void(0);">
                                            <i class="ph-note-pencil text-success" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 Rfquser" style="display:none">
                                        <div class="row mb-1 p-2 border">
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <p class="mb-0">Sales Manager Name (Leader - L1)
                                                        <span class="text-danger">*</span>
                                                    </p>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_L1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose Sales Manager">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <p class="mb-0">Sales Manager Name (Team - T1)</p>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose Sales Manager">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <p class="mb-0">Sales Manager Name (Team - T2)</p>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T2" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose Sales Manager">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer border p-1 Rfquser" style="display:none">
                    <div class="row">
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
