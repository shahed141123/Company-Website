@extends('frontend.master')
@section('content')
    @include('frontend.pages.kukapages.partial.page_header')
    <section class="header" id="myHeader">
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-12">
                    <h2 class="company-tab-title">
                        <span>{{ ucfirst($brand->title) }} Brochures</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="custom-col-5 col-6">
                    <div class="main_catalogue mb-2">
                        <div class="card shadow-none rounded-0 border-0">
                            <div class="cad-body">
                                <a href="">
                                    <div>
                                        <img class="img-fluid" src="https://img.directindustry.com/pdf/repository_di/19903/mi-3144-euro-z-800v-mi-3143-euro-z-440v-guide-en-1052334_1mg.jpg" alt="">
                                    </div>
                                    <div class="text-center catalogue-description p-2">
                                        <p class="p-0 m-0 catalogue-titles">MI 3144 Euro Z 800V and MI 3143 Euro Z 440V guide EN</p>
                                        <p class="p-0 m-0">20 Pages</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5 col-6">
                    <div class="main_catalogue mb-2">
                        <div class="card shadow-none rounded-0 border-0">
                            <div class="cad-body">
                                <a href="">
                                    <div>
                                        <img class="img-fluid" src="https://img.directindustry.com/pdf/repository_di/19903/mi-3144-euro-z-800v-mi-3143-euro-z-440v-guide-en-1052334_1mg.jpg" alt="">
                                    </div>
                                    <div class="text-center catalogue-description p-2">
                                        <p class="p-0 m-0 catalogue-titles">MI 3144 Euro Z 800V and MI 3143 Euro Z 440V guide EN</p>
                                        <p class="p-0 m-0">20 Pages</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5 col-6">
                    <div class="main_catalogue mb-2">
                        <div class="card shadow-none rounded-0 border-0">
                            <div class="cad-body">
                                <a href="">
                                    <div>
                                        <img class="img-fluid" src="https://img.directindustry.com/pdf/repository_di/19903/mi-3144-euro-z-800v-mi-3143-euro-z-440v-guide-en-1052334_1mg.jpg" alt="">
                                    </div>
                                    <div class="text-center catalogue-description p-2">
                                        <p class="p-0 m-0 catalogue-titles">MI 3144 Euro Z 800V and MI 3143 Euro Z 440V guide EN</p>
                                        <p class="p-0 m-0">20 Pages</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5 col-6">
                    <div class="main_catalogue mb-2">
                        <div class="card shadow-none rounded-0 border-0">
                            <div class="cad-body">
                                <a href="">
                                    <div>
                                        <img class="img-fluid" src="https://img.directindustry.com/pdf/repository_di/19903/mi-3144-euro-z-800v-mi-3143-euro-z-440v-guide-en-1052334_1mg.jpg" alt="">
                                    </div>
                                    <div class="text-center catalogue-description p-2">
                                        <p class="p-0 m-0 catalogue-titles">MI 3144 Euro Z 800V and MI 3143 Euro Z 440V guide EN</p>
                                        <p class="p-0 m-0">20 Pages</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5 col-6">
                    <div class="main_catalogue mb-2">
                        <div class="card shadow-none rounded-0 border-0">
                            <div class="cad-body">
                                <a href="">
                                    <div>
                                        <img class="img-fluid" src="https://img.directindustry.com/pdf/repository_di/19903/mi-3144-euro-z-800v-mi-3143-euro-z-440v-guide-en-1052334_1mg.jpg" alt="">
                                    </div>
                                    <div class="text-center catalogue-description p-2">
                                        <p class="p-0 m-0 catalogue-titles">MI 3144 Euro Z 800V and MI 3143 Euro Z 440V guide EN</p>
                                        <p class="p-0 m-0">20 Pages</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <h4 class="main_color text-center">No Brochures Found !</h4>
            </div>
        </div>
    </section>
    <section>
        <div class="container related_search_card">
            <div class="row">
                <div class="col">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="company-tab-title">
                                    <span style="font-size: 20px; background-color: #eeeeee;">Related Searches</span>
                                </h2>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row py-3">
                                @foreach ($related_search['categories'] as $related_category)
                                    <div class="col-sm-3">
                                        <a href="{{ route('category.html', $related_category->slug) }}"
                                            class="related_search_links"><i
                                                class="fa-solid fa-angles-right text-danger"></i>
                                            {{ $related_category->title }} </a>
                                    </div>
                                @endforeach
                                @foreach ($related_search['brands'] as $related_brand)
                                    <div class="col-sm-3">
                                        <a href="{{ route('brand.overview', $related_brand->slug) }}"
                                            class="related_search_links"><i
                                                class="fa-solid fa-angles-right text-danger"></i>
                                            {{ $related_brand->title }} </a>
                                    </div>
                                @endforeach
                                @foreach ($related_search['solutions'] as $related_solution)
                                    @if (!empty($related_solution->slug))
                                        <div class="col-sm-3">
                                            <a href="{{ route('solution.details', $related_solution->slug) }}"
                                                class="related_search_links"><i
                                                    class="fa-solid fa-angles-right text-danger"></i>
                                                {{ $related_solution['name'] }}
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                                @foreach ($related_search['industries'] as $related_industry)
                                    @if (!empty($related_industry->slug))
                                        <div class="col-sm-3">
                                            <a href="{{ route('industry.details', $related_industry->slug) }}"
                                                class="related_search_links"><i
                                                    class="fa-solid fa-angles-right text-danger"></i>
                                                {{ $related_industry['title'] }} </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
@endsection
@section('script')
<script>
    // Wait for the DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Find the element with the class 'fixed-section'
        var elementToRemoveClassFrom = document.querySelector('.fixed-section');

        // Check if the element is found before attempting to remove the class
        if (elementToRemoveClassFrom) {
            // Remove the class 'fixed-section'
            elementToRemoveClassFrom.classList.remove('fixed-section');
        }
    });
</script>
@endsection
