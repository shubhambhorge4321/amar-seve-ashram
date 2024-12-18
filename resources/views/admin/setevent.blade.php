@extends('admin.layouts.app')
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/vendor/datatable/jquery.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/vendor/datatable/buttons.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/vendor/datatable/custom-datatable.css') }}" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>


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
          <li class="breadcrumb-item active"><a href="javascript:void(0);">Event</a></li>
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
              <h3 class="text-light">Manage Event</h3>
              <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal"
                data-bs-target="#addGalleryModal" id="resetImageButton">Add Event</button>
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
  <div class="modal fade bd-example-modal-lg" id="addGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="add_gallery_form" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="card">
                      <div class="card-body img-holder-favicon">
                          <p>favicon</p>
                         
                    <img src="{{asset('front/Digital_Trends_favicon.png')}}" alt="Image Description"
                      class="img-thumbnail img-fluid img-set img-h-w-set">
                  </div>
                  <div class="card-body img-holder-second" id="myImage">
                      <p>image</p>
                    <img src="{{asset('front/logo_upload_monuments.png')}}" alt="Image Description"
                      class="img-thumbnail img-fluid img-reset">
                  </div>
                </div>
              </div>
              <div class="col">
                <!-- Image Input -->
                <!-- <div class="form-group">
                  <label>Upload front Image</label>
                  <input type="file" name="avatar_first" class="form-control" required>
                </div> -->
                  <div class="form-group">
                  <label>Upload favicon Image:</label>
                  <input type="file" name="avatar_favicon" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Upload Image</label>
                  <input type="file" name="avatar_second" class="form-control" required accept="image/*">
                </div>
              
                <!-- <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Title" required>
                </div> -->

                <div class="form-group">
                  <input type="text" name="event" class="form-control" placeholder="create event" required>
                </div>
              </div>

              <div class="form-group">
                <textarea type="text" id="description" name="description" class="form-control ckeditor"
                  placeholder="Description" required>
                    </textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_gallery_btn" class="btn btn-primary">Add Event</button>
          </div>
        </form>
      </div>
      <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function () {
          // Replace the textarea with CKEditor
          CKEDITOR.replace('description', {
            // Optional: Add any additional CKEditor configurations here
            extraPlugins: 'sourcearea',
            protectedSource: [
        // Example: Protect all <code> elements
        { selector: 'code', attributes: ['*'] },
        // Add more rules as needed
      ],
          });
        });
      </script>
    </div>
  </div>
  <!-- Gallery Edit Modal  -->
  <div class="modal fade bd-example-modal-lg" id="editGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Gallery</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="POST" id="edit_gallery_form" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="gallery_id" id="gallery_id">
          <input type="hidden" name="gallery_avatar" id="gallery_avatar">
          <input type="hidden" name="gallery_avatar_back" id="gallery_avatar_back">
          <input type="hidden" name="gallery_favicon" id="gallery_favicon">
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body img-holder-favicon img-holder img-holder-favicon-edit">
                    <p>favicon:</p>
                    <img src="{{asset('front/Digital_Trends_favicon.png')}}" id="avtar" alt="Image Description"
                      class="img-thumbnail img-fluid  img-h-w-set">
                  </div>
                   <div class="card-body img-holder-second ">
                  <p>image:</p>
                  <img id="image-second" src="{{asset('front/logo_upload_monuments.png')}}" id="avtar"
                    alt="Image Description" class="img-thumbnail img-fluid img-h-w-set">
                    </div>
                </div>
              </div>
              <div class="col">
                <!-- Image Input -->
                <div class="form-group">
                  <strong>event :</strong> <span id="category_event"></span>
                </div>
                <div class="form-group">
                  <label for="avatar">Upload Favicon Image</label>
                  <input type="file" name="avatar_first" class="form-control" id="avatar_first">
                </div>
                <div class="form-group">
                  <label for="avatar_second">Upload  Image</label>
                  <input type="file" name="avatar_second" class="form-control" id="avatar">
                </div>
                <div class="form-group">
                  <input type="hidden" name="event" id="category">
                </div>
              </div>
                <div class="form-group">
                  <textarea type="text" id="descriptionone" name="descriptionone" class="form-control  description-data ckeditor"
                    placeholder="Description" required>
                    </textarea>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="edit_gallery_btn" class="btn btn-primary">Update Event</button>
          </div>
        
        </form>
      </div>
      <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function () {
          // Replace the textarea with CKEditor
          CKEDITOR.replace('desc', {
            // Optional: Add any additional CKEditor configurations here
            extraPlugins: 'codesnippet', // Enable codesnippet plugin
          });
        });
      </script>
    </div>
  </div>

  <!-- show gallery modal  -->
  <div class="modal fade bd-example-modal-lg" id="viewGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View Gallery</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body img-holder">
                  <span>Favicon img:</span>

                  <img id="first-img" src="http://harvest.com/assets/uploads/Infant22.png" id="avtar"
                    alt="Image Description" class="img-thumbnail img-fluid">

                </div>
                <div class="card-body img-holder">
                  <span>image :</span>
                  <img id="second-img" src="http://harvest.com/assets/uploads/Infant22.png" id="avtar"
                    alt="Image Description" class="img-thumbnail img-fluid">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <strong>event :</strong> <span id="view_title"></span>
              </div>
              <div class="form-group">
                <strong>Description :</strong> <span id="view_description"></span>
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
<script>
  CKEDITOR.instances['editor'].setData(response['editor']);
</script>

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


      const editorData = CKEDITOR.instances.description.getData();
      fd.append('description', editorData);

      $("#add_gallery_btn").text('Adding...');
      $.ajax({
        url: "{{ route('setevent.store') }}",
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
              'Event Added Successfully!',
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
        url: "{{ route('setevent.edit') }}",
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },
        success: function (response) {
          $("#title").val(response.set_desc);
          $("#desc").val(response.set_desc);
          $("#category").val(response.set_category);
          $("#category_event").html(response.set_category);
          $("#sub_category").val(response.ev_city);
          CKEDITOR.instances['descriptionone'].setData(response.set_desc);

          $("#sub_category_year").val(response.ev_year);

          // Use .attr("src", ...) to set the src attribute

          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.set_icon_image}`);
          $("#image-second").attr("src", `{{asset('storage/images')}}/${response.set_back_image}`);
          $("#gallery_id").val(response.id);
          $("#gallery_favicon").val(response.set_icon_image);
          $("#gallery_avatar_back").val(response.set_back_image);
        }
      });
    });



    // update gallery ajax request
    $("#edit_gallery_form").submit(function (e) {
      e.preventDefault();
      const fd = new FormData(this);
      fd.append('descriptionone', CKEDITOR.instances['descriptionone'].getData());
      $("#edit_gallery_btn").text('Updating...');
      $.ajax({
        url: "{{ route('setevent.update') }}",
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
              'Event Updated Successfully!',
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
            url: "{{ route('setevent.delete') }}",
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
        url: '/setevent/admin/show/' + id,
        method: 'get',
        data: {
          _token: '{{ csrf_token() }}',
        },
        success: function (response) {
          $("#view_title").html(response.set_category);
          $("#view_description").html(response.set_desc);
          $("#view_category").html(response.ev_event);
          $("#view_sub_category").html(response.ev_city);
          $("#view_sub_category_year").html(response.ev_year);
          $("#view_sub_category_time").html(response.ev_time);

          // Use .attr("src", ...) to set the src attribute

          $("#first-img").attr("src", `{{asset('storage/images')}}/${response.set_icon_image}`);
          $("#second-img").attr("src", `{{asset('storage/images')}}/${response.set_back_image}`);

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
    $('input[type="file"][name="avatar_second"]').on('change', function () {
      var img_path = $(this)[0].value;
      var img_holder = $('.img-holder-second');
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
    
       $('input[type="file"][name="avatar_favicon"]').on('change', function () {
      var img_path = $(this)[0].value;
      var img_holder = $('.img-holder-favicon');
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
    
      $('input[type="file"][name="avatar_first"]').on('change', function () {
      var img_path = $(this)[0].value;
      var img_holder = $('.img-holder-favicon-edit');
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

// reset code down
$("#resetImageButton").on("click", function () {
    // Set the default image path or an empty string to reset the image
    var defaultImagePath = "{{ asset('front/logo_upload_monuments.png') }}"; 
    $("#myImage .img-reset").attr("src", defaultImagePath);
});
// reset up

    // fetch all gallery ajax request
    fetchAllGalleries();

    function fetchAllGalleries() {
      $.ajax({
        url: '{{ route('setevent.fetchall') }}',
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