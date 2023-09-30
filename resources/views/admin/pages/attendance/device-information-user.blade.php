@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <a href="{{ route('machine.home') }}" class="btn btn-success" style="float:right">
                            Back to home
                        </a>

                        <div class="flex items-center">
                            <br /><br />
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#"
                                    class="underline text-gray-900 dark:text-white">Device information</a></div>
                        </div>
                        <hr />
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <table class="table deviceInformation table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>UID</td>
                                            <td>{{ $uid }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>User ID</td>
                                            <td>{{ $userid }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Name</td>
                                            <td>{{ $name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Role</td>
                                            <td>{{ $role }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Password</td>
                                            <td>{{ $password }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Card No</td>
                                            <td>{{ $cardno }}</td>
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
@endsection


@once
    @push('scripts')
        <script type="text/javascript">
            $('.deviceInformation').DataTable({
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
