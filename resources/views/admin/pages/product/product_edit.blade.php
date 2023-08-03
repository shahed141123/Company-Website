@extends('admin.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="content-wrapper">

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

    <div class="content">
        <div class="card">
            <div class="card-header">

                <h5 class="mb-0 float-start">Add New Product</h5>
                <a href="{{route('all.product')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                        <i class="icon-eye"></i>
                    </span>
                    All Product
                </a>
            </div>

            <div class="card-body p-0">
                <form id="myForm" method="post" action="{{ route('update.product') }}">
					@csrf

					<input type="hidden" name="id" value="{{ $products->id }}">

                    <div class="form-body mt-1">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="border border-3 p-2 rounded">

                                    <div class="form-group mb-3 row">
                                        <div class="form-group col-lg-6">

                                            <textarea class="form-control" name="name" id="" cols="350" rows="1" style=" font-size: 12px; font-weight: 600;">{{ $products->name }}</textarea>

                                        </div>

                                        <div class="form-group col-lg-3">
                                            {{-- <label for="inputProductTitle" class="form-label" style=" font-size: 12px; font-weight: 600;">Product Name</label> --}}
                                            <input type="text" name="sku_code" class="form-control"
                                                id="inputProductTitle" style=" font-size: 12px; font-weight: 500;" value="{{ $products->sku_code }}">
                                        </div>

                                        <div class="form-group col-lg-3">

                                            <input type="text" name="mf_code" class="form-control"
                                                id="inputProductTitle" value="{{ $products->mf_code }}" style=" font-size: 12px; font-weight: 500;">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <div class="col-lg-4">
                                            <input type="text" name="tags" class="form-control visually-hidden" data-role="tagsinput" value="{{ $products->tags }}">


                                        </div>

                                        <div class="col-lg-4">
                                               <input type="text" name="size" class="form-control visually-hidden" data-role="tagsinput" value="{{ $products->size}}">
                                        </div>

                                        <div class="col-lg-4">

                                                <input type="text" name="color" class="form-control visually-hidden" data-role="tagsinput" value="{{ $products->color }}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">

                                        <textarea name="short_desc" class="form-control" id="short_desc" rows="3" style=" font-size: 12px; font-weight: 500;">{!! $products->short_desc !!}</textarea>
                                    </div>

                                    <div class="mb-3">

                                        <textarea class="form-control" name="overview" id="overview" style=" font-size: 12px; font-weight: 500;">{!! $products->overview !!}</textarea>
                                    </div>

                                    <div class="mb-3">

                                        <textarea class="form-control" name="specification" id="specification" style=" font-size: 12px; font-weight: 500;">{!! $products->specification !!}</textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5">


                                <div class="mb-3">

                                    <textarea class="form-control" name="accessories" id="accessories" style=" font-size: 12px; font-weight: 500;">{!! $products->accessories !!}</textarea>
                                </div>
                                <div class="mb-1">

                                    <textarea class="form-control" name="warranty" id="warranty"  style=" font-size: 12px; font-weight: 500;" ></textarea>
                                </div>



                                <div class="border border-3 p-2 rounded">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCostPerPrice" class="form-label">Product Code <span class="text-danger">*</span></label>
                                            <input type="text" name="product_code" class="form-control"
                                                id="inputCostPerPrice" placeholder="WX-548" value="{{ $products->product_code }}">
                                        </div>
                                        <div class="form-group col-md-3 m-4">

                                            <input class="form-check-input" name="rfq" type="checkbox" id="rfqId" value="1" {{ $products->rfq == '1' ? 'checked' : '' }}>
                                            <label for="rfqId" class="form-label">RFQ </label>

                                        </div>
                                    </div>
                                    <div class="row" id="rfqExpand">
                                        <div class="form-group col-md-6">
                                            <label for="inputPrice" class="form-label">Product Price</label>
                                            <input type="text" name="price" class="form-control" id="inputPrice"
                                                value="{{ $products->price }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCompareatprice" class="form-label">Discount Price </label>
                                            <input type="text" name="discount" class="form-control"
                                                id="inputCompareatprice" value="{{ $products->discount }}">
                                        </div>
                                    </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputPrice" class="form-label">Product Notification (days) <span class="text-danger">*</span> :</label>
                                            <input class="form-control allow_decimal" placeholder="Days" type="text" name="notification_days"  value="{{ $products->notification_days }}">
                                        </div>


                                </div>

                                <div class="border border-3 p-2 rounded mt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group col-sm-10 dropdown">
                                                <label class="col-form-label col-lg-12">Stock Availability <span class="text-danger">*</span></label>

                                                <select class="form-select stock_select" name="stock" data-placeholder="Select Stock Option...">
                                                    <option></option>

                                                        <option class="form-select" value="available" {{ $products->stock == 'available' ? 'selected' : '' }}>
                                                            Available
                                                        </option>
                                                        <option class="form-select" value="limited" {{ $products->stock == 'limited' ? 'selected' : '' }}>
                                                            Limited</option>
                                                        <option class="form-select" value="unlimited" {{ $products->stock == 'unlimited' ? 'selected' : '' }}>
                                                            UnLimited</option>
                                                        <option class="form-select" value="stock_out" {{ $products->stock == 'stock_out' ? 'selected' : '' }}>
                                                            Out of Stock</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group col-sm-10 qty_display d-none">
                                                <label for="inputStarPoints" class="form-label">Product Quantity</label>
                                                    <input type="text" name="qty" class="form-control"
                                                    id="inputStarPoints" value="{{ $products->qty }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="border border-3 p-2 rounded mt-1">
                                    <div class="row g-3">


                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" name="refurbished"
                                                    type="checkbox" value="1" id="flexCheckDefault3" {{ ( $products->refurbished == '1' ) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault3">Refurbished</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="dealId" {{ (!empty($products->deal)) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="dealId"> Deals</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 d-none" id="dealExpand">
                                            <input type="text" name="deal" class="form-control"
                                            placeholder="Enter Deals" style=" font-size: 12px; font-weight: 500;" value="{{ $products->deal }}">
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
                                                        <option class="form-select" value="{{ $brand->id }}" {{ ( $products->brand_id == $brand->id ) ? 'selected' : '' }}>
                                                            {{ $brand->title }}</option>
                                                    @endforeach

                                                </select>
                                        </div>

                                        <div class="form-group col-md-6 basic-form">
                                            <label class="col-form-label col-lg-12">Product Category</label>

                                                <select class="form-control select" name="cat_id" data-placeholder="Select Category...">
                                                    <option></option>
                                                    @foreach ($categories as $cat)
                                                    <option class="form-control" value="{{ $cat->id }}" {{ ( $products->cat_id == $cat->id ) ? 'selected' : '' }}>
                                                        {{ $cat->title }}</option>
                                                    @endforeach

                                                </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 basic-form">
                                            <label for="inputCollection6" class="col-form-label ">Product Sub Category</label>
                                            <select class="form-control select" name="sub_cat_id"
                                                id="inputCollection6" data-placeholder="Select Sub Category...">
                                                <option></option>
                                                @foreach ($sub_cats as $item)
                                                <option class="form-control" value="{{ $item->id }}" {{ ( $products->sub_cat_id == $item->id ) ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 basic-form">
                                            <label for="inputCollection4" class="col-form-label">Product Sub Sub Category</label>
                                            <select class="form-control select" name="sub_sub_cat_id"
                                                id="inputCollection4" data-placeholder="Select Sub Sub Category...">
                                                <option></option>
                                                @foreach ($sub_sub_cats as $item)
                                                <option class="form-control" value="{{ $item->id }}" {{ ( $products->sub_sub_cat_id == $item->id ) ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 basic-form">
                                            <label for="inputCollection" class="form-label">Product Sub Sub Sub Category</label>
                                            <select name="sub_sub_sub_cat_id" class="form-control select"
                                                id="inputCollection" data-placeholder="Select Sub Sub Sub Category..." >
                                                <option></option>
                                                @foreach ($sub_sub_sub_cats as $item)
                                                <option class="form-control" value="{{ $item->id }}" {{ ( $products->sub_sub_sub_cat_id == $item->id ) ? 'selected' : '' }}>
                                                    {{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputCollection" class="form-label">Product Type</label>
                                            <select name="product_type" data-placeholder="Select Product Type.." class="form-control select" required>
                                                <option></option>
                                                <option class="form-control" value="hardware" {{ ( $products->product_type == 'hardware' ) ? 'selected' : '' }}>
                                                    Hardware</option>
                                                <option class="form-control" value="software" {{ ( $products->product_type == 'software' ) ? 'selected' : '' }}>
                                                    Software</option>
                                                <option class="form-control" value="training" {{ ( $products->product_type == 'training' ) ? 'selected' : '' }}>
                                                    Training</option>
                                                <option class="form-control" value="book" {{ ( $products->product_type == 'book' ) ? 'selected' : '' }}>
                                                    Book</option>

                                            </select>
                                        </div>



                                    </div>

                                    {{-- <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="col-form-label col-lg-12">Related Solutions</label>
                                            <select class="form-control select" name="solution_id[]" data-placeholder="Select related Solutions..."
                                                multiple="multiple" data-tags="true">
                                                    @foreach ($solutions as $item)
                                                    <option value="{{ $item->title }}"> {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="col-form-label col-lg-12">Related Industries</label>

                                                <select class="form-control select" name="industry_id[]" data-placeholder="Select related Industries..."
                                                multiple="multiple" data-tags="true" value="{{ $products->industry }}">

                                                    @foreach ($industrys as $item)
                                                    <option value="{{ $item->title }}"> {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div> --}}

                                </div>


                            </div>

                            <div class="col-12 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--end row-->
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-0 text-uppercase text-center">Update Main Image Thumbnail </h5>
                        <hr>
                        <form method="post" action="{{ route('update.product.thambnail') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $products->id }}">
                            <input type="hidden" name="old_img" value="{{ $products->thumbnail }}">

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Chose Thumbnail Image </label>
                                    <input name="thumbnail" class="form-control" type="file"  id="image">
                                </div>


                                <div class="mb-3">
                                    <label for="formFile" class="form-label"> </label>
                                    <img id="showImage" src="{{ asset($products->thumbnail) }}" style="width:120px; height:100px">
                                </div>

                                <input type="submit" class="btn btn-primary px-1" value="Save Changes" />

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-0 text-uppercase text-center">Update Multi Image </h5>
                        <hr>
                        <div class="table-responsive">
                            <table class="table mb-0 table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#Sl</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action </th>
                                    </tr>
                                </thead>
                                <tbody>



                                        @foreach($multiImgs as $key => $img)
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>

                                            <td> <img src="{{ asset($img->photo) }}" style="width:70; height: 40px;"> </td>

                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-primary px-1" data-bs-toggle="modal" data-bs-target="#update_multi_img_{{$img->id}}">
                                                    <i class="icon-pencil"></i></a>
                                                    <a href="{{ route('product.multiimg.delete', [$img->id]) }}"
                                                        class="btn btn-danger delete px-1">
                                                        <i class="delete icon-trash"></i>
                                                    </a>

                                            </td>
                                        </tr>

                                        <div id="update_multi_img_{{$img->id}}" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-center">Multi Image Update</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    @php
                                                        $img = App\Models\Admin\MultiImage::where('id', $img->id)->first();
                                                    @endphp
                                                    <form method="post" action="{{ route('update.product.multiimage') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="img_id" value="{{ $img->id }}">
                                                        <input type="hidden" name="old_img" value="{{ $img->photo }}">

                                                        <div class="modal-body">

                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Image </h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="file" name="photo" class="form-control" id="image2" accept="image/*" value="{{ asset($img->photo) }}"/>
                                                                    <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                                                    <img class="mt-2" id="showImage2" height="100px" width="100px"  src="{{ asset($img->photo) }}" >

                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-sm-6"></div>
                                                                <div class="col-sm-3 text-secondary">
                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>

                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image2').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage2').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>




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



<script type="text/javascript">
	$(document).ready(function(){
  			$('select[name="category_id"]').on('change', function(){
  				var category_id = $(this).val();
				  var role = $('#role').val();
				  if (role == 'super_admin') {
					//alert(role);
					if (category_id) {
  					$.ajax({
  						url: "{{ url('/superadmin/subcategory/ajax') }}/"+category_id,
  						type: "GET",
  						dataType:"json",
  						success:function(data){
  							$('select[name="subcategory_id"]').html('');
  							var d =$('select[name="subcategory_id"]').empty();
  							$.each(data, function(key, value){
  								$('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.title + '</option>');
  							});
  						},

  					});
  				} else {
  					alert('danger');
  				}
				}else{
  				if (category_id) {
  					$.ajax({
  						url: "{{ url('/admin/subcategory/ajax') }}/"+category_id,
  						type: "GET",
  						dataType:"json",
  						success:function(data){
  							$('select[name="subcategory_id"]').html('');
  							var d =$('select[name="subcategory_id"]').empty();
  							$.each(data, function(key, value){
  								$('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.title + '</option>');
  							});
  						},

  					});
  				} else {
  					alert('danger');
  				}
			}
  			});
  		});

</script>




@endsection

@once
@push('scripts')
<script>
    //---------Sidebar list Show Hide----------

    $(document).ready(function(){


        var isChecked = $('#rfqId').prop('checked');
        var dealisChecked = $('#dealId').prop('checked');
        if(isChecked == true){
        $( "#rfqExpand" ).addClass( 'd-none');

        }else{

        }

        if(dealisChecked == true){
            //alert(5);
        $( "#dealExpand" ).removeClass( 'd-none');

        }else{

        }


        $('#rfqId').click(function() {

           $("#rfqExpand").toggle('slow');

        });

        $('#dealId').click(function() {
            $("#dealExpand").toggle(this.checked);
        });



    //     $('#dealId').click(function() {
    //         $("#dealExpand").toggle(this.checked);
    //      });


     });


</script>


<script>

        var stock_value1 = $('.stock_select').find(":selected").val() ;

            if (stock_value1 == 'available') {
                $(".qty_display").removeClass("d-none");
            }
            else if (stock_value1 == 'limited'){
                $(".qty_display").removeClass("d-none");
            }
            else {
                $(".qty_display").addClass("d-none");
            }

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
