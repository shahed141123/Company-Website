@extends('admin.master')
@section('content')

<style type="text/css">
    label{
        font-size: 12px !important;
        font-weight: 500 !important;
    }
    /* button, input, optgroup, select, textarea{
        font-size: 14px !important;
        font-weight: 500 !important;
    } */

    .ck.ck-toolbar{
        height: 33px;
    font-size: 10px;
    }
    .form-check-label{
        font-size: 12px !important;
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Product Management</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">

                    <h5 class="mb-0 float-start">Add New Product</h5>
                    <a href="{{route('product-sourcing.index')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-eye"></i>
                        </span>
                        All Product
                    </a>
                </div>

                <div class="card-body p-0">
                    <form id="myForm" method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-body mt-1">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="border border-3 p-2 rounded">

                                        <div class="form-group mb-3 row">
                                            <div class="form-group col-lg-6">
                                                 <label for="inputProductTitle" class="form-label" style=" font-size: 12px; font-weight: 600;">Product Name <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="name" id="" cols="350" rows="1" style=" font-size: 12px; font-weight: 600;" placeholder="Product Name"></textarea>
                                                {{-- <input type="text" name="product_name" class="form-control"
                                                    id="inputProductTitle" placeholder="Enter product Name" style=" font-size: 12px; font-weight: 500;"> --}}
                                            </div>

                                            <div class="form-group col-lg-3">
                                                <label for="inputProductTitle" class="form-label" style=" font-size: 12px; font-weight: 600;">SKU Code <span class="text-danger">*</span></label>
                                                <input type="text" name="sku_code" class="form-control"
                                                    id="inputProductTitle" placeholder="Enter SKU Code" style=" font-size: 12px; font-weight: 500;">
                                            </div>

                                            <div class="form-group col-lg-3">
                                                 <label for="inputProductTitle" class="form-label" style=" font-size: 12px; font-weight: 600;">Manufacturing Code <span class="text-danger">*</span></label>
                                                <input type="text" name="mf_code" class="form-control"
                                                    id="inputProductTitle" placeholder="Manufacturing Code" style=" font-size: 12px; font-weight: 500;">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <div class="col-lg-4">

                                                <input type="text" name="tags" class="form-control visually-hidden" data-role="tagsinput" placeholder="Product Tags">


                                            </div>

                                            <div class="col-lg-4">

                                                   <input type="text" name="size" class="form-control visually-hidden" data-role="tagsinput" placeholder="Product Sizes">
                                            </div>

                                            <div class="col-lg-4">

                                                    <input type="text" name="color" class="form-control visually-hidden" data-role="tagsinput" placeholder="Product Color">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">

                                            <textarea name="short_desc" class="form-control" id="short_desc" rows="3" style=" font-size: 12px; font-weight: 500;"></textarea>
                                        </div>

                                        <div class="mb-3">

                                            <textarea class="form-control" name="overview" id="overview" style=" font-size: 12px; font-weight: 500;"></textarea>
                                        </div>

                                        <div class="mb-3">

                                            <textarea class="form-control" name="specification" id="specification" style=" font-size: 12px; font-weight: 500;"></textarea>
                                        </div>

                                        <div class="mb-3">

                                            <textarea class="form-control" name="accessories" id="accessories" style=" font-size: 12px; font-weight: 500;"></textarea>
                                        </div>

                                        <div class="row form-group">
                                            <div class="form-group mb-3 col-lg-6">
                                                <label for="inputProductTitle" class="form-label">Main Thumbnail <span class="text-danger">*</span></label>
                                                <input name="thumbnail" class="form-control" type="file" id="formFile"
                                                    onChange="mainThamUrl(this)">

                                                <img class="mt-1" src="" id="mainThmb" />
                                            </div>



                                            <div class="form-group mb-3 col-lg-6">
                                                <label for="inputProductTitle" class="form-label">Multiple Images <span class="text-danger">*</span></label>
                                                <input class="form-control" name="multi_img[]" type="file" id="multiImg"
                                                    multiple="" required>

                                                <div class="row mt-1" id="preview_img"></div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-1">
                                        {{-- <label for="inputProductDescription" class="form-label">Long Description</label> --}}
                                        <textarea class="form-control" name="warranty" id="warranty"  style=" font-size: 12px; font-weight: 500;" ></textarea>
                                    </div>
                                    <div class="border border-3 p-2 rounded">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCostPerPrice" class="form-label">Product Code <span class="text-danger">*</span></label>
                                                <input type="text" name="product_code" class="form-control"
                                                    id="inputCostPerPrice" placeholder="WX-548">
                                            </div>
                                            <div class="form-group col-md-3 m-4">

                                                <input class="form-check-input" name="rfq" type="checkbox" id="rfqId" value="1">
                                                <label for="rfqId" class="form-label">RFQ </label>

                                            </div>
                                        </div>
                                        <div class="row" id="rfqExpand">
                                            <div class="form-group col-md-6">
                                                <label for="inputPrice" class="form-label">Product Price</label>
                                                <input type="text" name="price" class="form-control" id="inputPrice"
                                                    placeholder="00.00">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCompareatprice" class="form-label">Discount Price </label>
                                                <input type="text" name="discount" class="form-control"
                                                    id="inputCompareatprice" placeholder="00.00">
                                            </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputPrice" class="form-label">Product Notification (days) <span class="text-danger">*</span> :</label>
                                                    <input class="form-control allow_decimal" placeholder="Days" type="text" name="notification_days">
                                                </div>

                                        </div>


                                    </div>

                                    <div class="border border-3 p-2 rounded mt-1">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group col-sm-10 dropdown">
                                                    <label class="col-form-label col-lg-12">Stock Availability <span class="text-danger">*</span></label>

                                                    <select class="form-select stock_select" name="stock" data-placeholder="Select Stock Option...">
                                                        <option></option>

                                                            <option class="form-select" value="available">
                                                                Available
                                                            </option>
                                                            <option class="form-select" value="limited">
                                                                Limited</option>
                                                            <option class="form-select" value="unlimited">
                                                                UnLimited</option>
                                                            <option class="form-select" value="stock_out">
                                                                Out of Stock</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group col-sm-10 qty_display d-none">
                                                    <label for="inputStarPoints" class="form-label">Product Quantity</label>
                                                        <input type="text" name="qty" class="form-control"
                                                        id="inputStarPoints" placeholder="10,50,100,200,500">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="border border-3 p-2 rounded mt-1">
                                        <div class="row g-3">
                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="refurbished"
                                                        type="checkbox" value="1" id="flexCheckDefault3">
                                                    <label class="form-check-label" for="flexCheckDefault3">Refurbished</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="dealId">
                                                    <label class="form-check-label" for="dealId"> Deals</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4" id="dealExpand" style="display:none">
                                                <input type="text" name="deal" class="form-control"
                                                placeholder="Enter Deals" style=" font-size: 12px; font-weight: 500;">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="border border-3 p-2 rounded mt-1">

                                        <div class="row">
                                            <div class="form-group col-md-6 basic-form">
                                                <label class="col-form-label col-lg-12">Product Brand</label>

                                                    <select class="form-control select" name="brand_id" data-placeholder="Select Brand...">
                                                        <option></option>
                                                        @foreach ($brands as $brand)
                                                            <option class="form-control select" value="{{ $brand->id }}">
                                                                {{ $brand->title }}</option>
                                                        @endforeach

                                                    </select>
                                            </div>

                                            <div class="form-group col-md-6 basic-form">
                                                <label class="col-form-label col-lg-12">Product Category</label>

                                                    <select class="form-control select" name="cat_id" data-placeholder="Select Category...">
                                                        <option></option>
                                                        @foreach ($categories as $cat)
                                                        <option class="form-control" value="{{ $cat->id }}">
                                                            {{ $cat->title }}</option>
                                                        @endforeach

                                                    </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 basic-form">
                                                <label class="col-form-label col-lg-12">Product Sub Category</label>

                                                    <select class="form-control select" name="sub_cat_id" data-placeholder="Select Sub Category...">
                                                        <option></option>
                                                        @foreach ($sub_cats as $item)
                                                        <option class="form-control" value="{{ $item->id }}">
                                                            {{ $item->title }}</option>
                                                        @endforeach

                                                    </select>
                                            </div>


                                            <div class="form-group col-md-6 basic-form">
                                                <label for="inputCollection" class="form-label">Product Sub Sub Category</label>
                                                <select name="sub_sub_cat_id" class="form-control select"
                                                    data-placeholder="Select Sub Sub Category...">
                                                    <option></option>
                                                    @foreach ($sub_sub_cats as $item)
                                                    <option class="form-control" value="{{ $item->id }}">
                                                        {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6 basic-form">
                                                <label for="inputCollection" class="form-label">Product Sub Sub Sub Category</label>
                                                <select name="sub_sub_sub_cat_id" class="form-control select"
                                                    id="inputCollection" data-placeholder="Select Sub Sub Sub Category...">
                                                    <option></option>
                                                    @foreach ($sub_sub_sub_cats as $item)
                                                    <option class="form-control" value="{{ $item->id }}">
                                                        {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputCollection" class="form-label">Product Type <span class="text-danger">*</span></label>
                                                <select name="product_type" data-placeholder="Select Product Type.." class="form-select" required>
                                                    <option></option>
                                                    <option class="form-control" value="hardware">
                                                        Hardware</option>
                                                    <option class="form-control" value="software">
                                                        Software</option>
                                                    <option class="form-control" value="training">
                                                        Training</option>
                                                    <option class="form-control" value="book">
                                                        Book</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 bassic-form">
                                                <label class="col-form-label col-lg-12">Related Solutions</label>
                                                <select class="form-control select" name="solution_id[]" data-placeholder="Select related Solutions..."
                                                    multiple="multiple">
                                                        @foreach ($solutions as $key => $item)
                                                        <option value="{{ $item->id }}"><h5 style="font-size: 14px;font-weight:700;">{{ $key + 1 }}</h5>. {{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>

                                            <div class="form-group col-md-6 bassic-form">
                                                <label class="col-form-label col-lg-12">Related Industries</label>

                                                    <select class="form-control select" name="industry_id[]" data-placeholder="Select related Industries..."
                                                    multiple="multiple">
                                                        @foreach ($industrys as $key => $item)
                                                        <option class="form-control" value="{{ $item->id }}"><h5 style="font-size: 14px;font-weight:700;">{{ $key + 1 }}</h5>. {{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 mt-2">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end row-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /content area -->
    <!-- /inner content -->

</div>


<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>


<script>

  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data

          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                  .height(80); //create image element
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });

      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });

  </script>

<script>
    //---------Sidebar list Show Hide----------

    $(document).ready(function(){

        $('#dealId').click(function() {
            $("#dealExpand").toggle(this.checked);
        });

        $('#rfqId').click(function() {

            $("#rfqExpand").toggle('slow');

        });


    });


</script>

@endsection
@once
@push('scripts')
<script>
    $('.stock_select').on('change', function() {

            var stock_value = $(this).find(":selected").val() ;

            if (stock_value == 'available') {
                $(".qty_display").removeClass("d-none");
            }
            else if (stock_value == 'limited'){
                $(".qty_display").removeClass("d-none");
            }
            else {
                $(".qty_display").addClass("d-none");
            }

        });
</script>
@endpush
@endonce
