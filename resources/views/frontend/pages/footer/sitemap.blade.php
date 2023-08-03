@extends('frontend.master')

@section('content')

 @include('frontend.header')
 <!--============Content=============-->
  <section class="container">
    <div class="sitemap_content">
        <h2>Sitemap</h2>

        <button>Insight</button>

        <!--Item-->
        <button>What we do</button>
        <ul class="">
            <li>Industries we serve
                <ul>
                    <li><a href="#">Enterprise business</a>
                        <ul>
                            <li><a href="">Solutions we offer</a></li>
                            <li><a href="">By industry</a>
                                <ul>
                                    <li><a href="">Construction</a></li>
                                    <li><a href="">Education</a>
                                        <ul>
                                            <li><a href="">Higher education</a></li>
                                            <li><a href="">Purchasing contracts</a></li>
                                            <li><a href="">K-12 education</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Esports</a>
                                    <li><a href="">Finance</a>
                                    <li><a href="">Government</a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <!--End-->
        

        <!--Item-->
        <button>Shop</button>
        <ul class="">
            <li><a href="">Technology brands</a>
                <ul>
                    <li><a href="">3M</a></li>
                    <li><a href="">8x8</a></li>
                    <li><a href="">ABBYY</a></li>
                </ul>
            </li>
            <li>Category
                <ul>
                    <li><a href="">2 In 1 Convertible Laptop | Laptops</a></li>
                    <li><a href="">2 In 1 Tablet | 2 in 1 Laptop Tablets | Tablets</a></li>
                    <li><a href="">AMD Processors | Desktop Computers</a></li>
                </ul>
            </li>
            <li><a href="">Purchasing contracts</a>
                <ul>
                    <li><a href="">Federal purchasing Ccontracts</a></li>
                    <li><a href="">GPO contracts | Healthcare purchasing contracts</a></li>
                    <li><a href="">Purchasing contracts for K-12 schools</a></li>
                    <li><a href="">Purchasing contracts for state/local agencies</a></li>
                </ul>
            </li>
        </ul>
        <!--End-->

        
        <!--Item-->
        <button><a href="">Content and Resources</a></button>
        <ul class="">
            <li>Search by brand
                <ul>
                    <li><a href="">Acronis</a></li>
                    <li><a href="">Adobe</a></li>
                    <li><a href="">Airwatch</a></li>
                    <li><a href="">Amazon Web Services</a></li>
                    <li><a href="">Zerto</a></li>
                    <li><a href="">Zebra</a></li>
                </ul>
            </li>
            <li>Search by content type
                <ul>
                    <li><a href="">Analyst report</a></li>
                    <li><a href="">Article</a></li>
                    <li><a href="">Blog (Insight Voices)</a></li>
                    <li><a href="">Brochure</a></li>
                    <li><a href="">Client story</a></li>
                    <li><a href="">Tech Journal Magazine</a>
                        <ul>
                            <li><a href="">Issue: Summer 2020 / The Future of Business</a></li>
                            <li><a href="">Issue: Spring 2020 / Embracing Transformative Technology</a></li>
                            <li><a href="">Issue: Winter 2019 / Technology Outlook for 2020</a></li>
                            <li><a href="">Issue: Fall 2019</a></li>
                        </ul>
                    </li>
                    <li><a href="">Tech tutorials</a></li>
                    <li><a href="">TechTalk</a></li>
                    <li><a href="">Video</a></li>
                    <li><a href="">Webinar</a></li>
                </ul>
            </li>
            <li>Search by industry
                <ul>
                    <li><a href="">Education (higher)</a></li>
                    <li><a href="">Education (K-12)</a></li>
                    <li><a href="">Enterprise</a></li>
                    <li><a href="">Federal government</a></li>
                    <li><a href="">Financial</a></li>
                </ul>
            </li>
            <li>Search by solution area
                <ul>
                    <li><a href="">Cloud + Data Center Transformation</a></li>
                    <li><a href="">Connected Workforce</a></li>
                    <li><a href="">Digital Innovation</a></li>
                    <li><a href="">Supply Chain Optimization</a></li>
                </ul>
            </li>
            <li>Search by topic
                <ul>
                    <li><a href="">Agile</a></li>
                    <li><a href="">Application development</a></li>
                    <li><a href="">Artificial Intelligence (AI)</a></li>
                    <li><a href="">As a service</a></li>
                    <li><a href="">Augmented Reality (AR)</a></li>
                    <li><a href="">Azure</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href=""></a></li>
                </ul>
            </li>
        </ul>
        <!--End-->

        
        <!--Item-->
        <button><a href="">About</a></button>
        <ul class="">
            <li><a href="">Our story</a></li>
            <li><a href="">Our brand</a></li>
            <li><a href="">Awards</a></li>
            <li><a href="">Events calendar</a></li>
            <li><a href="">Executive management team</a>
                <ul>
                    <li><a href="">Joyce Mullen, President and CEO, Insight</a></li>
                    <li><a href="">Glynis Bryan, Chief Financial Officer, Insight</a></li>
                    <li><a href="">Rachael A. Crump, Principal Accounting Officer and Global Corporate Controller, Insight</a></li>
                    <li><a href="">John Dathan, Senior Vice President and General Manager, Insight Canada</a></li>
                    <li><a href="">Emma de Sousa, President, EMEA</a></li>
                    <li><a href="">Mike Morgan, Vice President & Managing Director, Insight APAC</a></li>
                    <li><a href="">Suma Nallapati, Chief Information Officer, Insight</a></li>
                </ul>
            </li>
            <li><a href="">Community involvement</a></li>
            <li><a href="">Company values</a></li>
            <li><a href="">Contact Insight</a></li>
            <li><a href="">Global corporate citizenship</a>
                <ul>
                    <li><a href="">Corporate partnerships</a></li>
                    <li><a href="">Brand partnerships</a></li>
                    <li><a href="">UN Global Impact</a></li>
                </ul>
            </li>
            <li><a href="">Email and newsletter subscription Center</a></li>
        </ul>
        <!--End-->
    </div>
</section>
@include('frontend.footer')
@endsection