@extends('frontend.master')


@section('content')

@include('frontend.header')

 <!--======Featured client stories==========-->
 <section class="header_title_clinet_stories">
    <h1>Client stories</h1>
</section>

<section class="container">
    <div class="featured_client_stories_wrapper">
        <div class="featured_client_stories">
            <div class="container">
                <div class="featured_client_stories_title">
                    <h1 class="">Related posts</h1>
                </div>
    
                <div class="row">
                    {{-- item --}}
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="#">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (1).jpg')}}" alt="">
                                <h4>Tech journal</h6>
                                <h3>Dan Groves, VP of IT for Westerra Credit Union - Disruption is Part of the Journey</h3>
                            </a>
                            
                        </div> 
                    </div>
                    {{-- item --}}
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (2).jpg')}}" alt="">
                                <h4>Video</h6>
                                <h3>EcoStruxure IT Mainfreight Case Study</h3>
                            </a>
                            
                        </div> 
                    </div>
                    {{-- item --}}
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (3).jpg')}}" alt="">
                                <h4>Tech journal</h6>
                                <h3>Acer and Google Chrome OS Partner for Sustainable Solutions</h3>
                            </a>
                            
                        </div> 
                    </div>
                    {{-- item --}}
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="client_stories_item">
                            <a href="">
                                <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (4).jpg')}}" alt="">
                                <h4>Free ebook</h6>
                                <h3>Discover the True Potential of Virtualization</h3>
                            </a>
                            
                        </div> 
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
</section>
<!----------Featured client stories End--------->
<br><br>
<hr>
<br><br>

{{ Form::open(['method' => 'GET', 'enctype' => 'multipart/form-data']) }}

<!--============Content & Filter=============-->
<section class="container">
    <!----------Filter Top-nav Bar --------->
    <div class="clinet_stories_filter_top_bar">
        <label>Results per page </label>
        {{ Form::select('per_page', array_combine([5,10,20,40], [5,10,20,40]), $request->per_page, ['class' => 'autoSubmit']) }}
    </div>
    <hr>
    <div class="row">
        <!----------Sidebar client stories --------->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="sidebar_client_stories">
                <label> <b>{{ $blogs->count() }} </b>results matched your search</label>

                <hr>
                <!--------Your search--------->
                <div class="client_stories_your_search">
                    <h6 class="mb-4">Your search</h6>

                    @if ($request->keyword)
                        <div class="alert alert-secondary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>{{ $request->keyword }}
                        </div>
                        @endif

                        @if ($request->filterindustry)
                        @foreach ($request->filterindustry as $item)
                        <div class="alert alert-secondary alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>{{ $item }}
                        </div>
                        @endforeach
                    @endif

                    @if ($request->filtersolution)
                    @foreach ($request->filtersolution as $item)
                    <div class="alert alert-secondary alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>{{ $item }}
                    </div>
                    @endforeach
                @endif

                </div>
                
                <hr>
                <form action="{{ URL::current() }}" method="GET">
                <!-------Content Results---------->
                <div class="client_stories_narrow_content">
                    <h6 class="mb-4">Narrow content results</h6>
                    <input type="text" name="keyword" placeholder="BY KEYWORD...">
                </div>

                <br>
                    <!-------Apply Filters Button---------->
                    <div id="sticker">
                        <div class="product_apply_filter_btn d-flex">
                        <button onclick="show()" type="submit">Apply Filters</button>
                    </div>
                    </div>

                <hr>
                <!--------Topic--------->
                <div class="client_stories_filter_category">
                    <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Industry</h6>
                    
                    <div id="filter_category">
                        @foreach ($industries as $item)
                        @php
                            $checked = [];
                            if(isset($_GET['filterindustry']))
                            {
                                $checked = $_GET['filterindustry'];
                            }
                        @endphp
                        <div class="form-check p-0 m-0">
                            <input type="checkbox" name="filterindustry[]" class="custom" value="{{ $item->title }}"
                            @if (in_array($item->title,$checked)) checked @endif
                            />
                            {{ $item->title }} <br>
                            </div>
                         @endforeach
                    </div>
                    
                </div>
                <hr>
                <!--------Industry--------->
                <div class="client_stories_filter_category">
                    <h6 onclick="showhide()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Solution</h6>
                    
                    <div id="newpost">
                        @foreach ($solutions as $item)
                        @php
                            $checked = [];
                            if(isset($_GET['filtersolution']))
                            {
                                $checked = $_GET['filtersolution'];
                            }
                        @endphp
                        <div class="form-check p-0 m-0">
                            <input type="checkbox" name="filtersolution[]" class="custom" value="{{ $item->title }}"
                            @if (in_array($item->title,$checked)) checked @endif
                            />
                            {{ $item->title }} <br>
                            </div>
                         @endforeach
                    </div>
                    
                </div>
                <hr>
                <!--------End--------->

            </div>
        </div>
        <!----------conternt client stories --------->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row" style="justify-content: center">
                {{-- item --}}
                <div class="col-lg-6 col-md-6 col-sm-12">
                    @foreach($blogs as $blog)
                    <div class="client_stories_content_item">
           
                        @php
                        $tags = explode(',', $blog->tags);
                        @endphp
                        <ul style="display: flex;
                                   flex-direction: row;
                                   flex-wrap: wrap;">
                            @foreach($tags as $tag)
                            <li class="px-1">
                              <p style="color:rgb(172, 27, 124)">{{ $tag }}</p>
                            </li>
                            @endforeach
                          </ul>
                        <a href="{{ url('/blogs/'.$blog['id']) }}">
                            <img class="img-fluid" src="{{$blog->logo ? asset ('storage/Blog/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}" alt="">
                            {{-- <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (1).jpg')}}" alt=""> --}}
                            {{-- <h3 class="mt-4">{{$blog->heading1}}</h6> --}}
                            <h3 class="mt-4">{!!$blog->title!!} </h3>
                            <p>{!!$blog->header1!!}</p>
                            <h4>Client Story / {{$blog->created_at}}</h4>
                        </a>
                    </div> 
                    @endforeach
                </div>
                {{-- item --}}
                {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="client_stories_content_item">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/frontend/image/single-blog/item/item (2).jpg')}}" alt="">
                            <h3 class="mt-4">Enterprise Technology Company Modernizes Its Security Environment</h3>

                            <p>After failing an audit that highlighted multiple vulnerabilities, this global technology solutions company sought expert guidance to remediate issues and gain better visibility into the health of its IT ecosystem.</p>
                            <h4>Client story / 23 Nov 2021</h6>
                        </a>
                    </div> 
                </div>                 --}}
            </div>
        </div>
    </div>
    {{ Form::close() }}

    <!------------------Pagination------------------->
    {{-- <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            {{ $blogs->links() }}
        </nav>
    </div> --}}
</section>
<hr>
<br>
<!----------End Page--------->

<script>
    function myFunction() {
        var x = document.getElementById("filter_category");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }  
    function showhide()
    {  
         var div = document.getElementById("newpost");  
         if (div.style.display !== "none") 
         {  
             div.style.display = "none";  
         }  
         else
         {  
             div.style.display = "block";  
         }  
    } 
    //-----------------
    // $(document).ready(function() {
    //     var s = $("#sticker");
    //     var pos = s.position();					   
    //     $(window).scroll(function() {
    //         var windowpos = $(window).scrollTop();
    //         if (windowpos >= pos.top) {
    //             s.addClass("stick");
    //         } else {
    //             s.removeClass("stick");	
    //         }
    //     });
    // });
    //-----------------
    function ReadMoreLess() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var iMoreLess = document.getElementById("iMoreLess");
        var lblText = document.getElementById("lblText");
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            iMoreLess.className = "fa fa-chevron-circle-right";
            lblText.innerHTML = "See all open positions";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            iMoreLess.className = "fa fa-chevron-circle-down";
            lblText.innerHTML = "Hide all open positions";
            moreText.style.display = "inline";
        }
    }
</script>
<script>
    $(".autoSubmit").change(function() {
      $(this).parents("form").submit()
    });

    function show(){
        $("#count").show();
        $("#yoursearch").show();
        $("#hr").show();
    }
  </script>

@include('frontend.footer')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
