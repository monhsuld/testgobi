@extends('welcome')
@section('styles')
<style type="text/css">
    .img-replace {
      /* replace text with an image */
      display: inline-block;
      overflow: hidden;
      text-indent: 100%; 
      color: transparent;
      white-space: nowrap;
    }
    .bts-popup {
      position: fixed;
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      /*background-color: rgba(0, 0, 0, 0.5);*/
      opacity: 0;
      visibility: hidden;
      -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      transition: opacity 0.3s 0s, visibility 0s 0.3s;
    }
    .bts-popup.is-visible {
      opacity: 1;
      visibility: visible;
      -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
      -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
      transition: opacity 0.3s 0s, visibility 0s 0s;
    }

    .bts-popup-container {
      position: relative;
      width: 100%;
      max-width: 600px;
      margin: 4em auto;
      background: #333;
      border-radius: none; 
      text-align: center;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
      -webkit-transform: translateY(-40px);
      -moz-transform: translateY(-40px);
      -ms-transform: translateY(-40px);
      -o-transform: translateY(-40px);
      transform: translateY(-40px);
      /* Force Hardware Acceleration in WebKit */
      -webkit-backface-visibility: hidden;
      -webkit-transition-property: -webkit-transform;
      -moz-transition-property: -moz-transform;
      transition-property: transform;
      -webkit-transition-duration: 0.3s;
      -moz-transition-duration: 0.3s;
      transition-duration: 0.3s;
    }
    .bts-popup-container img {
      /*padding: 20px 0 0 0;*/
    }
    .bts-popup-container p {
        color: white;
      padding: 10px 40px;
    }
    .bts-popup-container .bts-popup-button {
      padding: 5px 25px;
      border: 2px solid white;
        display: inline-block;
      margin-bottom: 10px;
    }

    .bts-popup-container a {
      color: white;
      text-decoration: none;
      text-transform: uppercase;
    }






    .bts-popup-container .bts-popup-close {
      position: absolute;
      top: 8px;
      right: 8px;
      width: 30px;
      height: 30px;
    }
    .bts-popup-container .bts-popup-close::before, .bts-popup-container .bts-popup-close::after {
      content: '';
      position: absolute;
      top: 12px;
      width: 16px;
      height: 3px;
      background-color: white;
    }
    .bts-popup-container .bts-popup-close::before {
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      transform: rotate(45deg);
      left: 8px;
    }
    .bts-popup-container .bts-popup-close::after {
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      transform: rotate(-45deg);
      right: 6px;
      top: 13px;
    }
    .is-visible .bts-popup-container {
      -webkit-transform: translateY(0);
      -moz-transform: translateY(0);
      -ms-transform: translateY(0);
      -o-transform: translateY(0);
      transform: translateY(0);
    }
    @media only screen and (min-width: 1170px) {
      .bts-popup-container {
        margin: 8em auto;
      }
    }
</style>
@endsection
@section('content')
        <!-- Banner -->
        <div class="slider slider-bg-5">
            <div class="container">
                <div class="col-lg-6 col-md-offset-3 text-center">
                    
                        <div class="solid_bdr">
                            <div class="content-text__block">
                                <!-- <h1>hello</h1>
                                <h2>i am John smith</h2> -->
                                <h3> Монголын ноос, ноолуурын салбарын анхдагч <strong>“Говь”</strong> үйлдвэр</h3>
                                <a class="button-hover" href="#">Бидний тухай <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                
                </div>
            </div>
        </div>
        <!--End Banner -->
<section class="padding ptb-xs-40">
<div class="container">

           

            <ul class="filter list-inline">
                <li><a class="active"  href="#" data-filter="*">Брэнд</a></li>
                <li><a href="#" data-filter=".cashmere">Gobi cashmere</a></li>
                <li><a href="#" data-filter=".yama">Yama</a></li>
                <li><a href="#" data-filter=".organic">Gobi Organic</a></li>
                <li><a href="#" data-filter=".kids">Gobi Kids</a></li>
            </ul>
            <div class="row">
                <div class="portfolio-box iso-call col-4-space" style="position: relative; height: 1099.25px;">

                    <div class="project-post cashmere organic" style="position: absolute; left: 0px; top: 0px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/gobichashmereEm.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-8.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/portfolio-single.html">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                    <div class="project-post yama kids" style="position: absolute; left: 292px; top: 0px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/yama1.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/mas-1.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/portfolio-single.html">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->

                    <div class="project-post yama kids" style="position: absolute; left: 585px; top: 0px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/yama2.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-3.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                    <div class="project-post cashmere kids" style="position: absolute; left: 877px; top: 0px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/gobichashmereEm2.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-4.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->

                    <div class="project-post organic" style="position: absolute; left: 0px; top: 274px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/ger1.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-5.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                    <div class="project-post  yama" style="position: absolute; left: 585px; top: 274px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/yama3.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-6.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->

                    <div class="project-post  organic" style="position: absolute; left: 877px; top: 274px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/ger2.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/mas-1.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->


                    <div class="project-post organic" style="position: absolute; left: 292px; top: 449px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/ger3.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/mas-2.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->

                    <div class="project-post  organic" style="position: absolute; left: 0px; top: 549px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/ger4.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-2.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                     <div class="project-post  yama" style="position: absolute; left: 585px; top: 549px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/yama4.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-1.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                      <div class="project-post  cashmere" style="position: absolute; left: 877px; top: 724px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/gobichashmereEr1.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-9.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                    <div class="project-post  cashmere" style="position: absolute; left: 0px; top: 824px;">
                        <div class="item-img-wrap ">
                            <img src="{{ asset('imgs/gobichashmereEr2.jpg') }}" class="img-responsive" alt="workimg">
                            <div class="item-img-overlay">
                                <a href="./Wimo - Minimal Portfolio Template_files/img-3.jpg" class="show-image">
                                    <span></span>
                                </a>
                            </div>
                        </div> 
                        <div class="work-desc">
                            <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#">Logo Design</a></h3>
                            <span>illustrate</span>
                        </div><!--work desc-->
                    </div><!--project post-->
                </div>
            </div>
        </div><!--container-->

</section>
<!--Portfolio Section End-->

<!-- services_box -->
<section class="padding ptb-xs-40 gray-bg">
    <div class="container">
        <div class="row text-center">
                  <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                     <div class="heading-box pb-15">
                        <h2>Үйлчилгээ</h2>
                        <span class="b-line"></span>
                     </div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                  </div>
               </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-30 mb-xs-30">
                        <div class="wedo-point d-flex align-items-center">
                            <div class="icon-serv">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                            </div>
                            <div class="serv-poin">
                                <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#!">Хувь захиалга</a></h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-30 mb-xs-30">
                        <div class="wedo-point d-flex align-items-center">
                            <div class="icon-serv">
                            <i class="fa fa-camera-retro" aria-hidden="true"></i>
                            </div>
                            <div class="serv-poin">
                                <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#!">Принтинг</a></h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-3 mb-30 mb-xs-30">
                        <div class="wedo-point d-flex align-items-center">
                            <div class="icon-serv">
                            <i class="fa fa-suitcase" aria-hidden="true"></i>
                            </div>
                            <div class="serv-poin">
                                <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#!">Хими </a></h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-3 mb-30 mb-xs-30">
                        <div class="wedo-point d-flex align-items-center">
                            <div class="icon-serv">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </div>
                            <div class="serv-poin">
                                <h3><a href="http://theembazaar.com/demo/eforest/wimo/html/index.html#!">Нөхөн засвар</a></h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                </p>
                            </div>
                        </div>
                    </div>                    
                    
        </div>
    </div>
    <div class="bts-popup" role="alert">
        <div class="bts-popup-container">
          <img src="{{ asset('imgs/gobisale.jpg') }}" alt="" width="100%" />
            <p>Цахим хаяг аа бүртгүүлээд шинэ мэдээлэл болон 10% хөнглөлт аваарай. </p>
                    <div class="bts-popup-button">
                           <input type="text" class="form-control" placeholder="цахим хаяг аа оруулна уу" aria-label="Recipient's username" aria-describedby="basic-addon2"><a href="#0">Enter</a>
                    </div>
            <a href="#0" class="bts-popup-close img-replace">Close</a>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function($){
  
          window.onload = function (){
            $(".bts-popup").delay(1000).addClass('is-visible');
            }
          
            //open popup
            $('.bts-popup-trigger').on('click', function(event){
                event.preventDefault();
                $('.bts-popup').addClass('is-visible');
            });
            
            //close popup
            $('.bts-popup').on('click', function(event){
                if( $(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup') ) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });
            //close popup when clicking the esc keyboard button
            $(document).keyup(function(event){
                if(event.which=='27'){
                    $('.bts-popup').removeClass('is-visible');
                }
            });
        });
    </script>
@endsection