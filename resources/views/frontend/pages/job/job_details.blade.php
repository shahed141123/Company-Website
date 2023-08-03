@extends('frontend.master')
@section('content')

<!--========// Single blog content //=======-->
<section class="container">
    <div class="row mt-4">

        <div class="col-lg-2"></div>
        <div class="col-lg-8 col-sm-12">
            <!--==// Job Details //==-->
            <div class="job_details_content_wrapper">
                <!--==// Title //==-->
                <div class="d-flex justify-content-lg-end justify-content-sm-center">
                    <p><strong>Category: </strong>{{$job->category}}</p>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-sm-center">
                    <h4 class="text-success">{{$job->name}}</h4>
                </div>
                <div class="d-flex justify-content-lg-start justify-content-sm-center">
                    <h5>{{$job->company_name}}</h5>
                </div>
                <div class="d-flex justify-content-lg-end justify-content-sm-center">
                    <a href="{{route('job.openings')}}">View all jobs of this company</a>
                </div>
                <!--==// Content //==-->
                <div class="job_details_content">
                    <div>
                        <h6>Vacancy</h6>
                        <p>{{$job->vacancy}}</p>
                    </div>
                    <div>
                        <p>{!! $job->description !!}</p>

                    </div>


                <!--==// Apply Button //==-->
                <div class="job_apply_button">
                    <p><strong>Want to learn more about job sector? </strong><a href="#">Watch our virtual roundtable discussion with Groves and hear more details straight from the source.</a></p>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{$job->link}}" class="common_button2 text-white bg-success">Apply Online</a>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <p>Application Deadline : <strong> {{$job->deadline}}</strong></p>
                    </div>
                </div>
            </div>


        </div>
        <!---==/// Discover more ///===--->

    </div>

</section><br>
<!-----End------>

@endsection
