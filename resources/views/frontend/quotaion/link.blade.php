@extends('frontend.master')

@section('content')
    <div class="container">
        <div class="row py-5 pt-3">
            <div class="col-lg-6 offset-lg-3 mx-auto">
                <div class="text-center main_color">
                    <h3>Quotation Against Your RFQ</h3>
                </div>
                <div class="pt-3">
                    <iframe src="{{ asset($filePath) }}"
                        class="w-100 border" height="768px">
                    </iframe>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <a class="btn-color" href="{{ asset($filePath) }}" download>Download Your Quotation</a>
                </div>
            </div>
        </div>
    </div>
@endsection

