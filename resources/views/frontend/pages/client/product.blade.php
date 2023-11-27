@extends('frontend.master')


@section('content')
    <!--=========Content Wrapper=============-->
    @include('frontend.client.sidebar')

    <!--Content Wrapper-->
    <div class="d-flex">
        <div id="userSideButton_wrapper">
            <button class="sidebarButtonStyle" onclick="userDashboardSidebarClicked()">☰</button>
        </div>
        <div id="Content_Wrapper">
            <section class="client_dashboard_content_wp">
                <!--=====// Content body //=====-->
                <!--Add product-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 client_dashboard_personal_product_list pt-4">
                        <h2>Personal Product List</h2>
                        <p>View, order, compare, add or remove items from your personalized list</p>
                    </div>
                    <div class="col-12 personal_product_list_add_item">
                        <form action="" class="d-flex ">
                            <div class="list-inline-item">
                                <label for="">Add item(s) to your list</label>
                            </div>
                            <div class="list-inline-item" id="product_input">
                                <input type="text" placeholder="Product Part Number">
                                <label for="">Separate multiple part numbers with a comma.</label>
                            </div>
                            <div class="list-inline-item">
                                <button type="submit">Add</button>
                            </div>

                        </form>
                    </div>
                    <div class="col-12 mt-4 mb-4">
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--Item-->
                                <tr>
                                    <th style="width:65%; text-align: justify;">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ asset('storage/Product/1667881111.jpg') }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="col-8">
                                                <h4
                                                    style="color: #ae0a46;display: -webkit-box;
                                                -webkit-line-clamp: 2;
                                                -webkit-box-orient: vertical;
                                                overflow: hidden;">
                                                    StarTech.com 1080p 60Hz HDMI to VGA High Speed Display
                                                    Adapter - Active HDMI to VGA (Male to Female) Video Converter for
                                                    Laptop/PC/Monitor (HD2VGAE2) - adapter - HDMI / VGA - 9.6 in
                                                    StarTech.com 1080p 60Hz HDMI to VGA High Speed Display Adapter -
                                                    Active HDMI to VGA (Male to Female) Video Converter for
                                                    Laptop/PC/Monitor (HD2VGAE2) - adapter - HDMI / VGA - 9.6 in</h4>
                                                <ul>
                                                    <li>Cable Type: Video interface converter</li>
                                                    <li>Left Connector: 19 pin HDMI Type AMale</li>
                                                    <li>Right Connector: 15 pin HD D-Sub (HD-15)Female</li>
                                                    <li>Warranty: 3 Years</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </th>
                                    <td>CAD <strong>$57.85</strong></td>
                                    <td>
                                        <input type="text" value="1"
                                            style="width: 40px; height: 40px; text-align: center;">
                                    </td>
                                    <td class="text-center">
                                        <button class="btn_delete">Delete</button>
                                        <button class="btn_add_to_card">Add To Card</button>
                                    </td>
                                </tr>
                                <!--Item-->
                                <tr>
                                    <th style="width:65%; text-align: justify;">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ asset('storage/Product/1667622099.jpg') }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="col-8">
                                                <h4
                                                    style="color: #ae0a46;display: -webkit-box;
                                                -webkit-line-clamp: 2;
                                                -webkit-box-orient: vertical;
                                                overflow: hidden;">
                                                    StarTech.com 1080p 60Hz HDMI to VGA High Speed Display
                                                    Adapter - Active HDMI to VGA (Male to Female) Video Converter for
                                                    Laptop/PC/Monitor (HD2VGAE2) - adapter - HDMI / VGA - 9.6 in
                                                    StarTech.com 1080p 60Hz HDMI to VGA High Speed Display Adapter -
                                                    Active HDMI to VGA (Male to Female) Video Converter for
                                                    Laptop/PC/Monitor (HD2VGAE2) - adapter - HDMI / VGA - 9.6 in</h4>
                                                <ul>
                                                    <li>Cable Type: Video interface converter</li>
                                                    <li>Left Connector: 19 pin HDMI Type AMale</li>
                                                    <li>Right Connector: 15 pin HD D-Sub (HD-15)Female</li>
                                                    <li>Warranty: 3 Years</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </th>
                                    <td>CAD <strong>$57.85</strong></td>
                                    <td>
                                        <input type="text" value="1"
                                            style="width: 40px; height: 40px; text-align: center;">
                                    </td>
                                    <td class="text-center">
                                        <button class="btn_delete">Delete</button>
                                        <button class="btn_add_to_card">Add To Card</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    @include('frontend.footer')
@endsection
