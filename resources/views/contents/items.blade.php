@extends('welcome')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cubeportfolio.css') }}">
@endsection
@section('content')
<div class="container">
	<section class="padding ptb-xs-40">
        <div class="col-lg-2 col-md-2 mt-sm-60">

            <div class="sidebar-widget" style="position: fixed;">
                <h5>Ангилал</h5>
                <hr>
                <ul>
                    <li><a href="{{ url('#')}}">Yama</a></li>
                     <li><a href="{{ url('#')}}">Gobi</a></li>
                     <li><a href="{{ url('#')}}">Organic</a></li>
                     <li><a href="{{ url('#')}}">Kids</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="cube-full-width">
                <div id="filters-container" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        Бүгд <div class="cbp-filter-counter"></div>
                    </div> /
                    <div data-filter=".coats" class="cbp-filter-item">
                        Загвар 1 <div class="cbp-filter-counter"></div>
                    </div> /
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Загвар 2 <div class="cbp-filter-counter"></div>
                    </div> /
                    <div data-filter=".graphic" class="cbp-filter-item">
                        Загвар 3 <div class="cbp-filter-counter"></div>
                    </div> /
                    <div data-filter=".logos" class="cbp-filter-item">
                        Загвар 4 <div class="cbp-filter-counter"></div>
                    </div> /
                    <div data-filter=".motion" class="cbp-filter-item">
                        Загвар 5 <div class="cbp-filter-counter"></div>
                    </div>
                </div>

                <div id="fullwidth-container" class="cbp">
                    <div class="cbp-item coats">
                        <a href="{{ url('items')}}" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                                <!-- <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(2).jpg')}}" alt=""> -->
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a href="assets/images/portfolio/img-2.jpg" class="cbp-caption cbp-lightbox" data-title="Client chat app WIP<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Client chat app WIP</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion coats">
                        <a href="assets/images/portfolio/img-3.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-2B(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item coats graphic">
                        <a href="assets/images/portfolio/img-4.jpg" class="cbp-caption cbp-lightbox" data-title="Website Lightbox<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-16CH01-50B(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Website Lightbox</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion logos">
                        <a href="assets/images/portfolio/img-5.jpg" class="cbp-caption cbp-lightbox" data-title="Skateshop Website<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Skateshop Website</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a href="assets/images/portfolio/img-6.jpg" class="cbp-caption cbp-lightbox" data-title="10 Navigation Bars<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">10 Navigation Bars</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item coats">
                        <a href="assets/images/portfolio/img-7.jpg" class="cbp-caption cbp-lightbox" data-title="To-Do Dashboard<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G11-15CH11-50(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">To-Do Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design">
                        <a href="assets/images/portfolio/img-8.jpg" class="cbp-caption cbp-lightbox" data-title="Events and  More<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Events and More</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a href="assets/images/portfolio/img-9.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">WhereTO App</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/images/portfolio/img-1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Bolt UI</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a href="assets/images/portfolio/img-2.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
                            <div id="cf" class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">iDevices</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item logos">
                        <a href="assets/images/portfolio/img-3.jpg" class="cbp-caption cbp-lightbox" data-title="Ski * Buddy<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Ski * Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic">
                        <a href="assets/images/portfolio/img-4.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item logos">
                        <a href="assets/images/portfolio/img-5.jpg" class="cbp-caption cbp-lightbox" data-title="Drag 2 Upload ~ Widget<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('imgs/products/coats/G1-15CH12-50-1BC(1).jpg')}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Drag 2 Upload ~ Widget</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div id="loadMore-container" class="cbp-l-loadMore-text">
                    <a href="ajax/loadMore-fullwidth.html" class="cbp-l-loadMore-link">
                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                    </a>
                </div>

            </div>
        </div>
        
</section>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cube-portfolio.js') }}" type="text/javascript"></script>
@endsection