<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@foreach (products()->take(1) as $item)
    <section class="container">
        <div class="card">
            <!-- images -->
            <div class="mt-1">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid"
                        src="https://cdn.cnetcontent.com/27/cc/27cc7afa-b0e7-4795-972d-a4faeb42b90f.jpg" alt="">
                </div>
            </div>
            <!-- Details -->
            <div class="mt-4 row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="">
                        <h3>{{ $item->title }}</h3>
                    </div>
                    <div class="">Price : ${{ $item->price }}</div>
                    <p class="">Product Description : {{ $item->description }}</p>
                </div>
                <div class="col-3"></div>

                <div class="d-flex justify-content-center mb-3">
                    <a href="{{ route('product', ['id' => $item->id]) }}" class="tech_deals_shop_btn"
                        style="text-align: center;
                                display: inline-block;
                                padding: 15px 25px;
                                background-color: #fff;
                                color: #ae0a46;
                                border: 2px solid;
                                border-color: #5f5753;
                                font-size: 16px;
                                line-height: 15px;
                                transition: all linear 0.3s;
                                font-weight: bold;
                                text-decoration:none">
                        Shop now</a>
                </div>
@endforeach
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
