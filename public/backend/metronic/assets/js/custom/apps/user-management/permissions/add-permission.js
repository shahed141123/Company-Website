"use strict";

var KTUsersAddPermission = function () {
    var t = $("#kt_modal_add_permission"),
        e = t.find("#kt_modal_add_permission_form"),
        n = new bootstrap.Modal(t);

    return {
        init: function () {
            (() => {
                var o = e.formValidation({
                    fields: {
                        permission_name: {
                            validators: {
                                notEmpty: {
                                    message: "Permission name is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                });

                t.find('[data-kt-permissions-modal-action="close"]').on("click", (function (t) {
                    t.preventDefault();
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
                    }).then((function (t) {
                        t.value && n.hide()
                    }))
                }));

                t.find('[data-kt-permissions-modal-action="cancel"]').on("click", (function (t) {
                    t.preventDefault();
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
                    }).then((function (t) {
                        t.value ? (e[0].reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "Your form has not been cancelled!",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }));

                const i = t.find('[data-kt-permissions-modal-action="submit"]');
                i.on("click", (function (t) {
                    t.preventDefault(), o && o.validate().then((function (t) {
                        console.log("validated!"), "Valid" == t ? (i.attr("data-kt-indicator", "on"), i.prop("disabled", true), setTimeout((function () {
                            i.removeAttr("data-kt-indicator"), i.prop("disabled", false), Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then((function (t) {
                                t.isConfirmed && n.hide()
                            }))
                        }), 2000)) : Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }))
            })()
        }
    }
}();

$(document).ready(function () {
    KTUsersAddPermission.init();
});
