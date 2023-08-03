@extends('frontend.master')

@section('content')

    <!--======// Header Title //======-->
    <section class="brand_header_wrapper" style="background-image: url('{{ asset('frontend/images/buy-brand-hero.jpg') }}');height:15rem">
        <div class="container">
            <h1>Shop By Brand</h1>

        </div>

    </section>
    <!--------- End --------->

    <!--======// Top Brand //=====-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>Top brands</h3>
            <hr style="background-color: #ae0a46 !important;width: 15.0%; height:2px">
        </div>
        <!--Product brands-->
        <div class="row">
            <!--Category item-->
            @foreach ($top_brands as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 p-4">
                    <a href="{{ route('brandpage.html', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}" class="top_brand_image">
                        <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . App\Models\Admin\Brand::where('id', $item->brand_id)->value('image')) }}" alt="{{App\Models\Admin\Brand::where('id', $item->brand_id)->value('title')}}" width="180px" height="100px">
                    </a>
                </div>
            @endforeach



        </div>
    </section>
    <!--------- End -------->

    <!--======// Featured brands //=====-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>Featured brands</h3>
        </div>
        <!--Product brands-->
        <div class="row">
            <!--Category item-->
            @foreach ($featured_brands as $item)
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6">
                <a href="{{ route('custom.product',$item->slug) }}" class="top_brand_image">
                    <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}">
                </a>
            </div>
            @endforeach
            <!--Category item-->

        </div>
    </section><hr>
    <!--------- End -------->

    <!--======// Alphabetically //====-->
    <section class="container section_padding">
        <div class="tech_glossary_area_left">
            <div class="browse_alphabetically">
                <h2>Explore all the brands Ngen It has to offer.</h2>
                <div class="advanceto_index">
                    <a href="">#</a>
                    <a href="#brand_A">A</a>
                    <a href="#brand_B">B</a>
                    <a href="#brand_C">C</a>
                    <a href="#brand_D">D</a>
                    <a href="#brand_E">E</a>
                    <a href="#brand_F">F</a>
                    <a href="#brand_H">H</a>
                    <a href="#brand_I">I</a>
                    <a href="#brand_K">K</a>
                    <a href="#brand_L">L</a>
                    <a href="#brand_M">M</a>
                    <a href="#brand_N">N</a>
                    <a href="#brand_O">O</a>
                    <a href="#brand_P">P</a>
                    <a href="#brand_R">R</a>
                    <a href="#brand_S">S</a>
                    <a href="#brand_T">T</a>
                    <a href="#brand_U">U</a>
                    <a href="#brand_V">V</a>
                    <a href="#brand_W">W</a>
                    <a href="#brand_Z">Z</a>
                  </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_D">
                <h2 class="letter_content_title">#</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        <li class="col-lg-3 col-sm-6"><a href="#">5G</a></li>
                    </ul>
                </div>
            </div>

            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_A">
                <h2 class="letter_content_title">A</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'A')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_B">
                <h2 class="letter_content_title">B</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'B')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_C">
                <h2 class="letter_content_title">C</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'C')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_D">
                <h2 class="letter_content_title">D</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'D')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_E">
                <h2 class="letter_content_title">E</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'E')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_F">
                <h2 class="letter_content_title">F</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'F')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_H">
                <h2 class="letter_content_title">H</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'H')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_I">
                <h2 class="letter_content_title">I</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'I')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_K">
                <h2 class="letter_content_title">K</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'K')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_L">
                <h2 class="letter_content_title">L</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'L')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_M">
                <h2 class="letter_content_title">M</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'M')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_N">
                <h2 class="letter_content_title">N</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'N')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_O">
                <h2 class="letter_content_title">O</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'O')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_P">
                <h2 class="letter_content_title">P</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'P')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_R">
                <h2 class="letter_content_title">R</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'R')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_S">
                <h2 class="letter_content_title">S</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'S')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_T">
                <h2 class="letter_content_title">T</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'T')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_U">
                <h2 class="letter_content_title">U</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'U')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_V">
                <h2 class="letter_content_title">V</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'V')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_W">
                <h2 class="letter_content_title">W</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'W')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_Z">
                <h2 class="letter_content_title">Z</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'Z')
                            <li class="col-lg-3 col-sm-6"><a href="{{ route('custom.product',$item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </section>

@endsection
