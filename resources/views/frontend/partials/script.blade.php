<!--============///* USE LINK *///=============-->

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/sweetalert@2011.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


{{-- New CDN  --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> --}}

<!-- slick slider -->

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/nasted.tab.js') }}"></script>
<script src="{{ asset('frontend/js/javascript.mr.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
{{-- <script src="https://js.stripe.com/v3/"></script> --}}
<script src="{{ asset('frontend/js/toastr.min.js') }}"></script>

<script src="{{ asset('frontend/js/select2.min.js') }}"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>


<script src="{{ asset('backend/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/demo/pages/datatables_advanced.js') }}"></script>
<script src="{{ asset('frontend/assets/js/filter.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/summernote.lite.js') }}"></script> --}}
<script src="https://cdn.tiny.cloud/1/n4jpbhtanca801bcjejx1pc9j033yn0de5ral6e7r0wd6383/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.640/pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.640/pdf.worker.js"></script>



@yield('scripts')

<script>
    function onSubmit(token) {
        document.getElementById("recaptcha-form").submit();
    }
</script>
<script>
    function onSubmit(token) {
        $('.get_quote_frm').submit();
    }
</script>

{{-- Software Hardware Tab Slider 16-07-23 --}}
<script>
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
                            '<input type="hidden" name="g-recaptcha-response" value="' + token +
                            '">'
                        );
                    document.getElementById('captchaForm').submit();
                });
        });
    });
</script>





<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tabsSwiper = new Swiper(".swiper-tabs-nav", {
            slidesPerView: "4",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var contentSwiper = new Swiper(".swiper-tabs-content", {
            autoplay: {
                delay: 5000, // Change the delay to adjust auto slide interval (in milliseconds)
            },
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            keyboard: {
                enabled: true,
                onlyInViewport: false,
            },
            mousewheel: true,
            touchRatio: 1,
            momentumRatio: 0.1,
            freeMode: true,
            spaceBetween: 10,
            on: {
                init: function() {
                    // Set up initial slide
                    var activeSlide = this.slides[this.activeIndex];
                    activeSlide.classList.add("active");

                    // Add click event to each tab-item
                    var tabItems = document.querySelectorAll(".tab-item");
                    tabItems.forEach(function(item, index) {
                        item.addEventListener("click", function() {
                            // Remove 'active' class from all tab-items
                            tabItems.forEach(function(item) {
                                item.classList.remove("active");
                            });
                            // Add 'active' class to the clicked tab-item
                            this.classList.add("active");
                            // Slide to the corresponding content slide
                            contentSwiper.slideTo(index);
                        });
                    });
                },
                slideChange: function() {
                    // Update the active tab on content slider change
                    var activeSlide = this.slides[this.activeIndex];
                    var tabItems = document.querySelectorAll(".tab-item");
                    tabItems.forEach(function(item) {
                        item.classList.remove("active");
                    });
                    tabItems[this.activeIndex].classList.add("active");
                },
            },
        });

        // Synchronize the Swipers so they follow the same slide
        tabsSwiper.controller.control = contentSwiper;
        contentSwiper.controller.control = tabsSwiper;
    });
</script>


{{-- Software Hardware Tab Slider 16-07-23 --}}

<script>
    $(document).ready(function() {
        $(".SlickCarousel").slick({
            rtl: false, // If RTL Make it true & .slick-slide{float:right;}
            autoplay: true,
            autoplaySpeed: 10000, //  Slide Delay
            speed: 1600, // Transition Speed
            slidesToShow: 4, // Number Of Carousel
            slidesToScroll: 3, // Slide To Move
            pauseOnHover: false,
            appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
            prevArrow: '<span class="Slick-Prev"></span>',
            nextArrow: '<span class="Slick-Next"></span>',
            easing: "linear",
            responsive: [{
                    breakpoint: 801,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ],
        })
    })
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
    $(document).ready(function() {
        $('.select_country').select2();
    });
</script>

{!! Toastr::message() !!}



<!--- Search for Software and Hardware -->
<script>
    $(document).ready(function() {
        $("#softwareInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#softwareTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#categoryInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#categoryTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#categoryInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#categoryTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#brandInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#brandTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#industryInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#industryTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#hardwareInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#hardwareTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<!--- End Search for Software and Hardware -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function() {
        var searchContainer = $('#search_container');
        var path = "{{ route('global.search') }}";
        var searchInput = $('#search_text');

        searchInput.autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: path,
                    type: "POST",
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}",
                        term: request.term
                    },
                    success: function(data) {

                        if (searchContainer.hasClass('d-none')) {
                            searchContainer.removeClass('d-none');
                        }
                        searchContainer.html(data);

                    }
                });
            },
            minLength: 1
        });

        searchInput.on('input', function() {
            if (searchInput.val() === '') {
                searchContainer.addClass('d-none');
            }
        });

        searchInput.on('keydown', function(event) {
            if (event.keyCode === 8 && searchInput.val() === '') {
                searchContainer.addClass('d-none');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.add_to_cart_quantity').click(function() {
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
                url: "{{ route('add.cart') }}",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    toastr.success('Successfully Added to Your Cart');
                    cart_header.empty();
                    cart_header.append('<span class="add_cart_count">' + response
                        .cartHeader + '</span>');
                    button.empty();
                    button.append(
                        '<a href="javascript:void(0);" class="common_button text-white bg-gray" style="padding:10px 8px;">Already in Cart</a>'
                    );
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.add_to_cart').click(function() {
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
                url: "{{ route('add.cart') }}",
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    toastr.success('Successfully Added to Your Cart');
                    cart_header.empty();
                    cart_header.append('<span class="add_cart_count">' + response
                        .cartHeader + '</span>');
                    button.empty();
                    button.append(
                        '<a class="text-white common_button bg-gray" href="javascript:void(0);"> Already in Cart</a>'
                    );

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

{{-- Editor --}}
<script>
    tinymce.init({
        selector: '#common',
        plugins: 'tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
    });
</script>
<script>
    $(document).ready(function() {

        // $('#message').summernote({
        //     placeholder: "Enter Your Message Here",
        //     toolbar: [
        //         ['style', ['style']],
        //         ['font', ['bold', 'underline', 'clear']],
        //         ['color', ['color']],
        //         ['para', ['ul', 'ol', 'paragraph']],
        //         ['table', ['table']],
        //         ['insert', ['link', 'picture', 'video']],
        //         ['view', ['fullscreen', 'codeview', 'help']]
        //     ]
        // });

        // $('#common').summernote({
        //     placeholder: "Write Text Here....",
        //     toolbar: [
        //         ['style', ['style']],
        //         ['font', ['bold', 'underline', 'clear']],
        //         ['color', ['color']],
        //         ['para', ['ul', 'ol', 'paragraph']],
        //         ['table', ['table']],
        //         ['insert', ['link', 'picture', 'video']],
        //         ['view', ['fullscreen', 'codeview', 'help']]
        //     ]
        // });

        $("#common").on("keypress", function() {
            var limiteCaracteres = 255;
            var caracteres = $(this).text();
            var totalCaracteres = caracteres.length;

            //Update value
            $("#total-caracteres").text(totalCaracteres);

            //Check and Limit Charaters
            if (totalCaracteres >= limiteCaracteres) {
                return false;
            }
        });
    });
</script>
{{-- Editor --}}



<script>
    $(document).ready(function() {
        $("#close").click(function() {
            if ($("#profile_percentage").addClass('d-none')) {
                $("#profile_percentagey").slideUp(300);
                //$("#profile_percentage").text('+')
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            //alert(5);
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image1').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage1').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image2').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage2').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image3').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage3').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('input[name=toggle]').change(function() {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            $.ajax({
                url: "{{ route('client.status') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    mode: mode,
                    id: id,
                },
                success: function(response) {

                    if (response.status) {
                        alert(response.msg);
                    } else {
                        alert('Please Try Again!');
                    }
                }

            })

        })
    })
</script>


<!-- Filter scripts -->
<!-- Filter Sidebar scripts -->
<script>
    function myFunction() {


        if ($("#filter_category").hasClass('d-none')) {
            $("#filter_category").removeClass('d-none');
        } else {
            $("#filter_category").addClass('d-none');
        }

    }

    function showhide() {
        if ($("#newpost").hasClass('d-none')) {
            $("#newpost").removeClass('d-none');
        } else {
            $("#newpost").addClass('d-none');
        }

    }
</script>


<script type="text/javascript">
    $(document).ready(function() {

        // Get the input and buttons
        const $inputQty = $('.input-qty');
        const $btnPlus = $('.qty-btn-plus');
        const $btnMinus = $('.qty-btn-minus');

        // Increment the quantity when the plus button is clicked
        $btnPlus.on('click', function() {
            let currentValue = parseInt($inputQty.val(), 10);
            if (!isNaN(currentValue)) {
                $inputQty.val(currentValue + 1);
            }
        });

        // Decrement the quantity when the minus button is clicked
        $btnMinus.on('click', function() {
            let currentValue = parseInt($inputQty.val(), 10);
            if (!isNaN(currentValue) && currentValue > 1) {
                $inputQty.val(currentValue - 1);
            }
        });

        // Prevent non-numeric input in the quantity input field
        $inputQty.on('input', function() {
            let currentValue = $inputQty.val().replace(/[^0-9]/g, '');
            if (!isNaN(currentValue) && currentValue !== '') {
                $inputQty.val(currentValue);
            } else {
                $inputQty.val('1');
            }
        });
    });
</script>

<!-- Filter scripts -->
<script>
    $("#addToCart").click(function() {

        var product_name = $('#name').val();
        var id = $('#product_id').val();
        var quantity = $('#qty').val();

        $.ajax({
            url: "{{ route('add.cart') }}",
            type: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                //mode:mode,
                id: id,
                qty: quantity,
                name: product_name
            },
            //alert(5),
            success: function(response) {

                if (response.status) {
                    alert(response.msg);
                } else {
                    alert('Please Try Again!');
                }
            }

        })
    });
</script>



<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.rmvBtn').click(function(e) {
            var form = $(this).closest('form');
            //var dataID=$(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swalInit.fire({
                    title: "Are you sure?",
                    text: "Once removed, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Your Products has been removed from cart!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your data is safe!");
                    }
                });
        })
    })
</script>

<script>
    var header = document.getElementById("myDIV");
    // var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    $('input[type="range"]').change(function() {
        var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

        $(this).css('background-image',
            '-webkit-gradient(linear, left top, right top, ' +
            'color-stop(' + val + ', #860736fd), ' +
            'color-stop(' + val + ', #000)' +
            ')'
        );
    });
</script>



{{-- Slider --}}
<script>
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
</script>
{{-- Slider --}}

{{-- Product Slider --}}
<script>
    $(document).ready(function() {
        $(".SlickCarousel").slick({
            rtl: false, // If RTL Make it true & .slick-slide{float:right;}
            autoplay: true,
            arrows: true,
            autoplaySpeed: 8000, //  Slide Delay
            speed: 5000, // Transition Speed
            slidesToShow: 4, // Number Of Carousel
            slidesToScroll: 4, // Slide To Move
            pauseOnHover: true,
            appendArrows: $(".Container .Head .Arrows"), // Class For Arrows Buttons
            prevArrow: '<span class="Slick-Prev"></span>',
            nextArrow: '<span class="Slick-Next"></span>',
            easing: "linear",
            responsive: [{
                    breakpoint: 801,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 641,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ],
        })
    })
</script>

{{-- For Modal --}}

<script type="text/javascript">
    $(function() {
        $("#marketingChk").click(function() {
            if ($(this).is(":checked")) {
                $("#marketing").show();
            } else {
                $("#marketing").hide();
            }
        });
    });
    $(function() {
        $("#functionalChk").click(function() {
            if ($(this).is(":checked")) {
                $("#functional").show();
            } else {
                $("#functional").hide();
            }
        });
    });
    $(function() {
        $("#statisticalChk").click(function() {
            if ($(this).is(":checked")) {
                $("#statistical").show();
            } else {
                $("#statistical").hide();
            }
        });
    });
    $(function() {
        $("#normalChek").click(function() {
            if ($(this).is(":checked")) {
                $("#normaal").show();
            } else {
                $("#normaal").hide();
            }
        });
    });
</script>

<!--=======// Bootstrap-5 Tab With Slider Script Start//======-->
<script>
    $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 3; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: true,
            autoplay: false,
            // autoplayTimeout: 3000, // Adjust this value to set the interval
            dots: true,
            loop: true,
            responsiveRefreshRate: 200,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>',
            ],
        }).on('changed.owl.carousel', syncPosition);

        sync2
            .on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: true,
                nav: false,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            //var current = el.item.index;

            //if you disable loop you have to comment this block
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }

            //end block

            sync2
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });
</script>
{{-- for Counter --}}
<script>
    var buttonPlus = $(".qty-btn-plus");
    var buttonMinus = $(".qty-btn-minus");

    var incrementPlus = buttonPlus.click(function() {
        var $n = $(this)
            .parent(".qty-container")
            .find(".input-qty");
        $n.val(Number($n.val()) + 1);
    });

    var incrementMinus = buttonMinus.click(function() {
        var $n = $(this)
            .parent(".qty-container")
            .find(".input-qty");
        var amount = Number($n.val());
        if (amount > 0) {
            $n.val(amount - 1);
        }
    });
</script>
<!--=======// Bootstrap-5 Tab With Slider Key Script End//======-->


{{-- Sidebar --}}
<script>
    jQuery(function($) {

        $(".sidebar-dropdown > a").click(function() {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                .parent()
                .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });


    });
</script>
{{-- Sidebar --}}
