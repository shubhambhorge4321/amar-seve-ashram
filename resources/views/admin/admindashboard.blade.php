@extends('admin.layouts.app')
@section('content')
<div class="themebody-wrap">
      <!-- breadcrumb start-->
      <div class="codex-breadcrumb">      
        <div class="breadcrumb-contain">
          <div class="left-breadcrumb">
            <ul class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.html"> 
                  <h1>Dashboard</h1></a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0);">ecommerce</a></li>
            </ul>
          </div>
          <div class="right-breadcrumb">
            <ul>
              <li>
                <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
              </li>
              <li>
                <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- breadcrumb end-->
      <!-- theme body start-->
      <div class="theme-body" data-simplebar>
        <div class="custom-container common-dash">
          <div class="row"> 
            <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
              <div class="card sale-revenue">
                <div class="card-header">
                  <h4>total earnings</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body progressCounter">
                  <h2>$<span class="count">485347</span><span class="badge badge-primary">25.7%<i class="fa fa-angle-up">                  </i></span></h2>
                  <div class="progress progress-primary">
                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"> </div>
                  </div>
                  <h4 class="text-light">this week extra  earnings in <span class="text-primary">$1,827.24                   </span></h4>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
              <div class="card sale-revenue">
                <div class="card-header">
                  <h4>total Sale   </h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly            </a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body progressCounter">
                  <h2>$<span class="count">32586</span><span class="badge badge-secondary">25.7%<i class="fa fa-angle-up"> </i></span></h2>
                  <div class="progress progress-secondary">
                    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"> </div>
                  </div>
                  <h4 class="text-light">this week extra sale in  <span class="text-secondary">$1,827.24                  </span></h4>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
              <div class="card sale-revenue">
                <div class="card-header">
                  <h4>total profit   </h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly            </a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body progressCounter">
                  <h2>$<span class="count">255719</span><span class="badge badge-success">20.5%<i class="fa fa-angle-up"> </i></span></h2>
                  <div class="progress progress-success">
                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"> </div>
                  </div>
                  <h4 class="text-light">this week extra profit in <span class="text-success">$1,7.24                  </span></h4>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
              <div class="card sale-revenue">
                <div class="card-header">
                  <h4>total order   </h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly          </a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body progressCounter">
                  <h2>$<span class="count">1082</span><span class="badge badge-info">30.00%<i class="fa fa-angle-up"> </i></span></h2>
                  <div class="progress progress-info">
                    <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"> </div>
                  </div>
                  <h4 class="text-light">this week extra order in <span class="text-info">$1,20.24 </span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- theme body start-->
    </div>
    @endsection