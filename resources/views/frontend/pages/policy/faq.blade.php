@extends('frontend.master')
@section('content')


    <!-- Demo header-->
    <section class="header mb-4">
        <div class="container py-4">
            <div class="py-4">
                <h1 class="text-center"><span class="faqs_title_border_top">Do Y</span>ou Have Any Quest<span
                        class="faqs_title_border_bottom">ion ?</span></h1>
            </div>
            <div class="row ">
                <div class="col-md-2 bg-light shadow-lg">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom_faq" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        @foreach ($faq_categorys as $key => $faq_category)
                            <a class="nav-link faq  {{ $key == 0 ? 'active' : '' }}" id="v-pills-home-tab"
                                data-toggle="pill" href="#{{ $faq_category }}" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                <span class="font-weight-bold small text-uppercase">{{ $faq_category->category }}</span></a>
                        @endforeach
                    </div>
                </div>


                <div class="col-md-10 px-0">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        @foreach ($faq_categorys as $key => $faq_category)
                            @php
                                $faqs = App\Models\Admin\Faq::where('category', $faq_category->category)->get();
                            @endphp
                            <div class="tab-pane fade rounded-0 bg-white {{ $key == 0 ? 'show' : '' }} {{ $key == 0 ? 'active' : '' }} mx-2"
                                id="{{ $faq_category }}" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                <div class="container px-0">
                                    <div id="accordion">
                                        <div class="border-0">
                                            @foreach ($faqs as $subKey => $faq)
                                                <div class="card-header p-0 border-0 mb-0 mt-1" id="heading-{{$faq->id}}">
                                                    <button class="btn btn-link accordion-title border-0 collapse rounded-0 collapsed"
                                                        data-toggle="collapse" data-target="#collapse-{{$faq->id}}" aria-expanded="false"
                                                        aria-controls="#collapse-{{$faq->id}}"><i
                                                            class="fas fa-plus text-center d-flex align-items-center justify-content-center h-100"></i>
                                                        {{$faq->question}}
                                                    </button>
                                                </div>
                                                <div id="collapse-{{$faq->id}}" class="collapse" aria-labelledby="heading-{{$faq->id}}"
                                                    data-parent="#accordion">
                                                    <div class="card-body accordion-body">
                                                        <p style="font-size: 13px; font-weight: 500;">{!! $faq->answer !!}</p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
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
