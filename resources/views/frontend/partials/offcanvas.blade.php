<div class="offcanvas-header">
    <h5 class="text-center">All RFQ Product Added In Query!</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
        style="background: #98b8d2;padding-bottom: 18px;padding-left: 12px;padding-right: 15px;">
        <i class="fa-solid fa-xmark"></i>
    </button>
</div>


<div class="offcanvas-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    @if ($cart_items)
                        @foreach ($cart_items as $cart_item)
                            <div class="col-lg-2">
                                <div style="margin-top: -30px;">
                                    <div class="remove-box">
                                        <span class="remove-rfq"><i class="fa-solid fa-xmark"></i></span>
                                    </div>
                                    <div class="card text-center border-0 shadow-sm">
                                        <img src="{{ asset($cart_item->thumbnail) }}" class="img-fluid rounded-2"
                                            alt="" style="width: 50px;">
                                        <div class="card-body py-3">
                                            <p class="card-title">{{ $cart_item->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4 class="text-warning">No Product is in the RFQ List. Add some.</h4>
                    @endif
                    <!-- Repeat similar block for other images -->

                    <!-- Repeat as needed -->
                </div>
            </div>
            <div class="col-lg-2">
                <div class="text-center">
                    <p>Check all added RFQ in one place, hit the button to show all added RFQ.</p>
                    <a href="{{ route('rfq') }}" class="btn-color">Show All RFQ</a>
                </div>
            </div>
        </div>
    </div>
</div>
