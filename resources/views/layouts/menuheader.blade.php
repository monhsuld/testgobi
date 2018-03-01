<!-- START HOMEPAGE DESIGN AREA -->
<header class="welcome-area__inner">
  <div class="header-top-area menu-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-3"> 
          <!-- START LOGO DESIGN AREA -->
          <div class="logo"> <a href="{{ url('/')}}"><img src="{{ asset('imgs/gobilogo.png') }}" height="50"></a> </div>
          <!-- END LOGO DESIGN AREA --> 
        </div>
        <div class="col-sm-9"> 
          <!-- START MENU DESIGN AREA -->
          <div class="mainmenu">
            <div class="navbar navbar-nobg">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li style="background-color: #F6DDCC"><a href="#">Gobi now</a></li>
                  <!-- <li class="dropdown "><a href="#">Брэнд <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      <li class="dropdown-submenu"> <a tabindex="-1" href="#">Yama <i class="fa fa-angle-right"></i></a>
                        <ul class="sub-menu">
                          <li><a href=""> Juicy Projects</a></li>
                          <li><a href=""> Full Width</a></li>
                          <li><a href=""> Masonry</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"> <a tabindex="-1" href="#">Gobi <i class="fa fa-angle-right"></i></a>
                        <ul class="sub-menu">
                          <li><a href=""> 2 Columns</a></li>
                          <li><a href=""> 3 Columns</a></li>
                          <li><a href=""> 4 Columns</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"> <a tabindex="-1" href="#">Organic <i class="fa fa-angle-right"></i></a>
                        <ul class="sub-menu">
                          <li><a href="">2 Columns</a></li>
                          <li><a href="">3 Columns</a></li>
                          <li><a href="">4 Columns</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"> <a tabindex="-1" href="#">Kids <i class="fa fa-angle-right"></i></a>
                        <ul class="sub-menu">
                          <li><a href="">2 columns</a></li>
                          <li><a href="">3 columns</a></li>
                          <li><a href="">4 columns</a></li>
                          <li><a href="">5 columns</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu"> <a tabindex="-1" href="#">Home <i class="fa fa-angle-right"></i></a>
                        <ul class="sub-menu">
                          <li><a href=""> 2 Columns</a></li>
                          <li><a href=""> 3 Columns</a></li>
                          <li><a href=""> 4 Columns</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li> -->
                  <li><a href="#!">Эрэгтэй <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      @foreach($male as $man)
                      <li><a href="{{ url('products') }}">{{ $man->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li><a href="#!">Эмэгтэй <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      @foreach($fmale as $woman)
                      <li><a href="{{ url('products') }}">{{ $woman->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li><a href="#!">Гэр ахуй <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      @foreach($home as $ger)
                      <li><a href="{{ url('products') }}">{{ $ger->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li><a href="#!">АКСЕССУАР <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      @foreach($acc as $ac)
                      <li><a href="{{ url('products') }}">{{ $ac->name }}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li><a href="{{ url('magazine') }}">Говь сэтгүүл</a></li>
                  <!-- <li><a href="#!" id="click">Follow</a></li> -->
                  <!-- <li><a href="#!">Үйлчилгээ <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                      <li><a href="">Хувь захиалга</a></li>
                      <li><a href="">Принтинг</a> </li>
                      <li><a href="">Хими цэвэрлэгээ</a></li>
                      <li><a href="">Нөхөн засвар</a></li>
                    </ul>
                  </li> -->
                  <!-- <li><a href="{{ url('contact') }}">Холбоо барих</a> </li> -->
                </ul>
              </div>
            </div>
          </div>
          <!-- END MENU DESIGN AREA --> 
        </div>
      </div>
    </div>
  </div>

</header>
<!-- / END HOMEPAGE DESIGN AREA --> 