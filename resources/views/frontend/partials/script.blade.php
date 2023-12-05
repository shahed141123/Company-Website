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

<!-- Custom JS -->

<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/assets/js/filter.js') }}"></script>

<!-- Datatable -->
<script src="{{ asset('backend/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('backend/assets/demo/pages/datatables_advanced.js') }}"></script>

<!-- Tiny MCe -->
<script src="{{ asset('frontend/assets/js/text-editor/tiny-mce.min.js') }}"></script>


<script src="https://www.google.com/recaptcha/api.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.640/pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.640/pdf.worker.js"></script>



@yield('scripts')

{!! Toastr::message() !!}

<!-- Google Recaptcha  -->
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
