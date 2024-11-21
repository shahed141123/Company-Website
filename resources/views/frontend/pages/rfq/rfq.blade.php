@extends('frontend.master')
@section('content')
    @include('frontend.pages.rfq.partials.rfq_css')
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-2">

            <div class="col-lg-8 col-offset-lg-2">
                <div class="w-lg-50 w-100 mx-auto my-5 card rounded-2 shadow-sm" style="border: 1px solid #eee;">
                    <div class="card-header rfq-header border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-black py-2">Get Query</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('rfq.add') }}" class="p-3">
                            <!-- Step 1: Project Details -->
                            <div id="projectStep" class="p-5">
                                <div class="row gx-2">
                                    <div class="col-lg-12">
                                        <div class="text-end">
                                            <i class="fa-solid fa-question  tango-help-tip" aria-hidden="true"
                                                data-toggle="popover" title=""
                                                data-content="Select the right products by writing initials or full product name in the box below. Mention the quantity in the right box. Add more product input boxes by clicking the left '+' symbol."
                                                data-original-title="About RFQ"
                                                style="border: 1px solid #afafaf; color: #afafaf;border-radius: 1000%;width: 15px;height: 15px;text-align: center;font-size: 10px;display: inline-flex;justify-content: center;align-items: center;position: relative;left: 8px;cursor: pointer;"></i>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckChecked">
                                                <label class="form-check-label fw-normal" for="flexCheckChecked">
                                                    RFQ by Case
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12" id="inputRepeater">
                                        <div class="row align-items-center mb-5 input-row mt-5">
                                            <div class="col-lg-12 mx-0">
                                                <div class="rfq-repeater">
                                                    <div class="rfq-add-btns">
                                                        <button type="button" class="rounded-1" onclick="addRow()">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="rfq-title-btns">
                                                        @if ($cart_products)
                                                            @foreach ($cart_products as $key => $cart_product)
                                                                <div class="row gx-2 align-items-center">
                                                                    <div class="col-lg-10 col-10">
                                                                        <div class="">
                                                                            <input type="text" name="product_name[]" value={{ $cart_product->name }}
                                                                                class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                                placeholder="Product Title" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-2">
                                                                        <div class="">
                                                                            <input name="qty[]" type="number" value="1"
                                                                                class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                                placeholder="QTY..">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="row gx-2 align-items-center">
                                                                <div class="col-lg-10 col-10">
                                                                    <div class="">
                                                                        <input name="product_name[]"
                                                                            class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                            placeholder="Product Title" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-2">
                                                                    <div class="">
                                                                        <input name="qty[]" type="number"
                                                                            class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                            placeholder="QTY..">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="rfq-delete-btns">
                                                        <button type="button" class="" onclick="deleteRow(this)">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-lg-12" id="inputRepeater">
                                        <div class="row align-items-center mb-5 input-row mt-5">
                                            <div class="col-lg-12 mx-0">
                                                <div class="rfq-repeater">
                                                    <div class="rfq-add-btns">
                                                        <button type="button" class="rounded-1" onclick="addRow()">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="rfq-title-btns" id="productRowsContainer">
                                                        @if ($cart_products)
                                                            @foreach ($cart_products as $key => $cart_product)
                                                                <div class="row gx-2 align-items-center product-row mb-2">
                                                                    <div class="col-lg-10 col-9">
                                                                        <div>
                                                                            <input type="text" name="product_name[]"
                                                                                value="{{ $cart_product->name }}"
                                                                                class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                                placeholder="Product Title" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-1 col-2">
                                                                        <div>
                                                                            <input name="qty[]" type="number"
                                                                                value="1"
                                                                                class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                                placeholder="QTY..">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <a href="javascript:void(0)"
                                                                            class="delete-btn"
                                                                            onclick="deleteRow(this)">
                                                                            <i class="fa-regular fa-trash-can text-danger"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="row gx-2 align-items-center product-row">
                                                                <div class="col-lg-10 col-9">
                                                                    <input name="product_name[]"
                                                                        class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                        placeholder="Product Title" required>
                                                                </div>
                                                                <div class="col-lg-1 col-2">
                                                                    <input name="qty[]" type="number"
                                                                        class="form-control form-control-sm border-0 rounded-1 py-3"
                                                                        placeholder="QTY..">
                                                                </div>
                                                                <div class="col-1">
                                                                    <a href="javascript:void(0)" class="delete-btn"
                                                                        onclick="deleteRow(this)">
                                                                        <i class="fa-regular fa-trash-can text-danger"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <hr class="m-0">
                                    <div class="col-lg-12">
                                        <div class="my-4">
                                            <div class="checkbox-wrapper-4">
                                                <input class="inp-cbx" id="aditional_info" type="checkbox"
                                                    onchange="toggleDivInfo()" />
                                                <label class="cbx" for="aditional_info">
                                                    <span>
                                                        <svg width="12px" height="10px">
                                                            <use xlink:href="#aditional_info-rfq"></use>
                                                        </svg>
                                                    </span>
                                                    <span style="font-weight: normal;">Aditional Info</span>
                                                </label>
                                                <svg class="inline-svg">
                                                    <symbol id="aditional_info-rfq" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </symbol>
                                                </svg>
                                            </div>
                                        </div>
                                        <div id="toggle-content-2" style="display: none;" class="mb-4">
                                            <div class="row gx-2">
                                                <div class="col-lg-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        <label for="floatingTextarea2"
                                                            style="font-weight: normal;">Comments</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="m-0">
                                    <div class="col-lg-12">
                                        <div class="my-4">
                                            <div class="checkbox-wrapper-4">
                                                <input class="inp-cbx" id="delivery" type="checkbox"
                                                    onchange="toggleDiv()" />
                                                <label class="cbx" for="delivery">
                                                    <span>
                                                        <svg width="12px" height="10px">
                                                            <use xlink:href="#delivery-location"></use>
                                                        </svg>
                                                    </span>
                                                    <span style="font-weight: normal;">Delivery Location</span>
                                                </label>
                                                <svg class="inline-svg">
                                                    <symbol id="delivery-location" viewBox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </symbol>
                                                </svg>
                                            </div>
                                        </div>
                                        <div id="toggle-content" style="display: none;" class="mb-4">
                                            <div class="row gx-2">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <select class="select-form-input w-100 form-control"
                                                            name="country">
                                                            <option value="us">United States</option>
                                                            <option value="uk">United Kingdom</option>
                                                            <option value="bd">Bangladesh</option>
                                                            <option value="in">India</option>
                                                            <option value="ru">Russia</option>
                                                            <option value="ca">Canada</option>
                                                            <option value="au">Australia</option>
                                                            <option value="cn">China</option>
                                                            <option value="jp">Japan</option>
                                                            <option value="fr">France</option>
                                                            <option value="de">Germany</option>
                                                            <option value="br">Brazil</option>
                                                            <option value="za">South Africa</option>
                                                            <option value="ng">Nigeria</option>
                                                            <option value="it">Italy</option>
                                                            <option value="es">Spain</option>
                                                            <option value="mx">Mexico</option>
                                                            <option value="kr">South Korea</option>
                                                            <option value="ar">Argentina</option>
                                                            <option value="sa">Saudi Arabia</option>
                                                            <option value="tr">Turkey</option>
                                                            <option value="se">Sweden</option>
                                                            <option value="no">Norway</option>
                                                            <option value="fi">Finland</option>
                                                            <option value="dk">Denmark</option>
                                                            <option value="pl">Poland</option>
                                                            <option value="ch">Switzerland</option>
                                                            <option value="nl">Netherlands</option>
                                                            <option value="be">Belgium</option>
                                                            <option value="at">Austria</option>
                                                            <option value="cz">Czech Republic</option>
                                                            <option value="gr">Greece</option>
                                                            <option value="pt">Portugal</option>
                                                            <option value="hu">Hungary</option>
                                                            <option value="ua">Ukraine</option>
                                                            <option value="ro">Romania</option>
                                                            <option value="il">Israel</option>
                                                            <option value="eg">Egypt</option>
                                                            <option value="ke">Kenya</option>
                                                            <option value="ae">United Arab Emirates</option>
                                                            <option value="ph">Philippines</option>
                                                            <option value="th">Thailand</option>
                                                            <option value="my">Malaysia</option>
                                                            <option value="sg">Singapore</option>
                                                            <option value="pk">Pakistan</option>
                                                            <option value="vn">Vietnam</option>
                                                            <option value="id">Indonesia</option>
                                                            <option value="ke">Kenya</option>
                                                            <option value="np">Nepal</option>
                                                            <option value="bd">Bangladesh</option>
                                                            <option value="lk">Sri Lanka</option>
                                                            <option value="dz">Algeria</option>
                                                            <option value="ma">Morocco</option>
                                                            <option value="co">Colombia</option>
                                                            <option value="pe">Peru</option>
                                                            <option value="cl">Chile</option>
                                                            <option value="ec">Ecuador</option>
                                                            <option value="uy">Uruguay</option>
                                                            <option value="py">Paraguay</option>
                                                            <option value="cr">Costa Rica</option>
                                                            <option value="pa">Panama</option>
                                                            <option value="do">Dominican Republic</option>
                                                            <option value="hn">Honduras</option>
                                                            <option value="gt">Guatemala</option>
                                                            <option value="ni">Nicaragua</option>
                                                            <option value="sv">El Salvador</option>
                                                            <option value="bo">Bolivia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <select class="select-form-input w-100 form-control"
                                                            name="city">
                                                            <option>Choose The City</option>
                                                            <option value="ny">New York</option>
                                                            <option value="london">London</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="delhi">Delhi</option>
                                                            <option value="toronto">Toronto</option>
                                                            <option value="sydney">Sydney</option>
                                                            <option value="beijing">Beijing</option>
                                                            <option value="tokyo">Tokyo</option>
                                                            <option value="paris">Paris</option>
                                                            <option value="berlin">Berlin</option>
                                                            <option value="rio">Rio de Janeiro</option>
                                                            <option value="cape_town">Cape Town</option>
                                                            <option value="lagos">Lagos</option>
                                                            <option value="rome">Rome</option>
                                                            <option value="madrid">Madrid</option>
                                                            <option value="mexico_city">Mexico City</option>
                                                            <option value="seoul">Seoul</option>
                                                            <option value="buenos_aires">Buenos Aires</option>
                                                            <option value="riyadh">Riyadh</option>
                                                            <option value="stockholm">Stockholm</option>
                                                            <option value="oslo">Oslo</option>
                                                            <option value="helsinki">Helsinki</option>
                                                            <option value="warsaw">Warsaw</option>
                                                            <option value="zurich">Zurich</option>
                                                            <option value="amsterdam">Amsterdam</option>
                                                            <option value="brussels">Brussels</option>
                                                            <option value="vienna">Vienna</option>
                                                            <option value="athens">Athens</option>
                                                            <option value="lisbon">Lisbon</option>
                                                            <option value="budapest">Budapest</option>
                                                            <option value="bucharest">Bucharest</option>
                                                            <option value="tel_aviv">Tel Aviv</option>
                                                            <option value="cairo">Cairo</option>
                                                            <option value="nairobi">Nairobi</option>
                                                            <option value="manila">Manila</option>
                                                            <option value="bangkok">Bangkok</option>
                                                            <option value="kuala_lumpur">Kuala Lumpur</option>
                                                            <option value="singapore">Singapore</option>
                                                            <option value="karachi">Karachi</option>
                                                            <option value="ho_chi_minh">Ho Chi Minh City</option>
                                                            <option value="jakarta">Jakarta</option>
                                                            <option value="kathmandu">Kathmandu</option>
                                                            <option value="colombo">Colombo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <select class="form-select form-select-sm select-inputs"
                                                            name="project_status" data-placeholder="Select Project Status"
                                                            id="project_status">
                                                            <option>Choose project status</option>
                                                            <option value="budget_stage">Budget Stage</option>
                                                            <option value="tor_stage">Tor Stage</option>
                                                            <option value="rfq_stage">RFQ Stage</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <select class="form-select form-select-sm select-inputs"
                                                            name="project_status" data-placeholder="Select Project Status"
                                                            id="project_status">
                                                            <option value="less_one_month">Less Than One Month
                                                            </option>
                                                            <option value="two_month">Two Months</option>
                                                            <option value="three_month">Three Months</option>
                                                            <option value="six_month">Six Months</option>
                                                            <option value="one_year">One Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input name="budget" type="text"
                                                            class="form-control form-control-sm border-0 rounded-1 py-3"
                                                            placeholder="Tentative Budget..">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input name="delivery_location" type="text"
                                                            class="form-control form-control-sm border-0 rounded-1 py-3"
                                                            placeholder="Delivery Location..">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                </div>
                                <div class="pt-3 d-flex justify-content-between align-items-center">
                                    <p class="fw-normal m-0 p-0">Please complete your details for further
                                        communication needed !</p>
                                    <button type="button" class="btn-color" onclick="nextStep()">
                                        <span>Next</span>
                                        <i class="ps-2 fa-solid fa-arrow-right-long"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 2: Contact Info -->
                            <div id="contactStep" style="display: none;">
                                <div class="p-5">
                                    <div class="row">
                                        <p class="fw-normal">Contact Information</p>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input name="name" type="text"
                                                    class="form-control form-control-sm border-0 rounded-1 py-3"
                                                    placeholder="Full Name..">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input name="designation" type="text"
                                                    class="form-control form-control-sm border-0 rounded-1 py-3"
                                                    placeholder="Your designation..">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input name="email_id" type="text"
                                                    class="form-control form-control-sm border-0 rounded-1 py-3"
                                                    placeholder="Email Id..">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input name="phone" type="text"
                                                    class="form-control form-control-sm border-0 rounded-1 py-3"
                                                    placeholder="Contact  Number..">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input name="company_name" type="text"
                                                    class="form-control form-control-sm border-0 rounded-1 py-3"
                                                    placeholder="Company name..">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <input name="company_address" type="text"
                                                    class="form-control form-control-sm border-0 rounded-1 py-3"
                                                    placeholder="Company Address..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-5">
                                        <button type="button" class="btn-color" onclick="prevStep()"><i
                                                class="pe-2 fa-solid fa-arrow-left-long"></i> Back</button>
                                        <button type="submit" class="btn-color">Submit <i
                                                class="fa-regular fa-paper-plane ps-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    @include('frontend.pages.rfq.partials.rfq_js')
@endsection
