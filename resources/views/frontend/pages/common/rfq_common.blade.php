@extends('frontend.master')
@section('content')

<section class="container" style="margin-top: 106px;">
    <div class="row my-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card">
                <div class="text-center logo mb-5">
                    <a href="{{route('homepage')}}">
                        <img src="{{ (!file_exists('upload/logoimage/'.$setting->logo)) ? $setting->logo:url('upload/logoimage/'.$setting->logo) }}" alt="Ngen It">
                    </a>
                </div>
                <div class="text-center card-header" style="background: #ae0a46;">
                    <h4 class="text-white"> Welcome To
                        <strong class="topLine" style="color: #0a0041">N</strong>Gen <strong class="bottomLine" style="color: #0a0041">I</strong>t.</h4>
                </div>
                <div class="card-body text-center">
                    <h6>Thank you for your query.
                        One of our representatives will contact you as soon as possible to help you through this inquiry.
                        Check your dashboard and email for feedback.
                        Thank You for staying with us</h6>

                        @if (Auth::guard('partner')->user())
                        <a class="common_button2 mt-3" href="{{route('partner.dashboard')}}" style="border-bottom: 1px #ffffff dotted">Go to Your Dashboard</a>
                        @elseif (Auth::user())
                        <a class="common_button2 mt-3" href="{{route('client.dashboard')}}" style="border-bottom: 1px #ffffff dotted">Go to Your Dashboard</a>
                        @else
                        <a class="common_button2 mt-3" href="{{route('shop')}}" style="border-bottom: 1px #ffffff dotted">Back to Shop</a>
                        @endif
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
