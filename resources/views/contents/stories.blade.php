@extends('welcome')
@section('styles')
<style type="text/css">
 @import url("https://fonts.googleapis.com/css?family=Cardo|Pathway+Gothic+One");
.timeline {
  display: flex;
  margin: 0 auto;
  flex-wrap: wrap;
  flex-direction: column;
  max-width: 700px;
  position: relative;
}
.timeline__content-title {
  font-weight: normal;
  font-size: 66px;
  margin: -10px 0 0 0;
  transition: .4s;
  padding: 0 10px;
  box-sizing: border-box;
  font-family: "Pathway Gothic One", sans-serif;
  color: #fff;
}
.timeline__content-desc {
  margin: 0;
  font-size: 15px;
  box-sizing: border-box;
  color: rgba(255, 255, 255, 0.7);
  font-family: Cardo;
  font-weight: normal;
  line-height: 25px;
}
.timeline:before {
  position: absolute;
  left: 50%;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  content: "";
  background: rgba(255, 255, 255, 0.07);
}
@media only screen and (max-width: 767px) {
  .timeline:before {
    left: 40px;
  }
}
.timeline-item {
  padding: 40px 0;
  opacity: .3;
  filter: blur(2px);
  transition: .5s;
  box-sizing: border-box;
  width: calc(50% - 40px);
  display: flex;
  position: relative;
  transform: translateY(-80px);
}
.timeline-item:before {
  content: attr(data-text);
  letter-spacing: 3px;
  width: 100%;
  position: absolute;
  color: rgba(255, 255, 255, 0.5);
  font-size: 13px;
  font-family: "Pathway Gothic One", sans-serif;
  border-left: 2px solid rgba(255, 255, 255, 0.5);
  top: 70%;
  margin-top: -5px;
  padding-left: 15px;
  opacity: 0;
  right: calc(-100% - 56px);
}
.timeline-item:nth-child(even) {
  align-self: flex-end;
}
.timeline-item:nth-child(even):before {
  right: auto;
  text-align: right;
  left: calc(-100% - 56px);
  padding-left: 0;
  border-left: none;
  border-right: 2px solid rgba(255, 255, 255, 0.5);
  padding-right: 15px;
}
.timeline-item--active {
  opacity: 1;
  transform: translateY(0);
  filter: blur(0px);
}
.timeline-item--active:before {
  top: 50%;
  transition: .3s all .2s;
  opacity: 1;
}
.timeline-item--active .timeline__content-title {
  margin: -50px 0 20px 0;
}
@media only screen and (max-width: 767px) {
  .timeline-item {
    align-self: baseline !important;
    width: 100%;
    padding: 0 30px 150px 80px;
  }
  .timeline-item:before {
    left: 10px !important;
    padding: 0 !important;
    top: 50px;
    text-align: center !important;
    width: 60px;
    border: none !important;
  }
  .timeline-item:last-child {
    padding-bottom: 40px;
  }
}
.timeline__img {
  max-width: 100%;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.4);
}
.timeline-container {
  width: 100%;
  position: relative;
  padding: 80px 0;
  transition: .3s ease 0s;
  background-attachment: fixed;
  background-size: cover;
}
.timeline-container:before {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(99, 99, 99, 0.8);
  content: "";
}
.timeline-header {
  width: 100%;
  text-align: center;
  margin-bottom: 80px;
  position: relative;
}
.timeline-header__title {
  color: #fff;
  font-size: 46px;
  font-family: Cardo;
  font-weight: normal;
  margin: 0;
}
.timeline-header__subtitle {
  color: rgba(255, 255, 255, 0.5);
  font-family: "Pathway Gothic One", sans-serif;
  font-size: 16px;
  letter-spacing: 5px;
  margin: 10px 0 0 0;
  font-weight: normal;
}

</style>
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
                            <a href="{{ url('/') }}">Нүүр</a>
                        </li>
                        <li> 
                          <a href="{{ url('about') }}">Бидний тухай</a>
                        </li>
                        <li class="active">Түүх</li>
                    </ul>
                </div>
            </div>
        </div>
  <div class="container">
    <!--Testimonial Section Start-->
    <section class="pt-90 pt-xs-60">
      <div class="row">
        <!-- Sidebar -->
          @include('contents.sidebar')
          <!-- End Sidebar -->

      <!-- timeline storys -->
   
<div class="col-md-10">
 <section class="testimonial_wrapper__block padding">
  <div class="timeline-container" id="timeline-1">
  <div class="timeline-header">
    <h2 class="timeline-header__title">Говь ХК</h2>
    <h3 class="timeline-header__subtitle">Бидний түүх</h3>
  </div>
  <div class="timeline">
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{asset('imgs/story/1979.jpg')}}"/>
        <h2 class="timeline__content-title">1976</h2>
        <p class="timeline__content-desc"> Монголд анх удаа ямааны ноолуур, тэмээний ноос боловсруулах туршилтын үйлдвэр ашиглалтанд оров.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/19811.jpg') }}"/>
        <h2 class="timeline__content-title">1977</h2>
        <p class="timeline__content-desc">Улаанбаатар хотноо ямааны ноолуур, тэмээний ноос боловсруулах үйлдвэр байгуулах тухай Монгол-Японы Засгийн газрын хэлэлцээрийг байгуулав.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/1981.jpg') }}"/>
        <h2 class="timeline__content-title">1978-1981</h2>
        <p class="timeline__content-desc">1978.08.25 “Говь” үйлдвэрийн барилгын шавыг тавив. Үйлдвэрийн барилгын ажил бүрэн дуусав. Инженер, техникийн ажилтнуудын Япон улсад 78 инженер техникийн ажилтнуудыг 3 сарын хугацаагаар суралцуулав.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img044.jpg') }}"/>
        <h2 class="timeline__content-title">1981.09.05</h2>
        <p class="timeline__content-desc">Говь” үйлдвэр үүд хаалгаа анх нээв.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img804.jpg') }}"/>
        <h2 class="timeline__content-title">1980-1985</h2>
        <p class="timeline__content-desc">Япон улсын дээд сургуульд анхны оюутан Р.Жигжид, П.Ганхуяг нар суралцав.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img845.jpg') }}"/>
        <h2 class="timeline__content-title">1987-1989</h2>
        <p class="timeline__content-desc">Компьютерийн автомат удирдлага бүхий Япон улсын SET-092 сүлжих машиныг үйлдвэрт суурилуулав.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img915.jpg') }}"/>
        <h2 class="timeline__content-title">1986-1992</h2>
        <p class="timeline__content-desc">Биеийн тамирын заал, ажиллагсдын сувиллын газар, хүүхдийн цэцэрлэг,  152 айлын орон сууцыг ашиглалтанд оруулав.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/1987aaaa.jpg') }}"/>
        <h2 class="timeline__content-title">1989-1990</h2>
        <p class="timeline__content-desc">
          Говь комбинат улсын нийт чөлөөт валютын орлогын 70 хувийг дангаараа бүрдүүлж байв.
        </p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img567.jpg') }}"/>
        <h2 class="timeline__content-title">1991-1994</h2>
        <p class="timeline__content-desc">1991 онд олон улсын стандарт ISO-9000 тэмдэгтийг үе шаттайгаар нэвтрүүлж, олон улсын чанарын цом болон гэрчилгээг Монгол улсаас анх удаа авсан. Япон улсын Shima Seiki брэндийн компьютерийн удирдлагатай сүлжих машиныг суурилууллаа. 1994 ISO 9001  Чанарын удирдлагын тогтолцоог хэрэгжүүлж, №1 гэрчилгээг гардан авлаа.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img461.jpg') }}"/>
        <h2 class="timeline__content-title">1995-1996</h2>
        <p class="timeline__content-desc">Итали улсын технологи тоног төхөөрөмжөөр ээрмэл, нэхмэл, сүлжих үйлдвэрийн өргөтгөлийг хийж, 8.0 сая ам.долларын хөрөнгө оруулалт хийв.
Монгол улсад анх удаа олон улсын чанарын ISO-9001:2000 тэмдэгтийг нэвтрүүллээ.</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img127.jpg') }}"/>
        <h2 class="timeline__content-title">1934</h2>
        <p class="timeline__content-desc">
          Монголд анх удаа ноос ноолууран өргөн хөнжил, ноолууран давуу, драп, нарийн номерын ээрмэл утас үйлдвэрлэх “Говь-2″ үйлдвэрийг ашиглалтанд хүлээн авав.
        </p>
      </div>
    </div>
    <div class="timeline-item" data-text="Зурагны тайлбар">
      <div class="timeline__content"><img class="timeline__img" src="{{ asset('imgs/story/img304.jpg') }}"/>
        <h2 class="timeline__content-title">1999</h2>
        <p class="timeline__content-desc">Гадаад зах зээлээ өргөжүүлэн 30 гаруй оронтой түншийн харилцаа тогтоож, АНУ-ын зах зээлд анх удаа 45,000 ширхэг бүтээгдэхүүн нийлүүлэв.</p>
      </div>
    </div>
  </div>
</div>
  </section>
</div>
          <!-- <div class="row text-center">
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
            </div> -->
    </div>
  </section>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
  (function($) {
  $.fn.timeline = function() {
    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img"
    };
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" +
        selectors.item
          .first()
          .find(selectors.img)
          .attr("src") +
        ")"
    );
    var itemLength = selectors.item.length;
    $(window).scroll(function() {
      var max, min;
      var pos = $(this).scrollTop();
      selectors.item.each(function(i) {
        min = $(this).offset().top;
        max = $(this).height() + $(this).offset().top;
        var that = $(this);
        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
          selectors.item.removeClass(selectors.activeClass);
          selectors.id.css(
            "background-image",
            "url(" +
              selectors.item
                .last()
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.last().addClass(selectors.activeClass);
        } else if (pos <= max - 40 && pos >= min) {
          selectors.id.css(
            "background-image",
            "url(" +
              $(this)
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          $(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

$("#timeline-1").timeline();

</script>

@endsection