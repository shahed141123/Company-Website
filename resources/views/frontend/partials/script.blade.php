<!--============///* USE LINK Final *///=============-->
<script src="{{ asset('frontend/js/icons/font-awesome@6.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/jquery/jquery@3-6-0.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/sweetalert@2011.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/nasted.tab.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/toastr.min.js') }}"></script>
<script src="{{ asset('frontend/js/plugin/select2.min.js') }}"></script>
<script src="{{ asset('frontend/js/javascript.mr.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('frontend/js/plugin/owl-crousel@2.3.4.js') }}"></script>
<!-- Datatable -->
<script src="{{ asset('backend/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/demo/pages/datatables_advanced.js') }}"></script>
<!-- Tiny MCe -->
<script src="{{ asset('frontend/assets/js/text-editor/tiny-mce.min.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<!-- Custom JS -->
{{-- <script src="{{ asset('backend/assets/js/custom.js') }}"></script> --}}
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/assets/js/filter.js') }}"></script>
@yield('scripts')
{!! Toastr::message() !!}
<!-- Google Recaptcha  -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('submitCaptcha').addEventListener('click', function() {
            // Verify the reCAPTCHA response
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.recaptcha_site_key') }}', {
                        action: 'submit'
                    })
                    .then(function(token) {
                        // Append the reCAPTCHA response to the form and submit it
                        document.getElementById('captchaModal').querySelector('.modal-body')
                            .insertAdjacentHTML(
                                'beforeend',
                                '<input type="hidden" name="g-recaptcha-response" value="' +
                                token +
                                '">'
                            );
                        document.getElementById('captchaForm').submit();
                    });
            });
        });
    });
    // {{-- Slider --}}
    var $slider_ini = $(".Advance-Slider");
    var total_slide = 0;
    $slider_ini.on("init", function(event, slick, currentSlide, nextSlide) {
        $('button.slick-arrow').append('<div class="thumb"></div>');
        total_slide = slick.slideCount;
        // console.log(total_slide);
        next_img = $(slick.$slides[1]).find('img').attr('src');
        prev_img = $(slick.$slides[total_slide - 1]).find('img').attr('src');
        $('button.slick-next .thumb').append('<img src="' + next_img + '">');
        $('button.slick-prev .thumb').append('<img src="' + prev_img + '">');

    });
    $slider_ini.slick({
        autoplay: true,
        autoplaySpeed: 10000,
        speed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        pauseOnHover: false,
        infinite: false,
        customPaging: function(slider, i) {
            var thumb = $(slider.$slides[i]).find('.dots-img').attr('src');
            // console.log(thumb);
            return '<button><div class="mextrix"><a><img src="' + thumb + '"></a></div></button>';

        }
    });
    $("button.slick-arrow , .Advance-Slider ul.slick-dots li button").hover(function() {
        $(this).addClass("hover-in");
        $(this).removeClass("hover-out");
    }, function() {
        $(this).removeClass("hover-in");
        $(this).addClass("hover-out");
    });
    $slider_ini.on('afterChange', function(event, slick, currentSlide) {
        // console.log('afterChange: ' + currentSlide);

        prev_img = $(slick.$slides[currentSlide - 1]).find('img').attr('src');
        next_img = $(slick.$slides[currentSlide + 1]).find('img').attr('src');

        if (currentSlide == total_slide) {
            prev_img = $(currentSlide - 1).find('img').attr('src');
        }

        if (currentSlide == 0) {
            // console.log('if call');
            prev_img = $(slick.$slides[total_slide - 1]).find('img').attr('src');
        }

        if (currentSlide == total_slide - 1) {
            next_img = $(slick.$slides[0]).find('img').attr('src');
        }

        $('button.slick-arrow ').find('img').remove();

        $('button.slick-next .thumb').append('<img src="' + next_img + '">');
        $('button.slick-prev .thumb').append('<img src="' + prev_img + '">');

    });
    // {{-- Slider --}}
</script>


<script>
    $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var searchContainer = $('#search_container');
    var path = "{{ route('global.search') }}";
    var searchInput = $('#search_text');

    searchInput.autocomplete({
        source: function (request, response) {
            $.ajax({
                url: path,
                type: "POST",
                dataType: "json",
                data: {
                    // _token: "{{ csrf_token() }}",
                    term: request.term
                },
                success: function (data) {

                    if (searchContainer.hasClass('d-none')) {
                        searchContainer.removeClass('d-none');
                    }
                    searchContainer.html(data);

                }
            });
        },
        minLength: 1
    });

    searchInput.on('input', function () {
        if (searchInput.val() === '') {
            searchContainer.addClass('d-none');
        }
    });

    searchInput.on('keydown', function (event) {
        if (event.keyCode === 8 && searchInput.val() === '') {
            searchContainer.addClass('d-none');
        }
    });

    var searchContainer = $('#mobile_search_container');
    var path = "{{ route('global.search') }}";
    var searchInput = $('#mobile_search_text');

    searchInput.autocomplete({
        source: function (request, response) {
            $.ajax({
                url: path,
                type: "POST",
                dataType: "json",
                data: {
                    // _token: "{{ csrf_token() }}",
                    term: request.term
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {

                    if (searchContainer.hasClass('d-none')) {
                        searchContainer.removeClass('d-none');
                    }
                    searchContainer.html(data);

                }
            });
        },
        minLength: 1
    });

    searchInput.on('input', function () {
        if (searchInput.val() === '') {
            searchContainer.addClass('d-none');
        }
    });

    searchInput.on('keydown', function (event) {
        if (event.keyCode === 8 && searchInput.val() === '') {
            searchContainer.addClass('d-none');
        }
    });


    $('.add_to_cart_quantity').click(function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var quantity = $('.input-qty').val();
        // alert(quantity);
        var button = $('.cart_quantity_button' + id);
        var cart_header = $('#cartQty');

        var formData = {
            product_id: id,
            name: name,
            qty: quantity
        };

        $.ajax({
            url: "{{ route('cart.add') }}",
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                toastr.success('Successfully Added to Your Cart');
                cart_header.empty();
                cart_header.append('<span class="add_cart_count">' + response
                    .cartHeader + '</span>');
                button.empty();
                button.append(
                );
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    $('.add_to_cart').click(function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var quantity = $(this).data('quantity');
        var button = $('.cart_button' + id);
        var cart_header = $('#cartQty');

        var formData = {
            product_id: id,
            name: name,
            qty: quantity
        };

        $.ajax({
            url: "{{ route('cart.add') }}",
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                toastr.success('Successfully Added to Your Cart');
                cart_header.empty();
                cart_header.append('<span class="add_cart_count">' + response
                    .cartHeader + '</span>');
                button.empty();
                button.append(
                );

            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
    });
</script>

{{-- Brand Page Single Product --}}
<script>
    $(document).ready(function() {
        $(".slick-slider").slick({
            slidesToShow: 4,
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            responsive: [{
                breakpoint: 768, // Breakpoint for mobile devices
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    // You can adjust other settings for mobile devices here
                }
            }]
            // dots: false, Boolean
            // arrows: false, Boolean
        });
    });
</script>
<script>
    $(".slick-slider-brand-logo").slick({
        slidesToShow: 10,
        infinite: false,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false, // Hide navigation arrows on mobile
        dots: false,
        responsive: [{
                breakpoint: 768, // Define the breakpoint for mobile devices
                settings: {
                    slidesToShow: 3, // Show 3 slides on mobile devices
                    arrows: false, // Hide navigation arrows on mobile
                    dots: false // Hide navigation dots on mobile
                }
            }
            // You can add more breakpoints and settings if needed
        ]
    });
</script>
<script>
    if ($('.product__slider-main').length) {
        var $slider = $('.product__slider-main')
            .on('init', function(slick) {
                $('.product__slider-main').fadeIn(1000);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                lazyLoad: 'ondemand',
                autoplaySpeed: 6000,
                asNavFor: '.product__slider-thmb'
            });

        var $slider2 = $('.product__slider-thmb')
            .on('init', function(slick) {
                $('.product__slider-thmb').fadeIn(1000);
            })
            .slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                asNavFor: '.product__slider-main',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });

        //remove active class from all thumbnail slides
        $('.product__slider-thmb .slick-slide').removeClass('slick-active');

        //set active class to first thumbnail slides
        $('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');

        // On before slide change match active thumbnail to current slide
        $('.product__slider-main').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            var mySlideNumber = nextSlide;
            $('.product__slider-thmb .slick-slide').removeClass('slick-active');
            $('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
        });


        // init slider
        require(['js-sliderWithProgressbar'], function(slider) {

            $('.product__slider-main').each(function() {

                me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);



            });
        });
        var options = {
            progressbarSelector: '.bJS_progressbar',
            slideSelector: '.bJS_slider',
            previewSlideSelector: '.bJS_previewSlider',
            progressInterval: '',
            onCustomProgressbar: function($slide, $progressbar) {}
        }

        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var sliderOptions = {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true
        }

        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var previewSliderOptions = {
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            centerMode: true
        }
    }
</script>
<script>
    function gfg(imgs) {
        var expandImg = document.getElementById("expand");
        var imgText = document.getElementById("geeks");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

<script>
    //----- Quantity
    function increaseCount(a, b) {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }

    function decreaseCount(a, b) {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
        }
    }
</script>

<script>
    //---- Sidebar Tab Product


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>


<script>
    $(document).ready(function() {
        $('#editRfquser').click(function() {
            $("#Rfquser").toggle(this.checked);
        });

    });
</script>