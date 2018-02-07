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
            <div class="image-box"> <img src="assets/images/team/team1.jpg" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Sales Manager </div>
                  <h4>Tommy Wood</h4>
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
            <div class="image-box"> <img src="assets/images/team/team2.jpg" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Senior Desig </div>
                  <h4>Danny Burton</h4>
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
            <div class="image-box"> <img src="assets/images/team/team3.jpg" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> UX Specialist </div>
                  <h4>Melody Clark</h4>
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
            <div class="image-box"> <img src="assets/images/team/team4.jpg" alt=""> 
              <!--Overlay Box-->
              <div class="overlay-box"> 
                <!--User Info-->
                <div class="user-info">
                  <div class="text"> Art Director </div>
                  <h4>Elizabeth Jones</h4>
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
		    <div class="container">
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
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="single_carousel pt-40">
		                        <div class="testimonial_text">
		                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod [..]</p>
		                        </div>
		                        <div class="author_img__block">
                                    <div class="author_tablecell__block">
                                        <img src="assets/images/author.jpg" alt="">
                                        <p>John Doe <span>CEO</span></p>
		                            </div>
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
  <div class="container">
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
              <div class="client__logo-img"> <img src="assets/images/client-logo/1.png" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="assets/images/client-logo/2.png" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="assets/images/client-logo/3.png" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="assets/images/client-logo/4.png" alt=""> </div>
            </div>
          </div>
           <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="assets/images/client-logo/1.png" alt=""> </div>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="client__logo">
              <div class="client__logo-img"> <img src="assets/images/client-logo/2.png" alt=""> </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
@endsection