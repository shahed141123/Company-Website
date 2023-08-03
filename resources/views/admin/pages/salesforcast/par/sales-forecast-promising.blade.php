<div class="tab-pane fade" id="js-promising-tab" role="tabpanel">

    <div class="col-lg-12 float-left">
        <button type="button" class="btn btn-warning btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modal_default_promising"> <i class="ph-plus-circle ph-1x"></i></button>


    </div>
    <!-- Basic modal for Promising -->

    <form action="" class="form-validate-jquery-promising" method="post">
        <div id="modal_default_promising" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sales Forecast Promising Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>

                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="Quarter"> RFQ CODE </label>
                                        <select name="rfq_id" id="rfq_id" class="form-control form-control-sm" required>
                                            <option value="0">--Select RFQ CODE--</option>
                                            <option value="1"> Q1</option>
                                            <option value="2"> Q2 </option>
                                            <option value="3"> Q3</option>
                                            <option value="4"> Q4 </option>
                                        </select>
                                    </div>
                                </td>

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
                                        <label for="date"> Date <strong class="text-danger">*</strong></label>
                                        <input type="date" name="date" value="01/01/2023" id="date" class="form-control form-control-sm" required>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="Quarter"> Quarter <strong class="text-danger">*</strong></label>
                                        <select name="quarter" id="Quarter" class="form-control form-control-sm" required>
                                            <option value="0">--select--</option>
                                            <option value="1">Q1</option>
                                            <option value="2"> Q2 </option>
                                            <option value="3"> Q3</option>
                                            <option value="4"> Q4 </option>
                                        </select>
                                    </div>
                                </td>
                            
                                <td>
                                    <div class="form-group">

                                        <label for="Salesman"> Salesman <strong class="text-danger">*</strong></label>
                                        <select name="chooseSalesMan" id="Salesman" class="form-control form-control-sm" required>
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
                                        <label for="pclient"> Partner/Client <strong class="text-danger">*</strong></label>
                                        <select name="choosePartnerClient" id="pclient" class="form-control form-control-sm" required>
                                            <option value="">--select--</option>
                                            <option value="0">Partner</option>
                                            <option value="1"> AFGHANISTAN 01</option>
                                            <option value="2">Client 02</option>
                                            <option value="3">Client 03</option>
                                            <option value="4">Client 04</option>

                                        </select>
                                    </div>
                                </td>

                            </tr>

                            <tr>

                                <td>
                                    <div class="form-group">
                                        <label for="PO#"> PQ Ref# </label>
                                        <input type="text" placeholder="PO#" class="form-control form-control-sm" id="PO#" name="poRefTotal" value="">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">

                                        <label for="closingValue"> Closing Value <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control form-control-sm" id="closingValue" name="closingValue" placeholder="00.00">



                                    </div>
                                </td>

                            

                                
                                <td>
                                    <div class="form-group">
                                        <label for="client">Client <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control form-control-sm" id="client" name="client" value="BIGM" required>

                                    </div>
                                </td>
                            

                                <td>
                                    <div class="form-group">
                                        <label for="contactPerson">Contact Person <strong class="text-danger">*</strong></label>
                                        <input type="text" class="form-control form-control-sm" id="contactPerson" required name="contactPerson" placeholder="Name" value="">
                                    </div>

                                </td>


                            </tr>
                                
                            <tr>

                                <td>
                                    <div class="form-group">
                                        <label for="ContactNo">Contact No </label>
                                        <input type="text" class="form-control form-control-sm" id="ContactNo" placeholder="010 00 00000" name="ContactNo" value="">

                                    </div>

                                </td>


                                <td>
                                    <div class="form-group">
                                        <label for="orderStatus"> Order Status <strong class="text-danger">*</strong></label>
                                        <select name="chooseOrderStatus" class="form-control form-control-sm" required>
                                            <option value="">--Choose---</option>
                                            <option value="0">On Processing</option>
                                            <option value="1"> Pr. Paymnt Processing</option>
                                            <option value="2">Processed</option>
                                            <option value="3">Delivered</option>
                                            <option value="4">Delayed</option>
                                            <option value="5">Complicating</option>

                                        </select>
                                    </div>

                                </td>

                                <td colspan="2">

                                    <div class="form-group">
                                        <label for="probabilityStatus"> Probability Status </label>
                                        <select name="probabilityStatus" id="probabilityStatus" class="form-select form-select-sm">
                                            <option value="">--select--</option>
                                            <option value="0">90% - This Week</option>
                                            <option value="1"> 80% - Next Week</option>
                                            <option value="2">60% - End Of Month</option>
                                            <option value="3">50% - Next Month</option>
                                            <option value="4">40% - This Week</option>
                                        </select>

                                    </div>


                                </td>

                            </tr>

                            <tr>

                                <td colspan="2">

                                    <div class="form-group">
                                        <label for="clientPayment">Probability Reason </label>
                                        <select name="probabilityStatus" class="form-select form-select-sm">
                                            <option value="">--select--</option>
                                            <option value="0">By Teaner Quote</option>
                                            <option value="1"> Pending Mngt. Approval</option>
                                            <option value="2">Difficult/Backdoor Client</option>
                                            <option value="3">Price/Client Complexity</option>
                                            <option value="4">No Control</option>
                                            <option value="5">Medium Control</option>
                                            <option value="6">Full Control</option>
                                            <option value="7">High Competition</option>
                                        </select>

                                    </div>


                                </td>
                                <td colspan="2">

                                    <div class="form-group">
                                        <label for="finalComment"> Final Status </label>
                                        <select name="finalStatusComment" id="finalComment" class="form-control form-control-sm">
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
                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#PromisingJanuary_item1">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> January | &nbsp;&nbsp; Total Quoations (25) | &nbsp;&nbsp; $ 22,000,000


                </button>
            </h2>
            <div id="PromisingJanuary_item1" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">



                    <table class="table table-sm datatable-basic">
                        <thead>
                            <tr>
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_january"><i class="ph-dots-three-circle ph-1x"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_january" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>


                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_Feb_Item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> February | &nbsp;&nbsp; Total Quoations (10) | &nbsp;&nbsp; $ 20,000,000

                </button>
            </h2>
            <div id="Promising_Feb_Item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>

                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_feb"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_feb" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_March_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> March | &nbsp;&nbsp; Total Quoations (15) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_March_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>


                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_march"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_march" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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

                        <tbody>

                    </table>

                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_April_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> April | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_April_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>

                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_april"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_april" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_May_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> May | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_May_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>
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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_May"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_May" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_June_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> June | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_June_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_June"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_June" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_July_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> July | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_July_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">

                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

                            </tr>



                            <tr>

                                <td> 03-01-2023 </td>
                                <td> Sale Ah </td>
                                <td> Partner </td>
                                <td> 2,898,764.00 </td>
                                <td> On Processing </td>
                                <td> 12-02-2023 </td>
                                <td>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_July"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_July" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_August_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> August | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_August_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_August"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_August" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_September_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> September | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_September_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_September"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_September" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PromisingOctober_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> October | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="PromisingOctober_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>

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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_October"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_October" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Promising_November_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> November | &nbsp;&nbsp; Total Quoations (8) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="Promising_November_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>
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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_November"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_November" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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
                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#promising_December_item">
                    <i class="fas fa-plus-square me-3 fa-1x"></i> December | &nbsp;&nbsp; Total Quoations (4) | &nbsp;&nbsp; $ 00,000,000

                </button>
            </h2>
            <div id="promising_December_item" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                <div class="accordion-body">


                    <table class="table datatable-basic">
                        <thead>
                            <tr class="text-small">
                                <th style="width:10%;">Date</th>
                                <th style="width:15%;">Salesman</th>
                                <th style="width:17%;">P./Client</th>
                                <th style="width:15%;">Closing Value</th>
                                <th style="width:15%;">Contact Person</th>
                                <th style="width:20%;">Status</th>
                                <th style="width:8%"> Details</th>
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
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal_PromisingSmall_December"><i class="ph-dots-three-circle ph-1x me-3"></i> </button>

                                    <!-- Small modal -->
                                    <div id="modal_PromisingSmall_December" class="modal fade" tabindex="-1">
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
                                                            <th> Item Decription </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Closing Value </th>
                                                            <td> 20,000,00.00 </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Client </th>
                                                            <td> Client name </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact Person </th>
                                                            <td> ....... </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Contact No </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Status </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Probability Reason </th>
                                                            <td> </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Final Status </th>
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

</div>