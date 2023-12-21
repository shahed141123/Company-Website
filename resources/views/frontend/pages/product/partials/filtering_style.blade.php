<style>
  .brand-page-header-container {
    width: auto;
    box-shadow: var(--custom-shadow);
    padding: 10px;
    background-color: var(--white);
  }

  .dropdown-menu.show {
    border: 1px solid rgb(238, 238, 238);
    box-shadow: var(--custom-shadow);
    position: absolute;
    inset: 0px auto auto 0px;
    margin: 0px;
    transform: translate(0px, 22px);
  }

  .accordion-item {
    color: var(--bs-accordion-color);
    background-color: var(--bs-accordion-bg);
    border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
    border-left: 0;
    border-right: 0;
    box-shadow: none;
  }

  .accordion-item:first-of-type {
    border-top: none;
  }

  .accordion-item:last-of-type {
    border-bottom: 0;
    border-radius: 0;
  }

  .categories-check .control {
    display: block;
    position: relative;
    padding-left: 30px;
    cursor: pointer;
    font-size: 15px;
  }

  .categories-check .control input {
    position: absolute;
    z-index: -1;
    opacity: 0;
  }

  .categories-check .control__indicator {
    position: absolute;
    top: 2px;
    left: 0;
    height: 20px;
    width: 20px;
    background: #e6e6e6;
  }

  .categories-check .control:hover input~.control__indicator,
  .categories-check .control input:focus~.control__indicator {
    background: #ccc;
  }

  .categories-check .control input:checked~.control__indicator {
    background: #2aa1c0;
  }

  .categories-check .control:hover input:not([disabled]):checked~.control__indicator,
  .categories-check .control input:checked:focus~.control__indicator {
    background: #0e647d;
  }

  .categories-check .control input:disabled~.control__indicator {
    background: #e6e6e6;
    opacity: 0.6;
    pointer-events: none;
  }

  .categories-check .control__indicator:after {
    content: '';
    position: absolute;
    display: none;
  }

  .categories-check .control input:checked~.control__indicator:after {
    display: block;
  }

  .categories-check .control--checkbox .control__indicator:after {
    left: 8px;
    top: 4px;
    width: 3px;
    height: 8px;
    border: solid #fff;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
  }

  .categories-check .control--checkbox input:disabled~.control__indicator:after {
    border-color: #7b7b7b;
  }

  .accordion-button:not(.collapsed) {
    color: #ae0a46;
    background-color: transparent;
    box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
  }

  .accordion-button:not(.collapsed) svg {
    width: 1em;
    /* Adjust the width as needed */
    height: 1em;
    /* Adjust the height as needed */
  }

  .price-input {
    width: 100%;
    display: flex;
    margin: 30px 0 35px;
  }

  .price-input .field {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;
  }

  .field input {
    width: 100%;
    height: 35px;
    outline: none;
    font-size: 16px;
    margin-left: 5px;
    border-radius: 2px;
    text-align: center;
    border: 1px solid #eee;
    -moz-appearance: textfield;
    font-family: var(--number-font);
  }

  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }

  .price-input .separator {
    width: 130px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
  }

  .slider {
    height: 5px;
    position: absolute;
    background: #ddd;
    border-radius: 5px;
  }

  .slider .progress {
    height: 100%;
    left: 25%;
    right: 25%;
    position: absolute;
    border-radius: 5px;
    background: #ae0a46;
  }

  .slider:before {
    background-color: none;
  }

  .range-input {
    position: relative;
  }

  .range-input input {
    position: absolute;
    width: 100%;
    height: 2px;
    top: -5px;
    background: #ae0a46;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
  }

  input[type="range"]::-webkit-slider-thumb {
    height: 17px;
    width: 17px;
    border-radius: 50%;
    background: #ae0a46;
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
  }

  input[type="range"]::-moz-range-thumb {
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #ae0a46;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
  }


  .product-titles {}

  .product-ids {
    font-size: 13px;
    font-weight: 300;
  }

  .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ae0a46'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  }

  .srch-btns {
    background: #ae0a46;
    color: white;
    border: 1px;
    transition: all 0.5s;
  }

  .srch-btns:hover {
    background: #8b103dbe;
    color: white;
    border: 1px;
  }

  .sticky {
    position: fixed;
    transition: all 0.5s;
    top: -8px;
    width: 100%;
    z-index: 9999;
  }

  .brand-page-header-container {
    height: 80px;
    transition: all 0.5s;
  }

  .options {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    left: 0;
    z-index: 999;
    margin: 0 0;
    padding: 0 0;
    list-style: none;
    border: 1px solid #ccc;
    background-color: white;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  }

  .btn-details {
    padding: 10px 25px;
    line-height: 1.1;
  }

  #stand-logos {
    max-width: 100%;
    max-height: 50px;
    height: auto;
    display: block;
    margin: 0 auto;
  }

  @media only screen and (max-width: 576px) {
    .card-mobile {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    #stand-logos {
      width: auto;
      max-height: 35px;
      margin: auto;
      display: flex;
    }
  }
</style>