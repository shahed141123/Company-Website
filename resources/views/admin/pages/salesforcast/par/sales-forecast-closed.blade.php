


<div class="tab-pane fade active show" id="js-closed-tab1" role="tabpanel">


    <div class="col-lg-12 float-left">
        <button type="button" class="btn btn-warning btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modal_default_Closed"> <i class="ph-plus-circle ph-1x"></i></button>


    </div>



    <!-- Basic modal for Closed -->


    <form action="" class="form-validate-jquery-Closed" method="post">
        <div id="modal_default_Closed" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sales Forecast Closed Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>

                                <td>
                                    <div class="form-group basic-form">
                                        <label for="Quarter"> RFQ CODE </label>
                                        <select name="rfq_id" id="rfq_id" class="form-control select" data-placeholder="Select RFQ" required>
                                            <option></option>
                                            @foreach ($rfqs as $item)
                                                <option value="{{$item['id']}}"> RFQ Code:{{$item['rfq_code']}} <br>
                                                    Client Name:{{$item['name']}} <br>
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="date"> Date <strong class="text-danger">*</strong> </label>
                                        <input type="date" name="date" value="01/01/2023" id="date" class="form-control form-control-sm" required>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="Quarter"> Quarter </label>
                                        <select name="Quarter" id="Quarter" class="form-control form-control-sm" required>
                                            <option></option>
                                            <option value="q1"> Q1</option>
                                            <option value="q2"> Q2 </option>
                                            <option value="q3"> Q3</option>
                                            <option value="q4"> Q4 </option>
                                        </select>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="Quarter"> Month </label>
                                        <select name="Quarter" id="Quarter" class="form-control form-control-sm" required>
                                            <option></option>
                                            <option value="jan"> January</option>
                                            <option value="feb"> February</option>
                                            <option value="march"> March</option>
                                            <option value="april"> April</option>
                                            <option value="may"> May</option>
                                            <option value="june"> June</option>
                                            <option value="july"> July</option>
                                            <option value="aug"> August</option>
                                            <option value="sep"> September</option>
                                            <option value="oct"> October</option>
                                            <option value="nov"> November</option>
                                            <option value="dec"> December</option>
                                        </select>
                                    </div>
                                </td>

                            <tr>

                                <td>
                                    <div class="form-group">

                                        <label for="Salesman"> Salesman <strong class="text-danger">*</strong> </label>
                                        <select name="sales_man_id_L1" id="Salesman" class="form-control form-control-sm" required>
                                            <option value="">--select--</option>
                                            <option value="0">Sale Ah</option>
                                            <option value="1">Sale Fh (L1)</option>
                                            <option value="2">Sale Mh (L2)</option>
                                            <option value="3">Sale Ch (L3)</option>
                                            <option value="4">Sale Bh (L4)</option>

                                        </select>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="pclient"> Partner/Client <strong class="text-danger">*</strong> </label>
                                        <select name="partner_type" id="pclient" class="form-control form-control-sm" required>
                                            <option value="">--select--</option>
                                            <option value="partner">Partner</option>
                                            <option value="client">Client</option>

                                        </select>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="itemDescription"> Item Description <strong class="text-danger">*</strong> </label>
                                        <input type="text" class="form-control form-control-sm" id="itemDescription" name="itemDescription" value="Multiple Software" required>

                                    </div>
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <div class="form-group">
                                        <label for="poTotal"> PO# </label>
                                        <input type="text" placeholder="" class="form-control form-control-sm" id="PO#" name="poTotal" value="">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">

                                        <label for="ordervalue"> Order Value <strong class="text-danger">*</strong> </label>
                                        <input type="text" class="form-control form-control-sm" id="ordervalue" name="ordervalue" required placeholder="00.00">

                                    </div>


                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="client">Client <strong class="text-danger">*</strong> </label>
                                        <input type="text" class="form-control form-control-sm" id="client" name="client" value="BIGM" required>

                                    </div>
                                </td>

                                <td>

                                    <div class="form-group">
                                        <label for="orderStatus"> Order Status </label>
                                        <select name="orderStatus" id="orderStatus" class="form-control form-control-sm">
                                            <option value="">--select--</option>
                                            <option value="0">On Processing</option>
                                            <option value="1"> Pr. Paymnt Processing</option>
                                            <option value="2">Processed</option>
                                            <option value="3">Delivered</option>
                                            <option value="4">Delayed</option>
                                            <option value="5">Complicating</option>

                                        </select>
                                    </div>
                                </td>

                            </tr>

                            <tr>

                                <td>
                                    <div class="form-group">
                                        <label for="clientPayment"> Client Payment <strong class="text-danger">*</strong> </label>
                                        <select name="clientPayment" id="clientPayment" class="form-control form-control-sm" required>
                                            <option value="">--select--</option>
                                            <option value="0">Pending</option>
                                            <option value="1"> Advanced Paid</option>
                                            <option value="2">Paid</option>
                                            <option value="3">Partial</option>
                                            <option value="4">Over Dues</option>
                                            <option value="5">Credit - 7 days</option>

                                        </select>

                                    </div>

                                </td>

                                <td>

                                    <div class="form-group">
                                        <label for="dateline"> Delivery Deadline <strong class="text-danger">*</strong> </label>
                                        <input type="date" name="dateline" id="dateline" class="form-control form-control-sm" required>

                                    </div>

                                </td>

                                <td>

                                    <div class="form-group">
                                        <label for="PrincipalPayment"> Principal Payment </label>
                                        <select name="PrincipalPayment" id="PrincipalPayment" class="form-control form-control-sm">
                                            <option value="">--select--</option>
                                            <option value="0">Advanced Paid</option>
                                            <option value="1"> Paid</option>
                                            <option value="2"> Pending </option>
                                            <option value="3"> Partial</option>
                                            <option value="4"> Over Dues </option>
                                            <option value="5"> Credit - 7 </option>
                                            <option value="6"> Credit - 15 </option>
                                            <option value="7"> Credit - 30 </option>
                                            <option value="8"> Received </option>
                                            <option value="9"> Invoice </option>

                                        </select>

                                    </div>

                                </td>
                                <td>

                                    <div class="form-group">
                                        <label for="finalStatusComment"> Final Status/Comments </label>
                                        <select name="finalStatusComment" id="finalStatusComment" class="form-control form-control-sm">
                                            <option value="">--select--</option>
                                            <option value="0">Cancelled</option>
                                            <option value="1"> Close By This Month</option>
                                            <option value="2">Closed</option>
                                            <option value="3">Completetive</option>
                                            <option value="4">Complicated</option>
                                            <option value="5">Good Position</option>
                                            <option value="6">Hanged</option>
                                            <option value="7">Lost</option>
                                            <option value="8">Negotiation</option>
                                            <option value="9">Quoted</option>
                                            <option value="10">RFQ/Tener Stage</option>
                                            <option value="11">Postponed</option>
                                            <option value="12">Lost Deal Status - L4</option>
                                            <option value="13">Lost L1</option>
                                            <option value="14">Lost L2</option>
                                            <option value="15">Lost L3</option>

                                        </select>

                                    </div>

                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /basic modal -->

    <!-- ============Data show table start========================= -->

    <div class="accordion padding" id="accordion_expanded">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#closed_January_item1">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> January | &nbsp;&nbsp; Total Quoations (25) | &nbsp;&nbsp; $ 22,000,000


                </button>
            </h2>
            <div id="closed_January_item1" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">



                    <table class="table table-sm datatable-basic">
                        <thead>
                            <tr>
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>

                        </thead>
                        <tbody>

                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_january"><i class="ph-dots-three-circle ph-1x"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_january" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>


                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>





        <!-- Accordion Item #2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_Feb_Item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> February | &nbsp;&nbsp; Total Quoations (10) | &nbsp;&nbsp; $ 20,000,000

                </button>
            </h2>
            <div id="closed_Feb_Item" class="accordion-collapse collapse " data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>

                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>


                        </thead>
                        <tbody>



                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_feb"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_feb" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                            <!-- <tr>
                               <td colspan="3"> </td> <th colspan="4">CLOSED  :  10,874,0000</th>
                        </tr> -->
                        </tbody>

                    </table>

                </div>
            </div>
        </div>



        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_March_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> March | &nbsp;&nbsp; Total Quoations (15) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_March_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>


                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_march"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_march" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                            <!-- <tr>
                               <td colspan="3"> </td> <th colspan="4">CLOSED  :  10,874,0000</th>
                        </tr> -->
                        <tbody>

                    </table>

                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_April_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> April | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_April_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>

                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_april"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_april" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                            <!-- <tr>
                               <td colspan="3"> </td> <th colspan="4">CLOSED  :  10,874,0000</th>
                        </tr> -->

                        </tbody>

                    </table>


                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_May_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> May | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_May_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_May"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_May" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                            <!-- <tr>
                               <td colspan="3"> </td> <th colspan="4">CLOSED  :  10,874,0000</th>
                        </tr> -->
                        </tbody>

                    </table>


                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_June_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> June | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_June_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>

                        </thead>
                        <tbody>



                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_June"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_June" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_July_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> July | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_July_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">

                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>



                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_July"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_July" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>

                        </thead>
                    </table>


                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_August_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> August | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_August_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>

                        </thead>
                        <tbody>

                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_August"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_August" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_September_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> September | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_September_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_September"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_September" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                            <!-- <tr>
                               <td colspan="3"> </td> <th colspan="4">CLOSED  :  10,874,0000</th>
                        </tr> -->

                        </tbody>

                    </table>


                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_October_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> October | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_October_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>

                        </thead>
                        <tbody>

                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_October"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_October" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_November_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> November | &nbsp;&nbsp; Total Quoations (8) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_November_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>
                        </thead>
                        <tbody>



                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_November"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_November" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Closed Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>




        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#closed_December_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> December | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="closed_December_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Order Value</th>
                                <th style="width:20%;">Order Status</th>
                                <th style="width:15%;">Delivery Deadline</th>
                                <th style="width:8%"> Order Details</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_small_December"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_small_December" class="modal fade" tabindex="-1">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Order Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <table class="table table-xs table-bordered">
                                                        <tr>
                                                            <th> Date </th>
                                                            <td> 01-02-2023 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Quarter </th>
                                                            <td> a </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Salesman </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Partner/Client </th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> PO #</th>
                                                            <td> a </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Order Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Order Status</th>
                                                            <td> Paid </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Client Payment</th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Principal Payment </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status/Comments </th>
                                                            <td> </td>
                                                        </tr>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /small modal -->

                                </td>

                            </tr>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>

    </div>



    <!-- ============Data show table end========================= -->

</div>
