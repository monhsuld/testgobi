@extends('welcome')
@section('content')
<div class="page-header">
            <div class="container">
                <h1 class="title">БИДНИЙ ТУХАЙ</h1>
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
      <div class="col-sm-12 col-md-6 mb-sm-30">
        <figure> <img src="{{ asset('imgs/GobiaboutIMG.jpg') }}" alt=""> </figure>
      </div>
      <div class="col-sm-12 col-md-6 ">
        <div class="item">
          <div class="header-wrap mb-30">
            <h2 class="color">"Говь" ХК</h2>
            <!-- <h4>A little bit about me</h4> -->
          </div>
          <div>
            <p>Монголын ноос, ноолуурын салбарын анхдагч “Говь” үйлдвэр нь 1981 онд Япон улсын хөрөнгө оруулалттайгаар байгуулагдаж эдүгээ 30 гаруй жил тасралтгүй үйл ажиллагаагаа амжилттай явуулж байгаа үндэсний томоохон үйлдвэрлэгч юм. “Говь” ХК-ийн төрийн мэдлийн хувьцааг 2007 оны 7 сард “ЭФ СИ АЙ” ХХК Олон улсын нээлттэй дуудлага худалдаагаар худалдан авснаар “Говь” ХК өнөөг хүртэл хувийн хэвшлийн бүтэц зохион байгуулалт, менежменттэйгээр үйл ажиллагаагаа явуулж байна.</p>
            <p>Монгол ямааны 100% ноолуур болон тэмээний ноосыг ашиглан дэлхийн зэрэглэлийн хамгийн сүүлийн үеийн техник, технологиор үйлдвэрлэл явуулдаг “Говь” ХК нь үйлдвэрлэл, хүчин чадал, чанар, үйлчилгээ зэрэг бүх талын үзүүлэлтээрээ дэлхийн топ 5 ноолууран бүтээгдэхүүн үйлдвэрлэгчийн тоонд зүй ёсоор тооцогддог билээ. 1600 гаруй чадварлаг боловсон хүчнийг эгнээндээ нэгтгэсэн “Говь” ХК жилдээ 1100 тн түүхий ноос, ноолуур 30 тн бөмбөгөн ноос, ноолуур 210 тн самнасан ноолуур боловсруулах хүчин чадалтай ба түүхий эд бэлтгэхээс эхлээд бэлэн бүтээгдэхүүн үйлдвэрлэх хүртэлх бүхий л шатны үйлдвэрлэл, дамжлагыг 100% Монголдоо боловсруулдаг цорын ганц үйлдвэр юм.</p>
            <div class="our_skil">
            	 <h4 class="mt-30">Our Skill</h4>
              <ul class="skill_point">
                <li>
                	Web design
                  <div class="skill_label ">
                  	<span class="counter__style counter" data-count="70">0</span> 
                  	<span class="graph_line"></span> 
                  	</div>
                   </li>
                <li>
                	 User experience
                  <div class="skill_label ">
                  	<span class="counter__style counter" data-count="85">0</span> 
                  	<span class="graph_line"></span>
                  </div>
                  </li>
                <li>
                	Wordpress
                  <div class="skill_label">
                  	<span class="counter__style counter" data-count="80">0</span> 
                  	<span class="graph_line"></span>
                  </div>
                   </li>
                <li>
                	Jquery
                  <div class="skill_label">
                  	<span class="counter__style counter" data-count="95">0</span> 
                  	<span class="graph_line"></span>
                  </div>
                   </li>
                   <li>
                	PHP
                  <div class="skill_label ">
                  	<span class="counter__style counter" data-count="98">0</span> 
                  	<span class="graph_line"></span> 
                  	</div>
                   </li>
                <li>
                	JS
                  <div class="skill_label ">
                  	<span class="counter__style counter" data-count="90">0</span> 
                  	<span class="graph_line"></span>
                  </div>
                  </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End--> 
<!-- Feature Section -->
<div class="padding ptb-xs-60 dark_bg">
  <div class="container">
    <div class="col-sm-4 mb-xs-90">
      <div class="about__block ">
        <div class="about__block-box">
          <div class="service_icon"> <i class="hi-icon ion-ios-lightbulb-outline"></i> </div>
          <div class="service_details">
            <h3 class="color">Concept</h3>
          </div>
          <div class="service_content">
            <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been . Lorem Ipsum has been </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mb-xs-90">
      <div class="about__block ">
        <div class="about__block-box">
          <div class="service_icon"> <i class="hi-icon ion-ios-color-filter-outline"></i> </div>
          <div class="service_details">
            <h3 class="color">Design</h3>
          </div>
          <div class="service_content">
            <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been . Lorem Ipsum has been </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="about__block ">
        <div class="about__block-box">
          <div class="service_icon"> <i class="hi-icon ion-ios-speedometer-outline"></i> </div>
          <div class="service_details">
            <h3 class="color">Performance</h3>
          </div>
          <div class="service_content">
            <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been . Lorem Ipsum has been </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Feature Section End-->
<!--Our Team -->
<section id="team" class="padding ptb-xs-60 ">
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
</section>
<!--Our Team End --> 
    
 <!--Testimonial Section Start-->
		<section class="testimonial_wrapper__block padding">
		    
		    	<div class="row text-center">
                  <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                     <div class="heading-box pb-15">
                        <h2>Our Testimonial</h2>
                        <span class="b-line"></span>
                     </div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                  </div>
               </div>
		       
		        <div class="row">
		            <div class="col-md-12">
		                <div class="testimonial_carosule-wrap owl-carousel">
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>1976 Монголд анх удаа ямааны ноолуур, тэмээний ноос боловсруулах туршилтын үйлдвэр ашиглалтанд оров.<br> [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1976 <span></span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Улаанбаатар хотноо ямааны ноолуур, тэмээний ноос боловсруулах үйлдвэр байгуулах тухай Монгол-Японы Засгийн газрын хэлэлцээрийг байгуулав.</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1977<span></span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>“Говь” үйлдвэрийн барилгын шавыг тавив<br><br><br>[..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1978.08.25 <span></span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Үйлдвэрийн барилгын ажил бүрэн дуусав.<br><br><br>[..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1979-1980 <span></span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Инженер, техникийн ажилтнуудын Япон улсад 78 инженер техникийн ажилтнуудыг 3 сарын хугацаагаар суралцуулав.<br>[..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1979-1981 <span></span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Говь” үйлдвэр үүд хаалгаа анх нээв.<br><br><br>[..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1981.09.05 <span></span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Япон улсын дээд сургуульд анхны оюутан Р.Жигжид, П.Ганхуяг нар суралцав.<br><br>[..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1980-1985 <span></span></p>
		                            </div>
		                        </div>
		                    </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Компьютерийн автомат удирдлага бүхий Япон улсын SET-092 сүлжих машиныг үйлдвэрт суурилуулав.<br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1987-1989 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Биеийн тамирын заал, ажиллагсдын сувиллын газар, хүүхдийн цэцэрлэг,  152 айлын орон сууцыг ашиглалтанд оруулав.<br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1986-1992 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Говь комбинат улсын нийт чөлөөт валютын орлогын 70 хувийг дангаараа бүрдүүлж байв.<br><br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1989-1990 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Олон улсын стандарт ISO-9000 тэмдэгтийг үе шаттайгаар нэвтрүүлж, олон улсын чанарын цом болон гэрчилгээг Монгол улсаас анх удаа авсан.<br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1991 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Япон улсын Shima Seiki брэндийн компьютерийн удирдлагатай сүлжих машиныг суурилууллаа. ISO 9001  Чанарын удирдлагын тогтолцоог хэрэгжүүлж, №1 гэрчилгээг гардан авлаа.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1994 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Итали улсын технологи тоног төхөөрөмжөөр ээрмэл, нэхмэл, сүлжих үйлдвэрийн өргөтгөлийг хийж, 8.0 сая ам.долларын хөрөнгө оруулалт хийв.
Монгол улсад анх удаа олон улсын чанарын ISO-9001:2000 тэмдэгтийг нэвтрүүллээ.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1995-1996 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Монголд анх удаа ноос ноолууран өргөн хөнжил, ноолууран давуу, драп, нарийн номерын ээрмэл утас үйлдвэрлэх “Говь-2″ үйлдвэрийг ашиглалтанд хүлээн авав.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1997 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Гадаад зах зээлээ өргөжүүлэн 30 гаруй оронтой түншийн харилцаа тогтоож, АНУ-ын зах зээлд анх удаа 45,000 ширхэг бүтээгдэхүүн нийлүүлэв.<br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>1999 <span></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Утас будах технологи болон орчин үеийн компьютерийн системд холбогдсон сүлжих машинуудыг суурилуулав.
Будах үйлдвэрийн техник, технологидоо олон улсын чанарын ISO-1004 тэмдэгтийг нэвтрүүллээ.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2000 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Герман улсын Stoll үйлдвэрийн компьютерийн удирдлага бүхий сүлжих машинаар өргөтгөл хийв.<br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2004 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>“Говь” үйлдвэрийн төрийн мэдлийн хувьцааг Олон улсын нээлттэй дуудлага худалдаагаар “ЭФ СИ АЙ” ХХК худалдан авав.<br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2007 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Говь үйлдвэрийн дэргэдэх Төв дэлгүүрийн барилгын дизайныг Японы алдарт архитекторч Сайко Кейчиро шинээр хийж, дэлгүүр зургадугаар сард нээлтээ хийлээ.
Япон улсын Shima Seiki брэндийн өндөр хүчин чадал бүхий компьютерийн бүрэн удирдлагатай сүлжих SSG122SV маркийн машин, ээрэхийн үйлдвэрт Итали улсын Stalam болон 66-DD 14G Conti Complett брэндийн машинуудыг суурилуулан үйлдвэрлэлийн хүчин чадлаа өргөтгөв.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2008 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Японы Токио хотод өөрийн салбар дэлгүүрээ нээлээ. Италийн “VVA Consulting Company”-тай хамтран ажиллах гэрээг байгууллаа. Говь Үйлдвэрт техник, технологийн шинэчлэлтүүдийг үе шаттайгаар хийж, Итали, Япон, Швейцарийн тоног, төхөөрөмжүүд суурилууллаа.</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2009 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Монголын ноолуурын салбарт анх удаагаа Принт технологийг нэвтрүүлэн, ноолуур дээр зургийг барлан буулгадаг технологитой боллоо.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2010 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Тоног төхөөрөмжийн шинэтгэл, өргөтгөлд зориулж, 7,1 тэрбум төгрөгийн хөрөнгө оруулалт хийв. Монгол улсад 6 нэрийн барааны дэлгүүрийг шинээр нээв. Үйлдвэрлэлийн хүчин чадлаа 2 дахин нэмэгдүүлэн, шинээр 300-аад ажлын байрыг зарлалаа.</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2011 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Монгол ямааны ноолуурын үндсэн дөрвөн өнгийг цайруулж, будахгүйгээр байгалийн өнгөөр нь бэлэн бүтээгдэхүүн болгох Gobi-Mongolian Organic Cashmere брэндийг худалдаанд гаргалаа. Gobi by Saverio Palatella 2012 оны Намар, Өвлийн 100% ноолууран шинэ коллекцио гаргав.</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2012 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Сүлжих болон болон хялгас ялгах, самнах технологийг шинэчлэн, үйлдвэрлэлийн хэмжээнд нийт 5,3 тэрбум төгрөгийн хөрөнгө оруулалт хийв.
Сүлжмэлийн машины шинэ технологи болох Whole Garment буюу оёдолгүй сүлжмэл бүтээгдэхүүн сүлжих машинуудыг суурилуулав.
Gobi-Mongolian Organic Cashmere болон Хямдралын дэлгүүрийг шинээр нээв.
IFF-JFF БОЛОН Panorama, Фестиваль моды, Import Goods Fair зэрэг Япон, Герман, ОХУ, Солонгос, Хятад зэрэг улсуудад зохион байгуулагдсан олон улсын үзэсгэлэнд амжилтай оролцсон.
Европын сонгомол хээтэй Баракко загварын драпан оёмол бүтээгдэхүүнийг 5 төрлөөр үйлдвэрлэж, Шилдэг бүтээгдэхүүнээр шалгарав</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2013 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Бельгийн Брюссель болон Швейцарийн Женев хотод салбар дэлгүүрээ нээснээр, гадаад зах зээлд нийт 47 салбар дэлгүүртэй болов.
Будах үйлдвэрийг бүрэн автоматжуулж, ээрмэл утасны агуулахыг 2 дахин өргөтгөж, 50тн-ийн багтаамжтай болгов.
Нэхмэл болон  принтэт бүтээгдэхүүн үйлдвэрлэх хүчин чадлыг 2 дахин нэмэгдүүлэв.
Монголд анх удаа хамгийн нарийн утсаар ваксдаж нэхдэг технологийг нэвтрүүлэв
Сочи -2014 өвлийн олимпод оролцох баг тамирчдыг ивээн тэтгэлээ.</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2014 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Пальто, пиджакны үлгэр суулт, оёдлын болон материалын чанарыг цоо шинэ технологийн дэвшилд хүргэх зорилгоор Японы Lapine компанитай хамтран  хамтран ажиллаж байна.[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2015 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>Тансаг зэрэглэлийн YAMA брэндийг зах зээлд нэвтрүүллээ. <br><br><br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2016 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>2017 <br><br><br><br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2017 <span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel pt-40">
                            <div class="testimonial_text">
                              <p>2018 <br><br><br><br>[..]</p>
                            </div>
                            <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="" alt="">
                                        <p>2018 <span></span></p>
                                </div>
                            </div>
                        </div>
		                    
		                </div>
		            </div>
		        </div>
		</section>
		<!--Testimonial Section End-->
		
		   <!-- about-counter-area start -->
        <div class="about-counter-area pt-90 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                        <div class="single-counter mb-30">
                            <i class="fa fa-users"></i>
                            <h3 class="about-counter" data-count="200">0</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                        <div class="single-counter mb-30">
                            <i class="fa fa-trophy"></i>
                            <h3 class="about-counter" data-count="150">0</h3>
                            <p>Awards Won</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                        <div class="single-counter mb-30">
                            <i class="fa fa-thumbs-up"></i>
                            <h3 class="about-counter" data-count="100">0</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                        <div class="single-counter mb-30">
                            <i class="fa fa-coffee"></i>
                            <h3 class="about-counter" data-count="180">0</h3>
                            <p>Cups Coffee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-counter-area end -->
 <!--Pricing-->
		 <section class="page-section pricing-2 padding ptb-xs-60 columns_padding_25 pricing-style2 gray-bg" id="pricing_table2">
				<div class="container">
					<div class="row text-center">
                  <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 mb-30">
                     <div class="heading-box pb-15">
                        <h2>Our Pricing</h2>
                        <span class="b-line"></span>
                     </div>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                  </div>
               </div>
					
					<!-- row end -->
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12 mb-xs-30">
							<div class="pricing_table">
								<div class="package_title">
									<div class="pricing-top bg-color">
										<p>
											STARTER
										</p>
									</div>
									<div class="package-price">
										<span class="currency-symbol">$</span><span class="price">149</span><span class="duration">/month</span>
									</div>

								</div>
								<ul class="price_feature">
									<li>
										1 GB STORAGE
									</li>
									<li>
										3 DOMAIN NAMES
									</li>
									<li>
										5 FTP USERS
									</li>
									<li>
										FREE SUPPORT
									</li>
								</ul>
								<div class="price_btn">
									<a href="#!" class="btn xplus-btn pricing">Buy Now</a>
								</div>
							</div>
						</div>
						<!-- table end -->
						<div class="col-md-4 col-sm-6 col-xs-12 mb-xs-30">
							<div class="pricing_table shadow">
								<div class="package_title">
									<div class="pricing-top active">
										<p>
											ADVANCED
										</p>
									</div>
									<div class="package-price">
										<span class="currency-symbol">$</span><span class="price">249</span><span class="duration">/month</span>
									</div>

								</div>
								<ul class="price_feature">
									<li>
										1 GB STORAGE
									</li>
									<li>
										3 DOMAIN NAMES
									</li>
									<li>
										5 FTP USERS
									</li>
									<li>
										FREE SUPPORT
									</li>
								</ul>
								<div class="price_btn">
									<a href="#!" class="btn xplus-btn pricing active">Buy Now</a>
								</div>
							</div>
						</div>
						<!-- table end -->
						<div class="col-md-4 col-sm-6 col-xs-12 mt-sm-30">
							<div class="pricing_table">
								<div class="package_title">
									<div class="pricing-top bg-color">
										<p>
											BUSINESS
										</p>
									</div>
									<div class="package-price">
										<span class="currency-symbol">$</span><span class="price">299</span><span class="duration">/month</span>
									</div>

								</div>
								<ul class="price_feature">
									<li>
										1 GB STORAGE
									</li>
									<li>
										3 DOMAIN NAMES
									</li>
									<li>
										5 FTP USERS
									</li>
									<li>
										FREE SUPPORT
									</li>
								</ul>
								<div class="price_btn =">
									<a href="#!" class="btn xplus-btn pricing ">Buy Now</a>
								</div>
							</div>
						</div>

					</div>
					<!-- row end -->
				</div>
			</section>
		 <!--Pricing End-->
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