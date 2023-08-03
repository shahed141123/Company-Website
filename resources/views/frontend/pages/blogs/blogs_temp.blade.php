@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <!-- banner start -->
    @include('frontend.banner')
    <!-- banner start end-->

<div>
    @if(count($blogs)==0)
    <p>No Blogs Found</p>
    @endif

    @foreach($blogs as $blog)
    <h2>
        <a href="/blogs/{{$blog['id']}}"> {{$blog['title']}}</a>
    </h2>
    {{-- <p>{{$blog['description']}}</p> --}}
    <br><br>
    {{-- <h3><a href="">{{$blog->title}}</a></h3> --}}

    <img src="{{$blog->logo ? asset ('storage/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}" alt="">

 

    <div>
        {{$blog->heading1}}
    </div>
    <br>
    <div>
        {{$blog->heading2}}
    </div>
    <div>
        {{$blog->tags}}
    </div>
    <br>
    <div>
        {{$blog->description}}
    </div>
    <br>
    @endforeach

    
</div>

<!-- top product section end -->

@include('frontend.footer');


@endsection

{{-- @endsection --}}