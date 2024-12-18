<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

@include('front.layout.header')


<body>
    @include('front.layout.navbar')


 @yield('content')







@include('front.layout.footer')


<!--********************************
        Code End  Here 
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>


<!--==============================
All Js File
============================== -->
@include('front.layout.script')

</body>
</html>