<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .accordion {
        display: flex;
        height: 100%;
    }

    .product_titles:hover {
        color: #ae0a46;
        transition: 0.5s;
    }

    .ask_for_price:hover {
        color: #ae0a46 !important;
        transition: 0.5s;
    }



    .accordion-button:focus {
        z-index: 3;
        border-color: none;
        outline: 0;
        box-shadow: none;
    }

    .sub-accordion-header {
        border-bottom: 1px solid #00000026;
        padding: 10px;
    }


    .accordion-button {
        padding: 10px !important;
        font-size: 20px;
        /* border-bottom: 1px solid #00000026; */
    }


    .accordion-button:not(.collapsed) {
        color: black !important;
        background-color: transparent !important;
        /* box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color); */
        /* border-bottom: none; */

    }

    .text-site {
        color: #ae0a46 !important;
    }

    .small_dropdown {
        padding-left: 10px !important;
    }

    .views {
        font-size: 0.85rem;
    }

    .btn:hover {
        color: #ae0a46;
    }

    .green-label {
        background-color: #f8f9fa;
        color: #ae0a46;
        border-radius: 5px;
        font-size: 0.8rem;
        margin: 0 3px;
    }

    .radio,
    .checkbox {
        padding: 6px 10px;
    }

    .border {
        border-radius: 12px;
    }

    .options {
        position: relative;
        padding-left: 25px;
    }

    .radio label,
    .checkbox label {
        display: block;
        font-size: 14px;
        cursor: pointer;
        margin: 0;
    }

    .options input {
        opacity: 0;
    }

    .checkmark {
        position: absolute;
        top: 0px;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

    .options input:checked~.checkmark:after {
        display: block;
    }

    .options .checkmark:after {
        content: "";
        width: 9px;
        height: 9px;
        display: block;
        background: white;
        position: absolute;
        top: 52%;
        left: 51%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s;
    }

    .options input[type="radio"]:checked~.checkmark {
        background: #ae0a46;
        transition: 300ms ease-in-out 0s;
    }

    .options input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1);
    }

    .count {
        font-size: 0.8rem;
    }

    label {
        cursor: pointer;
    }

    .tick {
        display: block;
        position: relative;
        padding-left: 23px;
        cursor: pointer;
        font-size: 0.8rem;
        margin: 0;
    }

    .tick input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .check {
        position: absolute;
        top: 1px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    .tick:hover input~.check {
        background-color: #f3f3f3;
    }

    .tick input:checked~.check {
        background-color: #ae0a46;
    }

    .check:after {
        content: "";
        position: absolute;
        display: none;
    }

    .tick input:checked~.check:after {
        display: block;
        transform: rotate(45deg) scale(1);
    }

    .tick .check:after {
        left: 6px;
        top: 2px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg) scale(2);
    }

    #country {
        font-size: 0.8rem;
        border: none;
        /* border-left: 1px solid #ccc; */
        padding: 0px 10px;
        outline: none;
        font-weight: 900;
    }

    #page {
        font-size: 0.8rem;
        border: none;
        /* border-left: 1px solid #ccc; */
        padding: 0px 10px;
        outline: none;
        font-weight: 900;
    }

    .close {
        font-size: 1.2rem;
    }

    div.text-muted {
        font-size: 0.85rem;
    }

    #sidebar {
        width: 25%;
        float: left;
    }

    .category {
        font-size: 0.9rem;
        cursor: pointer;
    }

    .list-group-item {
        border: none;
        padding: 0.3rem 0.4rem 0.3rem 0rem;
    }

    .badge-primary {
        background-color: #defadb;
        color: #ae0a46
    }

    .brand .check {
        background-color: #fff;
        top: 3px;
        border: 1px solid #ddd;
    }

    .brand .tick {
        font-size: 14px;
        padding-left: 25px;
    }

    .rating .check {
        background-color: #fff;
        border: 1px solid #666;
        top: 0;
    }

    .rating .tick {
        font-size: 0.9rem;
        padding-left: 25px;
    }

    .rating .fas.fa-star {
        color: #ffbb00;
        padding: 0px 3px;
    }

    .brand .tick:hover input~.check,
    .rating .tick:hover input~.check {
        background-color: #f9f9f9;
    }

    .brand .tick input:checked~.check,
    .rating .tick input:checked~.check {
        background-color: #ae0a46;
    }

    #products {
        width: 75%;
        padding-left: 0px;
        margin: 0;
        float: right;
    }

    .card:hover {
        /* transform: scale(1.1); */
        transition: all 0.5s ease-in-out;
        cursor: pointer;
    }

    .card-body {
        padding: 0.5rem;
    }

    .card-body .description {
        font-size: 0.78rem;
        padding-bottom: 8px;
    }

    div.h6,
    h6 {
        margin: 0;
    }

    .product .fa-star {
        font-size: 0.9rem;
    }

    .rebate {
        font-size: 0.9rem;
    }

    .btn.btn-primary {
        background-color: #ae0a46;
        color: #fff;
        border: 1px solid #ae0a46;
        border-radius: 7px;
        font-weight: 800;
        /* width: 95px; */
    }

    .btn.btn-primary:hover {
        background-color: #ae0a46e8 !important;
    }

    .card-img-top {
        width: 192px;
        height: 132px;
        object-fit: contain;
        margin: 0 11%;
    }

    .clear {
        clear: both;
    }

    .btn.btn-success {
        visibility: hidden;
    }

    /* Product Design For Shop Category Start*/
    .product-grid {
        font-family: 'Nunito', sans-serif;
        text-align: center;
        border-radius: 3px;
        border: 1px solid #e0e0e0;
    }

    .product-grid .product-image {
        overflow: hidden;
        position: relative;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid .product-image img {
        width: 100%;
        height: auto;
        transition: all 0.5s ease 0s;
    }

    .product-grid:hover .product-image img {
        opacity: 0.3;
    }

    .product-grid .product-sale-label {
        color: #fff;
        background: #ff3e58;
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        padding: 5px 10px 3px;
        border-radius: 3px;
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1;
    }

    .product-grid .product-like-icon {
        color: #ff3e58;
        font-size: 18px;
        line-height: 18px;
        opacity: 0;
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
        transition: all 0.3s ease 0s;
    }

    .product-grid:hover .product-like-icon {
        opacity: 1;
    }

    .product-grid:hover .product-like-icon:hover {
        color: #009850;
    }

    .product-grid .add-to-cart {
        color: #fff;
        background: #009850;
        font-size: 13px;
        font-weight: 800;
        text-transform: uppercase;
        padding: 10px;
        width: 160px;
        border-radius: 3px;
        opacity: 0;
        transform: translateX(-50%) translateY(-50%);
        position: absolute;
        top: 50%;
        left: 50%;
        transition: all 0.3s ease 0s;
    }

    .product-grid:hover .add-to-cart {
        opacity: 1;
        transform: translateX(-50%) translateY(5%);
    }

    .product-grid .add-to-cart:hover {
        background: #4ece92;
        box-shadow: 0 15px 40px rgba(250, 108, 71, .24);
    }

    .product-grid .product-content {
        padding: 14px 10px 12px;
    }

    .product-grid .title {
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
        letter-spacing: 0.5px;
        margin: 0 0 5px;
    }

    .product-grid .title a {
        color: #2d3131;
        transition: all 0.3s ease 0s;
    }

    .product-grid .title a:hover {
        color: #009850;
    }

    .product-grid .price {
        color: #009850;
        font-size: 16px;
        font-weight: 600;
    }

    .product-grid .price span {
        color: #aaa;
        text-decoration: line-through;
        margin: 0 5px 0 0;
    }

    @media screen and (max-width: 990px) {
        .product-grid {
            margin-bottom: 30px;
        }
    }

    /* Product Design For Shop Category End*/

    @media(min-width:992px) {

        .filter,
        #mobile-filter {
            display: none;
        }
    }

    @media(min-width:768px) and (max-width:991px) {

        .radio,
        .checkbox {
            padding: 6px 10px;
            width: 49%;
            float: left;
            margin: 5px 5px 5px 0px;
        }

        .filter,
        #mobile-filter {
            display: none;
        }
    }

    @media(min-width:576px) and (max-width:767px) {
        #sidebar {
            width: 35%;
        }

        #products {
            width: 65%;
        }

        .filter,
        #mobile-filter {
            display: none;
        }

        .h3+.ml-auto {
            margin: 0;
        }
    }

    @media(max-width:575px) {
        .wrapper {
            padding: 10px;
        }

        .h3 {
            font-size: 1.3rem;
        }

        #sidebar {
            display: none;
        }

        #products {
            width: 100%;
            float: none;
        }

        #products {
            padding: 0;
        }

        .clear {
            float: left;
            width: 80%;
        }

        .btn.btn-success {
            visibility: visible;
            margin: 10px 0px;
            color: #fff;
            padding: 0.2rem 0.1rem;
            width: 20%;
        }

        .green-label {
            width: 50%;
        }

        .btn.text-success {
            padding: 0;
        }

        .content,
        #mobile-filter {
            clear: both;
        }
    }
</style>
