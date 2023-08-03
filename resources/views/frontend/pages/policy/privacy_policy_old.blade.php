@extends('frontend.master')
@section('content')
<style>
    .active{
        border: none !important;
        text-decoration: none !important;
        font-size: 16px !important;
        font-weight: 800 !important;
    }
</style>
<!--=======// Header Title //=======-->
<section class="header_title_terms_policy">
    <h2 class="container">
        @if (!empty($details))
            {{$details->name}}
        @else
        All Terms & Policies
        @endif
    </h2>
</section>
<!-------End------->

<!--=======// Content //=======//-->
<section class="container">
    <div class="tabpanel">
        <div class="row mt-4">
            <!----------content left --------->
            <div class="col-lg-8 col-md-8 col-sm-12">
                @if (!empty($details))
                    <div class="content_privacy_policy">
                        {!! $details->description !!}
                    </div>
                @endif
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                @if (!empty($details))
                    <div class="left_terms_policy">
                        <h3>All Terms & Policies</h3>
                        <h5>Policies</h5>

                        <ul>

                            @if ($policy)
                                @foreach ($policy as $item)
                                    <li>
                                        <a class="{{ ($item->id == $details->id) ? 'active' : ''}}" href="{{route('terms.details',$item->id)}}" >{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>


                        <h5>Terms & Conditions</h5>
                        <ul>
                            @if ($terms)
                                @foreach ($terms as $item)
                                    <li>
                                        <a class="{{ ($item->id == $details->id) ? 'active' : ''}}" href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        <h5>Terms of Sale</h5>
                        <ul>
                            @if ($sale_terms)
                                @foreach ($sale_terms as $item)
                                    <li>
                                        <a class="{{ ($item->id == $details->id) ? 'active' : ''}}" href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        <h5>Terms of Service</h5>
                        <ul>
                            @if ($service_terms)
                                @foreach ($service_terms as $item)
                                    <li>
                                        <a class="{{ ($item->id == $details->id) ? 'active' : ''}}" href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>


                    </div>
                @else
                    <div class="left_terms_policy">
                        <h3>All Terms & Policies</h3>
                        <h5>Policies</h5>

                        <ul>

                            @if ($policy)
                                @foreach ($policy as $item)
                                    <li>
                                        <a href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif

                        </ul>


                        <h5>Terms & Conditions</h5>
                        <ul>
                            @if ($terms)
                                @foreach ($terms as $item)
                                    <li>
                                        <a href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        <h5>Terms of Sale</h5>
                        <ul>
                            @if ($sale_terms)
                                @foreach ($sale_terms as $item)
                                    <li>
                                        <a href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        <h5>Terms of Service</h5>
                        <ul>
                            @if ($service_terms)
                                @foreach ($service_terms as $item)
                                    <li>
                                        <a href="{{route('terms.details',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>


                    </div>
                @endif

            </div>
            <!----------conternt right--------->

        </div>
    </div>

</section>
<br>
<!-------End------->

@endsection

