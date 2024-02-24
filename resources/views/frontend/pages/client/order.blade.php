@extends('frontend.master')
@section('content')
<style>
    .page-wrapper{
        height: 100vh;
    }
</style>
    <!--=========Content Wrapper=============-->
    <section class="content_wrapper">
        <div class="page-wrapper chiller-theme toggled">
            @include('frontend.pages.client.partials.sidebar')
            <main class="page-content">
                <div class="content_wrapper">
                    <div class="container dashboard-container">
                        <div class="section_wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card rounded-0 shadow-sm border-0">
                                        <div class="card-header rounded-0 border-0 p-2 card_main_support">
                                            <div class="px-3 p-2 d-flex justify-content-between">
                                                <h5 class="m-0 text-center text-white px-3 py-1 upper_title">My Orders
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-lg-12 p-0">
                                                <div class="table-responsive px-3">
                                                    <table class="table text-center" id="example">
                                                        <thead style="background-color:#24729759 !important">
                                                            <tr>

                                                                <th width="20%">Order Number</th>
                                                                <th width="20%">Order Date</th>
                                                                <th width="15%">Total Amount</th>
                                                                <th width="15%">Payment Method</th>
                                                                <th width="15%">Status</th>
                                                                <th width="15%" class="text-center">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($orders as $item)
                                                                <td>{{ $item->order_number }}</td>
                                                                <td>{{ $item->order_date }}</td>
                                                                <td>{{ $item->amount }}</td>
                                                                <td>{{ ucfirst($item->payment_method) }}</td>
                                                                <td>{{ ucfirst($item->status) }}</td>
                                                                <td class="text-center">
                                                                    @if ($item->status == 'unpaid')
                                                                        <a href="{{ route('payment.page', $item->order_number) }}"
                                                                            class="text-success" title="Go to Payment Page">
                                                                            <i class="fa fa-dollar-sign fa-1x"></i>
                                                                        </a>
                                                                    @endif
                                                                </td>
                                                            @endforeach
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
            </main>
            <!-- Modal -->
        </div>
        <!-- page-wrapper" -->
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('#exampleProject').DataTable();
            $('#exampleSupport').DataTable();
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
