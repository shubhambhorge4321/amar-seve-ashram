@extends('front.layout.app')

@section('content')


    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Volunteers</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Volunteers</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Team Area  
==============================-->
    <section class="space" id="team-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="row gy-40">
                <!-- Single Item -->
                @if(isset($volunteer))
                @foreach($volunteer as $volunt)
                <div class="col-lg-3 col-md-6">
                    <div class="th-team team-card3">
                        <div class="team-img">
                            <img class="img-custom-h-w" src="{{asset('storage/images/'.$volunt->volunteer_image)}}" alt="Team">
                        </div>
                        <div class="team-card-content">
                            <h3 class="box-title"><a href="team-details.html">{{$volunt->volunteer_name}}</a></h3>
                            <span class="team-desig">{{$volunt->volunteer_designation}}</span>
                            <div class="th-social style2">
                                <a target="_blank" href="{{$volunt->volunteer_fblink?:'https://facebook.com/'}}"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="{{$volunt->volunteer_instlink?:'https://instagram.com/'}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif  
            </div>
        </div>
    </section>


    <!--==============================
	Footer Area
==============================-->
@endsection