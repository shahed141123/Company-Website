@extends('admin.master')
@section('content')

<!-- Content area -->

<div class="container-fluid mt-2 mb-1">
    <div class="row">
      <div class="col-lg-4">
        <div class="d-flex justify-content-between text-white p-1 mb-2" style="background-color: #134F5C;">
          <span>FY - {{ date('Y') }}</span>
          <span>Target Vs. Achievement</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table text-center" style="height: auto;">
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content">Quarter</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content">Target</div>
                      </th>
                      {{-- <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content">Quoted</div>
                      </th> --}}
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content">Achieved</div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content">Percentage</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="gridjs-tbody">
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Q1</td>
                      <td data-column-id="email" class="gridjs-td">{{$salesTeamTarget->quarter_one_target}} </td>
                      {{-- <td data-column-id="phoneNumber" class="gridjs-td"></td> --}}
                      <td data-column-id="country" class="gridjs-td">2,450,315</td>
                      <td data-column-id="name" class="gridjs-td border-top border-bottom">Q1</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Q2</td>
                      <td data-column-id="email" class="gridjs-td">{{$salesTeamTarget->quarter_two_target}} </td>
                      {{-- <td data-column-id="phoneNumber" class="gridjs-td">3,186,058</td> --}}
                      <td data-column-id="country" class="gridjs-td">2,450,315</td>
                      <td data-column-id="name" class="gridjs-td border-top border-bottom">Q1</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Q3</td>
                      <td data-column-id="email" class="gridjs-td">{{$salesTeamTarget->quarter_three_target}} </td>
                      {{-- <td data-column-id="phoneNumber" class="gridjs-td">3,186,058</td> --}}
                      <td data-column-id="country" class="gridjs-td">2,450,315</td>
                      <td data-column-id="name" class="gridjs-td border-top border-bottom">Q1</td>
                    </tr>
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Q4</td>
                      <td data-column-id="email" class="gridjs-td">{{$salesTeamTarget->quarter_four_target}} </td>
                      {{-- <td data-column-id="phoneNumber" class="gridjs-td">3,186,058</td> --}}
                      <td data-column-id="country" class="gridjs-td">2,450,315</td>
                      <td data-column-id="name" class="gridjs-td border-top border-bottom">Q1</td>
                    </tr>

                  </tbody>
                  <tfoot>
                    <tr class="bg-dark text-white">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content text-white">Total</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content text-white">{{$salesTeamTarget->year_target}} </div>
                      </th>
                      <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content text-white">27,000,000 </div>
                      </th>
                      <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white">27,000,000 </div>
                      </th>
                      {{-- <th data-column-id="country" class="gridjs-th">
                        <div class="gridjs-th-content text-white">27%</div>
                      </th> --}}
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="text-center text-white p-1 mb-2" style="background-color: #134F5C;">
          <span>MD</span>
          <span>(Individual)</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table" style="height: auto;">
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr text-white" style="background-color: #134F5C;" >
                      <th data-column-id="name" class="text-center">
                        <div class="gridjs-th-content text-white">STATUS</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="gridjs-tbody text-center">
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Q1</td>

                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="text-center text-white p-1 mb-2" style="background-color: #134F5C;">
          <span>Performance Vs. Incentive</span>
        </div>
        <div class="card">
          <div class="gridjs-example-json border-top">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
              <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table table" style="height: auto;">
                  <thead class="gridjs-thead">
                    <tr class="gridjs-tr">
                      <th data-column-id="name" class="gridjs-th">
                        <div class="gridjs-th-content">Incentive</div>
                      </th>
                      <th data-column-id="email" class="gridjs-th">
                        <div class="gridjs-th-content">Performance </div>
                      </th>
                      <th data-column-id="phoneNumber" class="gridjs-th">
                        <div class="gridjs-th-content">Value</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="gridjs-tbody">
                    <tr class="gridjs-tr">
                      <td data-column-id="name" class="gridjs-td">Q1</td>
                      <td data-column-id="email" class="gridjs-td">#DIV/0</td>
                      <td data-column-id="phoneNumber" class="gridjs-td">Tk 5,9</td>

                    </tr>

                  </tbody>
                </table>
              </div>
              <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-12 border-0">
      <div class="card card-body shadow-none">
        <ul class="nav nav-tabs mb-3" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill1" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">
              January
            </a>
          </li>

          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill2" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              February
            </a>
          </li>

          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill3" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              March
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill4" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              April
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill5" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              May
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill6" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              June
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill7" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              July
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill8" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              August
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill9" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              September
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill10" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              October
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill11" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              November
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#js-dropdown-pill12" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
              December
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <!-- Tab Content Start -->
          <!-- Tab Content End -->
          <div class="tab-pane fade show active" id="js-dropdown-pill1" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-1 mb-2" style="background-color: #134F5C;">
                    <span>FY {{ date('Y') }}-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Jan</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Deal Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-1 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--2-->
          <div class="tab-pane fade show" id="js-dropdown-pill2" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Feb</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--3-->
          <div class="tab-pane fade show " id="js-dropdown-pill3" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Mar</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--4-->
          <div class="tab-pane fade show " id="js-dropdown-pill4" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Apr</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--5-->
          <div class="tab-pane fade show " id="js-dropdown-pill5" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">May</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--6-->
          <div class="tab-pane fade show " id="js-dropdown-pill6" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">June</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--7-->
          <div class="tab-pane fade show " id="js-dropdown-pill7" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">July</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--8-->
          <div class="tab-pane fade show " id="js-dropdown-pill8" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Aug</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--9-->
          <div class="tab-pane fade show " id="js-dropdown-pill9" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Sep</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--10-->
          <div class="tab-pane fade show " id="js-dropdown-pill10" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Oct</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--11-->
          <div class="tab-pane fade show " id="js-dropdown-pill11" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Nov</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
          <!--12-->
          <div class="tab-pane fade show " id="js-dropdown-pill12" role="tabpanel">
            <div class="container-fluid mt-1 mb-5">
              <div class="row">
                <div class="col-lg-9">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>FY22-Q1</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr text-center">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content" rowspan="3">Month</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Quote ID</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Reseller/Client</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Product</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Original Quoted</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Shared Quote</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Assigned Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Closed Ratio</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Profit Margin</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Status</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Effort</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Perform Look</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr text-center">
                                <td data-column-id="name" class="gridjs-td">Jan</td>
                                <td data-column-id="email" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">Optimum / GP</td>
                                <td data-column-id="email" class="gridjs-td">Adobe  Vloume Order</td>
                                <td data-column-id="email" class="gridjs-td">Renew</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">T1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Lead-L1</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">3907071</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">10%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">-</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">100%</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                                <td data-column-id="name" class="gridjs-td border-top border-bottom">Outstanding</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Data Type</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th" colspan="2">
                                  <div class="gridjs-th-content">Team</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">-</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content">3907071</div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
                                </th>
                                <th data-column-id="country" class="gridjs-th">
                                  <div class="gridjs-th-content"></div>
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
                <div class="col-lg-3">
                  <div class="text-center text-white p-3 mb-2" style="background-color: #134F5C;">
                    <span>Performance Vs. Incentive</span>
                  </div>
                  <div class="card">
                    <div class="gridjs-example-json border-top">
                      <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                          <table role="grid" class="gridjs-table table" style="height: auto;">
                            <thead class="gridjs-thead">
                              <tr class="gridjs-tr">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">Rating</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">% </div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Value</div>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="gridjs-tbody">
                              <tr class="gridjs-tr">
                                <td data-column-id="name" class="gridjs-td">-</td>
                                <td data-column-id="email" class="gridjs-td">0</td>
                                <td data-column-id="phoneNumber" class="gridjs-td">0.00</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr class="">
                                <th data-column-id="name" class="gridjs-th">
                                  <div class="gridjs-th-content">#DN/1</div>
                                </th>
                                <th data-column-id="email" class="gridjs-th">
                                  <div class="gridjs-th-content">Total</div>
                                </th>
                                <th data-column-id="phoneNumber" class="gridjs-th">
                                  <div class="gridjs-th-content">Tk 0.0</div>
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
        </div>
      </div>
    </div>
  </div>
  <!-- /content area -->

@endsection
