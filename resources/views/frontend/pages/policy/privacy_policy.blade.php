@extends('frontend.master')
@section('content')
    <!--======// Header Title //======-->
    <section>
        <div>
            <img class="page_top_banner"
                src="{{ asset('frontend/images/privacy.jpg') }}"
                alt="NGEN IT Privacy Policy">
        </div>
    </section>
    <!----------End--------->
    <section class="header">
        <div class="container">
            <div class="py-4">
                <h4 class="text-center"><span class="faqs_title_border_top">NGe</span>n IT Company Privacy & Po<span
                        class="faqs_title_border_bottom">licy !</span></h4>
            </div>
            <div class="row">
                <div class="col-md-12 pb-4" style="text-align: justify;">
                    @foreach ($policy as $key => $item)
                    <p class="font-italic text-muted privacy-policy">
                        {!! $item->description !!}</p>
                    @endforeach
                    <!-- Tabs content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
