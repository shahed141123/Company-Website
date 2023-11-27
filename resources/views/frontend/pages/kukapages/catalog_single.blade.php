@extends('frontend.master')
@section('content')
    {{-- @include('frontend.pages.kukapages.partial.page_header') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <style>
        figure.snip1205 {
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 220px;
            max-width: 310px;
            width: 100%;
            background: #000000;
            text-align: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        figure.snip1205 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }

        figure.snip1205 img {
            max-width: 100%;
            vertical-align: top;
        }

        figure.snip1205 i {
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 50%;
            font-size: 34px;
            color: #000000;
            width: 60px;
            height: 60px;
            line-height: 60px;
            background: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            -webkit-transform: translate(-50%, -50%) scale(0);
            transform: translate(-50%, -50%) scale(0);
            transition: all 300ms 0ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
        }

        figure.snip1205 a {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: absolute;
        }

        figure.snip1205.navy {
            background-color: #2b3c4e;
        }

        figure.snip1205.navy i {
            color: #222f3d;
        }

        figure.snip1205:hover img,
        figure.snip1205.hover img {
            opacity: 0.3;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        figure.snip1205:hover i,
        figure.snip1205.hover i {
            -webkit-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
            transition: all 300ms 100ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
    </style>
    <section>
        <div class="container">
            <div class="row my-3" style="box-shadow: 0 5px 12px rgba(0,0,0,.1);">
                <div class="col-lg-6 offset-lg-3">
                    <div class="d-flex py-5">
                        <div class="cat-single-img">
                            <figure class="snip1205">
                                <img src="https://img.directindustry.com/pdf/repository_di/17587/kr-120-r3200-pa-ho-1020768_1mg.jpg"
                                    alt="sample42" style="box-shadow: 1px 1px 4px 1px #c1c1c1;"/>
                                    <a class="pdf-link" href="https://www.africau.edu/images/default/sample.pdf" data-fancybox="pdf-gallery">
                                      <i class="fa-solid fa-magnifying-glass-plus main_color" ></i>
                                    </a>
                                {{-- Fancy Box pdf Link Gose Here --}}
                            </figure>
                        </div>
                        <div class="cat-single-info ms-5">
                            <h3>KR 120 R3200 PA-HO</h3>
                            <p><span class="main_color">1 / 1 </span>Pages</p>
                            <p>Are you interested in the products in this catalog?</p>
                            <button class="common_button" id="modal_view_left">See Contact Information</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
      <div class="container px-0">
        <div class="row mt-5 mb-3 gx-1" style="box-shadow: 0 5px 12px rgba(0,0,0,.1);">
          <p style="border-left: 2px solid #ae0a46;"><span class="ps-3">CATALOG EXCERPTS</span></p>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-center ps-3">
                    <div class="cat-single-img">
                        <figure class="snip1205s shadow-sm">
                            <img src="https://img.directindustry.com/pdf/repository_di/17587/kr-120-r3200-pa-ho-1020768_1mg.jpg"
                                alt="sample42" width="180px" height="250px" style="box-shadow: 1px 1px 4px 1px #c1c1c1;"/>
                            {{-- Fancy Box pdf Link Gose Here --}}
                            <a href="#"></a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
              <div class="cat-single-info">
                <p><strong>"</strong> Workspace graphic Technical data Maximum reach Rated payload Rated supplementary load, rotating column / link arm / arm Rated total load Pose repeatability (ISO 9283) Number of axes Mounting position Footprint Weight Mounting flange Axis data Operating conditions Ambient temperature during oper- 0 °C to 55 °C (273 K to 328 K) ation Protection rating Protection rating (IEC 60529) Protection rating, robot wrist (IEC 60529) Controller Controller Details provided about the properties and usability of the products are purely for information purposes and do not constitute a guarantee of these characteristics. The extent of goods delivered and services performed is determined by the subject matter of the specific contract. No liability accepted for errors or omissions. 0000-214-798 / V14.1 / 23.05.2022 / en KUKA Deutschland GmbH Zugspitzstrasse 140, 86165 Augsburg, Germany. Tel.: +49 821 797-4000 <strong>"</strong></p>
                <a href="" class="text-primary">> Open the catalog to page 1</a>
            </div>
            </div>
        </div>
      </div>
    </section>
@endsection
@section('scripts')
<!-- Include FancyBox JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
  $(document).ready(function() {
      // Initialize FancyBox
      $("[data-fancybox]").fancybox({
          type: "iframe", // Display content in an iframe
          iframe: {
              css: {
                  width: "80%",
                  height: "80%"
              }
          }
      });
  });
  </script>
@endsection
