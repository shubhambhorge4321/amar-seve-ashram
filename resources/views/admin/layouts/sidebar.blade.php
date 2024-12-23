<!-- sidebar start-->
<aside class="codex-sidebar">
  <div class="logo-gridwrap"><a class="codexbrand-logo" href="{{ route('gallery.index') }}"><img class="img-fluid"
        src="{{ asset('front/img/logo/logo.png') }}" alt="theeme-logo"></a><a class="codex-darklogo"
      href="{{ route('gallery.index') }}"><img class="img-fluid" src="{{ asset('front/img/logo/logo.png') }}" alt="theeme-logo"></a>
    <div class="sidebar-action"><i data-feather="menu"></i></div>
  </div>
  <div class="icon-logo"><a href="{{ route('gallery.index') }}"><img class="img-fluid" src="{{ asset('front/img/logo/logo.png') }}"
        alt="theeme-logo"></a></div>
  <div class="codex-menuwrapper">
    <ul class="codex-menu custom-scroll" data-simplebar>
      <?php /*<li class="cdxmenu-title">
                <a href="{{ url('admin/admindashboard') }}">
                    <div class="icon-item"><i data-feather="calendar"></i></div><span>Dashboard</span>
                </a>
            </li> */ ?>
      <li class="menu-item">
        <a href="{{ route('gallery.index') }}">
          <div class="icon-item"><i data-feather="camera"></i></div><span>Banner</span>
        </a>
      </li>
      <li class="menu-item"><a href="{{ route('testimonial.view') }}">
        <div class="icon-item"><i data-feather="users"></i></div><span>Volunteer</span>
      </a></li>
      
      
      
        <li class="menu-item"><a href="{{ route('gallery.admin.view') }}">
          <div class="icon-item"><i data-feather="image"></i></div><span>Gallery</span>
        </a></li>
       
      
        <li class="menu-item"><a href="{{ route('register.admin.view') }}">
            <div class="icon-item"><i data-feather="command"></i></div><span>Become a volunteer</span>
          </a></li>
        <li class="menu-item"><a href="{{ route('contact.admin.view') }}">
            <div class="icon-item"><i data-feather="phone-call"></i></div><span>Contact us</span>
          </a></li>
          <li class="menu-item"  id="logout-item" ><a href="{{url('admin-logout')}}">
    <div class="icon-item"><i class="fa fa-sign-out"></i></div><span>Log out</span>
  </a></li>
    
  </div>
</aside>
<!-- sidebar end-->