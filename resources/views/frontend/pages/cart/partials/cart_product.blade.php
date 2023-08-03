<div class="col-md-8 cart">
    <div class="title">
        <div class="row">
            <div class="col">
                <h4><b>Shopping Cart</b></h4>
            </div>
            <div class="col align-self-center text-right text-white fw-bold"></div>
        </div>
    </div>
    {{-- Header Title --}}
    <div class="row border-top px-3">
        <div class="table-responsive main align-items-center">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th width="18%">Product</th>
                        <th width="25%">Item Name</th>
                        <th width="15%">Unit Price</th>
                        <th width="17%">QTY</th>
                        <th width="15%">Unit Total</th>
                        <th width="10%">
                            {{-- <form method="get" action="{{ route('cart.destroy') }}"> --}}
                                <a href="javascript:void(0);" class="text-danger" onClick='emptyCart(event)'>Empty Cart</a>
                            {{-- </form> --}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart_details as $item)
                        @php
                            $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                        @endphp
                        <tr class="text-center">
                            <td style="vertical-align: middle;">
                                <img class="img-fluid"
                                    src="{{ $item->options->has('image') ? $item->options->image : '' }}"
                                    alt="{{ $item->name }}">
                            </td>
                            <td style="vertical-align: middle;">
                                <a class="text-primary" href="{{ route('product.details', $slug) }}"
                                    title="{{ $item->name }}">
                                    {{ Str::limit($item->name, 22) }}
                                </a>
                            </td>
                            <td style="vertical-align: middle;">$ {{ number_format($item->price, 2) }}</td>
                            <td style="vertical-align: middle;">
                                <form class="myForm">
                                    <input type="hidden" id="price" name="price" value="{{ $item->price }}">
                                    <div class="pro-qty mb-2" style="width: 5.5rem">
                                        <div class="counter" style="width: 2rem">
                                            <input name="rowID" type="hidden" id="rowID"
                                                value="{{ $item->rowId }}">
                                            <span class="down" id="{{ $item->rowId }}"
                                                onClick='decreaseCount(event, this, this.id)'>-</span>
                                            <input type="text" name="qty" value="{{ $item->qty }}"
                                                style="width: 1.5rem;" readonly>
                                            <span class="up" id="{{ $item->rowId }}"
                                                onClick='increaseCount(event, this, this.id)'>+</span>
                                        </div>
                                    </div>
                                    {{-- <a href="javascript:void(0);" class="common_button2 p-1 mt-1" id="update">Update</a> --}}
                                </form>
                            </td>
                            <td style="vertical-align: middle;">$
                                {{ number_format($item->price * $item->qty, 2) }}</td>
                            <td style="vertical-align: middle;">
                                <a href="javascript:void();" class="text-danger" id="{{ $item->rowId }}"
                                    onClick='deleteRow(event, this, this.id)'>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    {{-- Header Title End --}}
    <div class="d-flex justify-content-end  mb-2">
        <div class="back-to-shop">
            <a href="{{ route('shop') }}">&leftarrow; <span class="text-danger fw-bold" style="font-size: 16px">Back to
                    shop</span></a>
        </div>
    </div>
</div>
<div class="col-md-4 summary">
    <div>
        <h5 class="text-center"><b>Summary</b></h5>
    </div>
    <hr>
    <div class="row">
        <div class="col" style="padding-left:0;">Sub Total</div>
        <div class="col text-right">$ {{ number_format($cart_sub_total, 2) }}</div>
    </div>
    <div class="row">
        <div class="col" style="padding-left:0;">Tax Estimate</div>
        <div class="col text-right">$ 0.00</div>
    </div>
    <div class="row">
        <div class="col" style="padding-left:0;">Shipping Cost</div>
        <div class="col text-right">$ 0.00</div>
    </div>
    <hr>
    <div class="row" style=" padding: 1vh 0;">
        <div class="col">TOTAL PRICE</div>
        <div class="col text-right">$ {{ number_format($cart_total, 2) }}</div>
    </div>
    <div class="d-flex justify-content-center pt-5">
        <a href="{{ route('checkout') }}" class="btn product_btn">CHECKOUT</a>
    </div>
</div>
