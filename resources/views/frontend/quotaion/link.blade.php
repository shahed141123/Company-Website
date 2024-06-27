@extends('frontend.master')

@section('content')
    <div class="container">
        <div class="card my-5 pb-5">
            <div class="card-header">
                <div class="text-center main_color">
                    <h3>Quotation Against Your RFQ</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="row py-3">
                    <div class="col-lg-8 offset-lg-2 mx-auto">
                        @if (!empty($filePath) && file_exists(public_path('storage/files/' . $filePath)))
                            <div class="pt-3">
                                <iframe src="{{ asset('storage/files/' . $filePath) }}" class="w-100 border" height="768px">
                                </iframe>
                            </div>
                            <div class="d-flex justify-content-center my-5">
                                <a class="btn-color" href="{{ asset('storage/files/' . $filePath) }}" download>Download Your
                                    Quotation</a>
                            </div>
                        @else
                            <div class="pt-3">
                                <h5 class="text-center fw-bold">We are sorry for the inconvenience. Your PDF is not found!
                                </h5>
                            </div>
                            <div class="pt-4">
                                <p class="text-left mb-2 fs-6 fw-normal">Please contact our support team as soon as
                                    possible.</p>
                                <p class="text-left mb-2 fs-7">Email: <a class="text-primary fw-normal"
                                        href="mailto:sales@ngenitltd.com">sales@ngenitltd.com</a></p>
                                <p class="text-left mb-2 fs-7">WhatsApp: <a class="text-primary fw-normal"
                                        href="https://wa.me/{{ $setting->whatsapp_number }}">{{ $setting->whatsapp_number }}</a>
                                </p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
