<!DOCTYPE html>
<!-- saved from url=(0056)http://theembazaar.com/demo/eforest/wimo/html/index.html -->
<html class="">

    @include('layouts.htmlheader')
    @yield('styles')

<body style="overflow: visible;" class=" catalog-product-view catalog-product-view product-cashmere-mens-pigment-bomber-style-cardigan">
<!--loader-->
<div id="loader-wrapper" class="loader-wrapper" style="display: none;">
  <div class="loader-inner">
    <div class="ball-scale-multiple">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</div>
<!--loader--> 

    @include('layouts.menuheader')


    @section('home')

    @show
<!--Portfolio Section-->
    @yield('content')
<!-- Service_box End-->
    @include('layouts.footer')

<div class="goto goto-active">
    <a href="#!"><i class="fa fa-angle-up"></i></a>
</div>

    @include('layouts.scripts')
    @yield('scripts')


<style type="text/css">.typewrite > .wrap { border-right: 0.02em solid #fff}</style></body></html>