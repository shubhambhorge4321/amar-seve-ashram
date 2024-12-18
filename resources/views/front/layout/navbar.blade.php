
    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
  <div class="preloader ">
    <button class="th-btn style2 preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
        <span class="loader">
            Donat
            <span class="loading-text">Donat</span>
        </span>
    </div>
</div><!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper sidemenu-cart ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_1.png" alt="Cart Image">Books</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_2.png" alt="Cart Image">Medicine</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_3.png" alt="Cart Image">Dress</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_4.png" alt="Cart Image">Chair</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="assets/img/product/product_thumb_1_5.png" alt="Cart Image">Cloths</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn wc-forward">View cart</a>
                    <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="far fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div><!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><img src="assets/img/logo.png" alt="Donat"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{route('home')}}">Home</a>
                    
                </li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li class="menu-item-has-children-cancell">
                    <a href="{{route('donation.details')}}">Donations</a>
                   
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">Volunteers</a></li>
                        <li><a href="team-details.html">Volunteer Details</a></li>
                        <li><a href="add-team.html">Become A Volunteer</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQS</a></li>
                        <li><a href="testimonial.html">Testimonials</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Our initiatives</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('contact.us')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="color-scheme-wrap active">
    <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
    <h3 class="color-scheme-wrap-title text-center">Color Switcher</h3>
    <h4 class="color-scheme-wrap-subtitle text-center">Theme Color</h4>
    <div class="color-switch-btns">
        <button data-color="#1A685B"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#f34e3a"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#FF4857"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#3843C1"><i class="fa-solid fa-droplet"></i></button>
        <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
    </div>
    <h4 class="color-scheme-wrap-subtitle mt-20 text-center">Secondary Color</h4>
    <div class="secondary-color-switch-btns">
        <button data-secondary-color="#FFAC00"><i class="fa-solid fa-droplet"></i></button>
        <button data-secondary-color="#F41E1E"><i class="fa-solid fa-droplet"></i></button>
        <button data-secondary-color="#f34e3a"><i class="fa-solid fa-droplet"></i></button>
        <button data-secondary-color="#FF4857"><i class="fa-solid fa-droplet"></i></button>
        <button data-secondary-color="#3843C1"><i class="fa-solid fa-droplet"></i></button>
    </div>
</div><!--==============================
Header Area
==============================-->
<header class="th-header header-layout2">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="header-logo">
                    <a href="index.html"><img src="assets/img/logo.png" alt="Donat"></a>
                </div>
                <div class="menu-area-wrap">
                    <nav class="main-menu d-none d-lg-block">
                        <ul>
                            <li class="menu-item-has-children-cancell">
                                <a href="{{route('home')}}">Home</a>
                               
                            </li>
                            <li><a href="{{route('aboutus')}}">About Us</a></li>
                            <li class="menu-item-has-children-cancell">
                                <a href="{{route('donation.details')}}">Donations</a>
                               
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Volunteer</a>
                                <ul class="sub-menu">
                                    {{-- <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{route('volunteer')}}">Volunteers</a></li>
                                    {{-- <li><a href="team-details.html">Volunteer Details</a></li> --}}
                                    <li><a href="{{route('become.volunteer')}}">Become A Volunteer</a></li>
                                    {{-- <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">FAQS</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="error.html">Error Page</a></li> --}}
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Gallery</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('contact.us')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <p class="header-notice"><img class="me-1" src="assets/img/icon/heart-icon.svg" alt="img">Are you ready to help them? Let’s become a volunteers...</p>
                </div>
                <div class="header-button">
                    {{-- <button type="button" class="icon-btn style2 searchBoxToggler d-lg-block d-none"><i class="far fa-search"></i></button>
                    <button type="button" class="icon-btn sideMenuToggler">
                        <span class="badge">5</span>
                        <i class="fa-regular fa-cart-shopping"></i>
                    </button> --}}
                    <a href="{{route('donation.details')}}" class="th-btn style3 d-xl-block d-none"><i class="fas fa-heart me-2"></i> Donate Now</a>
                    <button type="button" class="icon-btn th-menu-toggle d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>