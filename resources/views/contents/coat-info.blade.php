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
     <div class="col-md-10">
  <h2>Ноолуурын тухай</h2>
  <p>Бидний санал болгож буй бүтээгдэхүүний түүхий эдийн талаар...</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">ЦАГААН НООЛУУР</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
      <p>Цагаан өнгө нийт Монгол ямааны 20 хүртэлх хувийг эзэлдэг ажээ. Тэдний ихэнх нь Монголын өмнөд бүс болох Өмнөговь, Баянхонгор, Говь-Алтай аймгуудад байдаг. Монголын говьд эрс тэс уур амьсгал ноёрхдог бөгөөд өвөл -40oC, хэм хүрч зун +50oC хэм хүртэл халдаг байна. “Говь” ХК онцгойлон Баянхонгор аймгийн Шинэжинст сумаас цагаан ноолуурыг авдаг.</p>
      <img src="{{ asset('imgs/white.jpg') }}">
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">БОР НООЛУУР</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Монголын баруун хэсгээр Алтайн нуруунд оршдог. Баян-Өлгий, Ховд, Завхан, Хөвсгөл аймгууд бор өнгийн ноолуурыг гаргадаг хар зүсмийн ямааны нутаг юм. Алтай Хангайн бүс далайгаас 2,000 – 4,000м өндөрлөгт оршдог бөгөөд асар хүйтэн болдог. Гэвч үслэг зөөлөн ноолуур энэ тэсгэм хүйтэн өвлөөр ч ямааг хүйтнээс бүрэн хамгаалж байдаг юм. Жил бүрийн 3-р сард “Говь” ХК Хөвсгөл аймгийн Төмөрбулаг сумаар айлчилж, бор өнгийн ноолуурыг шилэн авдаг билээ.
          <img src="{{ asset('imgs/brown.jpg') }}">
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ХӨХ СААРАЛ НООЛУУР</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Дэлхийн хамгийн ховор ноолуурын өнгө бол хөх саарал. Хөх саарал өнгийн ямаа зөвхөн Монголд байдаг бөгөөд Монгол ямааны ердөө 2 хувийг эзэлдэг. Энэ нь дэлхий дээрх 2,000 ямаа тутмын нэг л хөх саарал өнгөтэй байдаг гэсэн үг юм. “Говь” ХК-ийн байгалийн хамгийн ховор бөгөөд онцгой ноолуурыг үйлчлүүлэгчиддээ түгээх зорилго, энэхүү содон ноолуурыг хайж олоход хүргэсэн билээ. Хөх саарал өнгийн энэ ноолуурыг зөвхөн “Говь” ХК боловсруулан, бүтээгдэхүүн болгон үйлдвэрлэдэг бөгөөд Ховд аймгаас тусгайлан хөх саарал өнгийн ноолуурыг авдаг.
        <img src="{{ asset('imgs/grey.jpg') }}">
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">ЦАЙВАР ШАРГАЛ НООЛУУР</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Цайвар шаргал өнгө хамгийн элбэг байдаг. Монголын ямааны бараг 60 хувийг эзлэх энэ өнгө мөн бүх аймгаар тархсан байдаг. Дулаан, тансаг харагдах цайвар шаргал өнгө органик ноолуурын хамгийн тохиромжтой төлөөлөл юм. Хэнтий аймгийн Галшар сумын малчидтай “Говь” ХК тусгайлан харилцан ажиллаж, цайвар шаргал ноолуурыг боловсруулдаг байна.
        <img src="{{ asset('imgs/beige.jpg') }}">
      </div>
      </div>
    </div>
  </div> 
     </div>
  </div>

</section>
@endsection
@section('scripts')

@endsection