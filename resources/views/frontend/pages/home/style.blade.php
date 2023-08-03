<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css');
    /* @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'); */

    .title_top_heading {
        font-family: "Klinic Slab";
        font-size: 36px !important;
        line-height: 36px;
        color: var(--heading);
        margin-bottom: 14px;
        font-weight: 400;
    }

    /* .footer_top{
            padding: 13px 0px 1px !important;
        } */
    .footer_top p {
        font-size: 1.5rem !important;
    }

    .custom_col-2 {
        flex: 0 0 auto;
        width: 20%;
    }

    .feature_descrip {
        height: 5rem;
    }

    .tag_btn {
        background-color: #f7f6f5;
        color: black;
        font-size: 13px;
        padding: 5px;
    }

    body {
        margin: 0;
        padding: 0;
    }

    p {
        font-size: 16px !important;
    }

    .brand_side_text {
        transition: 0.5s all !important;
    }

    .Advance-Slider {
        float: left;
        width: 100%;
        overflow: hidden;
    }

    .story_title {

        padding-bottom: 3rem;
        color: #3e332d;
        margin-top: 4rem;
    }


    .Advance-Slider button.slick-arrow {
        position: absolute;
        z-index: 2;
        top: 0;
        bottom: 0;
        height: 50px;
        width: 50px;
        background: #fff;
        z-index: 99999;
        border: none;
        margin: auto;
        font-size: 0;
        text-align: center;
        outline: none;
        cursor: pointer;
    }

    .Advance-Slider .img-fill {
        position: relative;
        height: 100%;
    }

    .Advance-Slider .img-fill img {
        height: 100%;
        width: 100%;
        /* object-fit: co; */
        animation: myMove 10s linear infinite;
    }

    .Advance-Slider .item {
        height: 65vh;
        /*80vh*/
        overflow: hidden;
        outline: none;
    }

    .Advance-Slider button.slick-next.slick-arrow {
        right: 0;
        left: auto;
    }

    .Advance-Slider button.slick-arrow:before {
        content: "\f104";
        top: 0;
        left: 0;
        margin: auto;
        font-family: fontawesome;
        font-size: 18px;
    }

    .Advance-Slider button.slick-next.slick-arrow:before {
        transform: scaleX(-1);
        display: block;
    }

    .Advance-Slider .img-fill:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .Advance-Slider ul.slick-dots {
        position: absolute;
        bottom: 20px;
        left: 0;
        width: 100%;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .Advance-Slider ul.slick-dots li {
        display: inline-block;
        height: auto;
        padding: 0 5px;
        line-height: 0px;
    }

    .Advance-Slider ul.slick-dots li button {
        height: 15px;
        width: 15px;
        border-radius: 100%;
        background: #fff;
        border: none;
        font-size: 0px;
        padding: 0px;
        opacity: 0.5;
        outline: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .Advance-Slider ul.slick-dots li.slick-active button {
        opacity: 1;
    }

    .Advance-Slider button.slick-arrow {
        display: none !important;
        perspective: 360px;
    }

    .Advance-Slider button.slick-arrow .thumb {
        display: none !important;
        position: absolute;
        height: 100px;
        width: 150px;
        left: 100%;
        top: -28px;
        transform-origin: 0% 0%;
        transform: rotate3d(1, 0, 0, 90deg);
    }

    .Advance-Slider button.slick-arrow .thumb img {
        height: 100%;
        width: 100%;
    }

    .Advance-Slider button.slick-next {}

    .Advance-Slider button.slick-next .thumb {
        left: auto;
        right: 100%;
    }

    .Advance-Slider button.slick-prev.hover-out .thumb,
    .Advance-Slider button.slick-prev .thumb {
        animation: out-left 300ms ease 0ms 1 forwards;
    }

    .Advance-Slider button.slick-prev.hover-in .thumb {
        animation: in-left 300ms ease 0ms 1 forwards;
    }

    .Advance-Slider button.slick-next.hover-out .thumb,
    .Advance-Slider button.slick-next .thumb {
        animation: out-right 300ms ease 0ms 1 forwards;
        transform-origin: 100% 50%;
    }

    .Advance-Slider button.slick-next.hover-in .thumb {
        animation: in-right 300ms ease 0ms 1 forwards;
    }

    .Advance-Slider button.slick-prev:hover {
        transform: translateX(-100%);
    }

    .Advance-Slider button.slick-prev {
        transition: all 0.3s ease;
    }

    .Advance-Slider button.slick-next:hover {
        transform: translateX(100%);
    }

    .Advance-Slider button.slick-next {
        transition: all 0.3s ease;
    }

    .Advance-Slider ul.slick-dots li button img {
        height: 0;
        width: 20px;
        top: 0;
        object-fit: cover;
        transition: height 0.2s ease 0.2s, width 0.2s ease 0s;
        position: relative;
        left: -50%;
    }

    .Advance-Slider ul.slick-dots li button a {
        position: absolute;
        height: 90px;
        bottom: calc(100%);
        width: 0;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        transition: all 0.2s ease 0.2s;
        padding-bottom: 10px;
    }

    .Advance-Slider ul.slick-dots li button {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .Advance-Slider ul.slick-dots li button:hover a img {}

    .Advance-Slider ul.slick-dots li button:hover img {
        height: 80px;
        width: 140px;
        transition: height 0.2s ease, width 0.2s ease 0.2s;
    }

    .Advance-Slider ul.slick-dots li button:hover a {
        width: 140px;
        transition: all 0.3s ease 0s;
    }

    .Advance-Slider ul.slick-dots li button:hover {
        opacity: 1;
    }

    .Advance-Slider ul.slick-dots li button:before {
        content: '';
        bottom: calc(100% + -10px);
        left: 7px;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0px;
        position: absolute;
        pointer-events: none;
        border-color: rgba(255, 255, 255, 0);
        border-top-color: #fff;
        border-width: 10px;
        margin-left: -10px;
        opacity: 0;
        transition: 0.3s ease 350ms;
    }

    .Advance-Slider ul.slick-dots li button:hover:before {
        opacity: 1;
        transition: 0.3s ease 0s;
    }

    .Advance-Slider .item.slick-active {
        animation: Slick-FastSwipeIn 1s both;
    }

    .Advance-Slider .item .contain-wrapper {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .Advance-Slider .item .contain-wrapper .dots-contain {
        display: none;
    }

    .Advance-Slider .item h3 {
        margin: 0px;
        color: #fff;
        font-size: 2rem;
        font-weight: 300;
        font-family: "allumi-2-std", "Helvetica Neue", "Helvetica", Helvetica, Arial,
            sans-serif;
        text-transform: capitalize;
    }

    .Advance-Slider .item {
        color: #fff;
        font-family: 'Roboto', sans-serif;
    }

    .Advance-Slider .item h5 {
        font-family: "Klinic Slab";
        font-size: 1rem;
        font-weight: 300;
        padding: 10px 0 0;
        margin: 0;
        text-transform: capitalize;
    }

    .Advance-Slider .item .contain-wrapper .info {
        max-width: 1200px;
    }

    .Advance-Slider .item h5 span {
        color: #00BCD4;
    }

    .Advance-Slider .item h3 span {
        color: #00BCD4;
    }

    .custom_shadow {
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    }

    /* .Advance-Slider .item h3 {
                                animation: fadeOutRight 1s both;
                            }

                            .Advance-Slider .item.slick-active h3 {
                                animation: fadeInDown 1s both 1s;
                            }

                            .Advance-Slider .item h5 {
                                animation: fadeOutLeft 1s both;
                            }

                            .Advance-Slider .item.slick-active h5 {
                                animation: fadeInLeft 1s both 1.5s;
                            } */
    .slick-dotted.slick-slider {
        margin-bottom: -100px !important;
    }

    .Advance-Slider button {
        display: none;
    }

    .our_success_item_body {
        padding: 20px 20px 0px 20px;
    }

    h1,
    h2 {
        font-size: 24px !important;
    }

    /* @keyframes myMove {
                                from {
                                    transform: scale(1.0, 1.0);
                                    transform-origin: 50% 50%;
                                }

                                to {
                                    transform: scale(1.8, 1.9);
                                    transform-origin: 50% 0%;
                                }
                            } */

    /* Product Area */
    /* PRoduct Modal */
    .button-31 {
        background-color: #ae0a46;
        border-radius: 4px;
        border-style: none;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: "Farfetch Basis", "Helvetica Neue", Arial, sans-serif;
        font-size: 16px;
        font-weight: 700;
        line-height: 1.5;
        margin: 0;
        max-width: none;
        min-height: 44px;
        min-width: 10px;
        outline: none;
        overflow: hidden;
        padding: 9px 20px 8px;
        position: relative;
        text-align: center;
        text-transform: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-31:hover,
    .button-31:focus {
        opacity: .75;
    }

    .product-grid {
        font-family: 'Roboto', sans-serif;
        border: 1px solid #eee;
        transition: all .4s ease-in-out;
    }

    .product-grid:hover {
        border-color: transparent;
        box-shadow: 1px 2px 24px rgba(0, 0, 0, .08);
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
    }

    .product-grid .product-image .pic-1 {
        transform: rotateY(0);
        transition: all .5s ease;
    }

    .product-grid:hover .product-image .pic-1 {
        opacity: 0;
        transform: rotateY(180deg);
    }

    .product-grid .product-image .pic-2 {
        width: 100%;
        height: 100%;
        opacity: 0;
        transform: rotateY(180deg);
        position: absolute;
        top: 0;
        left: 0;
        transition: all .5s ease;
    }

    .product-grid:hover .product-image .pic-2 {
        opacity: 1;
        transform: rotateY(0deg);
    }

    .product-grid .product-like-icon {
        color: #fff;
        font-size: 18px;
        line-height: 20px;
        position: absolute;
        top: 15px;
        right: 15px;
        transition: all .55s ease-in-out;
    }

    .product-grid .product-like-icon:hover {
        color: #0F62F9;
    }

    .product-grid .product-links {
        background: #ae0a46;
        text-align: center;
        width: 100%;
        padding: 0;
        margin: 0;
        list-style: none;
        position: absolute;
        bottom: -50px;
        left: 0;
        transition: all .3s ease;
    }

    .product-grid:hover .product-links {
        bottom: 0;
    }

    .product-grid .product-links li {
        margin: 0 2px;
        display: inline-block;
    }

    .product-grid .product-links li a {
        color: #161616;
        font-size: 16px;
        line-height: 40px;
        width: 40px;
        height: 40px;
        display: block;
        transition: all 200ms ease 0s;
    }

    .product-grid .product-links li a:hover {
        color: #0F62F9;
    }

    .product-grid .product-content {
        padding: 15px;
        position: relative;
    }

    .product-grid .titles {
        font-size: 17px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 7px;
    }

    .product-grid .titles a {
        color: black;
        transition: all 0.3s ease 0s;
        overflow: hidden;
    }

    .product-grid .titles a:hover {
        color: #ae0a46;
    }

    .product-grid .price {
        color: #000;
        font-size: 17px;
        font-weight: 700;
        margin: 0 0 5px;
    }

    .product-grid .rating {
        padding: 0;
        list-style: none;
        margin: 0;
    }

    .product-grid .rating li {
        color: #FFB627;
        font-size: 12px;
    }

    .product-grid .rating li.far {
        color: #999;
    }

    .product-grid .rating li.count {
        color: #52525c;
        font-weight: 600;
        display: inline-block;
    }

    .product-grid .add-to-cart {
        color: #fff;
        background: #ae0a46;
        font-size: 15px;
        text-align: center;
        line-height: 44px;
        width: 44px;
        height: 44px;
        border-radius: 30px;
        display: block;
        position: absolute;
        right: 12px;
        bottom: 10px;
        transition: all .2s ease-in-out;
    }

    .product-grid:hover .add-to-cart {
        color: #fff;
        background: #ae0a46;
        border-top-left-radius: 0;
    }

    .details_icon {
        /* font-size: 25px !important; */
        padding: 12px;
        background: #ae0a46ab;
        border-radius: 50%;
        color: white;
    }





    /*Product  Slick Slider Css Ruls */
    .slick-slider {
        position: relative;
        display: block;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0
    }

    .slick-list:focus {
        outline: none
    }

    .slick-list.dragging {
        cursor: hand
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: ''
    }

    .slick-track:after {
        clear: both
    }

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-initialized .slick-slide {
        display: block
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent
    }

    .img-fill {
        width: 100%;
        display: block;
        overflow: hidden;
        position: relative;
        text-align: center
    }

    .img-fill img {
        height: 100%;
        min-width: 100%;
        position: relative;
        display: inline-block;
        max-width: none
    }


    /* Slider Theme Style */

    .Container {
        padding: 0 15px;
    }

    .Container:after,
    .Container .Head:after {
        content: '';
        display: block;
        clear: both;
    }

    .Container .Head {
        font: 20px/50px NeoSansR;
        color: #222;
        height: 52px;
        over-flow: hidden;
        border-bottom: 1px solid #ae0a46;
    }

    .Container .Head .Arrows {
        float: right;
    }

    .Container .Head .Slick-Next,
    .Container .Head .Slick-Prev {
        display: inline-block;
        width: 38px;
        height: 38px;
        margin-top: 6px;
        background: #2b2b2b;
        color: #FFF;
        margin-left: 5px;
        cursor: pointer;
        font: 18px/36px FontAwesome;
        text-align: center;
        transition: all 0.5s;
    }

    .Container .Head .Slick-Next:hover,
    .Container .Head .Slick-Prev:hover {
        background: #33687a;
    }

    .Container .Head .Slick-Next:before {
        content: '\f105'
    }

    .Container .Head .Slick-Prev:before {
        content: '\f104'
    }

    .SlickCarousel {
        margin: 0 -7.5px;
        margin-top: 10px;
    }

    .ProductBlock {
        padding: 0 7.5px;
    }

    .ProductBlock .img-fill {
        height: 200px;
    }

    @keyframes Slick-FastSwipeIn {
        0% {
            transform: rotate3d(0, 1, 0, 150deg) scale(0) perspective(400px);
        }

        100% {
            transform: rotate3d(0, 1, 0, 0deg) scale(1) perspective(400px);
        }
    }

    @keyframes in-left {
        from {
            -webkit-transform: rotate3d(0, 1, 0, 90deg);
            transform: rotate3d(0, 1, 0, 90deg);
        }

        to {
            -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
        }
    }

    @keyframes out-left {
        from {
            -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
        }

        to {
            -webkit-transform: rotate3d(0, 1, 0, 86deg);
            transform: rotate3d(0, 1, 0, 86deg);
        }
    }

    @keyframes in-right {
        from {
            -webkit-transform: rotate3d(0, -1, 0, 90deg);
            transform: rotate3d(0, -1, 0, 90deg);
        }

        to {
            -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
        }
    }

    @keyframes out-right {
        from {
            -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
        }

        to {
            -webkit-transform: rotate3d(0, -1, 0, 86deg);
            transform: rotate3d(0, -1, 0, 86deg);
        }
    }
</style>



