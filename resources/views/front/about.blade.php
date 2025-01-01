@extends('front.layout.app')

@section('content')



    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/about-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Feature Area  
==============================-->
    <section class="space-top">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon1-2.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Cancer Treatment</h3>
                        <p class="box-text">Amar Seva Ashram Trust in Nanded is dedicated to providing compassionate care and support to cancer patients. Our mission is to offer accessible and affordable cancer treatment while improving the quality of life for patients and their families.we can make a meaningful impact and bring hope to those battling cancer.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon1-1.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Ayurvedic Treatment</h3>
                        <p class="box-text">Amar Seva Ashram Trust in Nanded is committed to promoting holistic health and wellness through Ayurvedic treatments. Rooted in ancient Indian traditions, our Ayurveda center provides natural and personalized care to improve physical, mental, and emotional well-being.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon1-1.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Long-term Help</h3>
                        <p class="box-text">Amar Seva Ashram Trust in Nanded is committed to providing sustainable, long-term support to those in need. Our programs focus on creating lasting change by addressing the root causes of challenges and empowering individuals and communities for a better future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--==============================
About Area  
==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="shape-mockup about-bg-shape1-1 jump-reverse" data-top="10%" data-right="5%">
            <img src="assets/img/shape/heart-shape1.png" alt="shape">
        </div>
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-7">
                    <div class="img-box1">
                        <div class="img1" data-mask-src="assets/img/normal/about_1_1-mask.png">
                            <img src="assets/img/normal/about_1_1.jpg" alt="About">
                        </div>
                        <div class="about-shape1-1 jump">
                            <img src="assets/img/shape/about_shape1_1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-wrap1">
                        <div class="title-area mb-30">
                            <span class="sub-title before-none">About Amar Seva Ashram Trust</span>
                            <h2 class="sec-title">We Cure cancer patients in any Stage.</h2>
                            <p class="">At Amarseva Ashram Trust, we believe that together, we can save more lives. Your support plays a critical role in helping us provide life-saving treatments, essential care, and hope to those battling cancer. Every donation directly impacts the lives of patients, enabling us to cover medical expenses, provide emotional support, and ensure that no one faces this journey alone.
                                      We are committed to transparency, showing you exactly how your generous contributions are making a difference in the lives of those in need. With your help, we can continue to expand our efforts, reach more individuals, and bring life-changing healthcare and support to underserved communities.By donating, you are not just offering financial assistance; you are offering hope, strength, and a second chance at life. Together, we can make a lasting impact and help save more lives, one donation at a time. Join us in our mission to transform the lives of cancer patients across India and beyond.</p>
                        </div>
                        <div class="checklist style2 list-two-column">
                            <ul>
                                <li>Ayurvedic Treatment</li>
                                <li data-theme-color="var(--theme-color2)">Expert Doctors</li>
                                <li data-theme-color="#FF5528">Working as a Not-for-Profit Organization</li>
                                <li data-theme-color="#122F2A">24-Hour Supportive Staff</li>
                            </ul>
                        </div>
                        <div class="btn-wrap mt-40">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!--==============================
Team Area  
==============================-->
    <section class="space" id="team-sec" data-bg-src="assets/img/bg/gray-bg2.png">
        <div class="shape-mockup team-bg-shape3-1 d-xxl-block d-none" data-top="0%" data-left="0%" data-bottom="0"><img src="assets/img/shape/team_bg_shape3_1.png" alt="img"></div>
        <div class="shape-mockup team-bg-shape3-2 d-xxl-block d-none" data-top="0%" data-right="0%" data-bottom="0"><img src="assets/img/shape/team_bg_shape3_2.png" alt="img"></div>
        <div class="shape-mockup team-bg-shape3-3 spin d-xxl-block d-none" data-top="15%" data-left="20%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="assets/img/shape/team_bg_shape3_3.png"></div>
                <img src="assets/img/shape/team_bg_shape3_3.png" alt="img">
            </div>
        </div>
        <div class="shape-mockup team-bg-shape3-4 jump d-xxl-block d-none" data-top="18%" data-right="10%">
            <img src="assets/img/shape/team_bg_shape3_4.png" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-5 spin d-xxl-block d-none" data-bottom="18%" data-left="10%">
            <img src="assets/img/shape/team_bg_shape3_5.png" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-6 spin d-xxl-block d-none" data-bottom="10%" data-right="10%">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="assets/img/shape/team_bg_shape3_6.png"></div>
                <img src="assets/img/shape/team_bg_shape3_6.png" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @foreach($volunteer as $volunt)
                        <div class="swiper-slide">
                            <div class="th-team team-card3">
                                <div class="team-img">
                                    <img class="img-custom-h-w" src="{{asset('storage/images/'.$volunt->volunteer_image)}}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">{{$volunt->volunteer_name}}</a></h3>
                                    <span class="team-desig">{{$volunt->volunteer_designation}}</span>
                                    <div class="th-social style2">
                                        <a @if($volunt->volunteer_fblink) target="_blank" @endif href="{{$volunt->volunteer_fblink?:'#'}}"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a @if($volunt->volunteer_instlink) target="_blank" @endif href="{{$volunt->volunteer_instlink?:'#'}}"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
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
            <img src="assets/img/normal/video-thumb3-1.png" alt="img">
            {{-- <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style7 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> --}}
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
                        <h2 class="box-number text-white"><span class="counter-number">15</span>k<span class="fw-light">+</span></h2>
                        <p class="box-text text-white">Incredible Volunteers</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-white"><span class="counter-number">1</span>k<span class="fw-light">+</span></h2>
                        <p class="box-text text-white">Successful Campaigns</p>
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
                        <h2 class="box-number text-white"><span class="counter-number">35</span>k<span class="fw-light">+</span></h2>
                        <p class="box-text text-white">Team Support</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div><!--==============================
Process Area  
==============================-->
    <section class="space-top">
        <div class="shape-mockup process-shape1-1 jump-reverse d-xxl-block d-none" data-top="20%" data-left="0"><img src="assets/img/shape/hand-bg-shape2-1.jpg" alt="img"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none">Work Process</span>
                <h2 class="sec-title">Our Donating Work Process</h2>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-lg-4 col-md-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card-thumb-wrap">
                            <div class="process-card-thumb" data-mask-src="assets/img/process/process-card-shape.png">
                                <img src="assets/img/process/process-card-1-1.png" alt="img">
                            </div>
                            <div class="process-card-icon">
                                <img src="assets/img/icon/process-icon1-1.svg" alt="img">
                            </div>
                            <div class="process-card-shape">
                                <img src="assets/img/process/process-card-shape2.png" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Awareness & Engagement</h3>
                            <p class="box-text">Awareness and Engagement are the pillars of impactful change. By spreading knowledge and inspiring action, we empower communities to address critical issues and create lasting solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card-thumb-wrap">
                            <div class="process-card-thumb" data-mask-src="assets/img/process/process-card-shape.png">
                                <img src="assets/img/process/process-card-1-1.png" alt="img">
                            </div>
                            <div class="process-card-icon">
                                <img src="assets/img/icon/process-icon1-2.svg" alt="img">
                            </div>
                            <div class="process-card-shape">
                                <img src="assets/img/process/process-card-shape2.png" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Donation Collection</h3>
                            <p class="box-text">Donation collection is a vital effort that brings together the generosity of individuals and organizations to support those in need. Every contribution, big or small, fuels impactful change and provides hope to countless lives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card-thumb-wrap">
                            <div class="process-card-thumb" data-mask-src="assets/img/process/process-card-shape.png">
                                <img src="assets/img/process/process-card-1-1.png" alt="img">
                            </div>
                            <div class="process-card-icon">
                                <img src="assets/img/icon/process-icon1-3.svg" alt="img">
                            </div>
                            <div class="process-card-shape">
                                <img src="assets/img/process/process-card-shape2.png" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Impact On Cancer Patients</h3>
                            <p class="box-text">Your support can create a profound impact on cancer patients, offering them not just medical care, but also emotional strength, financial relief, and a chance for recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area-1 space" id="testi-sec">
        <div class="shape-mockup testi-bg-shape1-1 jump-reverse d-xl-block d-none" data-top="5%" data-right="0">
            <img src="assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape1-2" data-top="28%" data-left="5%">
            <img src="assets/img/shape/testimonial_shape1_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="sec-title">What People Say About
                            Amar Seva Ashram Trust</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-end">
                <div class="col-lg-5">
                    <div class="swiper th-slider testi-thumb-slider1" data-slider-options='{"effect":"fade","loop":false}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1.jpg" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_2.jpg" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi_1_1.jpg" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="assets/img/testimonial/testi-2.jpg" alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testi-slider1">
                        <div class="swiper th-slider testimonial-slider1" id="testiSlide1" data-slider-options='{"loop":false,"paginationType":"progressbar","effect":"fade", "autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider1"}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay updated on our upcoming events and initiatives. From fundraising galas and charity runs to community outreach programs, there are many ways for you to get involved and support our mission. Be sure to check our event calendar for more information. We take your security seriously. Our donation system uses advanced encryption to safeguard your personal and financial details. You can contribute with peace of mind, knowing that your donation is both secure and making a meaningful impact.</p>
                                        <h3 class="box-title">Vikram Deshmukh</h3>
                                        <p class="box-desig">Businessman</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">"Our donation system is designed with the latest encryption technology to ensure the safety of your personal and financial information. You can contribute confidently, knowing your details are secure. Stay connected with us to learn about our upcoming events and campaigns. Whether it’s a charity run, a fundraising gala, or a community outreach initiative, there are numerous opportunities to participate and support our mission. Visit our event calendar for more details. Your security and involvement are our top priorities."</p>
                                        <h3 class="box-title">Rohan Kulkarni</h3>
                                        <p class="box-desig">Engineer</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">"Keep up-to-date with our upcoming events and initiatives. From charity runs and fundraising galas to community outreach programs, there are numerous ways for you to participate and contribute to our mission. Visit our event calendar for more information. Your security is our top priority. Our donation system is equipped with advanced encryption to ensure the protection of your personal and financial data. Give with assurance, knowing your support is secure and impactful."</p>
                                        <h3 class="box-title">Aadarsh Mane</h3>
                                        <p class="box-desig">Farmer</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“"Our donation system utilizes state-of-the-art encryption technology to safeguard your personal and financial details. Contribute with peace of mind, knowing your information is secure. Stay updated on our latest events and initiatives. From fundraising galas and charity runs to impactful community programs, there are many ways to join us in making a difference. Explore our event calendar for more details. Your safety and engagement are our highest priorities."</p>
                                        <h3 class="box-title">Mahesh Patil</h3>
                                        <p class="box-desig">Teacher</p>
                                        <div class="quote-icon" data-mask-src="assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-pagination"></div>
                            <div class="slider-pagination2"></div>
                        </div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide1" class="slider-arrow default style-border slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide1" class="slider-arrow default style-border slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
Brand Area  
==============================-->
    
   @endsection