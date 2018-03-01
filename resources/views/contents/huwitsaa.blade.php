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
       <p>Мэдээлэл ороогүй байна!</p>
     </div>
  </div>

</section>
@endsection
@section('scripts')

@endsection