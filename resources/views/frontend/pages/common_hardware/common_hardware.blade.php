@extends('frontend.master')
@section('content')
    <!-- banner single page start -->

    @include('frontend.header')

    <section class="banner_single_page" style="background-image:url('{{ asset('storage/Banner/1664260881.jpg') }}')">
        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="assets/frontend/image/cart/apple.png" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading" style="font-size: 55px">Live and work effortlessly </h1>
                <p class="single_banner_text">Apple® next-generation products, available from Insight, will change the way
                    you
                    work and connect.</p>
                <!-- single banner button -->
                <div class="single_buttton_wrapper">
                    <a href="" class="single_banner_button">Talk to a specialist</a>
                    <a href="" class="single_banner_button single_banner_button2">Shop all</a>
                </div>
            </div>
        </div>
    </section>

    <!-- banner single page end-->


    <!-- aplle brand  -->

    <div class="product_veiw_details section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Surface is the answer.</h3>
                <p class="title_tex_content">You want a tablet, but you need a laptop. Microsoft Surface®, available from
                    Insight, offers the best of both.</p>
            </div>

            <!-- wrapper -->
            <div class="product_veiw_details_wrapper">

                <!-- item -->
                <div class="apple_brand">
                    {{-- image --}}
                    <div class="apple_brand_thumbnail">
                        <img src="assets/frontend/image/cart/laptop-mac.png" alt="">
                    </div>

                    {{-- content --}}

                    <div class="apple_brand_content">
                        <p class="apple_brand_name">Mac</p>
                        <p class="apple_brand_text">Game-changing performance, simplified IT and excellent value prove that
                            Mac™ means business.</p>
                        <a href="" class="product_button" tabindex="0">Add to Basket</a>
                    </div>
                </div>

                <!-- item -->
                <div class="apple_brand">
                    {{-- image --}}
                    <div class="apple_brand_thumbnail">
                        <img src="assets/frontend/image/cart/iPad.png" alt="">
                    </div>

                    {{-- content --}}

                    <div class="apple_brand_content">
                        <p class="apple_brand_name">iPad</p>
                        <p class="apple_brand_text">Unique capability. Unlimited possibilities. Versatility is in the family
                            — there’s an iPad® for everyone.</p>
                        <a href="" class="product_button" tabindex="0">Add to Basket</a>
                    </div>
                </div>

                <!-- item -->
                <div class="apple_brand">
                    {{-- image --}}
                    <div class="apple_brand_thumbnail">
                        <img src="assets/frontend/image/cart/iPhone.png" alt="">
                    </div>

                    {{-- content --}}

                    <div class="apple_brand_content">
                        <p class="apple_brand_name">iPhone</p>
                        <p class="apple_brand_text">Ultimate speed. Magical displays. Extraordinary cameras. iPhone® devices
                            deliver a fresh experience..</p>
                        <a href="" class="product_button" tabindex="0">Add to Basket</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- aplle brand end -->


    <!-- single popular Product -->

    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Popular products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product5.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">USD</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->

                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product5.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product2.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->



                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product3.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                    <!-- product_item -->

                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="assets/frontend/image/single page/single product/product4.jpg" alt="">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>

                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>

                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>

                    </div>
                    <!-- product item -->


                </div>
            </div>
        </div>
    </section>

    <!-- single popular Product end-->


    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Great tools. Great price.</div>

                    <p class="solution_feature_text">Insight and Apple Financial Services (AFS) make it even easier for
                        your organization to bring Apple products into your workplace cost-effectively. With a variety of
                        flexible solutions, we maximize the affordability of Mac and iPad devices for your organization.</p>

                    <a href="" class="product_button">Learn More</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/laptop-big.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Mac</div>

                    <p class="solution_feature_text">Meet the notebooks and desktops that continue to exceed expectations.
                        The latest Mac family is packed with crisp graphics capabilities and the supercharged Apple M1 chip.
                        In every size, they're ideal for getting work done at lightning speed.</p>

                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/laptop-mac.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution feature end-->



    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">iPad</div>

                    <p class="solution_feature_text">Make work fun with an iconic tablet. Four models let you jot down
                        notes with Apple Pencil®, add a keyboard and work from anywhere — the way you want to work.
                    </p>

                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/ipad-mobile.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Apple TV</div>

                    <p class="solution_feature_text">Watch movies and shows in amazing 4K High Dynamic Range (HDR) quality.
                        Apple TV® 4K keeps you up to date with content from apps such as Netflix®, Hulu® and ESPN®. You can
                        also stream live sports and the news, and browse content from more than 60 video services without
                        switching from one app to the next.
                    </p>
                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/apple-tv.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution feature end-->


    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">iPhone</div>

                    <p class="solution_feature_text">Combining incredible designs and advanced features, the iPhone is an
                        experience you won’t forget. Capture your favorite moments with an enhanced dual camera, interact in
                        a magical way with Dynamic Island and go at the speed of lightning with the A16 Bionic Chip.</p>

                    <a href="" class="product_button">Learn more</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/iphone-brand.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product solution end -->


    <!-- solution feature -->

    <section class="solution_feature solution_feature2">
        <div class="container">
            <div class="solution_feature_wrapper solution_feature_wrapper2">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Apple Watch</div>

                    <p class="solution_feature_text">Take your applications wherever you go. The Apple Watch® family
                        seamlessly integrates between your iPhone and other Apple devices, so you can stay connected
                        anywhere and never miss an important notification.
                    </p>
                    <a href="" class="product_button">Shop Now</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/iphone-watch.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- solution feature end-->


    <!-- solution feature -->

    <section class="solution_feature">
        <div class="container">
            <div class="solution_feature_wrapper">

                <!-- content -->
                <div class="solution_feature_content">

                    <div class="solution_feature_title">Maximize your Apple investment.</div>

                    <p class="solution_feature_text">Together, Insight and Apple offer solutions that will modernize your
                        digital workplace environment. Our services were developed based on Apple’s best practices to help
                        you deploy and manage the consumption of Apple devices at scale, achieving full ecosystem
                        integration.</p>

                    <a href="" class="product_button">Learn more</a>

                </div>
                <!-- image -->
                <div class="solution_feature_image">
                    <img src="assets/frontend/image/cart/group.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Product solution end -->

    {{-- apple resaler --}}

    <div class="apple_resaler">
        <div class="container">
            {{-- wrapper --}}
            <div class="apple_resaler_wrapper">
                {{-- content --}}
                <div class="apple_resaler_content">
                    {{-- logo --}}
                    <div class="apple_resaler_content_logo">
                        <img src="assets/frontend/image/cart/apple-logo.png" alt="">
                    </div>
                    <p class="apple_reselar_title">Achieve your ambitious goals</p>
                    <p class="apple_reselar_maint">Achieve IT with Insight and Mac</p>

                    <a href="" class="product_button">Learn more</a>
                </div>
                {{-- image --}}
                <div class="apple_resaler_image">
                    <img src="assets/frontend/image/cart/laptop-mac.png" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- apple resaler end --}}

    <!-- feature content -->

    <div class="feature_content section_padding">
        <div class="container">
            <!-- section title -->
            <div class="section_title">
                <h3 class="title_top_heading">Featured content</h3>
            </div>
            <!-- wrapper -->
            <div class="feature_content_wrapper">
                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature1.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>

                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature2.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>


                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature3.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>


                <!-- item -->
                <a href="" class="feature_content_item">
                    <!-- image -->
                    <div class="feature_content_item_thumbnail">
                        <img src="assets/frontend/image/single page/feature/feature4.jpg" alt="">
                    </div>
                    <!-- content -->
                    <div class="feature_content_item_content">
                        <p class="feature_content_item_name"> Solution brief </p>
                        <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- feature content end-->
@endsection
