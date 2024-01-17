@extends('frontend.master')
@section('content')
@section('styles')
    <meta property="og:title" content="NGen IT Available Jobs">
    <!--<meta property="og:description" content="Description of your blog post">-->
    <meta property="og:image" content="http://ngenitltd.com/frontend/images/available_job.jpg">
    <!--<meta property="og:url" content="URL to your blog post">-->
@endsection
@php
    $setting = App\Models\Site::first();
@endphp

<!--======// Header Title //======-->
<section class="">
    <div>
        <img src="{{ asset('frontend/images/available_job.jpg') }}" alt="" class="img-fluid">
    </div>
</section>
<!----------End--------->

<!--========// Job Post //========-->
<section class="container">
    <div class="row my-lg-5">
        <!--------Job Post item------->

        @foreach ($jobs as $item)
            <div class="col-lg-4 col-sm-12">
                <div class="job_post_card my-3 h-lg-450px">
                    <div class="job_post_card_details w-100 ps-4">
                        <h5 class="">{{ $item->name }}</h5>
                        <ul>
                            <li>
                                <i class="fa-solid fa-user-tie"></i>Experience :
                                {{ $item->experience }}
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div>
                                <a class="common_button main_color fw-bold" href="{{ route('job.details', $item->slug) }}">Details <i
                                        class="fa-solid fa-chevron-right" style="font-size: 14px;"></i></a>
                            </div>

                            <div class="">
                                <p class="m-0"><i class="fa-solid fa-calendar-day"></i> Deadline: <strong class="main_color">{{ $item->deadline }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!--------Job Post item------->

    </div>
</section>
<!---------End--------->
@endsection
