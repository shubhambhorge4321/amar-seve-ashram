@extends('front.layout.app')
@section('become-volunteer','become-volunteer')

@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/volunteer-bg.png" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Become A Volunteer</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Become A Volunteer</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row gy-40 gx-80">
                <div class="col-xl-6">
                    <h2 class="title mt-n2 mb-25">Let’s join our community
                        to become a volunteer</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-img">
                                <img src="assets/img/team/add team-1.jpg" alt="team">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="page-img">
                                <img src="assets/img/team/add team-2.jpg" alt="team">
                            </div>
                        </div>
                    </div>
                    <h3 class="h5 mt-n2">Volunteer Requirements</h3>
                    <p class="mb-30">Explore the heartfelt stories of lives changed through our programs. These inspiring accounts reveal the profound impact your support creates, demonstrating the strength and determination of the people we serve. They stand as a testament to the transformative power of kindness and selflessness.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="fas fa-check-circle"></i>Creating the first true generator is a milestone in innovation.</li>
                            <li><i class="fas fa-check-circle"></i>Many desktop publishing packages lack this capability.</li>
                            <li><i class="fas fa-check-circle"></i>If you're planning to explore this feature, it holds immense potential.</li>
                            <li><i class="fas fa-check-circle"></i>Its origins trace back to a foundational concept.</li>
                            <li><i class="fas fa-check-circle"></i>Sed ut perspiciatis unde iste natus" emphasizes the importance of clarity and purpose.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add-team-form">
                        <form action="{{route('volunteer.register')}}" method="POST" class="contact-form ajax-contact">
                            @csrf

                            <div class="row">
                                <div class="form-group style-border col-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="number" class="form-control" name="mobile_no" id="number" placeholder="Phone Number">
                                </div>
                                <div class="form-group style-border col-md-6">
                                    <input type="text" class="form-control" name="reg_address" id="address" placeholder="Address">
                                </div>
                                <div class="form-group style-border col-md-6">
                                    <select name="reg_occupation" id="subject" class="form-select">
                                        {{-- <option  disabled selected hidden>Occupation</option> --}}
                                        <option value="Volunteer" selected>Volunteer</option>
                                        <option value="Health Advisor">Health Advisor</option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                                <div class="form-group style-border col-12">
                                    <textarea name="reg_message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Your Message"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn style3">Send Request</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Brand Area  
==============================-->

   @endsection