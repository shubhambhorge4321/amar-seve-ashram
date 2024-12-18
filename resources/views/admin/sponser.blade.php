@extends('admin.layouts.app')
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/vendor/datatable/jquery.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/vendor/datatable/buttons.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/vendor/datatable/custom-datatable.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="themebody-wrap">
  <!-- breadcrumb start-->
  <div class="codex-breadcrumb">
    <div class="breadcrumb-contain">
      <div class="left-breadcrumb">
        <ul class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">
              <h1>Dashboard</h1>
            </a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0);">Sponsor</a></li>
        </ul>
      </div>
      <div class="right-breadcrumb">
        <ul>
          <li>
            <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
          </li>
          <li>
            <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"> </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breadcrumb end-->
  <!-- theme body start-->
  <div class="theme-body myCustomScrollbar cdxshopping-cart" data-mcs-theme="minimal-dark">
    <div class="custom-container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="text-light">Manage Sponsor</h3>
              <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal"
                data-bs-target="#addGalleryModal" id="resetImageButton" >Add Sponsor</button>
            </div>
            <div class="card-body" id="show_all_galleries">
              <div class="table-responsive">
                <h1 class="text-center text-secondary my-5">Loading...</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- theme body end-->
  <!-- Gallery Add Modal-->
  <div class="modal fade" id="addGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Sponsor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="add_gallery_form" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body img-holder" id="myImage">
                    <img src="{{asset('front/logo_upload_monuments.png')}}" alt="Image Description"
                      class="img-thumbnail img-fluid img-reset">
                  </div>
                </div>
              </div>
              <div class="col">
                <!-- Image Input -->
                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" name="avatar" class="form-control" required>
                </div>

                <div class="form-group">
                  <select class="form-select" name="category" required>
                    <option disabled>Select page</option>
                    <!-- <option value="home/mahagame">Home/Mahagame</option>
                    <option value="aboutus/contact">Aboutus/Contact</option> -->
                    <option value="homepage">homepage</option>
                    <option value="mahagame">mahagame</option>
                    <option value="event">event</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-select sub-category" style="display:none;" name="sub_category">
                    <option  disabled>event page</option>
                    @foreach($categories as $category)
                    <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                  </select>
                </div>
                <!-- <div class="form-group sub-city"  style="display:none;">
                  <select class="form-select" name="city" >
                    <option disabled >Select city</option>
                    <option value="nagpur">nagpur</option>
                    <option value="amravati">amravati</option>
                    <option value="akola">akola</option>
                    <option value="nanded">nanded</option>
                    <option value="jalgaon">jalgaon</option>
                    <option value="aurangabad">aurangabad</option>
                    <option value="ahmadnagar">ahmadnagar</option>
                    <option value="nashik">nashik</option>
                    <option value="pune">pune</option>
                    <option value="kolhapur">kolhapur</option>
                    <option value="solapur">solapur</option>
                    <option value="ratnagiri">ratnagiri</option>
                    <option value="sindhudurg">sindhudurg</option>
                    <option value="nandurbar">nandurbar</option>
                    <option value="dhule">dhule</option>
                    <option value="buldhana">buldhana</option>
                    <option value="beed">beed</option>
                    <option value="usmanabad">usmanabad</option>
                    <option value="latur">latur</option>
                    <option value="parbhani">parbhani</option>
                    <option value="washim">washim</option>
                    <option value="yavatmal">yavatmal</option>
                    <option value="wardha">wardha</option>
                    <option value="chandrapur">chandrapur</option>
                    <option value="bhandara">bhandara</option>
                    <option value="gadchiroli">gadchiroli</option>
                    <option value="satara">satara</option>
                  </select>
                </div> -->

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script>
                  $(document).ready(function () {
                    $('select[name="category"]').change(function () {
                      var selectedCategory = $(this).val();

                      // Show the second dropdown only when "event" is selected in the first dropdown
                      if (selectedCategory === 'event') {
                        $('.sub-category').show();
                        
                        $('.sub-city').show();
                      } else {
                        $('.sub-category').hide();
                        
                        $('.sub-city').hide();
                      }
                    });
                  });
                </script>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_gallery_btn" class="btn btn-primary">Add Sponsor</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Gallery Edit Modal  -->
  <div class="modal fade" id="editGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Sponsor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="edit_gallery_form" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="gallery_id" id="gallery_id">
          <input type="hidden" name="gallery_avatar" id="gallery_avatar">

          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body img-holder">
                    <img src="{{asset('front/logo_upload_monuments.png')}}" id="avtar" alt="Image Description"
                      class="img-thumbnail img-fluid">
                  </div>
                </div>
              </div>
              <div class="col">
                <!-- Image Input -->
                <div class="form-group">
                  <label for="avatar">Upload Image/required*</label>
                  <input type="file" name="avatar" class="form-control" id="avatar">
                </div>

                <div class="form-group">
                  <select class="form-select" name="category" id="category">
                    <option disabled>Select Page</option>
                    <option value="homepage">homepage</option>
                    <option value="mahagame">mahagame</option>
                    <option value="event">event</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-select sub-edit-category" name="sub_category">
                    <option  disabled> event page</option>
                    @foreach($categories as $category)
                    <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                  </select>
                </div>
                
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="edit_gallery_btn" class="btn btn-primary">Update Sponsor</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- show gallery modal  -->
  <div class="modal fade" id="viewGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View Sponsor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body img-holder">
                  <img src="http://harvest.com/assets/uploads/Infant22.png" id="avtarimg" alt="Image Description"
                    class="img-thumbnail img-fluid">
                </div>
              </div>
            </div>
            <div class="col">

              <div class="form-group">
                <strong>Page :</strong> <span id="view_category"></span>
              </div>
              <div class="form-group">
                <strong>sub Event :</strong> <span id="view_subcategory"></span>
              </div>
              <div class="form-group">
                <strong>City :</strong> <span id="view_subcity"></span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
@section('scripts')
<!-- Datatable-->
<script src="{{ asset('js/vendors/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/vendors/datatable/custom-datatable.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(function () {

    // add new gallery ajax request
    $("#add_gallery_form").submit(function (e) {
      e.preventDefault();
      const fd = new FormData(this);

      $("#add_gallery_btn").text('Adding...');
      $.ajax({
        url: "{{ route('sponsor.admin.store') }}",
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (response) {
          if (response.status == 200) {
            Swal.fire(
              'Added!',
              'sponsor Added Successfully!',
              'success'
            )
            fetchAllGalleries();
          }
          $("#add_gallery_btn").text('Add Gallery');
          $("#add_gallery_form")[0].reset();
          $("#addGalleryModal").modal('hide');
        }
      });
    });

    // edit gallery ajax request
    $(document).on('click', '.editIcon', function (e) {
      e.preventDefault();
      let id = $(this).attr('id');
      $.ajax({
        url: "{{ route('sponsor.admin.edit') }}",
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },
        success: function (response) {
          $("#title").val(response.spon_title);
          $("#description").val(response.spon_desc);
          $("#category").val(response.sponsor);
          $(".sub-edit-category").val(response.sub_sponsor);


          // Use .attr("src", ...) to set the src attribute
          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.image_path}`);


          $("#gallery_id").val(response.id);
          $("#gallery_avatar").val(response.image_path);
        }
      });
    });


    // update gallery ajax request
    $("#edit_gallery_form").submit(function (e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_gallery_btn").text('Updating...');
      $.ajax({
        url: "{{ route('sponsor.admin.update') }}",
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (response) {
          if (response.status == 200) {
            Swal.fire(
              'Updated!',
              'Sponsor Updated Successfully!',
              'success'
            )
            fetchAllGalleries();
          }
          $("#edit_gallery_btn").text('Update Gallery');
          $("#edit_gallery_form")[0].reset();
          $("#editGalleryModal").modal('hide');
        }
      });
    });

    // delete gallery ajax request
    $(document).on('click', '.deleteIcon', function (e) {
      e.preventDefault();
      let id = $(this).attr('id');
      let csrf = '{{ csrf_token() }}';
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "{{ route('sponsor.delete') }}",
            method: 'delete',
            data: {
              id: id,
              _token: csrf
            },
            success: function (response) {
              console.log(response);
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              fetchAllGalleries();
            }
          });
        }
      })
    });

    //view gallery ajax request
    $(document).on('click', '.viewIcon', function (e) {
      e.preventDefault();
      let id = $(this).attr('id');
      $.ajax({
        url: '/sponsor/admin/show/' + id,
        method: 'get',
        data: {
          _token: '{{ csrf_token() }}',
        },
        success: function (response) {
          $("#view_title").html(response.spon_title);
          $("#view_description").html(response.spon_desc);
          $("#view_category").html(response.sponsor);
          $("#view_subcategory").html(response.sub_sponsor);
          $("#view_subcity").html(response.spon_city);


          // Use .attr("src", ...) to set the src attribute
          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.image_path}`);

          


          $("#gallery_id").val(response.id);
          $("#gallery_avatar").val(response.image_path);
        },
        error: function (error) {
          console.log(error.responseText); // Log the detailed error response
        }
      });
    });


    //Reset input file
    $('input[type="file"][name="avatar"]').val('');
    //Image preview
    $('input[type="file"][name="avatar"]').on('change', function () {
      var img_path = $(this)[0].value;
      var img_holder = $('.img-holder');
      var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

      if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
        if (typeof (FileReader) != 'undefined') {
          img_holder.empty();
          var reader = new FileReader();
          reader.onload = function (e) {
            $('<img/>', { 'src': e.target.result, 'class': 'img-fluid' }).appendTo(img_holder);
          }
          img_holder.show();
          reader.readAsDataURL($(this)[0].files[0]);
        } else {
          $(img_holder).html('This browser does not support FileReader');
        }
      } else {
        $(img_holder).empty();
      }
    });
    $("#resetImageButton").on("click", function () {
    // Set the default image path or an empty string to reset the image
    var defaultImagePath = "{{ asset('front/logo_upload_monuments.png') }}"; 
    $("#myImage .img-reset").attr("src", defaultImagePath);
});


    // fetch all gallery ajax request
    fetchAllGalleries();

    function fetchAllGalleries() {
      $.ajax({
        url: "{{ route('sponsor.fetchall') }}",
        method: 'get',
        success: function (response) {
          $("#show_all_galleries").html(response);
           $("#basicdata-tbl").DataTable({
            order: [0, 'desc'],
            responsive: true, // Enable responsive features
            scrollY: 400 // Set the height of the vertical scrollbar in pixels
          });
        }
      });
    }
  });
</script>
@endsection