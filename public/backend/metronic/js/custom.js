// $(document).ready(function () {
//     $('.js-example-basic-multiple, .js-example-basic-single').select2();
// });

//Select All Checkbox
$('.metronic_select_all').on('change', function () {
    // Apply check state to all checkboxes
    $('[type="checkbox"]').prop('checked', $(this).prop('checked'));
});

// Password Show and Hide
$(document).ready(function () {
    $('.toggle-password').click(function () {
        const passwordInput = $(this).closest('.position-relative').find('input');
        const isVisible = passwordInput.attr('type') === 'text';
        passwordInput.attr('type', isVisible ? 'password' : 'text');
        $(this).find('.bi-eye').toggleClass('d-none');
        $(this).find('.bi-eye-slash').toggleClass('d-none');
    });
});
function passwordMeter(inputElement, highlightElement, options) {
    var checkSteps, score;

    var check = function () {
        var e = 0,
            t = m();
        !0 === l() && (e += t),
            !0 === options.checkUppercase && !0 === s() && (e += t),
            !0 === options.checkLowercase && !0 === u() && (e += t),
            !0 === options.checkDigit && !0 === d() && (e += t),
            !0 === options.checkChar && !0 === c() && (e += t),
            (score = e),
            f();
    };

    var l = function () {
        return inputElement.value.length >= options.minLength;
    };

    var s = function () {
        return /[a-z]/.test(inputElement.value);
    };

    var u = function () {
        return /[A-Z]/.test(inputElement.value);
    };

    var d = function () {
        return /[0-9]/.test(inputElement.value);
    };

    var c = function () {
        return /[~`!#@$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/g.test(inputElement.value);
    };

    var m = function () {
        var e = 1;
        return (
            !0 === options.checkUppercase && e++,
            !0 === options.checkLowercase && e++,
            !0 === options.checkDigit && e++,
            !0 === options.checkChar && e++,
            (checkSteps = e),
            100 / checkSteps
        );
    };

    var f = function () {
        var e = [].slice.call(highlightElement.querySelectorAll("div")),
            t = e.length,
            i = 0,
            r = m(),
            o = g();
        e.map(function (e) {
            i++,
                r * i * (checkSteps / t) <= o
                    ? e.classList.add("active")
                    : e.classList.remove("active");
        });
    };

    var g = function () {
        return score;
    };

    // Check the password strength on initialization
    check();

    // Expose public methods
    return {
        check: check,
        getScore: g
    };
}

$(document).ready(function () {
    var inputElement = document.querySelector('.password_input');
    var highlightElement = document.querySelector('.d-flex[data-kt-password-meter-control="highlight"]');

    var options = {
        minLength: 8, // Minimum password length
        checkUppercase: true, // Check for uppercase letters
        checkLowercase: true, // Check for lowercase letters
        checkDigit: true, // Check for digits
        checkChar: true // Check for special characters
    };

    // Initialize password meter
    var meter = passwordMeter(inputElement, highlightElement, options);

    // Toggle password visibility


    // Example usage: Whenever the password input changes, update the password meter
    inputElement.addEventListener('input', function () {
        meter.check();
    });
});



// Delete action with reload page
$(document).on('click', '.delete', function (e) {
    e.preventDefault();

    var deleteUrl = $(this).attr('href');

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-success'
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            $.ajax({
                url: deleteUrl,
                type: 'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success: function (data) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ).then(function () {
                        location.reload();
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire(
                        'Error Occurred!',
                        error,
                        'error'
                    );
                }
            });
        }
        else if (result.dismiss === swal.DismissReason.cancel) {
            Swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            );
        }
    });
});


// --------------------------------
// Delete Account with reload page
$(document).on('click', '.delete-account', async function (e) {
    e.preventDefault();

    var deleteAccountUrl = $(this).attr('href');
    var checkPasswordUrl = $(this).data('check-password-url');
    const { value: password } = await Swal.fire({
        title: "Confirm Password",
        input: "password",
        // inputLabel: "Password",
        inputPlaceholder: "Enter your password",
        inputAttributes: {
            maxlength: "30",
            autocapitalize: "off",
            autocorrect: "off"
        },
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-success'
        }
    });

    if (password) {
        // Check if the entered password matches the user's password in the database
        $.ajax({
            url: checkPasswordUrl,
            type: 'POST',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                password: password,
            },
            success: function (response) {
                if (response.success) {
                    // Password matches, proceed with deletion
                    $.ajax({
                        url: deleteAccountUrl,
                        type: 'DELETE',
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        success: function (data) {
                            Swal.fire(
                                'Deleted!',
                                'Your Account has been deleted.',
                                'success'
                            ).then(function () {
                                // location.reload();
                                window.location.href = '/';
                            });
                        },
                        error: function (xhr, status, error) {
                            Swal.fire(
                                'Error Occurred!',
                                error,
                                'error'
                            );
                        }
                    });
                } else {
                    // Password does not match, show error message
                    Swal.fire(
                        'Error Occurred!',
                        response.message,
                        'error'
                    );
                }
            },
            error: function (xhr, status, error) {
                Swal.fire(
                    'Error Occurred!',
                    'An error occurred while checking the password. Please try again.',
                    'error'
                );
            }
        });
    } else {
        Swal.fire(
            'Cancelled',
            'Your Account is safe :)',
            'error'
        );
    }
});
// --------------------------------


// --------------------------------
// Modal Close Code

"use strict";

// Class definition
var metronicModal = function () {
    // Shared variables
    const element = document.querySelector(".metronic_modal");
    // const form = element.querySelector('#kt_modal_add_permission_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    var initModal = () => {


        // Close button handler
        const closeButton = element.querySelector('[data-kt-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to close?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, close it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                }
            });
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });


    }

    return {
        // Public functions
        init: function () {
            initModal();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    metronicModal.init();
});


// Define toggleStatus function globally
function toggleStatus(route, id) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    const csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: route,
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function (response) {
            $(`#status_toggle_${id}`).prop('checked', response.success);
            Toast.fire({
                icon: 'success',
                title: 'Status toggled successfully'
            });
        },
        error: function (xhr) {
            console.error('Error - ' + xhr.status + ': ' + xhr.statusText);
            Toast.fire({
                icon: 'error',
                title: 'An error occurred'
            });
        }
    });
}




