
<style>
    body {
        font-family: 'Allumi Std Extended';
    }

    .feature_menu_item {
        font-size: 14px;
    }

    a {
        color: #5e5e5e;
    }

    a:hover {
        color: #ae0a46;
    }

    .modal-backdrop {
        z-index: 0;
    }

    .dropdown-container {
        position: relative;
    }

    .dropdown-btn {
        width: 70px;
        background: cyan;
        padding: 12px;
    }

    .dropdown-content {
        position: absolute;
    }

    .dropdown-content a {
        margin-bottom: 1px;
        background: cyan;
        display: block;
    }

    .search-container {
        position: relative;
        display: inline-block;
        margin: 4px 2px;
        height: 50px;
        width: 50px;
        vertical-align: bottom;
    }

    .mglass {
        display: inline-block;
        pointer-events: none;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
    }

    .searchbutton {
        position: absolute;
        font-size: 30px;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .search:focus+.searchbutton {
        transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
        background-color: #f7f6f5;
        color: black;
    }

    .search {
        position: absolute;
        left: 49px;
        /* Button width-1px (Not 50px/100% because that will sometimes show a 1px line between the search box and button) */
        background-color: #f7f6f5;
        outline: none;
        border: none;
        padding: 0;
        width: 0;
        height: 100%;
        z-index: 10;
        transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
    }

    .search:focus {
        width: 255px;
        /* Bar width+1px */
        padding: 0 16px 0 0;
    }

    .expandright {
        left: auto;
        right: 10px;
        border-radius: 25px;
    }

    .expandright:focus {
        padding: 0 0 0 16px;
    }

    .search_buttons {
        display: inline-block;
        /* background-color: #e5e2e0; */
        padding-left: 13px;
        padding-right: 15px;
        padding-top: 1px;
        height: 43px;
        line-height: 40px;
        border: 1px solid #e5e2e0;
        width: 43px;
        text-align: center;
        color: #ae0a46;
        text-decoration: none;
        cursor: pointer;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 30px;
        top: 2px;
    }

    .search_buttons:hover {
        transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
        /* background-color: white;
        color: black; */
    }

    .cool-link {
        display: inline-block;
        color: #000;
        text-decoration: none;
    }

    .cool-link::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #ae0a46;
        transition: width .3s;
    }

    .cool-link:hover::after {
        width: 100%;
        //transition: width .3s;
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #ae0a46;
        background-color: transparent;
    }

    .drpdown_menu {
        margin-top: 0px !important;
        border-radius: 0px;
    }

    .menu_icons {

        position: relative;
        font-size: 12px;
        top: 2px;
        color: #ae0a46;
    }

    .nav_title {
        color: #716e6e !important;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-item {
        color: #312d2a;
        font-size: 0.96rem;
    }

    .main_active {
        position: relative;
        height: 100px;
        width: 600px;
        background: red;
        border: 1px solid white
    }

    .active_menu_design {
        position: absolute;
        top: -10px;
        width: 14px;
        height: 14px;
        border: 15px solid transparent;
        border-top: 0;
        border-bottom: 13px solid #ae0a46;
        opacity: 1;
        left: calc(37% - 5px);
    }


    .active_menu_design2 {
        position: absolute;
        top: -15px;
        width: 14px;
        height: 14px;
        border: 14px solid transparent;
        border-top: 0;
        border-bottom: 12px solid #ae0a46;
        left: calc(49% - 25px);
        opacity: 1;
    }


    .active_menu_design3 {
        position: absolute;
        top: -15px;
        width: 14px;
        height: 14px;
        border: 14px solid transparent;
        border-top: 0;
        border-bottom: 13px solid #ae0a46;
        opacity: 1;
        left: calc(57% - 12px);
        opacity: 1;
    }


    .active_menu_design4 {
        position: absolute;
        top: -15px;
        width: 14px;
        height: 14px;
        border: 14px solid transparent;
        border-top: 0;
        border-bottom: 13px solid #ae0a46;
        left: calc(65% - 15px);
        opacity: 1;
    }


    .offcanvas.offcanvas-end {
        border-left: 0px !important;
    }

    /* FOr Category */
    .data_tabs_content {
        background-color: white;

    }

    .extra_category {
        background-color: transparent !important;
        padding: 0px;
        border-top: none !important;
        border: 0px !important;
    }

    .dropdown_area_here {
        background: #ae0a46 !important;
        padding: 22px;
        color: white;
    }

    .dropdown_area_here:hover {
        background: #f7f6f5 !important;
        padding: 22px;
        color: ae0a46;
    }

    .nav-custom {
        padding-right: 13px !important;
    }

    .nav-link {
        font-weight: 900 !important;
    }


    /* Slider */

    /* For Right Side Active */
    .nav-pills-custom .nav-link {
        color: #aaa;
        background: #fff;
        position: relative;
    }

    .nav-pills-custom .nav-link {
        font-family: 'Allumi Std Extended';
        color: #161616 !important;
        background: #e7e7e7;
        font-weight: normal;
    }

    .nav-pills-custom .nav-link.active {
        font-family: 'Allumi Std Extended';
        color: #ffffff !important;
        background: #ae0a46;
        font-weight: normal;
    }

    /* For Left Side Active */
    .nav-pills-custom2 .nav-link {
        color: #aaa;
        background: #fff;
        position: relative;
    }

    .nav-pills-custom2 .nav-link {
        font-family: 'Allumi Std Extended';
        color: #161616 !important;
        background: #e7e7e7;
        font-weight: normal;
    }

    .nav-pills-custom2 .nav-link.active {
        font-family: 'Allumi Std Extended';
        color: #ffffff !important;
        background: #ae0a46;
        font-weight: normal;
    }

    /* For Left 3 Side Active */
    .nav-pills-custom3 .nav-link {
        color: #aaa;
        background: #fff;
        position: relative;
        font-family: 'Allumi Std Extended';
        color: #161616 !important;
        background: #e7e7e7;
        font-weight: normal;
        width: 52px;
        height: 44px;
        display: flex;
        margin-top: 5px;
        justify-content: center;
    }

    .nav-pills-custom3 .nav-link {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-pills-custom3 .nav-link.active {
        font-family: 'Allumi Std Extended';
        color: #ffffff !important;
        background: #ae0a46;
        font-weight: normal;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-link i {
        font-size: 15px;
    }

    .tab-content {
        /* background: #e7e7e7 !important; */
        line-height: 25px;
        padding: 0px;
    }

    .tab_key_btns3 {
        display: flex;
        justify-content: end;
    }

    .tab_area_main {
        background: #f2f2f2;
    }

    .tab_area_main3 {
        background: transparent;
        padding: 10px;
    }

    .tab_btn_icon {
        display: inline-block;
        /* background-color: #e5e2e0; */
        padding-left: 13px;
        padding-right: 13px;
        padding-top: 1px;
        height: 43px;
        line-height: 40px;
        border: 1px solid #e5e2e0;
        width: 43px;
        text-align: center;
        color: #ae0a46;
        text-decoration: none;
        cursor: pointer;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 30px;
        top: 2px;
    }

    .tab_btn_icon3 {
        background: #f7f6f5;
        padding: 20px;
        border-radius: 50%;
        color: #ae0a46;
        margin-left: 200px;
    }
    .dropdown-toggle::after {
        display: none;
    }

    /* Add indicator arrow for the active tab */
    @media (min-width: 992px) {

        /* For Right Side Active */
        .nav-pills-custom .nav-link::before {
            content: '';
            display: block;
            border-top: 8px solid transparent;
            border-right: 10px solid #ae0a46;
            border-bottom: 8px solid transparent;
            position: absolute;
            top: 50%;
            left: -10px;
            transform: translateY(-50%);
            opacity: 0;
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }

        /* For Left Side Active */
        .nav-pills-custom2 .nav-link::before {
            content: '';
            display: block;
            border-top: 8px solid transparent;
            border-left: 10px solid #ae0a46;
            border-bottom: 8px solid transparent;
            position: absolute;
            top: 50%;
            right: -7px;
            transform: translateY(-50%);
            opacity: 0;
        }

        .nav-pills-custom2 .nav-link.active::before {
            opacity: 1;
        }

        /* For Left Side Active */
        .nav-pills-custom3 .nav-link::before {
            content: '';
            display: block;
            border-top: 8px solid transparent;
            border-left: 10px solid #ae0a46;
            border-bottom: 8px solid transparent;
            position: absolute;
            top: 50%;
            right: -10px;
            transform: translateY(-50%);
            opacity: 0;
        }

        .nav-pills-custom3 .nav-link.active::before {
            opacity: 1;
        }

    }

    @media screen and (max-width: 600px) {
        .for_sm_menu {
            padding-left: 13px !important;
            padding-right: 13px !important;
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }

    /* Slider */


</style>
