@extends('frontend.master')
@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://api.opencagedata.com/geocode/v1/json?key=0bca64e6e6414b8b973e40e05e7e05ba"></script>

    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
            rgb(0 0 0 / 15%),
            rgb(0 0 0 / 26%)
            ),url({{ asset('frontend/images/location.jpg') }});">
        <div>
            <div class="">
                <div class="container ">
                    {{-- <h1 class="text-capitalize w-50 mx-auto">{{ $learnmore->title }}.</h1> --}}
                    <div class="outcome_assetType mb-4">
                        <a href="#">Our Office Location</a>
                    </div>
                    <h1 class="text-capitalize w-50 mx-auto">Check Our Location</h1>
                    <div class="row ">
                        <!--BUTTON START-->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="m-4">
                                <a class="common_button2" href="{{ route('contact') }}">Hear from our team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid" style="background-color: #222222;">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-6 col-sm-12">
                        <div class="mt-5">
                            <h1 class="text-white"><span style="border-top: 5px solid #ae0a46">Loc</span>ations</h1>
                            <p class="text-white">Around the globe, our teams are helping businesses achieve <br> their
                                goals with transformative
                                products, services and <br> support. Explore our locations below.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="area_outer bg-white p-5">
                            <div class="px-4">
                                <h4>Need immediate assistance?</h4>
                                <a href="tel:+{{ !empty($setting->phone_one) ? $setting->phone_one : '' }}">
                                    <i class="main_color fa-solid fa-headset" style="font-size: 20px !important;"></i>
                                    Call us:  {{ !empty($setting->phone_one) ? $setting->phone_one : '' }}
                                </a>
                                <br>
                                <i class="main_color fa-brands fa-whatsapp" style="font-size: 22px !important;"></i>
                                <span>Whatsapp Number:  {{ !empty($setting->whatsapp_number) ? $setting->whatsapp_number : '' }}</span>
                                <br>
                                <span><span><i class="main_color fa-brands fa-rocketchat"
                                            style="font-size: 18px !important;"></i></span>
                                    <a
                                        href="{{ route('contact') }}">Chat with Us</a>
                                </span><br>
                                <a href="{{ route('contact') }}" class="main_color pt-2"> Hear from a specialist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border">
        <div class="container  py-3">
            <div class="row d-flex justify-content-between align-items-center ">
                <div class="col-lg-6">
                    <h2>Ngenit Office Locations</h2>
                </div>
                <div class="col-lg-6 text-end">
                    <select class="country-select" aria-label="Country location list">
                        <option value="all" selected>All locations</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="row">
                @if ($locations->count() > 0)
                    @foreach ($locations as $item)
                        <div class="col-lg-3 col-sm-12">
                            <div class="">
                                <h5 class="main_color">
                                    {{ App\Models\Admin\Country::where('id', 'country_id')->value('country_name') }}</h5>
                                <span>{{ $item->name }}</span><br>
                                <span>{{ $item->address }}</span><br>
                                <span>{{ $item->whatsapp_number }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </section>
    {{-- Map Start --}}
    <section class="container mt-3 mb-5 pb-5">
        <div id="map" style="width: 100%; height: 500px;"></div>
    </section>
    {{-- Map End --}}
    <section>
        <div class="container-fluid" style="background-color: #222222;">
            <div class="container pt-5 pb-5">
                {{-- title  --}}
                <div class="text-center mb-5">
                    <h2 class="text-white location_footer_title">NGen IT by the numbers</h2>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($tech_datas as $tech_data)
                        <div class="col-lg-4 col-sm-12 mb-2">
                            <h1 class="callout-num"> {{ $tech_data->header }}</h1>
                            <p class="text-center text-white"> {{ $tech_data->short_description }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        // var map = L.map('map').setView([0, 0], 2);
        var map = L.map('map', {
                        'worldCopyJump': false,
                        'continuousWorld': false, // Prevent map repeating when zoomed out
                    }).setView([0, 0], 2);

        



        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 6,
            minZoom:2,
            noWrap: true,
        }).addTo(map);

        
        // Dynamic marker data (replace with your data) 
        var countries = @json($countries);
        countries.forEach(function(country) {
            var geocodeUrl = 'https://api.opencagedata.com/geocode/v1/json?q=' + encodeURIComponent(country
                .country_name) + '&key=0bca64e6e6414b8b973e40e05e7e05ba';

            fetch(geocodeUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.results.length > 0) {
                        var coordinates = data.results[0].geometry;
                        L.marker([coordinates.lat, coordinates.lng]).addTo(map)
                            .bindPopup(country.country_name)
                            .openPopup();
                    }
                })
                .catch(error => console.error('Error:', error));
        });

        
    </script>
@endsection
