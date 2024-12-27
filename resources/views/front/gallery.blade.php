@extends('front.layout.app')

@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/gallery-bg.png" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Gallery Area  
==============================-->
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row gy-30 gx-30 filter-active">

                @foreach($sidegalley as $side)
                <div class="col-md-4 col-xxl-auto col-lg-4 filter-item">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img style="max-width:{{$side->gal_title}};" src="{{ asset('storage/images/' . $side->gal_image) }}" alt="gallery image">
                            <a href="{{ asset('storage/images/' . $side->gal_image) }}" class="icon-btn popup-image"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==============================
	Footer Area
==============================-->
  @endsection