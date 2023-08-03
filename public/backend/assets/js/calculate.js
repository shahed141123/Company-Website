// document.querySelector('.achievement-calculate').addEventListener('keydown', function(event) {
//     if (event.keyCode === 13) {
//         event.preventDefault();
//     }
// });

// document.querySelector('.calculate').addEventListener('keydown', function(event) {
//     if (event.keyCode === 13) {
//         event.preventDefault();
//     }
// });




    var $myForm = $('.calculate');
    $myForm.find('input').on('keyup change', function() {
        // alert($(this).val());
    //Unit Total calculation
                var mult = 0;
                var sales_mult = 0;
                var discounted_sales_mult = 0;
                // for each row:
                $("tr.thd").each(function () {
                    // get the values from this row:
                    var unit_price = $("input[name='unit_price[]']" , this).val();
                    var qty = $("input[name='qty[]']" , this).val();

                    var unit_cost_total =(qty * 1) * (unit_price * 1);
                    $(this).find(".cog_price").val(parseFloat(unit_cost_total).toFixed(2));
                    // set total for the row


                    if ($("input[name='regular']").is(":checked")) {
                        var regulardiscount = $("input[name='regular_discount[]']" , this).val();
                        var regular_discount = parseFloat((unit_cost_total * regulardiscount) / 100).toFixed(2);
                        var unit_sales_price = parseFloat(unit_cost_total) - parseFloat(regular_discount);
                        var unit_sales_price = parseFloat(unit_sales_price).toFixed(2);
                        $(this).find("input[name='discounted_sales[]']").val(unit_sales_price);
                    } else {

                        var unit_sales_price = parseFloat(unit_cost_total).toFixed(2);
                        $(this).find("input[name='discounted_sales[]']").val(0);
                    }

                    // set total for the row

                    // var sales_total = parseFloat(unit_cost_total).toFixed(2) - parseFloat(regular_discount).toFixed(2) ;

                    $(this).find("input[name='sales_price[]']").val((unit_sales_price));
                    //sub-total calculation
                    var sales_unit_price = parseFloat($('.sales_price', this).val());
                    var discounted_unit_price = parseFloat($('.discounted_sales', this).val());

                    mult += unit_cost_total;
                    sales_mult += isNaN(sales_unit_price) ? 0 : sales_unit_price;
                    discounted_sales_mult += isNaN(discounted_unit_price) ? 0 : discounted_unit_price;


                });
                    var mult = parseFloat(mult).toFixed(2);
                    var sales_mult = parseFloat(sales_mult).toFixed(2);
                    var discounted_sales_mult = parseFloat(discounted_sales_mult).toFixed(2);
                $("input[name='sub_total_cost']").val(mult);
                $("input[name='sub_total_discounted_sales']").val(discounted_sales_mult);
                $("input[name='sub_total_sales']").val(sales_mult);
                $("input[name='grand_total']").val(sales_mult);
    ////Unit Total calculation


    //Expenses calculation



        var sub_total_cost = $("input[name='sub_total_cost']").val();

        var profit = 0;
        var additional = 0;
        var sales_expense_mult = 0;
        // for each row
        $("tbody.tb tr").each(function() {
            // get the values from this row:
            var expense_value = $('.multiplyValue', this).val();

            var result = parseFloat((sub_total_cost * expense_value) / 100).toFixed(2);
            // set total for the row
            $('.result', this).val(result);


            var value_sum = parseFloat($('.multiplyValue', this).val());
            profit += isNaN(value_sum) ? 0 : value_sum;
            var result_value = parseFloat($('.result', this).val());
            additional += isNaN(result_value) ? 0 : result_value;

        });


        var profit = parseFloat(profit).toFixed(2);
        var $additional = parseFloat(additional).toFixed(2);

            $('.gross_profit_subtotal').val(profit);
            $("input[name='gross_profit_amount']").val($additional);

            // var sales_mult = 0;
            $("tr.thd").each(function () {
                // get the values from this row:

                var cog_price = $("input[name='cog_price[]']" , this).val();
                var gross = $('.gross_profit_subtotal').val();
                var cog_addition = parseFloat((cog_price * gross) / 100).toFixed(2);
                var sales_addition = parseFloat(cog_price) + parseFloat(cog_addition) ;
                //alert(sales_addition);
                if ($("input[name='regular']").is(":checked")) {
                    var regulardiscount = $("input[name='regular_discount[]']" , this).val();
                    var regular_discount = parseFloat((cog_price * regulardiscount) / 100).toFixed(2);
                } else {
                    var regular_discount = 0;

                }

                var sales_total = parseFloat(sales_addition).toFixed(2) - parseFloat(regular_discount).toFixed(2) ;
                $(this).find("input[name='sales_price[]']").val((sales_total).toFixed(2));
                sales_expense_mult += sales_total;
            });
            var sales_expense_mult = parseFloat(sales_expense_mult).toFixed(2);
            $("input[name='sub_total_sales']").val(sales_expense_mult);
            $("input[name='grand_total']").val(sales_expense_mult);



    //Expenses calculation





    ///Special Discount calculation
                var discount = $("input[name='special_discount']").val();
                var subtotal_sales = $("input[name='sub_total_sales']").val();

                if ($("input[name='special']").is(":checked")) {
                    var special_discounted_sales = parseFloat(subtotal_sales) - parseFloat(((subtotal_sales * discount) / 100).toFixed(2));
                $("input[name='special_discounted_sales']").val(parseFloat((special_discounted_sales).toFixed(2)));
                $("input[name='grand_total']").val(parseFloat(special_discounted_sales).toFixed(2));
                } else {
                    $("input[name='special_discounted_sales']").val(0);
                    $("input[name='grand_total']").val(parseFloat(subtotal_sales).toFixed(2));

                }
    ///Special Discount calculation

    ///Tax calculation
                var tax = $("input[name='tax']").val();

                var grand_total = $("input[name='grand_total']").val();

                if ($("input[name='tax_status']").is(":checked")) {

                        var tax_sales = parseFloat(((grand_total * tax) / 100).toFixed(2));
                        var grand  =  parseFloat(grand_total) + parseFloat(((grand_total * tax) / 100).toFixed(2));
                        $("input[name='tax_sales']").val((tax_sales).toFixed(2));
                        $("input[name='grand_total']").val((grand).toFixed(2));

                } else {
                    $("input[name='tax_sales']").val(0);
                    $("input[name='grand_total']").val(parseFloat(grand_total).toFixed(2));
                }
    ///Tax calculation






});



/// Show Regular Tax and special discount radio -->

            $("input[name='regular']").on('change', function() {

                if ($(this).is(":checked")) {
                    $(".rg_discount").removeClass("d-none");
                }

                else {
                    $(".rg_discount").addClass("d-none");
                }

            });
            $("input[name='special']").on('change', function() {

                if ($(this).is(":checked")) {
                    $(".special_discount").removeClass("d-none");
                }

                else {
                    $(".special_discount").addClass("d-none");
                }

            });
            $("input[name='tax_status']").on('change', function() {

                if ($(this).is(":checked")) {
                    $(".tax").removeClass("d-none");
                }

                else {
                    $(".tax").addClass("d-none");
                }

            });


    /// Show Regular Tax and special discount radio -->

    /// Show Tax and special discount div -->

            $(document).mousemove(function(event) {

                if ($("input[name='regular']").is(":checked")) {
                    $(".rg_discount").removeClass("d-none");
                }

                else {
                    $(".rg_discount").addClass("d-none");
                }

            });
            $(document).mousemove(function(event) {

                if ($("input[name='special']").is(":checked")) {
                    $(".special_discount").removeClass("d-none");
                }

                else {
                    $(".special_discount").addClass("d-none");
                }

            });
            $(document).mousemove(function(event) {

                if ($("input[name='tax_status']").is(":checked")) {
                    $(".tax").removeClass("d-none");
                }

                else {
                    $(".tax").addClass("d-none");
                }

            });


    /// Show Tax and special discount div -->
    /// expand table and calculate -->

            $( ".accordion_expense" ).click(function() {
                $( ".body_expense" ).toggle();
            });
            $( ".accordion_offer" ).click(function() {
                $( ".body_offer" ).toggle();
            });
            $( ".accordion_other" ).click(function() {
                $( ".body_other" ).toggle();
            });

    /// expand table and calculate -->




//Achievement Calculation

var $myForm = $('.achievement-calculate');
     $myForm.find('input, select').on('keyup change', function() {

        // $('select[name="effort_L1"]').on('change', function(){
            var deal_type_value = $(".deal_type_value").val();
            //alert(deal_type_value);
            var total_quoted_amount = $("input[name='total_quoted_amount']").val();
            var shared_quote_percentage_L1 = $("input[name='shared_quote_percentage_L1']").val();
            var shared_quote_amount_L1 = (total_quoted_amount * shared_quote_percentage_L1)/100;
            var closed_ratio_L1 = (shared_quote_amount_L1 * deal_type_value)/100;
            $('input[name="shared_quote_amount_L1"]').val((shared_quote_amount_L1).toFixed(2));
            $('input[name="closed_ratio_L1"]').val((closed_ratio_L1).toFixed(2));

            var effort_L1 = $('select[name="effort_L1"]').val();


            if (effort_L1) {
                $.ajax({
                    url: '/admin/effort/ajax/'+effort_L1,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('input[name="perform_look_L1"]').val(data.perform_look);
                        $('input[name="rating_L1"]').val(data.rating);
                        $('input[name="incentive_percentage_L1"]').val(data.value);
                        //var incentive_percentage_L1 = data.value;
                        var incentive_percentage_L1 = $('input[name="incentive_percentage_L1"]').val();
                        var profit_margin_L1 = $('input[name="profit_margin_L1"]').val();
                        if (data.value > 0) {
                            var incentive_amount_L1 = (closed_ratio_L1 * (profit_margin_L1/100) * (incentive_percentage_L1/100)) * 10;
                        } else {
                            var incentive_amount_L1 = (closed_ratio_L1 * (profit_margin_L1/100) * (0)) * 10;
                        }
                        $('input[name="incentive_amount_L1"]').val((incentive_amount_L1).toFixed(2));

                    },
                });
            }

            // Incentive for T1

            var shared_quote_percentage_T1 = $("input[name='shared_quote_percentage_T1']").val();
            var shared_quote_amount_T1 = (total_quoted_amount * shared_quote_percentage_T1)/100;
            var closed_ratio_T1 = (shared_quote_amount_T1 * deal_type_value)/100;
            $('input[name="shared_quote_amount_T1"]').val((shared_quote_amount_T1).toFixed(2));
            $('input[name="closed_ratio_T1"]').val((closed_ratio_T1).toFixed(2));

            var effort_T1 = $('select[name="effort_T1"]').val();


            if (effort_T1) {
                $.ajax({
                    url: '/admin/effort/ajax/'+effort_T1,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('input[name="perform_look_T1"]').val(data.perform_look);
                        $('input[name="rating_T1"]').val(data.rating);
                        $('input[name="incentive_percentage_T1"]').val(data.value);
                        //var incentive_percentage_T1 = data.value;
                        var incentive_percentage_T1 = $('input[name="incentive_percentage_T1"]').val();

                        var profit_margin_T1 = $('input[name="profit_margin_T1"]').val();
                        //alert(data.value);
                        if (data.value > 0) {
                            var incentive_amount_T1 = (closed_ratio_T1 * (profit_margin_T1/100) * (incentive_percentage_T1/100)) * 10;
                        } else {
                            var incentive_amount_T1 = (closed_ratio_T1 * (profit_margin_T1/100) * (0)) * 10;
                        }

                        $('input[name="incentive_amount_T1"]').val((incentive_amount_T1).toFixed(2));

                    },
                });
            }

            // Incentive for T2

            var shared_quote_percentage_T2 = $("input[name='shared_quote_percentage_T2']").val();
            var shared_quote_amount_T2 = (total_quoted_amount * shared_quote_percentage_T2)/100;
            var closed_ratio_T2 = (shared_quote_amount_T2 * deal_type_value)/100;
            $('input[name="shared_quote_amount_T2"]').val((shared_quote_amount_T2).toFixed(2));
            $('input[name="closed_ratio_T2"]').val((closed_ratio_T2).toFixed(2));

            var effort_T2 = $('select[name="effort_T2"]').val();


            if (effort_T2) {
                $.ajax({
                    url: '/admin/effort/ajax/'+effort_T2,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('input[name="perform_look_T2"]').val(data.perform_look);
                        $('input[name="rating_T2"]').val(data.rating);
                        $('input[name="incentive_percentage_T2"]').val(data.value);
                        //var incentive_percentage_T2 = data.value;
                        var incentive_percentage_T2 = $('input[name="incentive_percentage_T2"]').val();

                        var profit_margin_T2 = $('input[name="profit_margin_T2"]').val();
                        //alert(incentive_percentage_T2);
                        if (data.value > 0) {
                            var incentive_amount_T2 = (closed_ratio_T2 * (profit_margin_T2/100) * (incentive_percentage_T2/100)) * 10;
                        } else {
                            var incentive_amount_T2 = (closed_ratio_T2 * (profit_margin_T2/100) * (0)) * 10;
                        }

                        $('input[name="incentive_amount_T2"]').val((incentive_amount_T2).toFixed(2));

                    },
                });
            }



});
