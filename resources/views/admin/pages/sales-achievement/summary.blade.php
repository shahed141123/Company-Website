@extends('admin.master')
@section('content')
    <style>
        thead {
            background-color: #ffffff !important;
            color: #000 !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('sales-achievement.index') }}" class="breadcrumb-item">Sales Achievement Summary</a>
                        <a href="" class="breadcrumb-item">Summary</a>
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
        <div class="container-fluid mt-1 mb-1">
            <div>
                <h4 class="text-center mb-3 mt-3" style="color: #117A8B;"><strong>Sales Achievement Summary</strong></h4>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-between text-white py-2 px-2 mb-1"
                        style="background-color: #117A8B;">
                        <span>FY - {{ date('Y') }}</span>
                        <span>Team Sales & Peformance Dashboard</span>
                    </div>
                    <div class="card">
                        <div class="gridjs-example-json border-top">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table table" style="height: auto;">
                                        <thead class="gridjs-thead text-white text-center">
                                            <tr class="gridjs-tr bg-light">
                                                <th data-column-id="name" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">Total</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">Q1</div>
                                                </th>
                                                <th data-column-id="phoneNumber" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">Q2</div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">Q3</div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">Q4</div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">Total</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody text-center">
                                            <tr class="gridjs-tr ">
                                                <td data-column-id="name" class="gridjs-td border ">Target</td>
                                                <td data-column-id="email" class="gridjs-td border">
                                                    @if ($sales_year_target)
                                                        {{ $sales_year_target->quarter_one_target }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td data-column-id="phoneNumber" class="gridjs-td border">
                                                    @if ($sales_year_target)
                                                        {{ $sales_year_target->quarter_two_target }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td data-column-id="country" class="gridjs-td border">
                                                    @if ($sales_year_target)
                                                        {{ $sales_year_target->quarter_three_target }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td data-column-id="name" class="gridjs-td border border-top border-bottom">
                                                    @if ($sales_year_target)
                                                        {{ $sales_year_target->quarter_four_target }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td data-column-id="phoneNumber"
                                                    class="gridjs-td border border-top border-bottom">
                                                    @if ($sales_year_target)
                                                        {{ $sales_year_target->year_target }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                            </tr>
                                            {{-- <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td border">Quoted</td>
                      <td data-column-id="email" class="gridjs-td border">{{$q1_quoted_amount}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border">{{$q2_quoted_amount}}</td>
                      <td data-column-id="country" class="gridjs-td border">{{$q3_quoted_amount}}</td>
                      <td data-column-id="name" class="gridjs-td border border-top border-bottom">{{$q4_quoted_amount}}</td>
                      <td data-column-id="phoneNumber" class="gridjs-td border border-top border-bottom">{{$q1_quoted_amount+$q2_quoted_amount+$q3_quoted_amount+$q4_quoted_amount}}</td>
                    </tr> --}}
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td border">Achieved</td>
                                                <td data-column-id="email" class="gridjs-td border">{{ $q1_quoted_amount }}
                                                </td>
                                                <td data-column-id="phoneNumber" class="gridjs-td border">
                                                    {{ $q2_quoted_amount }}</td>
                                                <td data-column-id="country" class="gridjs-td border">
                                                    {{ $q3_quoted_amount }}
                                                </td>
                                                <td data-column-id="name" class="gridjs-td border border-top border-bottom">
                                                    {{ $q4_quoted_amount }}</td>
                                                <td data-column-id="phoneNumber"
                                                    class="gridjs-td border border-top border-bottom">
                                                    {{ $total_quoted_amount }}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class=" text-white" style="background-color: #117A8B;">
                                                <th data-column-id="name" class="gridjs-th pt-0 pb-0">
                                                    <div class="gridjs-th-content text-white">Percentage</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th pt-2 pb-1">
                                                    <div class="gridjs-th-content text-white text-center">

                                                        @if ($sales_year_target)
                                                            {{ ($q1_quoted_amount / $sales_year_target->quarter_one_target) * 100 }}
                                                        @else
                                                            0
                                                        @endif %
                                                    </div>
                                                </th>
                                                <th data-column-id="phoneNumber" class="gridjs-th pt-2 pb-1">
                                                    <div class="gridjs-th-content text-white text-center">
                                                        @if ($sales_year_target)
                                                            {{ ($q2_quoted_amount / $sales_year_target->quarter_two_target) * 100 }}
                                                        @else
                                                            0
                                                        @endif %
                                                    </div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th pt-2 pb-1">
                                                    <div class="gridjs-th-content text-white text-center">
                                                        @if ($sales_year_target)
                                                            {{ ($q3_quoted_amount / $sales_year_target->quarter_three_target) * 100 }}
                                                        @else
                                                            0
                                                        @endif %
                                                    </div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th pt-2 pb-1">
                                                    <div class="gridjs-th-content text-white text-center">
                                                        @if ($sales_year_target)
                                                            {{ ($q4_quoted_amount / $sales_year_target->quarter_four_target) * 100 }}
                                                        @else
                                                            0
                                                        @endif %
                                                    </div>
                                                </th>
                                                <th data-column-id="country" class="gridjs-th pt-2 pb-1">
                                                    <div class="gridjs-th-content text-white text-center">
                                                        @if ($sales_year_target)
                                                            {{ ($total_quoted_amount / $sales_year_target->year_target) * 100 }}
                                                        @else
                                                            0
                                                        @endif %
                                                    </div>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="text-center text-white py-2 px-2 mb-1" style="background-color: #117A8B;">
                        <span>Deficiencies</span>
                    </div>
                    <div class="card">
                        <div class="gridjs-example-json border-top">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table table" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr text-white" style="background-color: #117A8B;">
                                                <th data-column-id="name" class="text-center" colspan="2">
                                                    <div class="gridjs-th-content text-white">STATUS</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody text-center">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td border">Status</td>
                                                @if ($sales_year_target)
                                                    <td data-column-id="name"
                                                        class="gridjs-td border text-black fw-bolder">
                                                        @if (($total_quoted_amount / $sales_year_target->year_target) * 100 > 100)
                                                            Outstanding
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 90)
                                                            Outstanding
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 80)
                                                            Performer
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 70)
                                                            Performer
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 60)
                                                            Good
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 50)
                                                            Fair
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 40)
                                                            Not Good
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 30)
                                                            Bad Performer
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 20)
                                                            Very Bad
                                                        @elseif (($total_quoted_amount / $sales_year_target->year_target) * 100 > 10)
                                                            Worst
                                                        @else
                                                            Worst
                                                        @endif
                                                    </td>
                                                @else
                                                    <td data-column-id="name"
                                                        class="gridjs-td border text-black fw-bolder">
                                                    </td>
                                                @endif
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td border">Differences</td>
                                                <td data-column-id="name" class="gridjs-td border text-black fw-bolder">
                                                    @if ($sales_year_target)
                                                        {{ $sales_year_target->year_target - $total_quoted_amount }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td border">Ratio</td>
                                                <td data-column-id="name" class="gridjs-td border text-black fw-bolder">
                                                    @if ($sales_year_target)
                                                        {{ ($total_quoted_amount / $sales_year_target->year_target) * 100 }}
                                                        %
                                                    @endif
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="text-center text-white py-2 px-2 mb-2" style="background-color: #117A8B;">
                        <span>Performance Vs. Incentive</span>
                    </div>
                    <div class="card">
                        <div class="gridjs-example-json border-top">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table table text-center text-white"
                                        style="height: auto;background-color: #117A8B;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th border-end">
                                                    <div class="gridjs-th-content text-black">TARGET</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th ">
                                                    <div class="gridjs-th-content text-black">
                                                        @if ($sales_year_target)
                                                            {{ $sales_year_target->year_target }}
                                                        @endif
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th border-end">
                                                    <div class="gridjs-th-content text-black">Achievement</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">{{ $total_quoted_amount }}
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th data-column-id="name" class="gridjs-th border-end">
                                                    <div class="gridjs-th-content text-black">Ratio</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th">
                                                    <div class="gridjs-th-content text-black">
                                                        @if ($sales_year_target)
                                                            {{ ($total_quoted_amount / $sales_year_target->year_target) * 100 }}
                                                            %
                                                        @endif
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-1 mb-5">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="text-center py-2 px-2 fw-bold" style="color: #117A8B;">
                        <span>FY{{ date('Y') }} -Q1</span>
                    </div>
                    <div class="card">
                        <div class="gridjs-example-json border-top">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table table" style="height: auto;">
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr text-center text-white"
                                                style="background-color: #117A8B;">
                                                <td data-column-id="name" class="gridjs-td text-white"
                                                    style="background-color: #117A8B;" rowspan="2">FY -
                                                    {{ date('Y') }}</td>
                                                <td data-column-id="email" class="text-white gridjs-td border"
                                                    colspan="3">Q1</td>
                                                <td data-column-id="email" class="text-white gridjs-td border"
                                                    colspan="3">Q2</td>
                                                <td data-column-id="email" class="text-white gridjs-td border"
                                                    colspan="3">Q3</td>
                                                <td data-column-id="name"
                                                    class="text-white gridjs-td border-top border-bottom" colspan="3">
                                                    Q4
                                                </td>

                                            </tr>
                                            <tr class="gridjs-tr text-center text-white"
                                                style="background-color: #117A8B;">
                                                <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Achieved
                                                </td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Achieved
                                                </td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Achieved
                                                </td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Target</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Quoted</td>
                                                <td data-column-id="email" class="text-white gridjs-td border">Achieved
                                                </td>
                                            </tr>

                                            @foreach ($sales_managers as $item)
                                                <tr class="gridjs-tr text-center">
                                                    <td data-column-id="email" class="gridjs-td border">
                                                        {{ $item->name }}
                                                    </td>
                                                    <td data-column-id="email" class="gridjs-td border"></td>
                                                    <td data-column-id="email" class="gridjs-td border">2,000,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">3,000,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">4,000,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">5,000,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">8,000,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">70,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">-</td>
                                                    <td data-column-id="email" class="gridjs-td border">-</td>
                                                    <td data-column-id="email" class="gridjs-td border">6,000,000</td>
                                                    <td data-column-id="email" class="gridjs-td border">-</td>
                                                    <td data-column-id="email" class="gridjs-td border">-</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        {{-- <tfoot>
                    <tr class=" text-white" style="background-color: #117A8B;">
                      <td data-column-id="email" class="gridjs-td "></td>
                      <td data-column-id="email" class="gridjs-td border">7,500</td>
                      <td data-column-id="email" class="gridjs-td border">48,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">38,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">4,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">5,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">8,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">70,000</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                      <td data-column-id="email" class="gridjs-td border">6,000,000</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                      <td data-column-id="email" class="gridjs-td border">-</td>
                    </tr>
                  </tfoot> --}}
                                    </table>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="text-center py-2 px-2 fw-bold" style="color: #117A8B;">
                        <span>Total</span>
                    </div>
                    <div class="card">
                        <div class="gridjs-example-json border-top">
                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                <div class="gridjs-wrapper" style="height: auto;">
                                    <table role="grid" class="gridjs-table table text-center" style="height: auto;">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr text-white" style="background-color: #117A8B;">
                                                <th data-column-id="name" class="gridjs-th">
                                                    <div class="gridjs-th-content text-white">Total</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th">
                                                    <div class="gridjs-th-content text-white">Quoted</div>
                                                </th>
                                                <th data-column-id="phoneNumber" class="gridjs-th">
                                                    <div class="gridjs-th-content text-white">Achieved</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="gridjs-tbody">
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">27,000</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">27,000</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">27,000</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Value</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Value</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">Value</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                            <tr class="gridjs-tr">
                                                <td data-column-id="name" class="gridjs-td">6,6600</td>
                                                <td data-column-id="email" class="gridjs-td">0</td>
                                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="text-white" style="background-color: #117A8B;">
                                            <tr class="">
                                                <th data-column-id="name" class="gridjs-th">
                                                    <div class="gridjs-th-content text-white">#Value</div>
                                                </th>
                                                <th data-column-id="email" class="gridjs-th">
                                                    <div class="gridjs-th-content text-white">48,880</div>
                                                </th>
                                                <th data-column-id="phoneNumber" class="gridjs-th">
                                                    <div class="gridjs-th-content text-white">48,880</div>
                                                </th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div id="gridjs-temp" class="gridjs-temp"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
