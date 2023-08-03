<script>
    // display a modal (medium modal)
    $(document).on('click', '#addToBasket', function(event) {
        event.preventDefault();

        let form = $(this).closest('.myForm');
        let id = form.find("input[name=id]").val();
        let name = form.find("input[name=name]").val();
        let price = form.find("input[name=price]").val();
        let image = form.find("input[name=image]").val();
        let quantity = form.find("input[name=quantity]").val();
        let href = $(this).attr('data-attr');

        $.ajax({
            type: "POST",
            data: {
                id: id,
                name: name,
                price: price,
                image: image,
                quantity: quantity,
                "_token": "{{ csrf_token() }}"
            },
            url: "{{ route('cart.store') }}",
            success: function(data) {
                console.log("Success");
                $.ajax({
                    url: href,
                    beforeSend: function() {
                        $('#loader').show();
                    },
                    // return the result
                    success: function(result) {
                        $('#mediumModal').modal("show");
                        $('#mediumBody').html(result).show();
                    },
                    complete: function() {
                        $('#loader').hide();
                        $("#header_right").load(window.location.href +
                            " #header_right");
                        $("#cart_table").load(window.location.href + " #cart_table");
                        $("#cart_summary").load(window.location.href +
                            " #cart_summary");
                    },
                    error: function(jqXHR, testStatus, error) {
                        console.log(error);
                        alert("Page " + href + " cannot open. Error:" + error);
                        $('#loader').hide();
                    },
                })
            }
        })
    });

    $("#close").on("click", function(e) {
        e.preventDefault();
        $("#mediumModal").modal("hide");
        $('#mediumModal').data("modal", null);
    });
</script>


<!--For Country and State-->
<script>
    if ($('#checkout2').val() == 0) {
        $('#work2').hide();
    }
    $(document).ready(function() {

        $('.dynamic').change(function() {
            if ($(this).val() != '') {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('dynamicdependent.fetch') }}",
                    method: "POST",
                    data: {
                        select: select,
                        value: value,
                        _token: _token,
                        dependent: dependent
                    },
                    success: function(result) {
                        $('#' + dependent).html(result);
                    }

                })
            }
        });

        $('#country').change(function() {
            $('#state').val('');
            $('#city').val('');
        });

        $('#state').change(function() {
            $('#city').val('');
        });


    });
</script>


<!--For Auto Submit -->
<script>
    $('#search').on('keyup', function() {
        search();
    });
    // search();
    function search() {
        var keyword = $('#search').val();
        $.post('{{ route('product.search') }}', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                keyword: keyword
            },
            function(data) {
                table_post_row(data);
                console.log(data);
            });

        if (keyword == '') {
            $('td').css('display', 'none')
        }
    }


    // table row with ajax

    function table_post_row(res) {
        let htmlView = '';
        if (res.sproducts.length <= 0) {
            htmlView +=

                `<tr>
                <td colspan="4">No data.</td>
            </tr>`;
        }
        for (let i = 0; i < res.sproducts.length; i++) {
            htmlView +=

                `<tr>
                    '<td><a style="color: black; hover:color:red" href="{{ url('single/product/${res.sproducts[i].id}') }}">` +
                res.sproducts[i].title + `</a></td>'
                </tr>`
        }
        $('tbody').html(htmlView);
    }
</script>

<script>
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)

        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)

        animationOutSpeed: 200, // Animation out speed (ms)

        scrollText: '<i class="fa-solid fa-arrow-up"></i>', // Text for element
        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });
</script>
<div id="backIcon" class="d-none">
    <a name="backIcon" href="javascript:history.back()" class="backPage"><i class="fa-solid fa-arrow-turn-up"></i>
    </a>
</div>

<script>
    var pxBtShow = 500;
    var scrollSpeed = 500;

    $(window).scroll(function() {
        if ($(window).scrollTop() >= pxBtShow) {
            $("#backIcon").removeClass('d-none');
        } else {
            $("#backIcon").addClass('d-none');
        }
    });
</script>

<script>
    var buttonAdd = document.querySelectorAll('.product_button_change')

    buttonAdd.forEach(element => {
        element.addEventListener("click", function() {
            element.innerText = 'Already Added'
            element.style.cssText = "background:#5F5753;color:white;";
            setTimeout(() => {
                element.disabled = true;
            }, 1000);
        })
    });
</script>
