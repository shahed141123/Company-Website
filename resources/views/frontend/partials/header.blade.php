@include('frontend.partials.header_partial')
@php
    // Load site settings (assuming there's only one row in the 'sites' table)
$setting = App\Models\Site::first();

// Load industries with eager loading
$industrys = App\Models\Admin\IndustryPage::orderByDesc('id')
    ->limit(4)
    ->get(['id', 'industry_id']);

// Load features with eager loading and caching
$features = App\Models\Admin\Feature::inRandomOrder()
    ->limit(2)
    ->select('id', 'title', 'image', 'created_at', 'badge')
    ->get();

// Load feature events with eager loading and caching
$feature_events = App\Models\Admin\Feature::inRandomOrder()
    ->limit(2)
    ->select('id', 'title', 'image', 'created_at', 'badge')
    ->get();

// Load solution details with eager loading and caching
$solutions = App\Models\Admin\SolutionDetail::orderByDesc('id')
    ->inRandomOrder()
    ->limit(4)
    ->get(['id', 'name','slug']);

// Load brand pages with eager loading and caching
$brands = App\Models\Admin\BrandPage::orderByDesc('id')
    ->inRandomOrder()
    ->limit(8)
    ->get(['id', 'brand_id']);

// Load categories with caching
$categorys = App\Models\Admin\Category::orderByDesc('id')
    ->limit(8)
    ->get(['id', 'slug', 'title']);

// Load featured blogs with caching
$blogs = App\Models\Admin\Blog::where('featured', '1')
    ->inRandomOrder()
    ->limit(2)
    ->select('id', 'badge', 'title', 'image', 'created_at', 'created_by')
    ->get();

// Load featured client stories with caching
$clientstorys = App\Models\Admin\ClientStory::where('featured', '1')
    ->inRandomOrder()
    ->limit(2)
    ->select('id', 'badge', 'image', 'title', 'created_at', 'created_by')
    ->get();

// Load featured tech glossies with caching
$techglossys = App\Models\Admin\TechGlossy::where('featured', '1')
    ->inRandomOrder()
    ->limit(2)
    ->select('id', 'badge', 'title', 'image', 'created_at', 'created_by')
    ->get();

// Load all jobs
$jobs = App\Models\Admin\Job::all();

// Load latest categories (assuming 'id' is the primary key and already indexed)
$categories = App\Models\Admin\Category::latest('id')
    ->limit(10)
    ->get(['id', 'slug', 'title']);
@endphp


<section>
    <div class="container-fluid" style="background-color: #ae0a46;z-index: 999 !important;">
        <div class="container p-2">
            <div class="row">
                <div class="col-lg-4  d-flex justify-content-start align-items-center d-none d-sm-block">
                    {{-- <span class="pt-2 text-white"><i class="ph ph-phone-call"></i></span> --}}
                    <span class="text-white p-0 ms-2" style="font-size: 13px;">(+88) 0258155838 <span
                            class="ps-1 pe-1">|</span>
                        sales@ngenitltd.com</span>
                </div>
                <div class="col-lg-4 d-flex justify-content-start align-items-center d-none d-sm-block">
                    <div class="contact_number d-flex justify-content-center align-content-center">
                        {{-- <span class="pt-1 text-white"><i class="ph ph-paper-plane-tilt"></i></span> --}}
                        <span class="text-center text-white p-0 ms-2"> </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="d-flex justify-content-end">
                            <!-- Login Top Btn -->
                            <div class="dropdown ml-2">
                                <span class="text-white dropdown-toggle pe-3" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://i.ibb.co/Wfj3hGY/sign-in-icon.png"
                                        style="height: 20px;position: relative;top: -4px;width:100%;" alt="">
                                </span>
                                <div class="dropdown-menu drpdown_menu dropdown-items_drop"
                                    aria-labelledby="dropdownMenuButton"
                                    style="z-index: 9999; margin-top: 5px;  -webkit-appearance: none;
                                    -moz-appearance: none;">
                                    @if (Auth::guard('client')->user())
                                        <a class="dropdown-item px-3 py-1" href="{{ route('client.dashboard') }}"
                                            style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                                    @else
                                        <a class="dropdown-item px-3 py-1" href="{{ route('client.login') }}"
                                            style="border-bottom: 1px #ffffff dotted">Client</a>
                                    @endif
                                    @if (Auth::guard('partner')->user())
                                        <a class="dropdown-item px-3 py-1" href="{{ route('partner.dashboard') }}"
                                            style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                                    @else
                                        <a class="dropdown-item px-3 py-1"
                                            href="{{ route('partner.login') }}">Partner</a>
                                    @endif
                                </div>
                            </div>
                            <!-- Support Top Btn -->
                            <div class="dropdown">
                                <span class="text-white dropdown-toggle pe-3" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="z-index: 9999;">
                                    <img src="https://i.ibb.co/z5ZQv7z/customer-service.png"
                                        style="width: 28px; height: 28px; position: relative;top: -3px;width:100%;" alt="">
                                </span>
                                <span class="dropdown-menu drpdown_menu dropdown-items_drop"
                                    aria-labelledby="dropdownMenuButton" style="z-index: 9999; margin-top: 5px;">
                                    <a class="dropdown-item px-3 py-1" href="{{ route('contact') }}"
                                        style="border-bottom: 1px #ffffff dotted">Contact</a>
                                    <a class="dropdown-item px-3 py-1" href="{{ route('support') }}"
                                        style="border-bottom: 1px #ffffff dotted">Support</a>
                                </span>
                            </div>

                                <a href="{{ route('mycart') }}" class="text-white p-0 pe-3">
                                    <i class="fa-solid fa-cart-plus fa-1x" style="font-size: 1.1em !important;"></i>
                                    <span class="add_cart_count" id="cartQty">{{ Cart::count() }}</span>
                                </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sticky-top" style="border-bottom: 1px solid #ae0a4629;">
    <nav class="navbar navbar-expand-lg d-flex align-content-center container-fluid bg-white p-0">
        <div class="container for_sm_menu">
            <a class="navbar-brand d-sm-none d-lg-block" href="{{ route('homepage') }}">
                <img src="{{ !empty($setting->logo) ? asset('storage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                    alt="" height="50">
            </a>


            <!---Category--->
            <div class="">
                <div class="">
                    <div class="dropdown position-static header-category-ml-60">
                        <a class="tab_btn_icon" href="#" role="button" id="dropdownMenuLink2"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                            style="padding-left: none !important;">
                            <i class="fa-solid fa-bars" style="font-size: 18px !important;"></i>
                        </a>
                        <ul class="dropdown-menu w-100 extra_category" aria-labelledby="dropdownMenuLink2">
                            <section class="header" style=" height: 100vh; margin-top: -2px;">
                                <div class="container">
                                    <div class="row tab_area_main p-2">
                                        <div class="col-md-3 tab_key_btns p-0 ">
                                            <!-- Tabs nav -->
                                            <div class="nav nav-custom flex-column nav-pills2 nav-pills-custom2"
                                                id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                {{-- Category Triger Start Here --}}
                                                @foreach ($categories as $key => $category)
                                                    <a class="nav-link px-3 p-2 shadow {{ $key === 0 ? 'show' : '' }} {{ $key === 0 ? 'active' : '' }}"
                                                        id="v-pills-home-tab{{ $category->id }}" data-toggle="pill"
                                                        href="#v-pills-home{{ $category->id }}" role="tab"
                                                        aria-controls="v-pills-home{{ $category->id }}"
                                                        aria-selected="true"
                                                        style="font-weight:500 !important; margin-bottom: 1px;">
                                                        <span class="ps-1">-- &nbsp; {{ $category->title }}</span>
                                                    </a>
                                                @endforeach



                                                {{-- Category Triger End Here --}}
                                            </div>
                                        </div>
                                        <div class="col-md-9 p-0">
                                            <!-- Tabs content -->
                                            <div class="tab-content" id="v-pills-tabContent">
                                                @foreach ($categories as $key => $category)
                                                    <div class="tab-pane fade shadow rounded p-1 {{ $key === 0 ? 'show' : '' }} {{ $key === 0 ? 'active' : '' }}"
                                                        id="v-pills-home{{ $category->id }}" role="tabpanel"
                                                        aria-labelledby="v-pills-home-tab{{ $category->id }}"
                                                        style="height: 22rem;">
                                                        {{-- Content Here --}}
                                                        @php
                                                            $sub_categorys = App\Models\Admin\Category::getSubcatByCat($category->id);
                                                        @endphp
                                                        <div class="row p-3">
                                                            @foreach ($sub_categorys as $sub_category)
                                                                <div class="col-lg-3 col-sm-6">
                                                                    <div class="fw-bold nav_title mb-2"
                                                                        style="font-size: 15px;"><span
                                                                            style="border-top: 4px solid #ae0a46;">
                                                                            {{ \Illuminate\Support\Str::substr($sub_category->title, 0, 3) }}</span>{{ \Illuminate\Support\Str::substr($sub_category->title, 3) }}
                                                                    </div>
                                                                    @php
                                                                        $sub_sub_categorys = App\Models\Admin\SubCategory::getSubSubcatBySubCat($sub_category->id);
                                                                    @endphp
                                                                    @foreach ($sub_sub_categorys as $item)
                                                                        <li class="my-2"
                                                                            style="line-height: 1.2rem !important;">
                                                                            <a class="p-0"
                                                                                href="{{ route('category.html', $item->slug) }}">
                                                                                <div>{{ $item->title }}&nbsp;<i
                                                                                        class="ph ph-caret-right menu_icons"></i>
                                                                                </div>

                                                                            </a>
                                                                        </li>
                                                                    @endforeach

                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </ul>
                    </div>
                </div>
            </div>
            <!---Category--->

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenuCanvas" aria-controls="mobileMenuCanvas" aria-expanded=" false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>






            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown position-static cool-link me-5">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Our Solution
                        </a>

                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm "
                            aria-labelledby="dropdownMenuClickableInside">
                            {{-- <div class="">
                                <div class="active_menu_design"></div>
                            </div> --}}
                            <div class="container-fluid " style="border-top: 1px solid #adadad4a !important;">
                                <div class="container py-3">
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3"><span
                                                    style="border-top: 4px solid #ae0a46;">Com</span>mon Services</div>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('software.info') }}">
                                                    <div>Software</div>
                                                    <div>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('hardware.info') }}">
                                                    Hardware
                                                    <span>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="#">
                                                    Books
                                                    <span>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3">
                                                <span style="border-top: 4px solid #ae0a46;">Ind</span>ustries
                                            </div>
                                            <li>
                                                @if (count($industrys) > 0)
                                                    @foreach ($industrys as $item)
                                                        @php
                                                            $ind = App\Models\Admin\Industry::where('id', $item->industry_id)
                                                                   ->select('id', 'slug', 'title')
                                                                   ->first();

                                                        @endphp
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ route('industry.details', $ind->slug) }}">
                                                            {{ $ind->title }}
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    @endforeach
                                                @endif
                                                {{-- <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('all.industry') }}">
                                                    <strong>View all</strong>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </a> --}}
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3"><span
                                                    style="border-top:4px solid #ae0a46;">Sol</span>ution</div>
                                            <li>
                                                @if ($solutions)
                                                    @foreach ($solutions as $item)
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ isset($item->slug) ? route('solution.details', ['id' => $item->slug]) : ''}}">
                                                            {{ $item->name }}
                                                            <div>
                                                                <i class="ph ph-caret-right menu_icons"></i>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </li>
                                            {{-- <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                href="{{ route('all.solution') }}">
                                                <strong>View all</strong>
                                                <div>
                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                </div>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid p-3" style="background-color: #f7f6f5">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">

                                        </div>
                                        <div class="col">
                                            <a href="{{ route('all.industry') }}" class="text-capitalize"><span
                                                    style="border-top: 1px solid #ae0a46;">View all
                                                    Ind</span>ustries</a>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('all.solution') }}" class="text-capitalize"><span
                                                    style="border-top: 1px solid #ae0a46;">View all
                                                    Sol</span>utions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link me-5">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Tech Content
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border shadow-sm "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid" style="background-color:#f7f6f5;">
                                <div class="container py-3">
                                    <span class="fw-bold nav_title pb-2"><span
                                            style="border-top: 4px solid #ae0a46;">Fe</span>atured Content</span>
                                    <div class="row">
                                        @if ($features)
                                            @foreach ($features as $item)
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="" style="width:130px;height:65px;">
                                                        <div class="ms-3">
                                                            <a href="{{ route('feature.details', $item->id) }}">
                                                                <strong
                                                                    style="font-size:14px;">{{ Str::limit($item->title, 100) }}</strong>
                                                            </a>
                                                            <br>
                                                            <span>{{ $item->badge }} /
                                                                {{ $item->created_at->format('d-m-Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3 p-0">
                                <div class="container py-3">
                                    <span class="fw-bold nav_title">
                                        <span style="border-top: 4px solid #ae0a46;">Late</span>st Featured
                                        Content</span>
                                    <div class="row py-3">

                                        <div class="col-lg-4 col-sm-12">

                                            @if ($blogs)
                                                @foreach ($blogs as $item)
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="" style=" width:130px;height:65px;">
                                                        <div class="ms-3">
                                                            <a href="{{ route('blog.details', $item->id) }}"
                                                                class="feature_menu_item">
                                                                <strong
                                                                    style="font-size:14px;">{{ Str::limit($item->title, 55) }}</strong>
                                                            </a>
                                                            <p class="" style="font-size: 14px;">
                                                                {{ $item->badge }} /
                                                                {{ $item->created_at->format('d-m-Y') }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            @if ($clientstorys)
                                                @foreach ($clientstorys as $item)
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="" style="width:130px; height:65px;">
                                                        <div class="ms-3">
                                                            <a href="{{ route('story.details', $item->id) }}"
                                                                class="feature_menu_item">
                                                                <strong
                                                                    style="font-size:14px;">{{ Str::limit($item->title, 55) }}</strong>
                                                            </a>
                                                            <p style="font-size: 14px;">{{ $item->badge }} /
                                                                {{ $item->created_at->format('d-m-Y') }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            @if ($techglossys)
                                                @foreach ($techglossys as $item)
                                                    <div class="d-flex align-items-center mb-2">
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="" style="width:130px; height:65px;">
                                                        <div class="ms-3">
                                                            <a href="{{ route('techglossy.details', $item->id) }}"
                                                                class="feature_menu_item">
                                                                <strong
                                                                    style="font-size:14px;">{{ Str::limit($item->title, 55) }}</strong>
                                                            </a>
                                                            <p class="" style="font-size: 14px;">
                                                                {{ $item->badge }} /
                                                                {{ $item->created_at->format('d-m-Y') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" style="background-color:#f7f6f5;">
                                    <div class="container  py-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex  ">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.blog') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Blog</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.story') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Story</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex ">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.techglossy') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Techglossy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link me-5">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside"
                            style="border-top: 1px solid #adadad4a !important;">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12">
                                        <div class="container">
                                            <div class="row d-flex justify-content-start">
                                                <div class="col-lg-3 offset-lg-1 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                            By</span>
                                                    </div>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0"
                                                            href="{{ route('software.common') }}">
                                                            Software <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0"
                                                            href="{{ route('hardware.common') }}">
                                                            Hardware <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Training <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Books <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="{{ route('shop') }}" class="common_button effect01"
                                                            style="border-radius: 25px; padding: 3px 15px !important; font-size:15px">All
                                                            Shop</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                            By Category</span>
                                                    </div>
                                                    @if (!empty($categorys))
                                                        @foreach ($categorys as $item)
                                                            <li class="px-2">
                                                                <a class="dropdown-item px-0"
                                                                    href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @endif


                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="{{ route('all.category') }}"
                                                            class="common_button effect01"
                                                            style="border-radius: 25px; padding: 3px 15px !important; font-size:15px">All
                                                            Category
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title text-center"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p By
                                                            Brands</span>
                                                    </div>
                                                    @if ($brands)
                                                        @foreach ($brands as $item)
                                                            <li class="">
                                                                <a class="dropdown-item py-1 px-0"
                                                                    href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">
                                                                    {{ App\Models\Admin\Brand::where('id', $item->brand_id)->value('title') }}
                                                                    <i class="ph ph-caret-right menu_icons"></i>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @endif

                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="{{ route('all.brand') }}"
                                                            class="common_button effect01"
                                                            style="border-radius: 25px; padding: 3px 15px !important; font-size:15px">All
                                                            Brands</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 pt-4" style="background-color:#f7f6f5;">
                                        <div class="mb-3">
                                            <span class="fw-bold nav_title ">
                                                <span style="border-top: 4px solid #ae0a46;">Exp</span>lore Our
                                                Deals</span>
                                        </div>

                                        <li><a class="dropdown-item py-1 px-0" href="{{ route('tech.deals') }}">
                                                Technology deals <i class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item py-1 px-0"
                                                href="{{ route('refurbished') }}">Certified refurbished <i
                                                    class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link me-5">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Connect Us
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside"
                            style="border-top: 1px solid #adadad4a !important;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-12 p-0" style="background-color: #f7f6f5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-2 col-sm-12  py-4">
                                                    <div class="fw-bold nav_title mb-3">
                                                        <span style="border-top: 4px solid #ae0a46;">Fea</span>tured
                                                        Events
                                                    </div>
                                                    @if (!empty($feature_events))
                                                        @foreach ($feature_events as $item)
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('storage/' . $item->image) }}"
                                                                    alt="" style="width:130px;height:65px;">
                                                                <div class="ms-3">
                                                                    <a
                                                                        href="{{ route('feature.details', $item->id) }}">
                                                                        <strong
                                                                            style="font-size:14px;">{{ Str::limit($item->title, 80) }}</strong>
                                                                    </a>
                                                                    <br>
                                                                    <span>{{ $item->badge }} /
                                                                        {{ $item->created_at->format('d-m-Y') }}</span>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    {{-- <div class="d-flex align-items-center pt-3">
                                                        <div class="d-flex justify-content-start">
                                                            <a href="javascript:void(0);" class="common_button effect01">View
                                                                All</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-12  py-4">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Ou</span>r Company
                                                    </div>
                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('about') }}">About Us <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('portfolio') }}">Portfolio <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('contact') }}">Contact Us <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>

                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Car</span>eer With
                                                        Us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('job.openings') }}">Find Jobs <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('job.registration') }}">Job
                                                            Registration <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    {{-- <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('job.openings') }}">Partner With Us
                                                            <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li> --}}
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3">
                                                        <span style="border-top: 4px solid #ae0a46;">Par</span>tner
                                                        With Us
                                                    </div>

                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="{{ route('partner.login') }}">Partner Registration
                                                            <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0"
                                                            href="javascript:void(0);">Investor <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="javascript:void(0);">News
                                                            Room <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="fw-bold nav_title mb-3">
                                                        <span style="border-top: 4px solid #ae0a46;">Sta</span>y
                                                        connected:
                                                    </div>
                                                    <ul class="sub_menu_footer_icon">
                                                        <li><a class="text-black"
                                                                href="{{ !empty($setting->facebook_url) ? $setting->facebook_url : '' }}"><i
                                                                    class="h4 fa-brands fa-square-facebook"></i></a>
                                                        </li>
                                                        <li><a class="text-black"
                                                                href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '' }}"></a>
                                                            <i class="h4 fa-brands fa-linkedin"></i>
                                                        </li>
                                                        <li><a class="text-black"
                                                                href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '' }}"></a>
                                                            <i class="h4 fa-brands fa-square-twitter"></i>
                                                        </li>
                                                        <li><a class="text-black"
                                                                href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '' }}">
                                                                <i class="h4 fa-brands fa-youtube"></i></a></li>
                                                        <li><a class="text-black"
                                                                href="{{ !empty($setting->instagram_url) ? $setting->instagram_url : '' }}"></a>
                                                            <i class="h4 fa-brands fa-square-instagram"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <div class="search-container">
                    <form method="post" action="{{ route('product.search') }}">
                        @csrf
                        <input class="search expandright" id="search_text" name="search" type="search"
                            placeholder="Search">
                        <label class="search_buttons searchbutton" for="search_text"><span
                                class="mglass">&#9906;</span></label>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- For Dropdown Category -->

    <!-- Mobile Navigation Area Here End -->

    <!-- Mobile Navigation Area Here Start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenuCanvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header ">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="{{ !empty($setting->logo) ? asset('storage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                    alt="" height="60">
            </a>
            <div>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Our Solution
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid">
                                <div class="container py-3">
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12">

                                            <li><a class="dropdown-item" href="{{ route('software.info') }}">Software
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{ route('hardware.info') }}">
                                                    Hardware </a></li>
                                            <li><a class="dropdown-item" href="#">
                                                    Books </a></li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <span class="fw-bold "><span
                                                    style="border-top: 4px solid #ae0a46;">In</span>dustries</span>
                                            <li>
                                                @if ($industrys)
                                                    @foreach ($industrys as $item)
                                                        @php
                                                            $ind = App\Models\Admin\Industry::where('id', $item->industry_id)
                                                                ->select('id', 'slug', 'title')
                                                                ->first();

                                                        @endphp
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ route('industry.details', $ind->slug) }}">
                                                            {{ $ind->title }}
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    @endforeach
                                                    <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                        href="{{ route('all.industry') }}">
                                                        <strong>View all</strong>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </a>
                                                @endif
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <span class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">So</span>lution</span>
                                            <li>
                                                @if ($solutions)
                                                    @foreach ($solutions as $item)
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ isset($item->slug) ? route('solution.details', ['id' => $item->slug]) : ''}}">
                                                            {{ $item->name }}
                                                            <div>
                                                                <i class="ph ph-caret-right menu_icons"></i>
                                                            </div>
                                                        </a>
                                                    @endforeach

                                                @endif
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('all.solution') }}">
                                                    <strong>View all</strong>
                                                    <div>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tech Content
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border shadow-sm "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container py-3">
                                <span class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Fe</span>atured
                                    Content</span>
                                <div class="row py-3">
                                    <div class="col-lg-6 col-sm-12 mt-3 ">
                                        <div class="d-flex align-items-center">
                                            <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                alt="" style=" width:100px; height:70px;">
                                            <div class="ms-3">
                                                <h6>Applying artificial intelligence to robotics is all development to
                                                    transform client
                                                    experiences....</h6>
                                                <span>AI and Robotics / 05-02-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mt-3">
                                        <div class="d-flex align-items-center">
                                            <img src="http://165.22.48.109/ngenit/storage/m1OzW4EgNIr9dtjs1679976275.jpg"
                                                alt="" style=" width: 140px;height: 70px;">
                                            <div class="ms-3">
                                                <h6>Applying artificial intelligence to robotics is all development to
                                                    transform client
                                                    experiences....</h6>
                                                <span>AI and Robotics / 05-02-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3 p-0" style="background-color:#f7f6f5;">
                                <div class="w-50 mx-auto" style="border-top: 4px solid #ae0a46;">
                                </div>
                                <div class="container py-3">
                                    <span class="fw-bold"><span style="border-top: 3px solid #ae0a46;">Late</span>st
                                        Featured
                                        Content</span>
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/uRbsNgtaAfssaAC91679398424.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">Empowering a Connected
                                                        World of Infinite
                                                        Possibilities...
                                                    </a>
                                                    <p class="" style="font-size: 14px;">
                                                        MinTAC / 01-03-2023</p class=""
                                                        style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex justify-content-center flex-col">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/YAfHztgz9t4fk3Eu1677667620.png"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/hGpSLxz8TWtzVnSD1679398154.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/pTqec3AwV6h24Dp01680594673.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3 d-flex flex-column justify-content-between">
                                        <div class="col-lg-6 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center justify-content-center ">
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12" style="margin-top: 1.5rem;">
                                            <div class="d-flex align-items-center justify-content-center ">
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid py-3">
                                <div class="row d-flex justify-content-center py-3 px-3">
                                    <div class="col-lg-2 col-sm-12">
                                        <div class="mb-4">
                                            <span class="fw-bold "><span
                                                    style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                By</span>
                                        </div>
                                        <li><a class="dropdown-item" href="#">Software
                                            </a></li>
                                        <li><a class="dropdown-item" href="#">
                                                Hardware <i class="fa-solid fa-angle-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">
                                                Training <i class="fa-solid fa-angle-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">
                                                Books <i class="fa-solid fa-angle-right"></i></a></li>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mt-3">
                                        <span class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Sho</span>p
                                            By Category</span>
                                        @if (!empty($categorys))
                                            @foreach ($categorys as $item)
                                                <li class="px-2">
                                                    <a class="dropdown-item px-0"
                                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mt-3">
                                        <span class="fw-bold text-center"><span
                                                style="border-top: 4px solid #ae0a46;">Sho</span>P By Brands</span>
                                        @if ($brands)
                                            @foreach ($brands as $item)
                                                <li class="">
                                                    <a class="dropdown-item py-1 px-0"
                                                        href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">
                                                        {{ App\Models\Admin\Brand::where('id', $item->brand_id)->value('title') }}
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3">
                                        <div class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Exp</span>lore Our Deals</div>

                                        <li><a class="dropdown-item py-1 px-0" href="{{ route('tech.deals') }}">
                                                Technology deals <i class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item py-1 px-0"
                                                href="{{ route('refurbished') }}">Certified refurbished <i
                                                    class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Connect Us
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0"
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid py-3">
                                <div class="row d-flex justify-content-center py-3 px-3">
                                    <div class="col-lg-4 col-sm-12 mt-3">
                                        <span class="fw-bold">
                                            <span style="border-top: 4px solid #ae0a46;">Fea</span>tured Events</span>
                                        @if ($feature_events)
                                            @foreach ($feature_events as $item)
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                        style="width:130px;height:65px;">
                                                    <div class="ms-3">
                                                        <a href="{{ route('feature.details', $item->id) }}">
                                                            <strong
                                                                style="font-size:14px;">{{ Str::limit($item->title, 80) }}</strong>
                                                        </a>
                                                        <br>
                                                        <span>{{ $item->badge }} /
                                                            {{ $item->created_at->format('d-m-Y') }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Ou</span>r
                                            Company</span>
                                        <li>
                                            <a class="dropdown-item p-0" href="{{ route('about') }}">About Us <i
                                                    class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item p-0" href="{{ route('portfolio') }}">Portfolio
                                                <i class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item p-0" href="{{ route('contact') }}">Contact Us <i
                                                    class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Car</span>eer With Us</span>
                                        <li>
                                            <a class="dropdown-item p-0" href="{{ route('job.openings') }}">Find
                                                Jobs <i class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item p-0" href="{{ route('job.registration') }}">Job
                                                Registration <i class="ph ph-caret-right menu_icons"></i></a>
                                        </li>

                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Par</span>tner With Us</span>
                                        <li>
                                            <a class="dropdown-item p-0" href="{{ route('partner.login') }}">Partner
                                                Registration
                                                <i class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item p-0" href="javascript:void(0);">Investor <i
                                                    class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item p-0" href="javascript:void(0);">News
                                                Room <i class="ph ph-caret-right menu_icons"></i></a>
                                        </li>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Sta</span>y
                                            Connected</span>
                                        <li class="d-flex justify-content-center py-3 text-center">
                                            <a href="{{ !empty($setting->facebook_url) ? $setting->facebook_url : '' }}"
                                                class="social_icons"><i class="fab fa-facebook"
                                                    aria-hidden="true"></i></a>
                                            <a href="{{ !empty($setting->twitter_url) ? $setting->twitter_url : '' }}"
                                                class="ms-2 social_icons">
                                                <i class="h4 fa-brands fa-linkedin"></i></a>
                                            <a href="{{ !empty($setting->linkedin_url) ? $setting->linkedin_url : '' }}"
                                                class="ms-2 social_icons">
                                                <i class="h4 fa-brands fa-square-twitter"></i></a>
                                            <a href="{{ !empty($setting->youtube_url) ? $setting->youtube_url : '' }}"
                                                class="ms-2 social_icons">
                                                <i class="h4 fa-brands fa-youtube"></i></a>
                                            <a href="{{ !empty($setting->instagram_url) ? $setting->instagram_url : '' }}"
                                                class="ms-2 social_icons">
                                                <i class="h4 fa-brands fa-square-instagram"></i></a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <div class="search-container">
                    <form method="post" action="{{ route('product.search') }}">
                        @csrf
                        <input class="search" id="search_text" name="search" type="search" placeholder="Search"
                            style="width: 296px;">
                        <label class="search_buttons searchbutton" for="search_text"><span
                                class="mglass">&#9906;</span></label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation Area Here End -->
</section>

<div class="row container mx-auto sticky-top">
    <div class="card d-none shadow-lg bg-white border rounded-0 mt-0" id="search_container">

    </div>
</div>







{{-- Sticky Menu Start --}}
{{-- <script>
    const navEl = document.querySelector('.navbar_menus')
    const navLink = document.querySelector('.navLink')

    window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
            navEl.classList.add('navbar_scrolled');
        } else if (window.scrollY < 56) {
            navEl.classList.remove('navbar_scrolled')
        }
    })
</script> --}}
{{-- Sticky Menu End --}}
