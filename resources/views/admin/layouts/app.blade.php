<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Required meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="">
      <meta name="keywords" content="admin template,html 5 admin template , dmeki admin , dashboard template, bootstrap 5 admin template, responsive admin template">
      <title> Dashboard
      </title>
      <!-- shortcut icon--> 
      <link rel="icon" href="{{ asset('assets/img/favicons/favicon-32x32.ico') }}" type="image/x-icon">
      <link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon-32x32.ico') }}" type="image/x-icon">
      <!-- Fonts css-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{ asset('css/vendor/font-awesome.css') }}" rel="stylesheet">
      <!-- themify icon-->
      <link href="{{ asset('css/vendor/themify-icons.css') }}" rel="stylesheet">
      <!-- Slick slider-->
      <link href="{{ asset('css/vendor/slider/slick-slider/slick.css') }}" rel="stylesheet">
      <link href="{{ asset('css/vendor/slider/slick-slider/slick-theme.css') }}" rel="stylesheet">
      <!-- Scrollbar-->
      <link href="{{ asset('css/vendor/simplebar.css') }}" rel="stylesheet">
      <!-- Bootstrap css-->
      <link href="{{ asset('css/vendor/bootstrap.css') }}" rel="stylesheet">
      <!-- Custom css-->
      <link href="{{ asset('css/style.css') }}" id="customstyle" rel="stylesheet">
      
        <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
        
        <script src="https://cdn.ckeditor.com/4.17.1/standard/plugins/codesnippet/plugin.js"></script>
    
        <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

<!-- Include jQuery (required for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        @yield('styles')
      
    </head>
    <body>
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
        @yield('testimonial')
        @yield('login')
        
        @include('admin.layouts.footer')

    </body>

</html>