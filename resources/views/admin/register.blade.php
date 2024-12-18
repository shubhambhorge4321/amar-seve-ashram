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
          <li class="breadcrumb-item active"><a href="javascript:void(0);">Register</a></li>
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
              <h3 class="text-light">Manage Register</h3>

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
          <h5 class="modal-title" id="exampleModalLabel">Add Gallery</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="add_gallery_form" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body img-holder">
                    <img src="http://harvest.com/assets/uploads/Infant22.png" alt="Image Description"
                      class="img-thumbnail img-fluid">
                  </div>
                </div>
              </div>
              <div class="col">
                <!-- Image Input -->
                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                  <input type="text" name="description" class="form-control" placeholder="Description" required>
                </div>
                <div class="form-group">
                  <textarea type="text" name="message" class="form-control" placeholder="message"> </textarea>
                </div>
                <div class="form-group">
                  <select class="form-select" name="category">
                    <option>Select Categories</option>
                    <option value="home/mahagame">Home/Mahagame</option>
                    <option value="aboutus/contact">Aboutus/Contact</option>


                  </select>
                </div>

              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_gallery_btn" class="btn btn-primary">Add Gallery</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Testimonial</h5>
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
                    <img src="http://harvest.com/assets/uploads/Infant22.png" id="avtar" alt="Image Description"
                      class="img-thumbnail img-fluid">
                  </div>
                </div>
              </div>
              <div class="col">
                <!-- Image Input -->
                <div class="form-group">
                  <label for="avatar">Upload Image</label>
                  <input type="file" name="avatar" class="form-control" id="avatar">
                </div>
                <div class="form-group">
                  <label for="edit_name">Name:</label>
                  <input type="text" name="edit_name" id="edit_name" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                  <label for="edit_name">title:</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                  <label for="description">Description:</label>
                  <input type="text" name="description" id="description" class="form-control" placeholder="Description"
                    required>
                </div>
                <div class="form-group">
                  <select class="form-select" name="category" id="category">
                    <option disabled>Select Categories</option>
                    <option value="home/mahagame">home/mahagame</option>
                    <option value="aboutus">Aboutus</option>
                  </select>
                </div>



              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea type="text" name="edit_message" id="edit_message" class="form-control" placeholder="message"
                  required></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="edit_gallery_btn" class="btn btn-primary">Update Gallery</button>
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
          <h5 class="modal-title" id="exampleModalLabel">View Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            
            <div class="col">
              <div class="form-group">
                <strong>Name :</strong> <span id="view_name"></span>
              </div>
              <div class="form-group">
                <strong>mobile :</strong> <span id="view_title"></span>
              </div>
              <div class="form-group">
                <strong>Email :</strong> <span id="view_description"></span>
              </div>
              <div class="form-group">
                <strong>Category :</strong> <span id="view_category"></span>
              </div>
              <div class="form-group">
                <strong>Register at :</strong> <span id="view_created"></span>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------ -->
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
        url: "{{ route('testimonial.admin.store') }}",
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
              'Gallery Added Successfully!',
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
        url: "{{ route('testimonial.admin.edit') }}",
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },
        success: function (response) {
          $("#edit_name").val(response.testst_name);
          $("#edit_message").val(response.testst_message);
          $("#title").val(response.testst_title);
          $("#description").val(response.testst_description);
          $("#category").val(response.testst_type);
          $("#sub_category").val(response.testst_type);

          // Use .attr("src", ...) to set the src attribute

          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.testst_image}`);


          $("#gallery_id").val(response.id);
          $("#gallery_avatar").val(response.avatar);
        }
      });
    });


    // update gallery ajax request
    $("#edit_gallery_form").submit(function (e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_gallery_btn").text('Updating...');
      $.ajax({
        url: "{{ route('testimonial.admin.update') }}",
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
              'Gallery Updated Successfully!',
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
            url: "{{ route('register.admin.delete') }}",
            method: 'DELETE',
            data: {
              id: id,
              _token: csrf
            },
            success: function (response) {
              // console.log(response);
              setTimeout(function () {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                );
              }, 200);
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
        url: '/register/admin/show/' + id,
        method: 'get',
        data: {
          _token: '{{ csrf_token() }}',
        },
        success: function (response) {
          var res = response.gallery;
          var dateupdated = response.formatted_date;
          $("#view_title").html(res.reg_mobile);
          $("#view_description").html(res.reg_email);
          $("#view_category").html(res.reg_type);
          $("#view_sub_category").html(res.reg_name);
          $("#view_name").html(res.reg_name);
          $("#view_created").html(dateupdated);

          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.testst_image}`);

          $("#gallery_id").val(response.id);
          $("#gallery_avatar").val(response.avatar);
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


    // fetch all gallery ajax request
    fetchAllGalleries();

    function fetchAllGalleries() {
      $.ajax({
        url: "{{ route('register.admin.fetchall') }}",
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