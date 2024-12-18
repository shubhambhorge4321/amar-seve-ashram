@extends('admin.layouts.app')
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/vendor/datatable/jquery.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/vendor/datatable/buttons.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/vendor/datatable/custom-datatable.css') }}" rel="stylesheet">
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> -->

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
          <li class="breadcrumb-item active"><a href="javascript:void(0);">Map</a></li>
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
              <h3 class="text-light">Manage Map</h3>
              <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal"
                data-bs-target="#addGalleryModal" id="resetImageButton">Add map</button>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Map</h5>
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
                  <input type="file" name="avatar" class="form-control" required accept="image/*">
                </div>
                <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group" style="">
                  <select class="form-select" name="city" id="sub_category" required>
                    <option disabled>Select city</option>
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
                     <option value="hingoli">hingoli</option>
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
                </div>
                <div class="form-group">
                  <select class="form-select" name="event" required>
                    <option disabled>Select event</option>
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->set_category}}">{{$categorie->set_category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="year" onfocus="(this.type = 'date')" class="form-control"
                    placeholder="select date" required>

                </div>
              
              </div>
             
            </div>
             <div class="form-group">
                <label for="editor">message:</label> <span id="emptymsg"></span>
                <textarea type="text" id="editor" name="description" class="form-control" placeholder="Description"
                  required>
                    </textarea>
                   
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add_gallery_btn" class="btn btn-primary">Add map</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Map</h5>
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
                  <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                  <select class="form-select" name="event" required id="category">
                    <option disabled>Select event</option>
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->set_category}}">{{$categorie->set_category}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group" id="sub_category">
                  <select class="form-select cityname" name="city"  required>
                    <option disabled>Select city</option>
                    <option value="nagpur">nagpur</option>
                    <option value="amravati">amravati</option>
                    <option value="akola">akola</option>
                    <option value="nanded">nanded</option>
                    <option value="jalgaon">jalgaon</option>
                    <option value="aurangabad">aurangabad</option>
                    <option value="ahmadnagar">ahmadnagar</option>
                    <option value="nashik">nashik</option>
                    <option value="pune">pune</option>
                    <option value="hingoli">hingoli</option>
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
                </div>
                <div class="form-group" style="">
                  <input type="text" name="year" onfocus="(this.type = 'date')" class="form-control"
                    placeholder="select date" required id="sub_category_year">
                </div>
                <!-- <div class="form-group">
                  <input type="text" name="time" onfocus="(this.type = 'time')" class="form-control"
                    placeholder="select time" id="timefield" >
                </div> -->
                  </div>
                <div class="form-group">
                  <textarea type="text" id="desc" name="description" class="form-control " placeholder="Description"
                    required>
                    </textarea>
                </div>
            
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="edit_gallery_btn" class="btn btn-primary">Update Map</button>
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
          <h5 class="modal-title" id="exampleModalLabel">View Map Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
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
              <div class="form-group">
                <strong>Title :</strong> <span id="view_title"></span>
              </div>
              <div class="form-group">
                <strong>Event :</strong> <span id="view_category"></span>
              </div>
              <div class="form-group">
                <strong>City :</strong> <span id="view_sub_category"></span>
              </div>
              <div class="form-group">
                <strong>Year :</strong> <span id="view_sub_category_year"></span>
              </div>
              
            </div>
            <div class="form-group">
                <strong>Message :</strong> <span id="view_description"></span>
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

      var textareaValue = $("#editor").val().trim();

    if (textareaValue === '') {
      // alert('Description is required');
      $("#emptymsg").text("msg is empty !!");
      return; // Stop further execution if validation fails
    }
      

      $("#add_gallery_btn").text('Adding...');
      $.ajax({
        url: "{{ route('event.store') }}",
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (response) {
          console.log(response);
          if (response.status == 200) {
            Swal.fire(
              'Added!',
              'Map Added Successfully!',
              'success'
            )
            
            
            fetchAllGalleries();
          }
          if (response.status == 400) {
            Swal.fire(
              'failed!',
              'Map with  same event and city already exists',
              'change city !'
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
        url: "{{ route('event.edit') }}",
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },
        success: function (response) {
          $("#title").val(response.ev_title);
          $("#desc").val(response.ev_desc);
          $("#category").val(response.ev_event);
          $("#sub_category .cityname").val(response.ev_city);
          $("#sub_category_year").val(response.ev_year);
          $("#timefield").val(response.ev_time);

          // Use .attr("src", ...) to set the src attribute

          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.ev_image}`);
          $("#gallery_id").val(response.id);
          $("#gallery_avatar").val(response.ev_image);
        }
      });
    });


    // update gallery ajax request
    $("#edit_gallery_form").submit(function (e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_gallery_btn").text('Updating...');
      $.ajax({
        url: "{{ route('event.update') }}",
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
              'Map Updated Successfully!',
              'success'
            )
            fetchAllGalleries();
          }
          if (response.status == 400) {
            Swal.fire(
              'failed!',
              'Map  with  same event and city already exists',
              'change city !'
            )
            
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
            url: "{{ route('event.delete') }}",
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
        url: '/event/admin/show/' + id,
        method: 'get',
        data: {
          _token: '{{ csrf_token() }}',
        },
        success: function (response) {
          $("#view_title").html(response.ev_title);
          $("#view_description").html(response.ev_desc);
          $("#view_category").html(response.ev_event);
          $("#view_sub_category").html(response.ev_city);
          $("#view_sub_category_year").html(response.ev_year);
          $("#view_sub_category_time").html(response.ev_time);

          // Use .attr("src", ...) to set the src attribute

          $(".img-holder img").attr("src", `{{asset('storage/images')}}/${response.ev_image}`);

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
        url: "{{ route('event.fetchall') }}",
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