@extends('front.layout.app')

@section('content')
    <!--==============================
    Hero Area
    ==============================-->
   

    <div class="th-hero-wrapper hero-3" id="hero">

        <div class="shape-mockup hero-shape-3-1 d-lg-block d-none" data-top="20%" data-left="50%">
            <div class="color-masking shake">
                <div class="masking-src" data-mask-src="assets/img/hero/hero-bg-shape2-3.png"></div>
                <img src="assets/img/hero/hero-bg-shape2-3.png" alt="shape">
            </div>
        </div>
        <div class="shape-mockup hero-shape-3-2 jump" data-top="25%" data-left="5%">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="assets/img/hero/hero-bg-shape2-1.png"></div>
                <img src="assets/img/hero/hero-bg-shape2-1.png" alt="shape">
            </div>
        </div>
        <div class="shape-mockup hero-shape-3-3 jump" data-bottom="0" data-left="-2%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="assets/img/shape/hand-shape3.png"></div>
                <img src="assets/img/shape/hand-shape3.png" alt="shape">
            </div>
        </div>

        <div class="swiper th-slider hero-slider1" id="heroSlide1"
            data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                @foreach ($galleryimages as $key => $image)
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('storage/images/' . $image->avatar) }}"
                        data-mask-src="assets/img/hero/hero-bg-shape3-1.png" data-opacity="5">
                        {{-- <div class="hero-bg-shape1-1">
                            <img src="assets/img/hero/hero-bg-shape1-1.png" alt="img">
                        </div> --}}
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                        <span class="sub-title justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.2s">
                                        </span>
                                       
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup"
                                            data-ani-delay="0.7s">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                {{-- @foreach ($galleryimages as $key => $image)
                <div class="swiper-slide">
                    <div class="hero-inner" data-bg-src="{{ asset('storage/images/' . $image->avatar) }}" data-overlay="black4" data-opacity="5">
                        <div class="hero-bg-shape1-1">
                            
                        </div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="hero-style1 text-center">
                                       
                                        <h1 class="hero-title text-white">
                                            
                                        </h1>
                                        <div class="btn-wrap justify-content-center" data-ani="slideinup" data-ani-delay="0.7s">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach --}}


                
            </div>
        </div>

        {{-- <div class="hero-bg-3-1" data-bg-src="assets/img/hero/hero_bg_3_1.jpg"
            data-mask-src="assets/img/hero/hero-bg-shape3-1.png"></div>
        <div class="container">
            <div class="row gx-40 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-style3">
                        <span class="sub-title after-none">Give Hope For Cancer Patients</span>
                        <h1 class="hero-title">
                            <span class="title1">Fight Against </span>
                            <span class="title2"> <span class="text-theme2 d-inline-block">Deadly Cancer</span></span>
                        </h1>
                        <p class="hero-text">
                            Amar Seva Ashram Trust Nanded is dedicated to providing essential services to cancer patients in need. From offering personalized Ayurveda treatments to providing emotional and physical support, we are committed to improving the lives of those battling this deadly disease. Every effort, whether through event planning, fundraising, or fieldwork, plays a vital role in delivering hope and critical care to those who need it most. Together, we can make a lasting impact on the lives of cancer patients.
                        </p>
                        <div class="btn-wrap">
                            <a href="{{route('donation.details')}}" class="th-btn">Donate Now<i
                                    class="fa-solid fa-arrow-up-right ms-2"></i></a>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
    </div>
    <!--======== / Hero Section ========--><!--==============================
    Feature Area
    ==============================-->
    <section class="feature-area-1 position-relative space-bottom">
        <div class="feature-bg-wrap" data-bg-src="assets/img/bg/gray-bg2.png"
            data-mask-src="assets/img/bg/feature-bg-mask-1.png">
            <div class="feature-bg-shape1-1"></div>
        </div>
        <div class="container">
            <div class="row gy-30 gx-30 justify-content-end">
                <div class="col-xl-3 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon1-1.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Cancer Treatment</h3>
                        <p class="box-text"> <b>Amar Seva Ashram Trust in Nanded</b>
is dedicated to providing compassionate care and support to cancer patients. Our mission is to offer accessible and affordable cancer treatment while improving the quality of life for patients and their families.we can make a meaningful impact and bring hope to those battling cancer.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon1-2.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Ayurvedic Treatment</h3>
                        <p class="box-text"> <b>Amar Seva Ashram Trust in Nanded </b>
is committed to promoting holistic health and wellness through Ayurvedic treatments. Rooted in ancient Indian traditions, our Ayurveda center provides natural and personalized care to improve physical, mental, and emotional well-being.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-card-bg-shape">
                            <img src="assets/img/shape/feature-card-bg-shape1-1.png" alt="img">
                        </div>
                        <div class="box-icon">
                            <img src="assets/img/icon/feature-icon1-1.svg" alt="icon">
                        </div>
                        <h3 class="box-title">Long-term Help</h3>
                        <p class="box-text"> <b>Amar Seva Ashram Trust in Nanded </b>
is committed to providing sustainable, long-term support to those in need. Our programs focus on creating lasting change by addressing the root causes of challenges and empowering individuals and communities for a better future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--==============================
    About Area
    ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="shape-mockup about-bg-shape2-1 jump-reverse d-lg-inline-block d-none" data-top="10%" data-right="5%">
            <img src="assets/img/shape/heart-shape1.png" alt="shape">
        </div>
        <div class="shape-mockup about-bg-shape3-1 jump" data-bottom="20%" data-right="5%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="assets/img/shape/about_shape3_1.png"></div>
                <img src="assets/img/shape/about_shape3_1.png" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="row gy-60 align-items-center">
                <div class="col-xl-6">
                    <div class="img-box3">
                        <div class="img1 ">
                            <img src="assets/img/normal/about_3_2.png" alt="About">
                            
                        </div>
                        <div class="img2 jump">
                            <img src="assets/img/normal/about_3_1.png" alt="img">
                        </div>
                        <div class="about-shape3-1 jump-reverse">
                            <div class="color-masking2">
                                <div class="masking-src" data-mask-src="assets/img/shape/about_shape1_1.png"></div>
                                <img src="assets/img/shape/about_shape1_1.png" alt="img">
                            </div>
                        </div>
                        <div class="year-counter movingX">
                            <div class="year-counter_number"><span class="counter-number">9.6</span>+ 
                                 Million Lives Are Lost to Cancer Annually Without Proper Treatment and Support
                            </div>
                            <a class="link-btn style2" href="{{route('become.volunteer')}}">Become a Volunteer</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-40">
                        <span class="sub-title after-none before-none"><i class="text-theme far fa-heart"></i> About
                            Amar Seva Ashram Trust</span>
                        <h2 class="sec-title">We Cure Cancer Patients.  </h2>
                        <p>
                            At <b>Amar Sewa Ashram Trust Nanded</b> , we are dedicated to providing  <b>cancer</b> care through <b>Ayurveda</b> . We offer holistic treatments, including natural remedies and personalized therapies, to support healing and improve the quality of life for cancer patients.     
                        </p> 
                      
                    </div>
                    <div class="about-wrap3">
                        <p class="mb-30">
                            <span>
                                Our secure online donation platform allows you to make contributions quickly and safely. Choose from various payment methods and set up one-time or recurring payments with ease. As a <b>nonprofit organization</b> , your support enables us to continue our mission of offering Ayurvedic cancer care and healing.
                            </span> <br> <br>
                            Explore inspiring stories of individuals and communities transformed by our programs. Our success stories highlight the real-life impact of your donations and the resilience of those we serve. These narratives showcase the power of compassion and generosity in transforming lives.
                        </p>
                        <div class="about-feature-grid">
                            <div class="box-icon">
                                <img src="assets/img/icon/about-icon3-1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">Amarjeetsingh Gill is the founder of Amar Seva Ashram Trust</h4>
                                <p class="box-text">
                                    
                                </p>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/gray-bg2.png">
        <div class="shape-mockup service-bg-shape2-1 d-xxl-inline-block d-none" data-bottom="0" data-left="0">
            <img src="assets/img/shape/service_bg_shape3_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row gx-80">
                <div class="col-xl-6">
                    <div class="service-wrap2">
                        <div class="title-area">
                            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our
                                Services</span>
                            <h2 class="sec-title">
                                We’re Cure Cancer Patients in Need, Bringing Hope and Healing
                            </h2>
                            <p class="sec-text">
                                Providing Ayurveda Treatment and Support for Cancer Patients in Need
At Amar Seva Ashram, we are committed to providing holistic Ayurveda treatment to cancer patients, particularly those from underprivileged backgrounds. We offer personalized care to individuals and families, ensuring that those who are most in need receive the support and treatment they deserve. Our programs focus on healing the body, mind, and spirit, while improving the quality of life and managing cancer symptoms. Through compassionate care and holistic therapies, we bring hope and strength to those affected by cancer, especially those who lack the resources to access proper treatment.
                            </p>
                        </div>
                        <div class="service-bg-shape2-2">
                            <img src="assets/img/service/service-2.jpg" alt="img">
                            <div class="service-bg-shape2-3">
                                <div class="color-masking2">
                                    <div class="masking-src" data-mask-src="assets/img/shape/service_bg_shape3_2.png">
                                    </div>
                                    <img src="assets/img/shape/service_bg_shape3_2.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row gy-30">
                        <div class="col-12">
                            <div class="service-card2">
                                <div class="service-card-icon">
                                    <img src="assets/img/icon/service-icon/service-card-icon1-1.svg" alt="Icon">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Healthy Foods</a></h3>
                                    <p class="box-text">
                                        

 we provide Ayurvedic meals to support cancer patients' recovery and well-being. These meals help strengthen immunity and promote healing. Join us in delivering this essential care by volunteering and making a difference in patients' lives.
                                    </p>
                                    <a href="about.html" class="icon-btn"><i class="fas fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-card2">
                                <div class="service-card-icon">
                                    <img src="assets/img/icon/service-icon/service-card-icon1-2.svg" alt="Icon">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Conslution Support</a></h3>
                                    <p class="box-text">
                                        Amar Seva Ashram Trust Nanded offers expert consultation to cancer patients, providing personalized guidance and Ayurvedic treatment plans. Our goal is to empower patients with the knowledge and care needed to navigate their journey to recovery. Together, we bring clarity, support, and hope.
                                    </p>
                                    <a href="#" class="icon-btn"><i class="fas fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="service-card2">
                                <div class="service-card-icon">
                                    <img src="assets/img/icon/service-icon/service-card-icon1-3.svg" alt="Icon">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="#">Medical Help</a></h3>
                                    <p class="box-text">
                                        At Amar Seva Ashram Trust Nanded, we provide natural Ayurvedic treatments using highly potent herbs to transform the body and promote healing for cancer patients. These herbal remedies are carefully designed to support recovery and improve overall well-being.
                                    </p>
                                    <a href="about.html" class="icon-btn"><i class="fas fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
    Cta Area
    ==============================-->
   <!--==============================
    Donation Area
    ==============================-->
    <section class="space overflow-hidden" id="donation-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title before-none after-none"><i class="far fa-heart text-theme"></i>
                            Let’s Start Donating
                        </span>
                        <h2 class="sec-title">
                            Help cancer patients through your essential donations.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation_2.jpg" alt="image">
                            <div class="donation-card-tag"></div>
                            <div class="donation-card-shape"
                                data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Your Little Help Can Heal Their Helps</a>
                            </h3>
                            <p>Support cancer patients with your generous donations. Even a small contribution can make a big difference in their journey to healing.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <!-- <a href="blog-details.html" class="th-btn style6">Donate Now  -->
                             <!-- <i class="fas fa-arrow-up-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2_2.jpg" alt="image">
                            <div class="donation-card-tag bg-theme2"></div>
                            <div class="donation-card-shape"
                                data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Help Children poor Insurance & Medical</a>
                            </h3>
                            <p>Support cancer patients and provide essential care for underprivileged children with your donations Support cancer patients.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <!-- <a href="blog-details.html" class="th-btn style6">Donate Now <i -->
                                    <!-- class="fas fa-arrow-up-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2_3.jpg" alt="image">
                            <div class="donation-card-tag"></div>
                            <div class="donation-card-shape"
                                data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Help us touch their lives of these
                                    youths</a></h3>
                            <p>Your support can provide the care, treatment, and hope they need, touching the lives of these brave individuals.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <!-- <a href="blog-details.html" class="th-btn style6">Donate Now <i -->
                                    <!-- class="fas fa-arrow-up-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="assets/img/donation/donation2_4.jpg" alt="image">
                            <div class="donation-card-tag bg-theme2"></div>
                            <div class="donation-card-shape"
                                data-mask-src="assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Raise Fund for Clean & Healthy Water</a>
                            </h3>
                            <p>Your support not only aids in providing life-saving also helps raise funds for clean and healthy water.</p>
                            <div class="donation-card_progress-wrap">

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%;">
                                    </div>
                                </div>
                                <div class="donation-card_progress-content">
                                    <span class="donation-card_raise">Raised <span
                                            class="donation-card_raise-number">$45,000.00</span></span>
                                    <span class="donation-card_goal">Goal <span
                                            class="donation-card_goal-number">$60,000.00</span></span>
                                </div>
                            </div>
                            <!-- <a href="blog-details.html" class="th-btn style6">Donate Now <i -->
                                    <!-- class="fas fa-arrow-up-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--==============================
    Why Choose Us Area
    ==============================-->
    <div class="why-sec-1 overflow-hidden space-bottom overflow-hidden">
        <div class="container">
            <div class="row gx-80">
                <div class="col-xl-6">
                    <div class="why-img-box1">
                        <div class="img1">
                            <img src="assets/img/normal/why-thumb1-1.jpg" alt="img">
                        </div>
                        <div class="why-img-shape">
                            <img src="assets/img/shape/why_shape1_1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-wrap-1">
                        <div class="title-area mb-25">
                            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> 
                                Why Choose Amar Seva Trust
                            </span>
                            <h2 class="sec-title">Together, We Can Make A Difference</h2>
                            <p>
                                At Amar Seva Trust, we specialize in supporting cancer patients through every stage of their journey. From early diagnosis to advanced stages, including critical cases, your contribution directly funds life-saving treatments, care, and recovery. <br> <br>
                            We are dedicated to serving humanity with compassion and commitment. We specialize in providing care and support to cancer patients, offering life-saving treatments and hope to those in need. Our mission is to heal lives, not for profit, but for the profound joy of making a difference. Together, we strive to bring light and life to even the darkest moments.
                            </p>
                        </div>
                        
                        <div class="progress-bar-wrap mt-20">
                            <h3 class="progress-bar_title">our Cancer success rate  in every stage</h3>
                            <div class="progress">
                                <div class="progress-bar bg-theme2" style="width: 85%;">
                                </div>
                                <div class="progress-value text-theme2"><span class="counter-number">85</span>%</div>
                            </div>
                        </div>
                        <div class="mt-40">
                            <div class="row gy-40">
                                <div class="col-sm-6">
                                    <div class="why-feature-grid">
                                        <div class="box-icon bg-theme">
                                            <img src="assets/img/icon/why-icon1-1.svg" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="box-title">out of city</h4>
                                            <p class="box-text">
                                                visit first to connect, then commit to monthly check-ups to ensure lasting impact.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="why-feature-grid">
                                        <div class="box-icon bg-theme2">
                                            <img src="assets/img/icon/why-icon1-2.svg" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="box-title">Donation</h4>
                                            <p class="box-text">
                                                Your donation strengthens our mission and plays a crucial role in supporting poor and needy individuals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap mt-35">
                            <!-- <a href="{{route('aboutus')}}" class="th-btn">Learn More <i class="fas fa-arrow-up-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!--==============================
    Team Area
    ==============================-->
    <section class="space" id="team-sec" data-bg-src="assets/img/bg/gray-bg2.png">
        <div class="shape-mockup team-bg-shape3-1 d-xxl-block d-none" data-top="0%" data-left="0%" data-bottom="0"><img
                src="assets/img/shape/team_bg_shape3_1.png" alt="img"></div>
        <div class="shape-mockup team-bg-shape3-2 d-xxl-block d-none" data-top="0%" data-right="0%" data-bottom="0">
            <img src="assets/img/shape/team_bg_shape3_2.png" alt="img"></div>
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
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our
                    Volunteer</span>
                <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
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
    Price Area
    ==============================-->
   
    <div class="space overflow-hidden faq-area-2" data-bg-src="assets/img/bg/gray-bg2.png">
        <div class="shape-mockup faq-shape2-1 jump-reverse" data-top="20%" data-left="0">
            <img src="assets/img/shape/hand-bg-shape2-1.png" alt="img">
        </div>
        <div class="container">
            <div class="row gy-60 gx-60">
                <div class="col-xl-7">
                    <div class="faq-wrap2">
                        <div class="title-area">
                            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i>
                                Frequently Asked Questions</span>
                            <h2 class="sec-title">Have Any Questions For Us?</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        What motivates you to support Amar Seva Ashram?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Your contributions help us provide Ayurvedic treatments, holistic care, and essential support to cancer patients in need. Witnessing lives transform through compassion and natural healing inspires many to join our mission.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        How can you contribute to Amar Seva Ashram?
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Explore meaningful ways to support our cause, from donations to offering your skills in event planning, fundraising, or fieldwork. Together, we can create a positive impact and bring hope to those battling cancer. Find the best way to make a difference with your unique talents.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style2">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        
                                        How often can you contribute your time?
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            Amar Seva Ashram offers various ways to get involved in supporting cancer patients. Whether you have a few hours to spare or can commit regularly, your time is valuable. From assisting with Ayurvedic care and treatment programs to event planning and administrative tasks, there’s an opportunity for everyone to make a meaningful impact. Choose what aligns with your availability and skills to help those in need.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="faq-img-box2">
                        <div class="img1">
                            <img src="assets/img/normal/faq_2_1.png" alt="img">
                        </div>
                        <div class="faq-img-shape">
                            <img src="assets/img/shape/faq-shape2_1.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Brand Area
    ==============================-->
   
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class="overflow-hidden space overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i>Testimonials</span>
                <h2 class="sec-title">What Our patients Say?</h2>
            </div>
            <div class="testi-slider3 slider-area">
                <div class="swiper th-slider" id="testiSlide3"
                    data-slider-options='{"autoHeight": "true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="assets/img/testimonial/testi_3_1.png" alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Vikram Deshmukh</h3>
                                        <span class="testi-card_desig">Teacher</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="assets/img/testimonial/testi_3_2.png" alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Rohan Kulkarni</h3>
                                        <span class="testi-card_desig">Lawyer</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="assets/img/testimonial/testi_3_2.png" alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Aadarsh Mane</h3>
                                        <span class="testi-card_desig">Businessman</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="assets/img/testimonial/testi_3_1.png" alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Mahesh Patil</h3>
                                        <span class="testi-card_desig">Engineer</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="assets/img/testimonial/testi_3_1.png" alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Amar Singh</h3>
                                        <span class="testi-card_desig">IPS</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card3">
                                <div class="testi-card-shape" data-mask-src="assets/img/shape/testi-card-bg-shape3-1.png">
                                </div>
                                <div class="testi-card_review">
                                    <i class="fas fa-star"></i>
                                    5.0
                                </div>
                                <div class="testi-card_profile">
                                    <div class="box-thumb">
                                        <img src="assets/img/testimonial/testi_3_2.png" alt="img">
                                        <div class="quote-icon">
                                            <i class="fal fa-quote-right"></i>
                                        </div>
                                    </div>
                                    <div class="media-left">
                                        <h3 class="testi-card_name">Atul save</h3>
                                        <span class="testi-card_desig">Farmer</span>
                                    </div>
                                </div>
                                <p class="testi-card_text">“Stay informed about our upcoming events and campaigns. Whether
                                    it's a fundraising gala, a charity run, or a community outreach program, there are
                                    plenty of ways to get involved and support our cause. Check our event calendar for
                                    details.”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testiSlide3" class="slider-arrow style-border slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlide3" class="slider-arrow style-border slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!--==============================
    Blog Area
    ==============================-->
    {{-- <section class="blog-area-3 overflow-hidden space-bottom" id="blog-sec" data-bg-src="assets/img/bg/gray-bg2.png">
        <div class="shape-mockup blog-bg-shape3-1" data-top="0" data-left="0" data-right="0">
            <img src="assets/img/shape/testi_bg_shape3_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-7">
                    <div class="title-area text-lg-start text-center">
                        <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> News &
                            Articles</span>
                        <h2 class="sec-title">Our Latest News & Articles</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="blog.html" class="th-btn style3">View All Post <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider3"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar-days"></i>April 12 2024</a>
                                        <a href="blog-details.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="blog-details.html" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar-days"></i>June 17 2024</a>
                                        <a href="blog-details.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">Every Contribution Counts: Make a
                                            Difference</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="blog-details.html" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar-days"></i>March 24 2024</a>
                                        <a href="blog-details.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">See Your Impact: Transparent
                                            Donation Tracking</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="blog-details.html" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fas fa-calendar-days"></i>July 05 2024</a>
                                        <a href="blog-details.html"><i class="fas fa-tags"></i>Education</a>
                                    </div>

                                    <h3 class="box-title"><a href="blog-details.html">Every Contribution Counts: Make a
                                            Difference</a></h3>
                                    <p class="blog-text">Explore the variety of volunteer opportunities available. From
                                        event planning and fundraising to fieldwork and administrative support.</p>
                                    <a href="blog-details.html" class="th-btn">Read More <i
                                            class="fas fa-arrow-up-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
