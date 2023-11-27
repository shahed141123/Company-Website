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

        {{-- <h1>Available Jobs</h1>

            <div class="row ">
                <div class="input-group w-50 mx-auto">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn job_search_btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div> --}}
    </div>
</section>
<!----------End--------->

<!--========// Job Post //========-->
<section class="container">
    <div class="row mt-5">
        <!--------Job Post item------->

        @foreach ($jobs as $item)
            <div class="col-lg-4 col-sm-12">
                <div class="job_post_card my-3">
                    {{-- <div class="job_post_card_img">
                            <img class="img-fluid"
                                src="{{ !empty($setting->logo) ? asset('storage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                                alt="">
                        </div> --}}
                    <div class="job_post_card_details w-100 ps-4">
                        <h5 class="fw-bold">{{ $item->name }}</h5>
                        <ul>
                            {{-- <li><i class="fa-solid fa-location-dot"></i> <span>Mohammadpur, Dhaka</span></li> --}}
                            {{-- <li><i class="fa-solid fa-graduation-cap"></i>Bachelor degree in any discipline</li> --}}
                            <li>
                                <i class="fa-solid fa-user-tie"></i>Experience :
                                {{ $item->experience }}
                            </li>
                            {{-- <li>
                                    <i class="fa-solid fa-calendar-day"></i>Deadline :
                                    <strong>{{ $item->deadline }}</strong>
                                </li> --}}
                        </ul>
                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <a class="common_button" href="{{ route('job.details', $item->slug) }}">Details <i
                                        class="fa-solid fa-angles-right"></i></a>
                            </div>
                            <div class="job_post_end_date">
                                <p><i class="fa-solid fa-calendar-day"></i> Deadline:</p>
                                <p style="font-family: arial;"> <strong>{{ $item->deadline }}</strong> </p>
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
<!---------
     <section>
        <div class="container">
            <div class="row d-flex justify-content-between mt-5 mb-5">
                <div class="col-md-3 col-sm-6">
                    <div class="card card-block">
                        <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg"
                            alt="Photo of sunset">
                        <div class="px-3 py-3 d-flex flex-column justify-content-center">
                            <h5 class="card-title mt-3 mb-3 fw-bold">
                                Web & Graphics Designer</h5>
                            <p class="card-text">All reqirement here please check the details.</p>
                            <div class="row d-flex">
                                <div class="col">
                                    <i class="fa-solid fa-user-tie"></i>Vacancy <br>
                                    {{-- <span class="text-danger">{{ $item->experience }}</span> --}}
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-calendar-day"></i> Deadline
                                    {{-- <span class="text-danger">{{ $item->deadline }}</span> --}}
                                </div>
                            </div>
                            <a href="" class="common_button effect01 mt-2" tabindex="-1">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    --------->
@endsection
