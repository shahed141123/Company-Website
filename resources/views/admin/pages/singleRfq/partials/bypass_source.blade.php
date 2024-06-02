<div>
    <div class="table-responsive">
        <table class="table table-bordered" style="font-size: 12px !important">
            <thead class="text-white" style="background-color: #800000 !important;">
                <tr>
                    <th width="5%">Sl #</th>
                    <th width="25%">Item</th>
                    <th width="20%">Source One</th>
                    <th width="15%">Source One Price</th>
                    <th width="20%">Source Two</th>
                    <th width="15%">Source Two Price</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($rfq_details->quotationProducts as $rfqProduct)
                    @php
                        $sproduct = App\Models\Admin\Product::where('name', 'LIKE', '%' . $rfqProduct->product_name . '%')
                            ->where('product_status', 'product')
                            ->first(['id', 'name', 'source_one_price', 'source_two_price', 'source_one_name', 'source_two_name', 'source_one_link', 'source_two_link']);
                    @endphp
                    @if (!empty($sproduct))
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sproduct->name }}</td>
                            <td>
                                <a href="{{ $sproduct->source_one_link }}" target="_blank" rel="noopener noreferrer">
                                    {{ $sproduct->source_one_name }}
                                </a>
                            </td>
                            <td>{{ $sproduct->source_one_price }}</td>
                            <td>
                                <a href="{{ $sproduct->source_two_link }}" target="_blank" rel="noopener noreferrer">
                                    {{ $sproduct->source_two_name }}
                                </a>
                            </td>
                            <td>{{ $sproduct->source_two_price }}</td>
                        </tr>
                    @else
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rfqProduct->product_name }}</td>
                            <td colspan="4">Product is not in our website</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
