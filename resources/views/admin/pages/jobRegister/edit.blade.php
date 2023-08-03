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
                        <span class="breadcrumb-item active">Contact Management :</span>
                    </div>

                    <a href="#breadcrumb elements"
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
            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">
                                    <h5 class="mb-0 text-center">Job Registred User</h5>
                                    <a href="{{ route('job.regiserUser') }}" class="btn btn-info btn-sm float-end">Back to
                                        List</a>
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive border rounded">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Attribute</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="fw-semibold">name :</span></td>
                                                    <td>{{ $JobRegistration->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">email :</span></td>
                                                    <td>{{ $JobRegistration->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">address :</span></td>
                                                    <td>{{ $JobRegistration->address }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">phone number :</span></td>
                                                    <td>{{ $JobRegistration->phone_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">district :</span></td>
                                                    <td>{{ $JobRegistration->district }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">country :</span></td>
                                                    <td>{{ $JobRegistration->country }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">training one institution :</span></td>
                                                    <td>{{ $JobRegistration->training_one_institution }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">training one topic :</span></td>
                                                    <td>{{ $JobRegistration->training_one_topic }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">training two institution :</span></td>
                                                    <td>{{ $JobRegistration->training_two_institution }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">training two topic :</span></td>
                                                    <td>{{ $JobRegistration->training_two_topic }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">training three institution :</span></td>
                                                    <td>{{ $JobRegistration->training_three_institution }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">training three topic :</span></td>
                                                    <td>{{ $JobRegistration->training_three_topic }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional company name one :</span>
                                                    </td>
                                                    <td>{{ $JobRegistration->professional_company_name_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional depertment one :</span></td>
                                                    <td>{{ $JobRegistration->professional_depertment_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional start date one :</span></td>
                                                    <td>{{ $JobRegistration->professional_start_date_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional end date one :</span></td>
                                                    <td>{{ $JobRegistration->professional_end_date_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional company name two :</span>
                                                    </td>
                                                    <td>{{ $JobRegistration->professional_company_name_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional depertment two :</span></td>
                                                    <td>{{ $JobRegistration->professional_depertment_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional start date two :</span></td>
                                                    <td>{{ $JobRegistration->professional_start_date_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">professional end date two :</span></td>
                                                    <td>{{ $JobRegistration->professional_end_date_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic institution one :</span></td>
                                                    <td>{{ $JobRegistration->academic_institution_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic degree one :</span></td>
                                                    <td>{{ $JobRegistration->academic_degree_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic passing one :</span></td>
                                                    <td>{{ $JobRegistration->academic_passing_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic result one :</span></td>
                                                    <td>{{ $JobRegistration->academic_result_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic institution two :</span></td>
                                                    <td>{{ $JobRegistration->academic_institution_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic degree two :</span></td>
                                                    <td>{{ $JobRegistration->academic_degree_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic passing two :</span></td>
                                                    <td>{{ $JobRegistration->academic_passing_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">academic result two :</span></td>
                                                    <td>{{ $JobRegistration->academic_result_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">skill one :</span></td>
                                                    <td>{{ $JobRegistration->skill_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">skill two :</span></td>
                                                    <td>{{ $JobRegistration->skill_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">skill three :</span></td>
                                                    <td>{{ $JobRegistration->skill_three }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">skill four :</span></td>
                                                    <td>{{ $JobRegistration->skill_four }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">skill five :</span></td>
                                                    <td>{{ $JobRegistration->skill_five }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">skill six :</span></td>
                                                    <td>{{ $JobRegistration->skill_six }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">activity one :</span></td>
                                                    <td>{{ $JobRegistration->activity_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">activity two :</span></td>
                                                    <td>{{ $JobRegistration->activity_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">activity three :</span></td>
                                                    <td>{{ $JobRegistration->activity_three }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">activity four :</span></td>
                                                    <td>{{ $JobRegistration->activity_four }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">activity five :</span></td>
                                                    <td>{{ $JobRegistration->activity_five }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">activity six :</span></td>
                                                    <td>{{ $JobRegistration->activity_six }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference name one :</span></td>
                                                    <td>{{ $JobRegistration->reference_name_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference organisation one :</span></td>
                                                    <td>{{ $JobRegistration->reference_organisation_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference email one :</span></td>
                                                    <td>{{ $JobRegistration->reference_email_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference phone one :</span></td>
                                                    <td>{{ $JobRegistration->reference_phone_one }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference name two :</span></td>
                                                    <td>{{ $JobRegistration->reference_name_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference organisation two :</span></td>
                                                    <td>{{ $JobRegistration->reference_organisation_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference email two :</span></td>
                                                    <td>{{ $JobRegistration->reference_email_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">reference phone two :</span></td>
                                                    <td>{{ $JobRegistration->reference_phone_two }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">linkedin :</span></td>
                                                    <td>{{ $JobRegistration->linkedin }}</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="fw-semibold">resume :</span></td>
                                                    <td><a target="_blank" class="btn btn-primary btn-sm rounded-pill"
                                                            href="{{ asset('storage/files/' . $JobRegistration->resume) }}">click
                                                            here to view</a>
                                                    </td>
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
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
