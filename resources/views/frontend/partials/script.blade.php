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
