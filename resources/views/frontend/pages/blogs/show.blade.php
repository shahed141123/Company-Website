@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->

    {{-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"> --}}


    <!--==============Single blog image==================-->
    <section class="container">
        <div class="assetType">
            <a href="#">Client story</a>
        </div> 
        <div class="headline">
            <h1>{{$blog->title}}</h1>
        </div>
        <div class="aria-text">
            <h2 class="text-center"> {{$blog->header1}}</h2>
        </div>
        <div class="row">
            <div class="byTopics col-9">
                <p> v<span>/ </span><span>{{$blog->created_at}}</span> <span>/</span> <span>Topics :</span> <a href="#">Endpoint management, </a><a href="#">Virtualization</a></p>
            </div>
            <div class="bySocial col-3">
                <ul class="social-icon-links pull-right">
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/blog_img.jpg')}}" alt=""> --}}
                <img class="img-fluid" src="{{$blog->logo ? asset ('storage/Blog/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}" alt="">

            </div>
        </div>   
    </section>

    <!--==================Single blog content=================-->

    <section class="container">
        <div class="row content_wrapper">
            <div class="col-8 blog_text_area">
                {!!$blog->description!!}
            </div>
        </div>
        <div class="byTopics">
            <p>All keyword categories:
                 </span> 
                 @php
                 $tags = explode(',', $blog->tags);
                 @endphp
                 <ul style="display: flex;
                            flex-direction: row;
                            flex-wrap: wrap;">
                     @foreach($tags as $tag)
                     <li class="px-1">
                       <p style="color:rgb(172, 27, 124)">{{$tag}}</p>
                     </li>
                     @endforeach
                 </ul>
            </p>
        </div>

    </section>
    
    <br>

    <!--==================Single blog related Postes===================-->
    <section class="related_posts_wrapper">
        <div class="container">
            <div class="related_posts_title">
                <h1 class="text-center">Related posts</h1>
            </div>

            <div class="row">
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (1).jpg')}}" alt="">
                            <h4>Tech journal</h6>
                            <h3>Dan Groves, VP of IT for Westerra Credit Union - Disruption is Part of the Journey</h3>
                        </a>
                        
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (2).jpg')}}" alt="">
                            <h4>Video</h6>
                            <h3>EcoStruxure IT Mainfreight Case Study</h3>
                        </a>
                        
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (3).jpg')}}" alt="">
                            <h4>Tech journal</h6>
                            <h3>Acer and Google Chrome OS Partner for Sustainable Solutions</h3>
                        </a>
                        
                    </div> 
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (4).jpg')}}" alt="">
                            <h4>Free ebook</h6>
                            <h3>Discover the True Potential of Virtualization</h3>
                        </a>
                        
                    </div> 
                </div>
            </div>

        </div>
    </section>


    <!-- Footer section -->
    @include('frontend.footer');
    <!-- Footer section End-->

@endsection
