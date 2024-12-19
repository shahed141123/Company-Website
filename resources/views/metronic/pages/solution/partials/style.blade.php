<style>
    .site-bg {
        background-color: #0b6476;
    }

    .site-bg-two {
        background-color: #0b6476;
    }

    .site-bg {
        background-color: #0b6476;
    }

    .templates-comps::-webkit-scrollbar {
        width: 0.5em;
    }

    .templates-comps::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .templates-comps::-webkit-scrollbar-thumb {
        background-color: #0b6476;
        outline: 1px solid slategrey;
    }

    .style-columns::-webkit-scrollbar {
        width: 0.5em;
    }

    .style-columns::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .style-columns::-webkit-scrollbar-thumb {
        background-color: #0b6476;
        outline: 1px solid slategrey;
    }

    .style-columns-twos::-webkit-scrollbar {
        width: 0.5em;
    }

    .style-columns-twos::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    .style-columns-twos::-webkit-scrollbar-thumb {
        background-color: #0b6476;
        outline: 1px solid slategrey;
    }

    .templates-comps {
        background-color: #eee;
    }

    .style-columns {
        background-color: #f7f7f7;
        height: 96vh;
        overflow: auto;
    }

    .style-columns-twos {
        background-color: #eee;
    }

    .solutions-tabss {
        background: #0b6476;
        padding: 5px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
    }

    .solutions-tabss .nav-item .nav-link {
        text-align: center;
        border-bottom: 0 !important;
    }

    .solutions-tabss .nav-item:hover {
        background: white;
        color: black;
        border-radius: 0;
        text-align: center;
        border-bottom: 0 !important;
    }

    .solutions-tabss .nav-item .nav-link.active {
        background: white;
        border-radius: 5px !important;
        color: black;
        border-radius: 0;
        text-align: center;
        border-bottom: 0 !important;
    }

    .solutions-tabss .nav-item .nav-link.active:hover {
        background: white;
        color: black;
        border-radius: 0;
        text-align: center;
        border-bottom: 0 !important;
    }

    .nav-line-tabs .nav-item .nav-link:hover {
        border-bottom: 0 !important;
    }

    /* General container with both horizontal and vertical scrolling */
    .styling-container {
        height: 96vh;
        overflow: auto;
        /* Enables both horizontal and vertical scrolling */
        scrollbar-width: none;
        /* Firefox - hides the scrollbar */
        -ms-overflow-style: none;
        /* IE and Edge - hides the scrollbar */
    }

    .styling-container::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari, and Opera - hides the scrollbar */
    }

    /* Vertical scrolling only */
    .styling-container-1 {
        height: 100vh;
        overflow-y: auto;
        /* Enables vertical scrolling only */
        scrollbar-width: none;
        /* Firefox - hides the scrollbar */
        -ms-overflow-style: none;
        /* IE and Edge - hides the scrollbar */
    }

    .styling-container-1::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari, and Opera - hides the scrollbar */
    }

    /*
  .checkbox-image input[type="checkbox"] {
    display: none;
  } */

    .checkbox-image label {
        cursor: pointer;
        display: inline-block;
        text-align: center;
    }

    .checkbox-image img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 2px solid transparent;
        transition: border-color 0.3s ease;
    }

    .preview img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .checkbox-image input[type="checkbox"]:checked+label img {
        border: 2px solid #0b6476 !important;
    }

    .checkbox-image {
        padding: 10px;
        padding-bottom: 0px;
    }

    .checkbox-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 2px solid transparent;
        transition: border-color 0.3s ease;
    }

    .solution-styles-tab {
        background: transparent;
        border-radius: 5px;
        color: black;
        border: white !important;
    }

    .nav-tabs .nav-item.show .solution-styles-tab,
    .nav-tabs .solution-styles-tab.active {
        background-color: #0b6476 !important;
        color: white !important;
    }

    .nav-tabs {
        border-bottom: 0;
    }

    .nav-tabs .solution-styles-tab:focus,
    .nav-tabs .solution-styles-tab:hover {
        background-color: #0b6476 !important;
        color: #fff;
    }

    .window {
        margin: auto;
        border: 7px solid #1d505d;
        border-radius: 5px;
        box-shadow: 0px 20px 46px 2px #bcc6ff;
        cursor: n-resize;
    }

    .window img {
        width: 100%;
        object-fit: cover;
        object-position: top;
        height: 450px;
        transition: 5s all ease;
    }

    .window img:hover {
        object-position: bottom;
    }

    .credit {
        font-weight: 300;
        text-align: center;
        margin-top: 6rem;
        color: #b6bee8;
        font-size: 14px;
    }

    .credit:hover span {
        color: #e91e63;
    }

    .credit:hover a {
        color: #e91e63;
        border-color: #e91e63;
    }

    .credit span {
        color: #b6bee8;
        transition: ease all 200ms;
    }

    .credit a {
        color: #b6bee8;
        transition: ease-in all 700ms;
        text-decoration: none;
        border-bottom: 2px solid #b6bee8;
    }

    .credit a:hover {
        color: #fff;
        box-shadow: inset 0 -5.5rem 0 #e91e63;
        border-bottom: 2px solid #e91e63;
    }

    .titles {
        background: #0b6476;
        color: white;
    }

    .checkbox-wrapper-4 * {
        box-sizing: border-box;
    }

    .checkbox-wrapper-4 .cbx {
        width: 100%;
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        padding: 12px 12px;
        border-radius: 6px;
        overflow: hidden;
        transition: all 0.2s ease;
        display: inline-block;
        background: #0b647624;
    }

    .checkbox-wrapper-4 .cbx:not(:last-child) {
        margin-right: 0px;
    }

    .checkbox-wrapper-4 .cbx:hover {
        background: #0b647624;
    }

    .checkbox-wrapper-4 .cbx span {
        float: left;
        vertical-align: middle;
        transform: translate3d(0, 0, 0);
    }

    .checkbox-wrapper-4 .cbx span:first-child {
        position: relative;
        width: 18px;
        height: 18px;
        border-radius: 4px;
        transform: scale(1);
        border: 1px solid #cccfdb;
        transition: all 0.2s ease;
        box-shadow: 0 1px 1px rgba(0, 16, 75, 0.05);
    }

    .checkbox-wrapper-4 .cbx span:first-child svg {
        position: absolute;
        top: 3px;
        left: 2px;
        fill: none;
        stroke: #fff;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 16px;
        stroke-dashoffset: 16px;
        transition: all 0.3s ease;
        transition-delay: 0.1s;
        transform: translate3d(0, 0, 0);
    }

    .checkbox-wrapper-4 .cbx span:last-child {
        padding-left: 8px;
        line-height: 18px;
    }

    .checkbox-wrapper-4 .cbx:hover span:first-child {
        border-color: #0b6476;
    }

    .checkbox-wrapper-4 .inp-cbx {
        position: absolute;
        visibility: hidden;
    }

    .checkbox-wrapper-4 .inp-cbx:checked+.cbx span:first-child {
        background: #0b6476;
        border-color: #0b6476;
        animation: wave-4 0.4s ease;
    }

    .checkbox-wrapper-4 .inp-cbx:checked+.cbx span:first-child svg {
        stroke-dashoffset: 0;
    }

    .checkbox-wrapper-4 .inline-svg {
        position: absolute;
        width: 0;
        height: 0;
        pointer-events: none;
        user-select: none;
    }

    @media screen and (max-width: 640px) {
        .checkbox-wrapper-4 .cbx {
            width: 100%;
            display: inline-block;
        }
    }

    @-moz-keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    @-webkit-keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    @-o-keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    @keyframes wave-4 {
        50% {
            transform: scale(0.9);
        }
    }

    .preview-image.selected {
        border: 3px solid #007bff;
    }

    .preview-image {
        cursor: pointer;
        position: relative;
        margin-right: 10px;
        /* Adjust as needed */
    }

    .image-icons {
        display: flex;
        /* Change to flex to arrange icons horizontally */
        position: absolute;
        top: 5px;
        /* Adjust position as needed */
        right: 5px;
        /* Adjust position as needed */
        background-color: rgba(0, 0, 0, 0.7);
        padding: 5px;
        border-radius: 4px;
        z-index: 10;
        /* Ensure icons appear above the image */
    }

    .image-icons i {
        display: none;
        color: white;
        cursor: pointer;
        margin-left: 5px;
        /* Space between icons */
    }

    .preview-not-text {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .button_container {
        display: inline-block;
        position: relative;
    }

    .my_button {
        padding: 5px 15px;
        background-color: #0b6476;
        display: inline-block;
        position: relative;
        cursor: pointer;
        color: white;
        border-radius: 5px;
    }

    .my_button:hover {
        background-color: #0b6476;
    }

    .my_target {
        background-color: #f3f3f3;
        padding: 2em;
        border: 1px solid #e5e5e5;
        width: 360px;
        display: none;
        position: absolute;
        z-index: 2;
        top: 120%;
        right: 0;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    .my_target:after {
        content: '';
        display: block;
        height: 0;
        width: 0;
        position: absolute;
        top: -10%;
        border-top: 12px solid #0b6476;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: none;
        transform: rotate(180deg);
        right: 05px;
    }

    .close_button {
        background-color: #000;
        color: #fff;
        padding: 0.4em 0.5em;
        display: inline-block;
        cursor: pointer;
        text-transform: uppercase;
        position: absolute;
        top: 0.4em;
        right: 0.4em;
        font-size: 0.8em;
        line-height: 100%;
        opacity: 0.5;
        border-radius: 0.2em;
    }

    .close_button:hover {
        opacity: 1.0;
    }

    .dark_popup .my_button {
        background-color: #00ffff;
    }

    .dark_popup .my_target {
        background-color: #1a1a1a;
        color: #dbdbdb;
        bottom: auto;
        left: 0;
        top: -60%;
        width: 15em;
        border: none;
        border-radius: 0.4em;
        opacity: 0.90;
    }

    .dark_popup .my_target:after {
        display: none;
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

    .checkbox-wrapper-1 [type=checkbox].substituted+label {
        -webkit-user-select: none;
        user-select: none;
    }




    /* Check box Two */
    .checkbox-wrapper-2 .ikxBAC {
        appearance: none;
        background-color: #dfe1e4;
        border-radius: 72px;
        border-style: none;
        flex-shrink: 0;
        height: 20px;
        margin: 0;
        position: relative;
        width: 30px;
    }

    .checkbox-wrapper-2 .ikxBAC::before {
        bottom: -6px;
        content: "";
        left: -6px;
        position: absolute;
        right: -6px;
        top: -6px;
    }

    .checkbox-wrapper-2 .ikxBAC,
    .checkbox-wrapper-2 .ikxBAC::after {
        transition: all 100ms ease-out;
    }

    .checkbox-wrapper-2 .ikxBAC::after {
        background-color: #fff;
        border-radius: 50%;
        content: "";
        height: 14px;
        left: 3px;
        position: absolute;
        top: 3px;
        width: 14px;
    }

    .checkbox-wrapper-2 input[type=checkbox] {
        cursor: default;
    }

    .checkbox-wrapper-2 .ikxBAC:hover {
        background-color: #c9cbcd;
        transition-duration: 0s;
    }

    .checkbox-wrapper-2 .ikxBAC:checked {
        background-color: #6e79d6;
    }

    .checkbox-wrapper-2 .ikxBAC:checked::after {
        background-color: #fff;
        left: 13px;
    }

    .checkbox-wrapper-2 :focus:not(.focus-visible) {
        outline: 0;
    }

    .checkbox-wrapper-2 .ikxBAC:checked:hover {
        background-color: #535db3;
    }



    /* Check Box Three */
    .checkbox-wrapper-12 {
        position: relative;
    }

    .checkbox-wrapper-12>svg {
        position: absolute;
        top: -130%;
        left: -170%;
        width: 110px;
        pointer-events: none;
    }

    .checkbox-wrapper-12 * {
        box-sizing: border-box;
    }

    .checkbox-wrapper-12 input[type="checkbox"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-tap-highlight-color: transparent;
        cursor: pointer;
        margin: 0;
    }

    .checkbox-wrapper-12 input[type="checkbox"]:focus {
        outline: 0;
    }

    .checkbox-wrapper-12 .cbx {
        width: 24px;
        height: 24px;
        top: calc(50vh - 12px);
        left: calc(50vw - 12px);
    }

    .checkbox-wrapper-12 .cbx input {
        position: absolute;
        top: 0;
        left: 0;
        width: 24px;
        height: 24px;
        border: 2px solid #bfbfc0;
        border-radius: 50%;
    }

    .checkbox-wrapper-12 .cbx label {
        width: 24px;
        height: 24px;
        background: none;
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-filter: url("#goo-12");
        filter: url("#goo-12");
        transform: trasnlate3d(0, 0, 0);
        pointer-events: none;
    }

    .checkbox-wrapper-12 .cbx svg {
        position: absolute;
        top: 5px;
        left: 4px;
        z-index: 1;
        pointer-events: none;
    }

    .checkbox-wrapper-12 .cbx svg path {
        stroke: #fff;
        stroke-width: 3;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-dasharray: 19;
        stroke-dashoffset: 19;
        transition: stroke-dashoffset 0.3s ease;
        transition-delay: 0.2s;
    }

    .checkbox-wrapper-12 .cbx input:checked+label {
        animation: splash-12 0.6s ease forwards;
    }

    .checkbox-wrapper-12 .cbx input:checked+label+svg path {
        stroke-dashoffset: 0;
    }

    @-moz-keyframes splash-12 {
        40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
        }

        100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
        }
    }

    @-webkit-keyframes splash-12 {
        40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
        }

        100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
        }
    }

    @-o-keyframes splash-12 {
        40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
        }

        100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
        }
    }

    @keyframes splash-12 {
        40% {
            background: #866efb;
            box-shadow: 0 -18px 0 -8px #866efb, 16px -8px 0 -8px #866efb, 16px 8px 0 -8px #866efb, 0 18px 0 -8px #866efb, -16px 8px 0 -8px #866efb, -16px -8px 0 -8px #866efb;
        }

        100% {
            background: #866efb;
            box-shadow: 0 -36px 0 -10px transparent, 32px -16px 0 -10px transparent, 32px 16px 0 -10px transparent, 0 36px 0 -10px transparent, -32px 16px 0 -10px transparent, -32px -16px 0 -10px transparent;
        }
    }
</style>
