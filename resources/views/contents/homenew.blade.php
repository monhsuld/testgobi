@extends('welcome')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('slide/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slide/css/style.css')}}" />
    <noscript>
      <link rel="stylesheet" type="text/css" href="css/noscript.css" />
    </noscript>

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
  /*background-color: #fff;*/
}
#timeline:hover .tl-item {
  width: 23.3333%;
}

.tl-item {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  position: relative;
  width: 25%;
  height: 250px;
  min-height: 200px;
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
  background: rgba(192,192,192,0.3);
  opacity: 1;
  -webkit-transition: opacity 0.5s ease;
  transition: opacity 0.5s ease;
}
.tl-item:before {
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), color-stop(95%, black));
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, black 100%);
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
  margin-top: 90px;
  color: #333;
  font-size: 12px;
  font-weight: normal;
  text-align: right;
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
  background-size: contain;
  background-repeat: no-repeat;
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
<div class="container">
      <div id="ei-slider" class="ei-slider">
          <ul class="ei-slider-large">
              <li>
                  <img src="{{ asset('imgs/slide1.jpg')}}" alt="image06"/>
                  <!-- <div class="ei-title">
                      <h2>Passionate</h2>
                      <h3>Seeker</h3>
                  </div> -->
              </li>
              <li>
                  <img src="{{ asset('imgs/slide2.jpg')}}" alt="image01" />
                  <!-- <div class="ei-title">
                      <h2>Creative</h2>
                      <h3>Duet</h3>
                  </div> -->
              </li>
              <li>
                  <img src="{{ asset('imgs/slide3.jpg')}}" alt="image02" />
                  <!-- <div class="ei-title">
                      <h2>Friendly</h2>
                      <h3>Devil</h3>
                  </div> -->
              </li>
          </ul><!-- ei-slider-large -->
          <ul class="ei-slider-thumbs">
              <li class="ei-slider-element"></li>
              <li><a href="#">Slide 1</a><img src="{{ asset('imgs/slide1.jpg')}}" alt="thumb01" /></li>
              <li><a href="#">Slide 2</a><img src="{{ asset('imgs/slide2.jpg')}}" alt="thumb02" /></li>
              <li><a href="#">Slide 3</a><img src="{{ asset('imgs/slide3.jpg')}}" alt="thumb03" /></li>
          </ul><!-- ei-slider-thumbs -->
      </div><!-- ei-slider -->
</div>
<br>
<div class="container">
<section id="timeline">
  
  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/logos/gobi.png)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <a href="#"><h1>Дэлгэрэнгүй <i class="fa fa-angle-right"></i></h1></a>
      <!-- <p>Цагаан өнгө нийт Монгол ямааны 20 хүртэлх хувийг эзэлдэг ажээ. Тэдний ихэнх нь Монголын өмнөд бүс болох Өмнөговь, Баянхонгор, Говь-Алтай аймгуудад байдаг. Монголын говьд эрс тэс уур амьсгал ноёрхдог бөгөөд өвөл -40oC, хэм хүрч зун +50oC хэм хүртэл халдаг байна. “Говь” ХК онцгойлон Баянхонгор аймгийн Шинэжинст сумаас цагаан ноолуурыг авдаг.</p> -->
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/logos/yama.png)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <a href="#"><h1>Дэлгэрэнгүй <i class="fa fa-angle-right"></i></h1></a>
      <!-- <p>Монголын баруун хэсгээр Алтайн нуруунд оршдог. Баян-Өлгий, Ховд, Завхан, Хөвсгөл аймгууд бор өнгийн ноолуурыг гаргадаг хар зүсмийн ямааны нутаг юм. Алтай Хангайн бүс далайгаас 2,000 – 4,000м өндөрлөгт оршдог бөгөөд асар хүйтэн болдог. Гэвч үслэг зөөлөн ноолуур энэ тэсгэм хүйтэн өвлөөр ч ямааг хүйтнээс бүрэн хамгаалж байдаг юм. Жил бүрийн 3-р сард “Говь” ХК Хөвсгөл аймгийн Төмөрбулаг сумаар айлчилж, бор өнгийн ноолуурыг шилэн авдаг билээ.</p> -->
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/logos/organic.png)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <a href="#"><h1>Дэлгэрэнгүй <i class="fa fa-angle-right"></i></h1></a>
      <!-- <p>Дэлхийн хамгийн ховор ноолуурын өнгө бол хөх саарал. Хөх саарал өнгийн ямаа зөвхөн Монголд байдаг бөгөөд Монгол ямааны ердөө 2 хувийг эзэлдэг. Энэ нь дэлхий дээрх 2,000 ямаа тутмын нэг л хөх саарал өнгөтэй байдаг гэсэн үг юм. “Говь” ХК-ийн байгалийн хамгийн ховор бөгөөд онцгой ноолуурыг үйлчлүүлэгчиддээ түгээх зорилго, энэхүү содон ноолуурыг хайж олоход хүргэсэн билээ. Хөх саарал өнгийн энэ ноолуурыг зөвхөн “Говь” ХК боловсруулан, бүтээгдэхүүн болгон үйлдвэрлэдэг бөгөөд Ховд аймгаас тусгайлан хөх саарал өнгийн ноолуурыг авдаг.</p> -->
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(imgs/logos/kids.png)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif"></p>
    </div>

    <div class="tl-content">
      <a href="#"><h1>Дэлгэрэнгүй <i class="fa fa-angle-right"></i></h1></a>
      <!-- <p>Цайвар шаргал өнгө хамгийн элбэг байдаг. Монголын ямааны бараг 60 хувийг эзлэх энэ өнгө мөн бүх аймгаар тархсан байдаг. Дулаан, тансаг харагдах цайвар шаргал өнгө органик ноолуурын хамгийн тохиромжтой төлөөлөл юм. Хэнтий аймгийн Галшар сумын малчидтай “Говь” ХК тусгайлан харилцан ажиллаж, цайвар шаргал ноолуурыг боловсруулдаг байна.</p> -->
    </div>

  </div>
</section>

<!--Portfolio Section End-->

<!-- <iframe frameborder='0'  width='100%' height='100%'  title='fallwinter 2017-18' src='{{asset("fallwinter 2017-18 LAST/index.html")}}' type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe> -->
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('slide/js/jquery.eislideshow.js')}}"></script>
<script type="text/javascript" src="{{ asset('slide/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $('#ei-slider').eislideshow({
    animation     : 'center',
    autoplay      : true,
    slideshow_interval  : 3000,
    titlesFactor    : 0
        });
    });
</script>
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