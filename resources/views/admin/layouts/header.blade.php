      <!-- Loader Start-->
      <!-- <div class="codex-loader">     
          <div class="linespinner"></div>
        </div> -->
      <!-- Loader End-->
      <!-- Header Start-->
      <header class="codex-header"> 
        <div class="header-contian d-flex justify-content-between align-items-center">
          <div class="header-left d-flex align-items-center">
            <div class="sidebar-action navicon-wrap"><i data-feather="menu"></i></div>
            <!-- <div class="search-bar">
              <div class="form-group mb-0">
                <div class="input-group">
                  <input class="form-control" type="text" value="" placeholder="Search Here....."><span class="input-group-text"><i data-feather="search"></i></span>
                </div>
              </div>
            </div> -->
          </div>
          <div class="header-right d-flex align-items-center justify-content-end">
            <div class="form-group mb-0">
              <div class="input-group">
                {{-- <input class="form-control" type="text" value="" placeholder="Search Here....."><span class="input-group-text"><i data-feather="search"></i></span> --}}
                <a href="{{route('home')}}" target="_blank"><span class="input-group-text">visit site &nbsp; &nbsp; &nbsp; <i data-feather="fas fa-arrow-up-right ms-2"></i></span></a>
              </div>
            </div>
</div>
          <div class="header-right d-flex align-items-center justify-content-end">
            <ul class="nav-iconlist">  
              <li>
                <div class="navicon-wrap action-dark"><i class="fa fa-moon-o icon-dark"></i><i class="fa fa-sun-o icon-light" style="display:none;"></i></div>
              </li>
              <!-- <li>                              
                <div class="navicon-wrap"><i data-feather="bell"></i>
                  <div class="noti-count">04</div>
                </div>
                <div class="hover-dropdown navnotification-drop">
                  <div class="drop-header">
                    <h5>notification<span>05</span></h5>
                  </div>
                  <ul data-simplebar>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-primary"><i class="fa fa-check-square-o"></i></div>
                          <div class="media-body">
                            <h6>order Cheked</h6><span class="text-light">1 hour ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-secondary"><i class="fa fa-first-order"></i></div>
                          <div class="media-body">
                            <h6>order receved</h6><span class="text-light">1 day ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-success"><i class="fa fa-money"></i></div>
                          <div class="media-body">
                            <h6>payment received</h6><span class="text-light">2 day ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-warning"><i class="fa fa-truck"></i></div>
                          <div class="media-body">
                            <h6>order shipped</h6><span class="text-light">2 day ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-info"><i class="fa fa-first-order"></i></div>
                          <div class="media-body">
                            <h6>order receved</h6><span class="text-light">1 day ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-success"><i class="fa fa-money"></i></div>
                          <div class="media-body">
                            <h6>payment received</h6><span class="text-light">2 day ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-warning"><i class="fa fa-truck"></i></div>
                          <div class="media-body">
                            <h6>order shipped</h6><span class="text-light">2 day ago</span>
                          </div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="icon-nav bg-info"><i class="fa fa-first-order"></i></div>
                          <div class="media-body">
                            <h6>order receved</h6><span class="text-light">1 day ago</span>
                          </div>
                        </div></a></li>
                  </ul>
                  <div class="drop-footer"><a href="email-inbox.html">See All Notification</a></div>
                </div>
              </li> -->
              <!-- <li>
                <div class="navicon-wrap"><i data-feather="shopping-cart"></i>
                  <div class="noti-count">07</div>
                </div>
                <div class="hover-dropdown navshop-drop">
                  <div class="drop-header">
                    <h5>Shopping<span>7</span></h5>
                  </div>
                  <ul data-simplebar>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="img-wrap"><img class="img-fluid" src="{{  asset('images/ecom-dashboard/small-pro/1.jpg') }}" alt=""></div>
                          <div class="media-body">
                            <h6>teddy bear</h6><span class="text-light">$250</span>
                          </div>
                          <div class="close-pro"><i class="ti-trash"></i></div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="img-wrap"><img class="img-fluid" src="{{  asset('images/ecom-dashboard/small-pro/2.jpg') }}" alt=""></div>
                          <div class="media-body">
                            <h6>iphone</h6><span class="text-light">$140</span>
                          </div>
                          <div class="close-pro"><i class="ti-trash"></i></div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="img-wrap"><img class="img-fluid" src="{{  asset('images/ecom-dashboard/small-pro/3.jpg') }}" alt=""></div>
                          <div class="media-body">
                            <h6>Apple Airpod</h6><span class="text-light">$310</span>
                          </div>
                          <div class="close-pro"><i class="ti-trash"></i></div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="img-wrap"><img class="img-fluid" src="{{  asset('images/ecom-dashboard/small-pro/4.jpg') }}" alt=""></div>
                          <div class="media-body">
                            <h6>Motors</h6><span class="text-light">$510</span>
                          </div>
                          <div class="close-pro"><i class="ti-trash"></i></div>
                        </div></a></li>
                    <li><a href="javascript:void(0);">
                        <div class="media">
                          <div class="img-wrap"><img class="img-fluid" src="{{  asset('images/ecom-dashboard/small-pro/5.jpg') }}" alt=""></div>
                          <div class="media-body">
                            <h6>iphone</h6><span class="text-light">$140</span>
                          </div>
                          <div class="close-pro"><i class="ti-trash"></i></div>
                        </div></a></li>
                  </ul>
                  <div class="drop-footer"><a href="checkout.html">Checkout All</a></div>
                </div>
              </li> -->
              <li>
                <div class="navicon-wrap btn-windowfull"><i data-feather="maximize"></i></div>
              </li>
              <li class="nav-profile">
                <div class="media">
                  <div class="user-icon"></div>
                  <div class="media-body">
                    <h6>{{Auth::user()->name}}</h6><span class="text-light">{{Auth::user()->email}}</span>
                  </div>
                </div>
                <div class="hover-dropdown navprofile-drop">
                  <ul>
                    <!-- <li><a href="profile.html"><i class="ti-user"></i>profile</a></li>
                    <li><a href="email-inbox.html"><i class="ti-email"></i>inbox</a></li>
                    <li><a href="user-edit.html"><i class="ti-settings"></i>setting</a></li> -->
                    <li><a href="{{url('admin-logout')}}"><i class="fa fa-sign-out"></i>log out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <!-- Header End-->