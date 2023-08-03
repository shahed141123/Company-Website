@extends('frontend.master')

@section('content')

{{-- modal --}}

<div class="popup_modal">
    {{-- content --}}
    <div class="popup_modal_content" style="max-width: 570px; border: unset; background: linear-gradient(90deg, #af4286, #dd7fcd 100%, transparent 0);">
        <div class="popup_modal_content_wrapper">

            <!-- image -->
            <div class="neweLetter_image">
                <img src="assets/frontend/image/title-shape.png" alt="">
            </div>
            <!-- title -->
            <div class="neweLetter_title">
                <p> Our NewsLetter</p>
            </div>

            <!-- new form -->
            <div class="news_form_content">
                <div class="news_form_inner">
                    <input type="email" class=" form_newsletter" placeholder="Enter Your Email...">
                    <input type="button" value="Subscribe" class="newsLetter_btn">
                </div>

                <div class="news_form_text">
                    <p>We are going to send to mail </p>
                </div>
            </div>

            {{-- crose button --}}
            <!-- <div class="cross_btn">
                <span><i class="fa-solid fa-xmark"></i></span>
            </div> -->

        </div>
    </div>
</div>

{{-- modal end --}}

@endsection
