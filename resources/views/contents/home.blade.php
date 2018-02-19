@extends('welcome')
@section('styles')
    <link href="{{ asset('themes/1/js-image-slider.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('themes/1/js-image-slider.js') }}" type="text/javascript"></script>
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
<style type="text/css">
    body {
  font-family: 'Source Sans Pro',Helvetica Neue,Helvetica,Arial,sans-serif;
  font-size: 16px;
  line-height: 1.75;
}

#timeline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background-color: #031625;
}
#timeline:hover .tl-item {
  width: 23.3333%;
}

.tl-item {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  position: relative;
  width: 25%;
  height: 70vh;
  min-height: 400px;
  color: #fff;
  overflow: hidden;
  -webkit-transition: width 0.5s ease;
  transition: width 0.5s ease;
}
.tl-item:before, .tl-item:after {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.tl-item:after {
  background: rgba(3, 22, 37, 0.85);
  opacity: 1;
  -webkit-transition: opacity 0.5s ease;
  transition: opacity 0.5s ease;
}
.tl-item:before {
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), color-stop(95%, black));
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, black 95%);
  z-index: 1;
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0) translateY(50%);
          transform: translate3d(0, 0, 0) translateY(50%);
  -webkit-transition: opacity 0.5s ease, -webkit-transform 0.5s ease;
  transition: opacity 0.5s ease, -webkit-transform 0.5s ease;
  transition: opacity 0.5s ease, transform 0.5s ease;
  transition: opacity 0.5s ease, transform 0.5s ease, -webkit-transform 0.5s ease;
}
.tl-item:hover {
  width: 30% !important;
}
.tl-item:hover:after {
  opacity: 0;
}
.tl-item:hover:before {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0) translateY(0);
          transform: translate3d(0, 0, 0) translateY(0);
  -webkit-transition: opacity 1s ease, -webkit-transform 1s ease 0.25s;
  transition: opacity 1s ease, -webkit-transform 1s ease 0.25s;
  transition: opacity 1s ease, transform 1s ease 0.25s;
  transition: opacity 1s ease, transform 1s ease 0.25s, -webkit-transform 1s ease 0.25s;
}
.tl-item:hover .tl-content {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  -webkit-transition: all 0.75s ease 0.5s;
  transition: all 0.75s ease 0.5s;
}
.tl-item:hover .tl-bg {
  -webkit-filter: grayscale(0);
          filter: grayscale(0);
}

.tl-content {
  -webkit-transform: translate3d(0, 0, 0) translateY(25px);
          transform: translate3d(0, 0, 0) translateY(25px);
  position: relative;
  z-index: 1;
  text-align: center;
  margin: 0 1.618em;
  top: 55%;
  opacity: 0;
}
.tl-content h1 {
  font-family: 'Pathway Gothic One',Helvetica Neue,Helvetica,Arial,sans-serif;
  text-transform: uppercase;
  color: #1779cf;
  font-size: 1.44rem;
  font-weight: normal;
}

.tl-year {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  z-index: 1;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff;
}
.tl-year p {
  font-family: 'Pathway Gothic One',Helvetica Neue,Helvetica,Arial,sans-serif;
  font-size: 1.728rem;
  line-height: 0;
}

.tl-bg {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: center center;
  -webkit-transition: -webkit-filter 0.5s ease;
  transition: -webkit-filter 0.5s ease;
  transition: filter 0.5s ease;
  transition: filter 0.5s ease, -webkit-filter 0.5s ease;
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
}

</style>
@endsection
@section('content')
        <!-- Banner -->
<!-- <div id="slidercontainer">
    <div style="max-width:100%;" id="css3slider">
      <img src="{{ asset('imgs/slide1.jpg')}}" >
      <img src="{{ asset('imgs/slide2.jpg')}}" >
      <img src="{{ asset('imgs/slide3.jpg')}}" >
      <img src="{{ asset('imgs/slide2.jpg')}}" >
    </div>
</div> -->
<div id="sliderFrame">
    <div id="slider">
        <a href="http://www.gobi.mn/" target="_blank">
            <img src="{{ asset('imgs/slide1.jpg')}}" alt="Welcome to Gobi Cashmere" />
        </a>
        <img src="{{ asset('imgs/slide1.jpg')}}" />
        <img src="{{ asset('imgs/slide2.jpg')}}" alt="" />
        <img src="{{ asset('imgs/slide3.jpg')}}" alt="#htmlcaption" />
        <img src="{{ asset('imgs/slide2.jpg')}}" />
    </div>
    <div id="htmlcaption" style="display: none;">
        <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
    </div>
</div>

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
                                <h3><a href="#!">Хувь захиалга</a></h3>
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
                                <h3><a href="#!">Принтинг</a></h3>
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
                                <h3><a href="#!">Хими </a></h3>
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
                                <h3><a href="#!">Нөхөн засвар</a></h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                </p>
                            </div>
                        </div>
                    </div>                    
                    
        </div>
    </div>

</section>
        <!--End Banner -->
<section id="timeline">
  
  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/white.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <h1>ЦАГААН НООЛУУР</h1>
      <p>Цагаан өнгө нийт Монгол ямааны 20 хүртэлх хувийг эзэлдэг ажээ. Тэдний ихэнх нь Монголын өмнөд бүс болох Өмнөговь, Баянхонгор, Говь-Алтай аймгуудад байдаг. Монголын говьд эрс тэс уур амьсгал ноёрхдог бөгөөд өвөл -40oC, хэм хүрч зун +50oC хэм хүртэл халдаг байна. “Говь” ХК онцгойлон Баянхонгор аймгийн Шинэжинст сумаас цагаан ноолуурыг авдаг.</p>
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/brown.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <h1 class="f3 text--accent ttu">БОР НООЛУУР</h1>
      <p>Монголын баруун хэсгээр Алтайн нуруунд оршдог. Баян-Өлгий, Ховд, Завхан, Хөвсгөл аймгууд бор өнгийн ноолуурыг гаргадаг хар зүсмийн ямааны нутаг юм. Алтай Хангайн бүс далайгаас 2,000 – 4,000м өндөрлөгт оршдог бөгөөд асар хүйтэн болдог. Гэвч үслэг зөөлөн ноолуур энэ тэсгэм хүйтэн өвлөөр ч ямааг хүйтнээс бүрэн хамгаалж байдаг юм. Жил бүрийн 3-р сард “Говь” ХК Хөвсгөл аймгийн Төмөрбулаг сумаар айлчилж, бор өнгийн ноолуурыг шилэн авдаг билээ.</p>
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/grey.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <h1 class="f3 text--accent ttu">ХӨХ СААРАЛ НООЛУУР</h1>
      <p>Дэлхийн хамгийн ховор ноолуурын өнгө бол хөх саарал. Хөх саарал өнгийн ямаа зөвхөн Монголд байдаг бөгөөд Монгол ямааны ердөө 2 хувийг эзэлдэг. Энэ нь дэлхий дээрх 2,000 ямаа тутмын нэг л хөх саарал өнгөтэй байдаг гэсэн үг юм. “Говь” ХК-ийн байгалийн хамгийн ховор бөгөөд онцгой ноолуурыг үйлчлүүлэгчиддээ түгээх зорилго, энэхүү содон ноолуурыг хайж олоход хүргэсэн билээ. Хөх саарал өнгийн энэ ноолуурыг зөвхөн “Говь” ХК боловсруулан, бүтээгдэхүүн болгон үйлдвэрлэдэг бөгөөд Ховд аймгаас тусгайлан хөх саарал өнгийн ноолуурыг авдаг.</p>
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/beige.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <h1 class="f3 text--accent ttu">ЦАЙВАР ШАРГАЛ НООЛУУР</h1>
      <p>Цайвар шаргал өнгө хамгийн элбэг байдаг. Монголын ямааны бараг 60 хувийг эзлэх энэ өнгө мөн бүх аймгаар тархсан байдаг. Дулаан, тансаг харагдах цайвар шаргал өнгө органик ноолуурын хамгийн тохиромжтой төлөөлөл юм. Хэнтий аймгийн Галшар сумын малчидтай “Говь” ХК тусгайлан харилцан ажиллаж, цайвар шаргал ноолуурыг боловсруулдаг байна.</p>
    </div>

  </div>
</section>

<!--Portfolio Section End-->

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
<script>

</script>
@endsection