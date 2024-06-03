<table cellpadding="0" cellspacing="0" class="qutatation-form"
    style="border-collapse: collapse;width: 58.3333%;margin: 0 auto;background-color: #f4f4f4;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
    <tr>
        <td>
            <section style="margin-top: 0rem;margin-bottom: 0rem;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                <!-- Email Header Start -->
                <div class="wrapper" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px">
                    <!-- Email Header Start -->
                    <div>
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;background-color: #ae0a46;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 20rem">
                                <tr
                                    style="vertical-align: top;display: flex;justify-content: space-between;align-items: center;padding: 15px;">
                                    <td style="border: 0">
                                        <a href="https://ngenitltd.com" target="_blank">
                                            <img src="https://i.ibb.co/qMMpQMj/Logo-White.png" alt="Ngen IT"
                                                title="Ngen IT"
                                                style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 7.5rem; padding-left: 18px;"
                                                width="60" />
                                        </a>
                                    </td>
                                    <td style="border: 0">
                                        <input type="text" name="quotation_title"
                                            class="form-control form-control-sm bg-transparent text-end"
                                            value="Price Quotation"
                                            style="font-size: 2em;font-weight: 600;margin-bottom: 0;color: #fff; padding: 0px 18px !important;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Email Header End -->
                    <!-- Email User Info Start -->
                    <div>
                        <table
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 20rem;margin: 0 auto;width: 100%;overflow: hidden;">
                            <tbody style="min-width: 20rem">
                                <tr style="vertical-align: top">
                                    <td style="padding: 0rem 1.875rem; text-align: left">
                                        <div>
                                            <div style="padding-top: 1.25rem;padding-left: 0;">
                                                <input type="text" name="company_name"
                                                    class="form-control form-control-sm bg-transparent"
                                                    value="{{ $quotation->company_name ?? $rfq_details->company_name }}"
                                                    style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                <input type="text" name="name"
                                                    class="form-control form-control-sm bg-transparent"
                                                    value="{{ $quotation->name ?? $rfq_details->name }}"
                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                <input type="text" name="email"
                                                    class="form-control form-control-sm bg-transparent"
                                                    value="{{ $quotation->email ?? $rfq_details->email }}"
                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                <input type="text" name="phone"
                                                    class="form-control form-control-sm bg-transparent"
                                                    value="{{ $quotation->phone ?? $rfq_details->phone }}"
                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                                <input type="text" name="address"
                                                    class="form-control form-control-sm bg-transparent"
                                                    value="{{ $quotation->address ?? $rfq_details->address }}"
                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="content-table"
                                        style="padding: 0px;height: 10rem;margin: 0px;position: relative;right: -30px;top: 15px;">
                                        <p></p>
                                    </td>
                                    <td style="padding: 0rem 1.875rem; text-align: right">
                                        <div>
                                            <div style="padding-top: 1.25rem;">
                                                <input type="text" name="ngen_company_name"
                                                    class="form-control form-control-sm bg-transparent text-start"
                                                    value="{{ $quotation->ngen_company_name ?? 'NGen IT' }}"
                                                    style="font-size: 1.125rem;font-family: 'Poppins', sans-serif;color: #ae0a46;padding: 0px !important;">
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="me-3">
                                                        REG:
                                                    </div>
                                                    <div>
                                                        <input type="text" name="ngen_company_registration_number"
                                                            class="form-control form-control-sm bg-transparent text-start"
                                                            value="{{ $quotation->ngen_company_registration_number ?? '20437861K' }}"
                                                            style="font-size: 13px;color: #4a5472;padding: 0px!important;width: 9rem;">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div class="me-3">
                                                        Date:
                                                    </div>
                                                    <div>
                                                        <input type="text" name="quotation_date"
                                                            class="form-control form-control-sm bg-transparent text-start"
                                                            value="{{ $quotation->quotation_date ?? now()->format('d F Y') }}"
                                                            style="width:9rem;font-size: 13px;font-family: 'Poppins', sans-serif;color: #4a5472;padding: 0px !important;">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div>
                                                        <input type="text"
                                                            class="form-control form-control-sm bg-transparent pq_code"
                                                            name="pq_code"
                                                            value="{{ $quotation->ngen_company_registration_number ?? 'PQ#: NG-BD/Genexis/RV/231021' }}"
                                                            style="width:15rem;font-size: 13px;font-family: 'Poppins', sans-serif;color: #4a5472;padding: 0px !important;">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <div>
                                                        <input type="text" name="pqr_code"
                                                            class="form-control form-control-sm bg-transparent"
                                                            value="{{ $quotation->ngen_company_registration_number ?? 'PQR#: MEO-P021(T10)-W(L1)' }}"
                                                            style="width:15rem;font-size: 13px;font-family: 'Poppins', sans-serif;color: #4a5472;padding: 0px !important;">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Email User Info End -->
                    <!-- Main Content Start -->
                    <div
                        style="overflow-x: auto;padding-left: 1.875rem;padding-right: 1.875rem;padding-top: 0.9375rem;padding-bottom: 0.9375rem;">
                        <table id="quotationTable"
                            style="border-collapse: collapse;width: 100%;border: 1px solid #eee;">
                            <thead class="text-center">
                                <tr
                                    style="background-color: #e5e5e5;color: #3d3d3d;border: 1px solid #eee;font-size: 13px;">
                                    <th width="6%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                        SL</th>
                                    <th width="49%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                        Product Description</th>
                                    <th width="8%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                        Qty</th>
                                    <th width="15%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                        Unit Price (<span class="currency"></span>)</th>
                                    <th width="15%" style="text-align: center;padding: 0.5rem;font-weight: 400;">
                                        Total (<span class="currency"></span>)</th>
                                </tr>
                            </thead>
                            <tbody class="quotationTable_area text-center">
                                @if ($rfq_details->quotationProducts->count() > 0)
                                    @foreach ($rfq_details->quotationProducts as $quotationproduct)
                                        <tr class="tdsp text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <input type="text" name="quotation_product_name[]"
                                                    class="form-control form-control-sm bg-transparent text-start"
                                                    value="{{ $quotationproduct->product_name }}">
                                            </td>
                                            <td>
                                                <input type="text" name="quotation_qty[]"
                                                    class="form-control form-control-sm bg-transparent text-center"
                                                    value="{{ $quotationproduct->qty }}">
                                            </td>

                                            <td><input type="text" name="quotation_unit_final_price[]"
                                                    class="form-control form-control-sm bg-transparent text-center"
                                                    value="{{ $quotationproduct->unit_final_price }}">
                                            </td>
                                            <td class=" text-center">
                                                <input type="text" name="quotation_unit_final_total_price[]"
                                                    class="form-control form-control-sm bg-transparent text-center"
                                                    value="{{ $quotationproduct->unit_final_total_price }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr> No Data Available</tr>
                                @endif

                            </tbody>
                        </table>
                        <!--  -->
                        <div style="display: flex; justify-content: end">
                            <table
                                style="border-collapse: collapse;width: 100%;font-size: 13px;border-top: 2px solid #eee;">
                                <tr style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;">
                                    <th
                                        style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;border: none;">
                                        Sub Total
                                    </th>
                                    <th class="d-flex align-items-center"
                                        style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                        <p class="currency mb-0"></p>
                                        <input type="text" readonly name="sub_total_final_total_price"
                                            class="form-control form-control-sm bg-transparent text-center rfqcalculationinput"
                                            value="{{ optional($singleproduct)->sub_total_final_total_price }}"
                                            style="color: #3d3d3d;padding: 0px !important;">
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <!--  -->
                        <div class="special_discount"
                            style="display: {{ optional($quotation)->special_discount_display == '1' ? 'block' : 'none' }};">
                            <div style="display: flex; justify-content: end">
                                <table style="border-collapse: collapse;width: 100%;border: none;">
                                    <tr
                                        style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                        <td style="width: 85%;text-align: end;padding: 10px;color: #3d3d3d;">
                                            Special Discount (<span
                                                class="special_discount_value">{{ optional($quotation)->special_discount_percentage }}</span>)
                                        </td>
                                        <td class="d-flex align-items-center"
                                            style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                            <span class="currency"></span>
                                            <input type="text" name="special_discount_final_total_price"
                                                class="form-control form-control-sm bg-transparent text-center"
                                                value="{{ optional($singleproduct)->special_discount_final_total_price }}"
                                                style="color: #3d3d3d;padding: 0px !important;">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="vat_display"
                            style="display: {{ optional($quotation)->vat_display == '1' ? 'block' : 'none' }};">
                            <div style="display: flex; justify-content: end">
                                <table style="border-collapse: collapse;width: 100%;border: none;">
                                    <tr
                                        style="text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border: 1px solid #eee;">
                                        <td style="width: 85%;text-align: end;padding: 10px;color: #3d3d3d;">
                                            Vat (<span
                                                class="vat_tax_value">{{ optional($singleproduct)->vat_percentage }}</span>)
                                        </td>
                                        <td class="d-flex align-items-center"
                                            style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                            <span class="currency"></span>
                                            <input type="text" name="vat_final_total_price"
                                                value="{{ optional($singleproduct)->vat_final_total_price }}"
                                                class="form-control form-control-sm bg-transparent text-center"
                                                value="0" style="color: #3d3d3d;padding: 0px !important;">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--  -->
                        <div style="display: flex; justify-content: end">
                            <table
                                style="border: 1px solid #eee;border-collapse: collapse;background-color: #eee;width: 100%;font-size: 13px;">
                                <tr
                                    style="text-align: end;padding: 0.5rem;border: 1px solid #eee;color: #3d3d3d;font-size: 13px;">
                                    <th
                                        style="width: 85%;text-align: end;padding: 0.5rem;color: #3d3d3d;border: none;">
                                        Grand Total
                                    </th>
                                    <th class="d-flex align-items-center"
                                        style="width: 100%;text-align: end;padding: 0.5rem;border-left: 1px solid #eee;color: #3d3d3d;text-align: end;font-weight: 400;">
                                        <p class="currency mb-0"></p>
                                        <input type="text" name="total_final_total_price" readonly
                                            class="form-control form-control-sm bg-transparent text-center"
                                            value="{{ optional($singleproduct)->total_final_total_price }}"
                                            style="color: #3d3d3d;padding: 0px !important;">
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <!--  -->
                        @if (optional($quotation)->vat_display == '1')
                            <div class="vat_display">
                                <div style="display: flex;justify-content: end;margin-top: 1rem;margin-bottom: 1rem;">
                                    <table
                                        style="border-collapse: collapse;width: 60%;margin: auto;font-size: 13px;border: 1px solid #eee;">
                                        <tr
                                            style="width: 6%;text-align: end;padding: 0.5rem;color: #3d3d3d;font-size: 13px;border-bottom: 1px solid #eee;">
                                            <th
                                                style="text-align: center;padding: 0.5rem;color: #3d3d3d;font-weight: 400;">
                                                <input type="text"
                                                    class="form-control form-control-sm bg-transparent text-center"
                                                    value="GST Not included. It may apply."
                                                    style="font-size: 13px;font-family: 'Poppins', sans-serif;color: #3d3d3d;padding: 0px !important;">
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @endif
                        <!--  -->
                        <div>
                            <table class="terms_table w-100">
                                <thead>
                                    <tr>
                                        <th width="5%" style="text-align: center;">
                                            <a
                                                class="border-0 p-0 bg-transparent text-primary fa-solid fa-plus add-terms-row">
                                                {{-- <i class="fa-solid fa-plus"></i> --}}
                                            </a>
                                        </th>
                                        <th colspan="2" style="text-align: center;">
                                            <p class="mb-0 p-2">Terms & Conditions</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="terms_tbody">
                                    @if ($rfq_terms->isEmpty())
                                        <tr>
                                            <td style="text-align: center;">
                                                <a class="text-danger rounded-0 btn-sm p-1 delete-terms-row">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                            <td style="width: 10%">
                                                <input type="hidden" name="terms_id[]" value="">
                                                <input type="text" name="terms_title[]"
                                                    class="form-control form-control-sm bg-transparent text-start"
                                                    value="Validity :">
                                            </td>
                                            <td>
                                                <input type="text" name="terms_description[]"
                                                    class="form-control form-control-sm bg-transparent"
                                                    value="7 Days from the PQ date on regular price. Offer may change on the bank forex rate">
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($rfq_terms as $term)
                                            <tr>
                                                <td style="text-align: center;">
                                                    <a class="text-danger rounded-0 btn-sm p-1 delete-terms-row"
                                                        data-id="{{ $term->id }}">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                                <td style="width: 10%">
                                                    <input type="hidden" name="terms_id[]"
                                                        value="{{ $term->id }}">
                                                    <input type="text" name="terms_title[]"
                                                        class="form-control form-control-sm bg-transparent text-start"
                                                        value="{{ $term->title }}">
                                                </td>
                                                <td>
                                                    <input type="text" name="terms_description[]"
                                                        class="form-control form-control-sm bg-transparent"
                                                        value="{{ $term->description }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- Main Content End -->
                    <!-- Column Area -->
                    <div>
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr>
                                    <td style="padding: 0">
                                        <table style="width: 100%; border-collapse: collapse">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="padding: 0.9375rem;padding-left: 1.875rem;padding-right: 1.875rem;background-image: url(https://img.freepik.com/free-photo/white-painted-wall-texture-background_53876-138197.jpg);background-size: cover;">
                                                        <table style="width: 100%; border-collapse: collapse">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="border: 1px solid transparent;text-align: start;color: #ffffff;">
                                                                        <input type="text" name="thank_you_text"
                                                                            class="form-control form-control-sm bg-transparent text-start"
                                                                            value="Thank You"
                                                                            style="font-size: 13px;font-weight: 600;margin: 0;color: #000; padding: 0px !important;"">
                                                                        <input type="text" name="sender_name"
                                                                            class="form-control form-control-sm bg-transparent text-start"
                                                                            value="Kawsar Khan"
                                                                            style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                        <input type="text"
                                                                            name="sender_designation"
                                                                            class="form-control form-control-sm bg-transparent text-start"
                                                                            value="Manager, Business"
                                                                            style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                    </td>
                                                                    <td
                                                                        style="text-align: end; color: #ffffff; border: 1px solid transparent;">
                                                                        <input type="text" name="ngen_email"
                                                                            class="form-control form-control-sm bg-transparent text-end"
                                                                            value="sales@ngenitltd.com"
                                                                            style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">

                                                                        <div class="d-flex justify-content-end">
                                                                            <div class="icons-area"
                                                                                style="color: #ae0a46;">
                                                                                <i class="fa-brands fa-skype"></i>
                                                                            </div>
                                                                            <div class="icons-input">
                                                                                <input type="text"
                                                                                    name="ngen_number_two"
                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                    value="+880 156845986"
                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-end">
                                                                            <div class="icons-area"
                                                                                style="color: #ae0a46;">
                                                                                <i class="fa-brands fa-whatsapp"></i>
                                                                            </div>
                                                                            <div class="icons-input">
                                                                                <input type="text"
                                                                                    name="ngen_whatsapp_number"
                                                                                    class="form-control form-control-sm bg-transparent text-end"
                                                                                    value="+880 156845987"
                                                                                    style="font-size: 13px;font-weight: 400;margin: 0;color: #ae0a46; padding: 0px !important;">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Column Area End -->
                    <!-- Email Footer -->
                    <div>
                        <table id="u_body"
                            style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;margin: 0 auto;width: 100%;"
                            cellpadding="0" cellspacing="0">
                            <tbody style="min-width: 320px">
                                <tr>
                                    <div style="text-align: center;background-color: #ae0a46;padding: 0.9375rem;">
                                        <a class="" href="https://www.ngenitltd.com/"
                                            style="color: #ffff;font-size: 1.125rem;text-align: center;letter-spacing: 4px;">www.ngenitltd.com</a>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Email Footer End-->
                </div>
                <!-- ... -->
            </section>
        </td>
    </tr>
</table>
<div>
    <div class="d-flex justify-content-center align-items-center py-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="attachment">
            <label class="form-check-label text-danger" for="flexCheckDefault">
                Send Quotation With Attachment
            </label>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center py-3 pt-0">
        <button type="submit" value="approval" name="action" class="btn navigation_btn rfqs-btns"><i
                class="fa-solid fa-person-circle-check pe-2"></i>
            Submit for Approval</button>
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#quotationMail" value="submit"
            name="action" class="btn navigation_btn"><i class="fa-regular fa-circle-check pe-2"></i>Send
            Quotation</a>
        {{-- <button type="submit" value="submit" name="action" class="btn navigation_btn"><i
                class="fa-regular fa-circle-check pe-2"></i>Send
            Quotation</button> --}}
        @php
            $currentUrl = url()->current();
            $whatsappLink = 'https://wa.me/?text=' . urlencode('Check out this page: ' . $currentUrl);
        @endphp

        <!-- Create a button or link to share via WhatsApp -->
        <a href="{{ $whatsappLink }}" target="_blank" class="btn navigation_btn rfqs-btns">
            <i class="fa-regular fa-circle-check pe-2"></i>Share on WhatsApp
        </a>
        {{-- <button type="submit" class="btn navigation_btn"><i
                    class="fa-regular fa-circle-check pe-2"></i>Resend</button>
            <button type="submit" class="btn navigation_btn"><i class="fa-regular fa-circle-check pe-2"></i>Share On What's App</button> --}}
    </div>
</div>
{{--
<div id="quotationMail" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-dialog-center modal-md">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">Email Where Quotation will send</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body border br-7">
                <div class="container p-2 mx-2">
                    <div class="row">
                        <div class="mb-1">
                            <label class="form-label" for="basicpill-firstname-input">Quotation Receiver Email</label>
                            <input type="email" maxlength="250" class="form-control form-control-sm"
                                placeholder="demo@example.com" name="receiver_email" />
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basicpill-firstname-input">Quotation Receiver Email
                                (CC)</label>
                            <input type="text" name="receiver_cc_email" class="form-control visually-hidden"
                                data-role="tagsinput" placeholder="demo@example.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-1 pb-0 pe-0">
                <button type="submit" class="btn btn-info from-prevent-multiple-submits"
                    style="padding: 10px;">Send</button>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal -->
<div class="modal fade" id="quotationMail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Email Where Quotation will send</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container p-2 mx-2">
                    <div class="row">
                        <div class="mb-1">
                            <label class="form-label" for="basicpill-firstname-input">Quotation Receiver Email</label>
                            <input type="email" maxlength="250" class="form-control form-control-sm"
                                placeholder="demo@example.com" name="receiver_email" />
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basicpill-firstname-input">Quotation Receiver Email
                                (CC)</label>
                            <input type="text" name="receiver_cc_email" class="form-control visually-hidden"
                                data-role="tagsinput" placeholder="demo@example.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info from-prevent-multiple-submits"
                    style="padding: 10px;">Send</button>
            </div>
        </div>
    </div>
</div>
