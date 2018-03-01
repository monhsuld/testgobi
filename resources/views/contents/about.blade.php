@extends('welcome')
@section('styles')

@endsection
@section('content')
<div class="page-header">
            <div class="container">
                <!-- <h1 class="title">БИДНИЙ ТУХАЙ</h1> -->
            </div>
            <div class="breadcrumb-box">
                <div class="container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index-2.html">Нүүр</a>
                        </li>
                        <li class="active">Бидний тухай</li>
                    </ul>
                </div>
            </div>
        </div>
<!--About Section-->
<section id="about" class="pt-90 pt-xs-60">
  <div class="container">
   
    <div class="row">
      <!-- Sidebar -->
                    @include('contents.sidebar')
                    <!-- End Sidebar -->
      <div class="col-sm-12 col-md-5 mb-sm-30">
        <figure> <img src="{{ asset('imgs/GobiaboutIMG.jpg') }}" alt=""> </figure>
      </div>
      <div class="col-sm-12 col-md-5 ">
        <div class="item">
          <div class="header-wrap mb-30">
            <h2 class="color">"Говь" ХК</h2>
            <!-- <h4>A little bit about me</h4> -->
          </div>
          <div>
            <p>Монголын ноос, ноолуурын салбарын анхдагч “Говь” үйлдвэр нь 1981 онд Япон улсын хөрөнгө оруулалттайгаар байгуулагдаж эдүгээ 30 гаруй жил тасралтгүй үйл ажиллагаагаа амжилттай явуулж байгаа үндэсний томоохон үйлдвэрлэгч юм. “Говь” ХК-ийн төрийн мэдлийн хувьцааг 2007 оны 7 сард “ЭФ СИ АЙ” ХХК Олон улсын нээлттэй дуудлага худалдаагаар худалдан авснаар “Говь” ХК өнөөг хүртэл хувийн хэвшлийн бүтэц зохион байгуулалт, менежменттэйгээр үйл ажиллагаагаа явуулж байна.</p>
            <p>Монгол ямааны 100% ноолуур болон тэмээний ноосыг ашиглан дэлхийн зэрэглэлийн хамгийн сүүлийн үеийн техник, технологиор үйлдвэрлэл явуулдаг “Говь” ХК нь үйлдвэрлэл, хүчин чадал, чанар, үйлчилгээ зэрэг бүх талын үзүүлэлтээрээ дэлхийн топ 5 ноолууран бүтээгдэхүүн үйлдвэрлэгчийн тоонд зүй ёсоор тооцогддог билээ. 1600 гаруй чадварлаг боловсон хүчнийг эгнээндээ нэгтгэсэн “Говь” ХК жилдээ 1100 тн түүхий ноос, ноолуур 30 тн бөмбөгөн ноос, ноолуур 210 тн самнасан ноолуур боловсруулах хүчин чадалтай ба түүхий эд бэлтгэхээс эхлээд бэлэн бүтээгдэхүүн үйлдвэрлэх хүртэлх бүхий л шатны үйлдвэрлэл, дамжлагыг 100% Монголдоо боловсруулдаг цорын ганц үйлдвэр юм.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End--> 
<!-- Feature Section -->
<!--Our Team -->
{{--<section id="team" class="padding ptb-xs-60 ">
  <div class="container">
    
    	<div class="row text-center">
                  <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                     <div class="heading-box pb-15">
                        <h2>meet the team</h2>
                        <span class="b-line"></span>
                     </div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                  </div>
               </div>
               
             
    <div class="row">
      <div class="team-pagination"> 
        
        <!--Team Member-->
        <div class="team-member col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-30">
          <div class="inner-box">
            <div class="image-box"> <img src="{{ asset('imgs/gobichashmereEr1.jpg') }}" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Гүйцэтгэх захирал </div>
                  <h4>Болд</h4>
                </div>
                <!--Social Icon Two-->
                <ul class="social-icon-two">
                  <li> <a href="#"><span class="fa fa-facebook"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-twitter"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-google-plus"></span></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="team-member col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-30">
          <div class="inner-box">
            <div class="image-box"> <img src="{{ asset('imgs/gobichashmereEr2.jpg') }}" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Үйл ажиллагаа хариуцсан дэд захирал </div>
                  <h4>Бат</h4>
                </div>
                <!--Social Icon Two-->
                <ul class="social-icon-two">
                  <li> <a href="#"><span class="fa fa-facebook"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-twitter"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-google-plus"></span></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="team-member col-md-3 col-sm-6 col-xs-12 mb-xs-30">
          <div class="inner-box">
            <div class="image-box"> <img src="{{ asset('imgs/gobichashmereEm2.jpg') }}" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Гадаад худалдааны газрын захирал </div>
                  <h4>Жимсээ</h4>
                </div>
                <!--Social Icon Two-->
                <ul class="social-icon-two">
                  <li> <a href="#"><span class="fa fa-facebook"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-twitter"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-google-plus"></span></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="team-member col-md-3 col-sm-6 col-xs-12 mb-xs-30">
          <div class="inner-box">
            <div class="image-box"> <img src="{{ asset('imgs/yama4.jpg') }}" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Дотоод худалдааны газрын захирал </div>
                  <h4>Тулга</h4>
                </div>
                <!--Social Icon Two-->
                <ul class="social-icon-two">
                  <li> <a href="#"><span class="fa fa-facebook"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-twitter"></span></a> </li>
                  <li> <a href="#"><span class="fa fa-google-plus"></span></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>--}}
<!--Our Team End --> 
		
<!--Our Clients-->
<section id="clients" class="padding ptb-xs-60">
  
    <div class="row text-center">
                  <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                     <div class="heading-box pb-15">
                        <h2>Our Clients</h2>
                        <span class="b-line"></span>
                     </div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                  </div>
               </div>
    <div class="row text-center">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="row">
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="{{ asset('imgs/logo-en.png') }}" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="{{ asset('imgs/logo-en.png') }}" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="{{ asset('imgs/logo-en.png') }}" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="{{ asset('imgs/logo-en.png') }}" alt=""> </div>
            </div>
          </div>
           <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="{{ asset('imgs/logo-en.png') }}" alt=""> </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
</section>
@endsection
@section('scripts')

@endsection