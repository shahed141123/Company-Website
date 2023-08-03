<!-- Core JS files -->

<script src="{{ asset('backend/assets/input-tags/js/tagsinput.js') }}"></script>
<script src="{{ asset('/') }}backend/assets/demo/demo_configurator.js"></script>
<script src="{{ asset('/') }}backend/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{ asset('/') }}backend/assets/js/vendor/visualization/d3/d3.min.js"></script>
<script src="{{ asset('/') }}backend/assets/js/vendor/visualization/d3/d3_tooltip.js"></script>

<script src="{{ asset('/') }}backend/assets/js/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}backend/assets/js/vendor/tables/datatables/datatables.min.js"></script>

<script src="{{ asset('/') }}backend/assets/js/vendor/forms/tags/tokenfield.min.js"></script>

<script src="{{ asset('/') }}backend/assets/js/vendor/forms/inputs/maxlength.min.js"></script>
<script src="{{ asset('backend/assets/js/vendor/notifications/sweet_alert.min.js') }}"></script>

<script src="{{ asset('/') }}backend/assets/js/vendor/forms/selects/select2.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


<script src="{{ asset('/') }}backend/assets/js/app.js"></script>

<script src="{{ asset('/') }}backend/assets/demo/pages/form_select2.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/pages/components_modals.js"></script>



<script src="{{ asset('backend/assets/demo/pages/extra_sweetalert.js') }}"></script>
<script src="{{ asset('/') }}backend/assets/demo/pages/form_controls_extended.js"></script>

<script src="{{ asset('/') }}backend/assets/demo/pages/datatables_advanced.js"></script>


<script src="{{ asset('/') }}backend/assets/demo/pages/form_tags.js"></script>

<script src="{{ asset('/') }}backend/assets/js/custom.js"></script>

<script src="{{ asset('/') }}backend/assets/demo/pages/dashboard.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/streamgraph.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/sparklines.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/lines.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/areas.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/donuts.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/bars.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/progress.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/heatmaps.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/pies.js"></script>
<script src="{{ asset('/') }}backend/assets/demo/charts/pages/dashboard/bullets.js"></script>



<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


{!! Toastr::message() !!}



<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
            //alert(5);
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#image1').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

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
	$(document).ready(function(){
		$('#image3').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage3').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>

 <script type="text/javascript">
//     $(document).ready(function(){
//         $('.datatable').DataTable({
//             dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
//             autoWidth: false,
//             columnDefs: [{
//                 orderable: false,
//                 width: 100,
//                 targets: [5],
//             }, ],
//         });
//     });
</script>

<script type="text/javascript">
    $(".datatable").DataTable({
        pagingType: 'full_numbers',
        autoWidth: false,
        paging: false,
        ordering: false,
        info: false,

    });
</script>

<script>
    $(document).ready(function(){
        $('#myform').on('submit', function () {
            $('#submitbtn').attr('disabled', 'true');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#short_desc').summernote({
            placeholder: "Short Description",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#featured_desc').summernote({
            placeholder: "Featured Description",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#footer').summernote({
            placeholder: "Conclusion Texts..",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#long_desc').summernote({
            placeholder: "Long Description",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#overview').summernote({
            placeholder: "Product Overview",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#specification').summernote({
            placeholder: "Product Specification",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#accessories').summernote({
            placeholder: "Product accessories",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
        $('#warranty').summernote({
            placeholder: "Product warranty",
            toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],

          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
        });
    });

</script>


@stack('scripts')
