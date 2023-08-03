@extends('frontend.master')
@section('content')
    <section class="common_product_header"
        style="background-image: linear-gradient(
rgba(0,0,0,0.8),
rgba(0,0,0,0.8)
),url('https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2020/03/11140107/find-remote-job-1024x512.png');">
        <div class="container ">
            <h1>Privacy & Policy</h1>
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
            </div>
        </div>
    </section>
    {{--  --}}
    <!-- Demo header-->
    <section class="header">
        <div class="container py-4">
            {{-- <div class="py-4">
                <h1 class="text-center"><span class="faqs_title_border_top">NGe</span>nIt Company Privacy & Po<span
                        class="faqs_title_border_bottom">licy !</span></h1>
            </div> --}}
            <div class="row ">
                <div class="col-md-2 bg-light">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom_faq" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        @foreach ($policy as $key => $item)
                            <a class="nav-link faq {{ $key === 0 ? 'active' : '' }}" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home{{$item->id}}"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <span class="font-weight-bold small text-uppercase">{{$item->name}}</span></a>
                        @endforeach
                    </div>
                </div>


                <div class="col-md-10 px-0">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        @foreach ($policy as $key => $item)
                            <div class="tab-pane fade rounded bg-white {{ $key === 0 ? 'show' : '' }} {{ $key === 0 ? 'active' : '' }}" id="v-pills-home{{$item->id}}" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="container px-0">
                                    <div class="card-body body px-3">
                                        <p class="font-italic text-muted mb-2 px-4">
                                            {!! $item->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
