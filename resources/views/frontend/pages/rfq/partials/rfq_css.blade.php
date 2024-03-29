<style>
    #query-rfq {
        display: none;
        /* Initially hide both sections */
    }

    .rfq_box {
        background-color: #fff;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .form-select {
        border-color: #eee;
        outline: 0;
        box-shadow: 0 0 0 0.25rem transparent;
    }

    .form-select:focus {
        border-color: #eee;
        outline: 0;
        box-shadow: 0 0 0 0.25rem transparent;
    }



    #multi_step_form {
        box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
    }


    #multi_step_form .container #multistep_nav {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #262424;
    }


    #multi_step_form .container #multistep_nav .progress_holder {
        padding: 10px;
        width: 33.3%;
        text-align: center;
        background-color: #eee;
    }

    #multi_step_form .container #multistep_nav .progress_holder_custom {
        padding: 10px;
        width: 33.3%;
        text-align: center;
        background-color: #eee;
    }


    #multi_step_form .container #multistep_nav .activated_step {
        background-color: #ae0a46;
        color: white;
    }


    #multi_step_form .container fieldset.step {
        position: relative;
        padding: 10px;
        padding-bottom: 50px;
    }


    #multi_step_form .container fieldset.step .nextStep {
        position: absolute;
        right: 25px;
        bottom: 5px;
        padding: 10px;
        width: 100px;
        color: white !important;
        background-color: #ae0a46 !important;
        border: 1px solid #ae0a46 !important;
    }

    #multi_step_form .container fieldset.step .nextStep:hover {
        position: absolute;
        right: 25px;
        padding: 10px;
        width: 100px;
        background-color: transparent !important;
        color: #ae0a46 !important;
        border: 1px solid #ae0a46 !important;
    }

    .submitbtn {
        position: absolute;
        right: 25px;
        bottom: 5px;
        padding: 10px;
        width: 100px;
        color: white !important;
        background-color: #ae0a46 !important;
        border: 1px solid #ae0a46 !important;
    }

    .submitbtn:hover {
        position: absolute;
        right: 25px;
        padding: 10px;
        width: 100px;
        background-color: transparent !important;
        color: #ae0a46 !important;
        border: 1px solid #ae0a46 !important;
    }

    #multi_step_form .container fieldset.step .prevStep {
        position: absolute;
        left: 5px;
        bottom: 5px;
        padding: 10px;
        width: 100px;
    }


    #multi_step_form .container fieldset.step:not(:first-of-type) {
        display: none;
    }


    .showing-row {
        display: none;
    }


    #yourFormId {
        display: block;
        /* Initially show the form */
    }

    .checkbox-wrapper-1 *,
    .checkbox-wrapper-1 ::after,
    .checkbox-wrapper-1 ::before {
        box-sizing: border-box;
    }

    .checkbox-wrapper-1 [type=checkbox].substituted {
        margin: 0;
        width: 0;
        height: 0;
        display: inline;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .checkbox-wrapper-1 [type=checkbox].substituted+label:before {
        content: "";
        display: inline-block;
        vertical-align: top;
        height: 1.15em;
        width: 1.15em;
        margin-top: 5px;
        margin-right: 0.6em;
        color: rgba(0, 0, 0, 0.275);
        border: solid 0.06em;
        box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em inset, 0 0 0 0.07em transparent inset;
        border-radius: 0.2em;
        background: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xml:space="preserve" fill="white" viewBox="0 0 9 9"><rect x="0" y="4.3" transform="matrix(-0.707 -0.7072 0.7072 -0.707 0.5891 10.4702)" width="4.3" height="1.6" /><rect x="2.2" y="2.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 12.1877 2.9833)" width="6.1" height="1.7" /></svg>') no-repeat center, white;
        background-size: 0;
        will-change: color, border, background, background-size, box-shadow;
        transform: translate3d(0, 0, 0);
        transition: color 0.1s, border 0.1s, background 0.15s, box-shadow 0.1s;
    }

    .checkbox-wrapper-1 [type=checkbox].substituted:enabled:active+label:before,
    .checkbox-wrapper-1 [type=checkbox].substituted:enabled+label:active:before {
        box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset;
        background-color: #f0f0f0;
    }

    .checkbox-wrapper-1 [type=checkbox].substituted:checked+label:before {
        background-color: #3B99FC;
        background-size: 0.75em;
        color: rgba(0, 0, 0, 0.075);
    }

    .checkbox-wrapper-1 [type=checkbox].substituted:checked:enabled:active+label:before,
    .checkbox-wrapper-1 [type=checkbox].substituted:checked:enabled+label:active:before {
        background-color: #0a7ffb;
        color: rgba(0, 0, 0, 0.275);
    }

    .checkbox-wrapper-1 [type=checkbox].substituted:focus+label:before {
        box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset, 0 0 0 3.3px rgba(65, 159, 255, 0.55), 0 0 0 5px rgba(65, 159, 255, 0.3);
    }

    .checkbox-wrapper-1 [type=checkbox].substituted:focus:active+label:before,
    .checkbox-wrapper-1 [type=checkbox].substituted:focus+label:active:before {
        box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(0, 0, 0, 0.1) inset, 0 0 0 3.3px rgba(65, 159, 255, 0.55), 0 0 0 5px rgba(65, 159, 255, 0.3);
    }

    .checkbox-wrapper-1 [type=checkbox].substituted:disabled+label:before {
        opacity: 0.5;
    }

    .checkbox-wrapper-1 [type=checkbox].substituted.dark+label:before {
        color: rgba(255, 255, 255, 0.275);
        background-color: #222;
        background-image: url('data:image/svg+xml;charset=UTF-8,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xml:space="preserve" fill="rgba(34, 34, 34, 0.999)" viewBox="0 0 9 9"><rect x="0" y="4.3" transform="matrix(-0.707 -0.7072 0.7072 -0.707 0.5891 10.4702)" width="4.3" height="1.6" /><rect x="2.2" y="2.9" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 12.1877 2.9833)" width="6.1" height="1.7" /></svg>');
    }

    .checkbox-wrapper-1 [type=checkbox].substituted.dark:enabled:active+label:before,
    .checkbox-wrapper-1 [type=checkbox].substituted.dark:enabled+label:active:before {
        background-color: #444;
        box-shadow: 0 0 0.04em, 0 0.06em 0.16em -0.03em transparent inset, 0 0 0 0.07em rgba(255, 255, 255, 0.1) inset;
    }

    .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked+label:before {
        background-color: #a97035;
        color: rgba(255, 255, 255, 0.075);
    }

    .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked:enabled:active+label:before,
    .checkbox-wrapper-1 [type=checkbox].substituted.dark:checked:enabled+label:active:before {
        background-color: #c68035;
        color: rgba(0, 0, 0, 0.275);
    }

    /* For Multi Select */
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #ae0a46;
        color: white;
        border: 1px solid #ae0a46;
        border-radius: 0px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 4px;
        padding: 0 5px 4px;
    }

    .select2-container--default .select2-selection--multiple {
        background-color: white;
        border: 1px solid #eee;
        border-radius: 0px;
        cursor: text;
        padding: 0px 0px 6px;
    }

    .select2-dropdown {
        background-color: white;
        border: 0px;
        border-radius: 0px;
        box-sizing: border-box;
        display: block;
        position: absolute;
        left: -100000px;
        width: 100%;
        z-index: 1051;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .form-control {
        border: 1px solid #eee;
    }

    .nav-tabs-rfq {
        display: flex !important;
        align-items: center;
        column-gap: 7px;
    }

    /* Add your custom styles for radio buttons here */
    .custom-radio input[type="radio"] {
        background: #ae0a46;
        border: 0;
        width: 16px;
        height: 16px;
        border: 2px solid #e1e1e1;
    }

    .custom-radio label {
        /* Add your styles for the label containing the radio button and text */
    }

    .form-check-input:focus {
        border-color: transparent;
        outline: 0;
        box-shadow: none;
    }

    .repeater-add {
        position: relative;
        z-index: 5;
        top: -51px;
        width: 30px !important;
        right: 50px;
        background: transparent;
        color: white;
        border: 0;
    }

    .repeater-delete {
        background: transparent;
        color: white;
        border: 0;
    }

    .nav-tabs .nav-item .nav-link.active {
        background: none;
        border: 1px dashed #ae0a46;
        color: #ae0a46;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
    }

    .nav-tabs .nav-link,
    .nav-tabs .nav-item .nav-link {
        border: 1px solid #adadad;
        color: black;
        font-size: 16px;
        cursor: pointer;
        font-weight: 400;
    }

    .nav-tabs .nav-item {
        margin: 0px;
    }

    .nav-tabs .nav-link,
    .nav-tabs .nav-item .nav-link:hover {
        border: 1px solid #ae0a46;
    }

    /* Add your additional styles here */
    .rfq_box1,
    .rfq_box2 {
        background-image: url('https://i.pinimg.com/originals/96/03/b3/9603b3ad189fa4d29a3a7b2a33c5cd45.jpg');
        transition: box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .changing-class {
        background-image: none;
        border: 1px dashed #ae0a46;
        color: #ae0a46;
    }

    .rfq-text {
        border-bottom: 2px solid #ae0a46;
    }

    @media only screen and (max-width: 576px) {
        .qtyInput {
            width: 90% !important;
        }

        .rfq-triger {
            display: none;
        }

        .nav-tabs-rfq .nav-item {
            width: 100% !important;
        }

        .qtyBox {
            margin-top: 10px;
            margin-left: 0px !important;
        }

        .productInput {
            width: 90% !important;
            margin-left: 30px;
        }

        .repeater-add {
            top: -90px;
            right: 5px;
        }

        .repeater-delete {
            padding-left: 0.4rem !important;
        }

        .another-rfq-field {
            position: relative;
            top: -1.5rem;
        }

        #multi_step_form .container fieldset.step .prevStep {
            position: absolute;
            left: -15px;
        }

        #multi_step_form .container fieldset.step .nextStep {
            position: absolute;
            right: 0px;
        }

        #multi_step_form .container #multistep_nav .activated_step {
            background-color: #ae0a46;
            color: white;
        }

        .fa-circle-question {
            display: none !important;
        }

        #multi_step_form .container fieldset.step {
            position: relative;
            padding: 0px;
            padding-bottom: 50px;
        }

        .multi_step_form-box {
            margin-bottom: 0px !important;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 1440px) {
        /* Styles for laptops */
        /* Add your CSS rules here */
    }

    @media only screen and (min-width: 1366px) {
        .extra-btns {
            transform: translateY(-76%) rotate(-90deg) !important;
            width: 332px !important;
        }

        .rfq-area {
            padding-bottom: 15px !important;
        }
    }

    @media only screen and (min-width: 1920px) {
        .extra-btns {
            transform: translateY(-50%) rotate(-90deg) !important;
            width: 367px !important;
        }
    }
</style>
