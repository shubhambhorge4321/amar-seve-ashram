@extends('front.layout.app')

@section('content')

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/donation-details-bg.png" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Donate Now</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Donation</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Blog Area
==============================-->
    <section class="donation-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="donation-form-v1">
                        <p class="donation-form-notice"><i class="fa-solid fa-triangle-exclamation"></i> <span class="text-title">Note:</span> Show your interest in donating by filling out the form, and we will get back to you soon.</p>
                        <form action="{{route('donations.register')}}" method="POST" class="contact-form ajax-contact">
                            @csrf
                            <div class="form-group donate-input">
                                <input type="number" name="donate_amount" value="100" required class="donate_amount">
                                <span class="icon">
                                    
                                    ₹
                                </span>
                            </div>
                            <ul class="donate-amount-button-list list-unstyled">
                                <li class="donate-amount-button" data-amount="50">
                                    ₹50
                                </li>

                                <li class="donate-amount-button" data-amount="500">
                                    ₹500
                                </li>

                                <li class="donate-amount-button active" data-amount="1000">
                                    ₹1000
                                </li>

                                <li class="donate-amount-button" data-amount="5000">
                                    ₹5000
                                </li>

                                <li class="donate-amount-button" data-amount="10000">
                                    ₹10000
                                </li>
                                {{-- <li class="donate-amount-button" data-amount="Custom Amount">
                                    Custom Amount
                                </li> --}}
                            </ul>

                            <h5 class="title">Select Payment Method</h5>
                            {{-- <ul class="donate-payment-method list-unstyled">
                                <li>
                                    <input type="radio" id="test_donation" name="donate_method" class="donate_method">
                                    <label for="test_donation">Test Donation</label>
                                </li>
                                <li>
                                    <input type="radio" id="offline_donation" name="donate_method" class="donate_method" checked="checked">
                                    <label for="offline_donation">Offline Donation</label>
                                </li>
                                <li>
                                    <input type="radio" id="credit_card" name="donate_method" class="donate_method">
                                    <label for="credit_card">Credit Card</label>
                                </li>
                            </ul> --}}
                            <ul class="donate-payment-method list-unstyled">
                                <li>
                                    <input type="radio" id="test_donation" name="donate_method" class="donate_method" value="UPI">
                                    <label for="test_donation">UPI</label>
                                </li>
                                <li>
                                    <input type="radio" id="offline_donation" name="donate_method" class="donate_method" value="offline_donation" checked>
                                    <label for="offline_donation">Offline Donation</label>
                                </li>
                                <li>
                                    <input type="radio" id="credit_card" name="donate_method" class="donate_method" value="Bank Transfer">
                                    <label for="credit_card">Bank Transfer</label>
                                </li>
                            </ul>
                            
                            <h5 class="title mb-25">Personal Info</h5>
                            <div class="row">
                                <div class="form-group style-border col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                </div>
                                <div class="form-group style-border col-md-6">
                                    <input type="number" class="form-control" name="lastname" id="lastname" placeholder="Mobile Number"  min="1000000000" max="9999999999">
                                </div>
                                <div class="form-group style-border col-md-12">
                                    <input type="hidden"  class="form-control" name="email" id="email" value="mahes@gmail.com" placeholder="Email Address">
                                    <input type="text" class="form-control" name="address"  placeholder="address">

                                </div>
                                <div class="form-group style-border col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Your Message"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn"><i class="fas fa-heart me-2"></i>Show Intrest For Donation</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area donation-sidebar">
                        <div class="widget  ">
                            <div class="widget-donation-card">
                                <div class="box-content">
                                    <div class="box-thumb">
                                        <a href=""><img src="assets/img/widget/widget-donation_card1_1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <h4 class="box-title"><a class="text-inherit" href="">Give health support for every
                                            homeless poor cancer patients</a></h4>
                                    <p class="box-text">Join our community of dedicated supporters by
                                        becoming a member.</p>
                                </div>
                                <div class="donation-progress-wrap">
                                    <div class="media-left">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                                <div class="progress-value">85%</div>
                                            </div>
                                        </div>
                                        <div class="donation-progress-content">
                                            <span class="donation-card_raise text-title">Raised<span class="ms-1 me-1">-</span>50k</span>
                                            <span class="donation-card_goal text-theme">Goal<span class="ms-1 me-1">-</span>100k</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget  " data-bg-src="assets/img/bg/gray-bg2.png" data-overlay="gray" data-opacity="5">
                            <div class="author-widget-wrap">
                                <div class="author-tag">Founder:</div>
                                <div class="avater">
                                    <img src="assets/img/blog/blog-author.jpg" alt="avater">
                                </div>
                                <div class="author-info">
                                    <h4 class="name"><a class="text-inherit" href="#">Amarjeetsingh Gill</a></h4>
                                    <span class="meta">
                                        <a href="#"><i class="fas fa-tags"></i>Education</a>
                                    </span>
                                    <span class="meta">
                                        <a href="#"><i class="fas fa-map-marker-alt"></i>New Jersey, USA</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
     <!--==============================
Video Area  
==============================-->
<div class="video-area-3">
    <div class="shape-mockup video-bg-shape3-1" data-top="0" data-left="0" data-bottom="0">
        <img src="assets/img/shape/video_bg_shape3_1.png" alt="img">
    </div>
    <div class="shape-mockup video-bg-shape3-2" data-top="0" data-right="0" data-bottom="0">
        <img src="assets/img/shape/video_bg_shape3_2.png" alt="img">
    </div>
    <div class="video-thumb3-1 video-box-center">
        <img src="assets/img/normal/video-thumb3-1.jpg" alt="img">
        
    </div>
</div>
<!--==============================
Counter Area  
==============================-->
<div class="">
    <div class="container">
        <div class="counter-wrap style2 bg-light">
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">2</span>k<span class="fw-light">+</span></h2>
                    <p class="box-text text-white">Incredible Volunteers</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">1</span>k<span class="fw-light">+</span></h2>
                    <p class="box-text text-white">Patients Successfully Cured</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">400</span><span class="fw-light">+</span></h2>
                    <p class="box-text text-white">Monthly Donors</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="counter-card">
                <div class="media-body">
                    <h2 class="box-number text-white"><span class="counter-number">5</span>k<span class="fw-light">+</span></h2>
                    <p class="box-text text-white">Patients Treated Successfully</p>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
</div>
<br><br><!--==============================
Process Area  
==============================-->
    <!--==============================
	Footer Area
==============================-->
@endsection