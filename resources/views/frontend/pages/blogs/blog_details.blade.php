@extends('frontend.master')
@section('content')

{{-- Blog Updated  --}}
<style>
    .blog_header {
        background-image: url(../images/buy-category-hero.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* padding: 180px 0px; */
        height: 360px;
    }
    .special_character{
        color: #ae0a46;
        font-weight: bold;
    }
    .date_blog{
        font-family: 'Poppins', sans-serif !important;
    }
    .blog_feature_description{
        border-left: 5px solid #ae0a46;
        border-right: 5px solid #ae0a46;
        padding: 20px 20px 20px;
        overflow-wrap: break-word;
        text-align: justify;
        background-color: #f7f6f5;
    }
    .blog_feature_extra{
        text-align: justify;
    }
    .tag_btn{
        background-color: #f7f6f5;
        color: black;
        font-size: 13px;
        padding: 5px;
    }
    .tag_title{
        background-color: #ae0a46;
        color: #fff;
    }
    .blogins_tags a{
        color: #808080;
    }
</style>

    <!--======// Header Title //======-->
    <section class="blog_header" style="background-image: url('{{asset('storage/'.$blog->image)}}');">
            <h1 class="text-center text-white pt-5">{{$blog->badge}}</h1>
        <div class="container ">
            <div class="row ">
              <!--BUTTON START-->
              {{-- <div class="d-flex justify-content-center align-items-center">
                <div class="m-4">
                    <a href="{{route()}}" class="common_button2" href="product_filters.html">All Client Storys</a>
                  </div>
                  <div class="m-4">
                    <a href="{{route()}}" class="common_button3" href="#">All Tech Glossys</a>
                  </div>
              </div> --}}
          </div>
        </div>
    </section>
      <!----------End--------->
    @php
        $all_tags = $blog->tags;
        $tags = explode(',', $all_tags);
        $industry_ids = json_decode($blog->industry_id);
        $category_ids = json_decode($blog->category_id);
        $brand_ids = json_decode($blog->brand_id);
        $solution_ids = json_decode($blog->solution_id);
        // dd($category_ids);
        // $industries = explode(',', );
        // $categories = explode(',', json_decode($blog->category_id));
        // $brands = explode(',', json_decode($blog->brand_id));
        // $solutions = explode(',', json_decode($blog->solution_id));
        $without_last_tags = array_slice($tags, 0, -1);
        $last_word = end($tags);
        // dd($without_last_tags);
    @endphp
<!--======// Home Cart Section //======-->
    <section class="" >
        <div class="container">
            <!-- wrapper -->
                <div class="row m-0" >
                    <!-- home card item -->
                    <div class="col-lg-12 col-sm-12 shadow-lg px-5 py-3 text-center  bg-white" style="margin-top: -4.5rem; ">
                        <h1> {{$blog->title}}</h1>
                        <div class="d-flex justify-content-between">

                                <p>By
                                    <span class="special_character">{{$blog->created_by}}</span>
                                    <span class="date_blog">/ {{$blog->created_at->format('Y-m-d')}} /
                                    </span>
                                    @if (!empty($blog->tags))
                                        Topics :
                                        @foreach ($without_last_tags as $item)
                                            <span class="special_character">{{$item}} , </span>
                                        @endforeach
                                        <span class="special_character">{{$last_word}} </span>
                                    @endif
                                </p>
                            <div class="bySocial col-3">
                                <ul class="social-icon-links pull-right" style="font-size: 1.5rem;">
                                    {!! Share::page(url('/blog/'. $blog->id . '/details'))->facebook()->twitter()->whatsapp() !!}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </section>
    <!-- home card end -->
    <section>
        <div class="container mt-5 px-2">
            <div class="row m-0">
                <div class="col-4 d-flex justify-content-start ml-2" style="border-top: 4px dotted red">

                </div>
            </div>
            <div class="row m-0 px-3">
                <div class="col-12 d-flex justify-content-center border-top-info">
                    <h4 class="text-center py-4">{!! $blog->header !!}</h4>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-4 " >

                </div>
                <div class="col-4 " >

                </div>

                <div class="col-4" style="border-bottom: 4px dotted red">

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 mb-3">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="blog_feature_description">
                    <p>{!! $blog->short_des !!}</p>
                </div>
                <div>
                    <div class="blog_feature_extra py-5">
                        <p>{!! $blog->long_des !!}</p>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="callout m-0 p-4 text-center">
                        <p><strong>{!!$blog->footer!!} </strong></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 ">
                    {{-- Releted Industry --}}
                    <div class="border my-3">
                        <h4 class="text-center py-1 tag_title">Releted Industry</h4>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="col">
                                @if ($industry_ids)
                                    @foreach ($industry_ids as $item)
                                    @php
                                        $item = str_replace('"', '', $item);
                                    @endphp
                                        <a href="" class="btn tag_btn">{{App\Models\Admin\Industry::where('id' , $item)->value('title')}}</a>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                    {{-- Releted Categories --}}
                    <div class="border my-3">
                        <img class="img-fluid" src="https://source.unsplash.com/random/580x360" alt="">
                    </div>
                    {{-- Releted Brand --}}
                    <div class="border my-3">
                        <h4 class="text-center py-1 tag_title">Releted Categories</h4>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="col">
                                @if ($category_ids)
                                    @foreach ($category_ids as $item)
                                    @php
                                        $item = str_replace('"', '', $item);
                                    @endphp
                                        <a href="" class="btn tag_btn">{{App\Models\Admin\Category::where('id',$item)->value('title')}}</a>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                    {{-- Releted Categories --}}
                    <div class="border my-3">
                        <h4 class="text-center py-1 tag_title">Releted Brand</h4>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="col">
                               @if ($brand_ids)
                                 @foreach ($brand_ids as $item)
                                    @php
                                        $item = str_replace('"', '', $item);
                                    @endphp
                                     <a href="" class="btn tag_btn">{{App\Models\Admin\Brand::where('id',$item)->value('title')}}</a>
                                 @endforeach
                               @endif
                            </div>

                        </div>
                    </div>
                    {{-- Add Image --}}
                    <div class="border my-3">
                        <img class="img-fluid" src="https://source.unsplash.com/random/480x360" alt="">
                    </div>

                    {{-- Releted Solution --}}
                    <div class="border my-3 ">
                        <h4 class="text-center py-1 tag_title">Releted Solution</h4>
                        <div class="d-flex flex-column justify-content-center">
                            <div class="col">
                                @if ($solution_ids)
                                    @foreach ($solution_ids as $item)
                                    @php
                                        $item = str_replace('"', '', $item);
                                    @endphp
                                        <a href="{{route('solution.details',$item)}}" class="btn tag_btn">{{App\Models\Admin\SolutionDetail::where('id',$item)->value('name')}}</a>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                    {{-- Add Image --}}
                    <div class="border my-3">
                        <img class="img-fluid" src="https://source.unsplash.com/random/680x360" alt="">
                    </div>
                    {{-- Releted Solution --}}
                    @if (!empty($blog->tags))
                        <div class="border my-3 ">
                            <h4 class="text-center py-1 tag_title">TAGS</h4>
                                <div class="text-start p-2">
                                    @foreach ($tags as $item)
                                    <a href="" class=" text-black">#{{$item}}</a>
                                    @endforeach
                                </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>



@endsection
