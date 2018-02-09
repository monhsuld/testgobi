@extends('welcome')
@section('styles') 
    <link rel="stylesheet" type="text/css" href="{{asset('css/pro1.css') }}" media="all">
    <script type="text/javascript" async="" src="{{asset('js/pro1.js') }}"></script>
    <script type="text/javascript" async="" src="{{asset('js/pro2.js') }}"></script>
    
    
   
    
   
    <script>
        // create SKYWIRE namespace if not already defined
        var SKYWIRE = SKYWIRE || {};
        // Define core config vars
        SKYWIRE.config = {
             simulate_touch      : false, // Use true to easily test Swiper on desktop
             break_small_upto    : '640px',
             break_medium_and_up : '641px',
             break_large_and_up  : '1025px'
        };
    </script>
@endsection

@section('content')
<div class="wrapper">
<div id="container" style="padding-top: 134px;">
    <div id="content">
    	
                    
        <div id="messages_product_view"></div>
            <div class="product-view" itemscope="" itemtype="http://schema.org/Product" itemid="#product_base">
                <div class="product-essential grid-12 parent">

                    <div class="no-display">
                        <input type="hidden" name="product" value="36936">
                        <input type="hidden" name="related_product" id="related-products-field" value="">
                    </div>
                  
                    <div class="product-media grid-7on10 no-margin grid-mobile-12">
                        <!--|CashmereMensPigmentBomberStyleCardigan|-->
                        <div class="product-media__image-wrapper">

    
                            <div class="swiper-container swiper-container-horizontal">

                                <div class="swiper-wrapper" style="cursor:pointer; ">

                
                                    <div class="swiper-slide product-swiper-slide--selected swiper-slide-active" style="width: 1002px;">


                                        <img class="product-media__default-img" sizes="(min-width: 46.25em) 71VW,
                                        100vw" src="{{ asset('imgs/01.jpg') }}" srcset="
                                        {{ asset('imgs/01.jpg') }} 120w,
                                        {{ asset('imgs/01.jpg') }} 240w,
                                        {{ asset('imgs/01.jpg') }} 480w,
                                        {{ asset('imgs/01.jpg') }} 768w,
                                        {{ asset('imgs/01.jpg') }} 1200w,
                                        {{ asset('imgs/01.jpg') }} 2400w" alt="Cashmere Mens Pigment Bomber Style Cardigan In Navy" title="Cashmere Mens Pigment Bomber Style Cardigan In Pigment">

                                    </div>

                    
                                    <div class="swiper-slide swiper-slide-next" style="width: 1002px;">


                                        <img class="product-media__default-img" sizes="(min-width: 46.25em) 71VW,
                                        100vw" src="{{ asset('imgs/02.jpg') }}" srcset="
                                        {{ asset('imgs/02.jpg') }} 120w,
                                        {{ asset('imgs/02.jpg') }} 240w,
                                        {{ asset('imgs/02.jpg') }} 480w,
                                        {{ asset('imgs/02.jpg') }} 768w,
                                        {{ asset('imgs/02.jpg') }} 1200w,
                                        {{ asset('imgs/02.jpg') }} 2400w" alt="Cashmere Mens Pigment Bomber Style Cardigan In Navy" title="Cashmere Mens Pigment Bomber Style Cardigan In Pigment">

                                    </div>

                    
                                    <div class="swiper-slide" style="width: 1002px;">


                                        <img class="product-media__default-img" sizes="(min-width: 46.25em) 71VW,
                                        100vw" src="{{ asset('imgs/03.jpg') }}" srcset="
                                        {{ asset('imgs/03.jpg') }} 120w,
                                        {{ asset('imgs/03.jpg') }} 240w,
                                        {{ asset('imgs/03.jpg') }} 480w,
                                        {{ asset('imgs/03.jpg') }} 768w,
                                        {{ asset('imgs/03.jpg') }} 1200w,
                                        {{ asset('imgs/03.jpg') }} 2400w" alt="Cashmere Mens Pigment Bomber Style Cardigan In Navy" title="Cashmere Mens Pigment Bomber Style Cardigan In Pigment">

                                    </div>
                    
                                </div>

                            </div>
    
                        </div>


                        <div class="product-media__zoom-image-wrapper">

                            <img class="product-media__zoom-img" id="image" src="{{ asset('imgs/01.jpg') }}" data-sml-image="{{ asset('imgs/01.jpg') }}" data-med-image="{{ asset('imgs/01.jpg') }}" data-lrg-image="{{ asset('imgs/01.jpg') }}" alt="">

                            <div class="product-media__zoom-image-wrapper-desc">
                                <div class="product-media__gallery product-media__gallery--zoomed" style="height: 1503px;">
                                    <div class="product-media__back" onclick="history.back();">Back</div>
                                    <div class="product-media__close">Close</div>
                                    <div>
                                        <div class="product-media__item  product-media__item--selected">

                                            <img class="product-media__thumb " sizes="(min-width: 46.25em) 13vw,
                                                    15vw" src="{{ asset('imgs/01.jpg') }}" srcset="{{ asset('imgs/01.jpg') }} 120w,
                                                    {{ asset('imgs/01.jpg') }} 240w,
                                                    {{ asset('imgs/01.jpg') }} 480w,
                                                    {{ asset('imgs/01.jpg') }} 768w,
                                                    {{ asset('imgs/01.jpg') }} 1200w,
                                                    {{ asset('imgs/01.jpg') }} 2400w" data-sml-image="{{ asset('imgs/01.jpg') }}" data-med-image="{{ asset('imgs/01.jpg') }}" data-lrg-image="{{ asset('imgs/01.jpg') }}{{ asset('imgs/01.jpg') }}edia__item ">

                                            

                                        </div>
                                        <div class="product-media__item ">

                                            <img class="product-media__thumb " sizes="(min-width: 46.25em) 13vw,
                                                            15vw" src="{{ asset('imgs/02.jpg') }}" srcset="{{ asset('imgs/02.jpg') }} 120w,
                                                            {{ asset('imgs/02.jpg') }} 240w,
                                                            {{ asset('imgs/02.jpg') }} 480w,
                                                            {{ asset('imgs/02.jpg') }} 768w,
                                                            {{ asset('imgs/02.jpg') }} 1200w,
                                                            {{ asset('imgs/02.jpg') }} 2400w" data-sml-image="{{ asset('imgs/02.jpg') }}" data-med-image="{{ asset('imgs/02.jpg') }}" data-lrg-image="{{ asset('imgs/02.jpg') }}" alt="Color: " title="Color: ">

                                        </div>
                                        <div class="product-media__item ">

                                            <img class="product-media__thumb " sizes="(min-width: 46.25em) 13vw,
                                                            15vw" src="{{ asset('imgs/03.jpg') }}" srcset="{{ asset('imgs/03.jpg') }} 120w,
                                                            {{ asset('imgs/03.jpg') }} 240w,
                                                            {{ asset('imgs/03.jpg') }} 480w,
                                                            {{ asset('imgs/03.jpg') }} 768w,
                                                            {{ asset('imgs/03.jpg') }} 1200w,
                                                            {{ asset('imgs/03.jpg') }} 2400w" data-sml-image="{{ asset('imgs/03.jpg') }}" data-med-image="{{ asset('imgs/03.jpg') }}" data-lrg-image="{{ asset('imgs/03.jpg') }}" alt="Color: " title="Color: ">

                                        </div>>
                                    </div>
                                </div>
                                <div class="product-media__zoom-title"></div>
                                    <div class="product-media__zoom-subtitle"></div>
                                </div>

                        </div>

                        <div class="product-media__gallery js-product-media__gallery" style="height: 1503px;">
                            <div class="product-media__back" onclick="history.back();">Back</div>
                            <div class="product-media__close">Close</div>

                            <div>
                                <div class="product-media__item  product-media__item--selected">

                                    <img class="product-media__thumb " sizes="(min-width: 46.25em) 13vw,
                                                            15vw" src="{{ asset('imgs/01.jpg') }}" srcset="{{ asset('imgs/01.jpg') }} 120w,
                                                            {{ asset('imgs/01.jpg') }} 240w,
                                                            {{ asset('imgs/01.jpg') }} 480w,
                                                            {{ asset('imgs/01.jpg') }} 768w,
                                                            {{ asset('imgs/01.jpg') }} 1200w,
                                                            {{ asset('imgs/01.jpg') }} 2400w" data-sml-image="{{ asset('imgs/01.jpg') }}" data-med-image="{{ asset('imgs/01.jpg') }}" data-lrg-image="{{ asset('imgs/01.jpg') }}" alt="Color: " title="Color: ">
                                </div>
                                <div class="product-media__item ">

                                    <img class="product-media__thumb " sizes="(min-width: 46.25em) 13vw,
                                                            15vw" src="{{ asset('imgs/02.jpg') }}" srcset="{{ asset('imgs/02.jpg') }} 120w,
                                                            {{ asset('imgs/02.jpg') }} 240w,
                                                            {{ asset('imgs/02.jpg') }} 480w,
                                                            {{ asset('imgs/02.jpg') }} 768w,
                                                            {{ asset('imgs/02.jpg') }} 1200w,
                                                            {{ asset('imgs/02.jpg') }} 2400w" data-sml-image="{{ asset('imgs/02.jpg') }}" data-med-image="{{ asset('imgs/02.jpg') }}" data-lrg-image="{{ asset('imgs/02.jpg') }}" alt="Color: " title="Color: ">
                                </div>
                                <div class="product-media__item ">

                                    <img class="product-media__thumb " sizes="(min-width: 46.25em) 13vw,
                                                            15vw" src="{{ asset('imgs/03.jpg') }}" srcset="{{ asset('imgs/03.jpg') }} 120w,
                                                            {{ asset('imgs/03.jpg') }} 240w,
                                                            {{ asset('imgs/03.jpg') }} 480w,
                                                            {{ asset('imgs/03.jpg') }} 768w,
                                                            {{ asset('imgs/03.jpg') }} 1200w,
                                                            {{ asset('imgs/03.jpg') }} 2400w" data-sml-image="{{ asset('imgs/03.jpg') }}" data-med-image="{{ asset('imgs/03.jpg') }}" data-lrg-image="{{ asset('imgs/03.jpg') }}" alt="Color: " title="Color: ">

                                </div>
                            </div>
                        </div>
			
                    </div>
                    <div class="product-shop grid-3on10 grid-no-rpadding grid-mobile-12">
                        <div class="product-name desktop show-tablet">
                            <h1 itemprop="name">Cashmere Mens Pigment Bomber Style Cardigan</h1>
            	            	            
                            <p class="availability in-stock">Availability: <span>In stock</span></p>
                  
                            <div class="price-box">
                                                                        
                                <!-- <p class="old-price">
                                    <span class="price-label"></span>
                                    <span class="price" id="old-price-36936">
                                        ₮1,753,870                    </span>
                                </p> --> 

                                            <!-- change special price style for gift sets -->
                                <!-- <p class="special-price">
                                    <span class="price-label"></span>
                                    <span class="price" id="product-price-36936">
                                        ₮1,160,406                    </span>
                                </p> -->
                                                        
                    
                            </div>

                	            
							<div class="current-offer"></div>
                        </div>

                        
                        <div id="productsku" class="sku">Барааны код : 
                            <div id="sku-code">64331 PIGMENT</div>
                        </div>
                            <div class="product-collateral">
                                <div class="tabs">
                                    <dl class="js-accordion accordion">
                                        <dt class="accordion__heading accordion-item-heading icon-right reopen accordion__heading--is-opened">Тайлбар</dt>
                                        <dd class="accordion__content accordion-item-content" style="display: block;">
                                            <p>Mens Cashmere Bomber Style Cardigan in a deep shade of blue - made in Scotland by Johnstons of Elgin.</p>
                                            <p>The bomber cardigan is made from 100% cashmere, soft, luxurious and effortlessly stylish.</p>
                                            <p>100% Cashmere</p>
                                            <p>4 ply</p>
                                            <p>Set-in sleeve, shaped shoulder</p>
                                            <p>Jacket Detail &amp; Pockets</p>
                                            <p>Double Rib Trims</p>
                                            <p>Size: XS S M L XL XXL</p>
                                            <p>Length: 69cm / 27"</p>
                                            <p>Model is 6ft1" / UK40 and wears size S</p>
                                            <p><a class="”prod-page-desc-link”" href="#">Hand Wash</a></p>    
                                        </dd>
                                        <dt class="accordion__heading icon-right accordion__heading--is-closed">Хэмжээ</dt>
                                        <dd class="accordion__content" style="display: none;">
                                            <div id="sizeguidetable">
                                                <tr>
                                                    <td>36''</td>
                                                    <td>38''</td>
                                                    <td>40''</td>
                                                    <td>42''</td>
                                                    <td>44''</td>
                                                    <td>46''</td>
                                                    <td>48''</td>
                                                    <td>50''</td>
                                                    <td>52''</td>
                                                </tr>
                                                <tr>
                                                    <td>XS</td>
                                                    <td>S</td>
                                                    <td></td>
                                                    <td>M</td>
                                                    <td></td>
                                                    <td>L</td>
                                                    <td>XL</td>
                                                    <td>XXL</td>
                                                    <td></td>
                                                </tr>
                                            </div>
                                            <p><span id="nosize"></span>
                                                <br>
                                                Please note measurements are in inches, and can vary slightly from garment to garment due to our hand finishing processes.
                                                <br>
                                                <br>
                                                If you require any further information, contact <a href="#">www.gobi.mn</a>
                                            </p>
                                        </dd>
                                        <dt class="accordion__heading icon-right accordion__heading--is-closed">Арчилгаа</dt>
                                        <dd class="accordion__content care-content" style="display: none;">
                                            <h4>Look after your fabric</h4>
                                            <h4>Lavish a little love on your favourite things</h4>
                                            <p>It only takes a little extra care to make sure your Johnstons of Elgin cashmere keeps its trademark softness for many, many years to come.</p>
                                            <p>&nbsp;</p>
                                            <h4>Wearing your cashmere for the first time</h4>
                                            <p>
                                                When you first wear your new garment you may find small balls of fibre or 'pills' forming on the surface. These are not a fault or indication of inferior quality but are simply loose fibres tangling together where the garment has been rubbing. They can easily be removed by hand or with our <a title="Cashmere De-pilling Comb" href="#">cashmere de-pilling comb</a>. Once removed, your garment will actually consolidate and become softer. You can browse our full collection of care products <a title="Cashmere Care" href="#">here</a>.
                                            </p>
                                            <p>&nbsp;</p>
                                            <h4>Handwashing and dry-cleaning</h4>
                                            <p>
                                                Cashmere knitwear can be hand washed or dry-cleaned. We recommend hand washing your knitwear following these simple guidelines and dry cleaning woven items such as scarves or blankets.
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                Hand wash in lukewarm water (35°C) using Johnstons Cashmere Shampoo. Gently squeeze the suds through the fabric, taking care not to rub the garment too much as this may cause shrinkage and increase pilling. Rinse the garment in cool clean water, squeezing gently without twisting or wringing. A short light spin in a spin dryer will help remove most of the water.
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                Smooth the garment back into shape, gently coaxing any facings or trims back to the correct size, and dry naturally away from direct heat such as radiators and sunlight. Ideally the garment should be dried flat on a clean towel. When dry, press lightly with a cool iron.
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                Under no circumstances should the garment be tumble-dried.
                                            </p>
                                            <p>&nbsp;</p>
                                            <p>
                                                Following these instructions, your garment will preserve its shape and luxurious touch for many years - the hallmarks of the very best cashmere.
                                            </p>    
                                        </dd>
                                        <dt class="accordion__heading icon-right accordion__heading--is-closed">Хүргэлт</dt>
                                        <dd class="accordion__content shipping-content" style="display: none;">
                                            <h2>Last order dates for delivery before 25th December 2017</h2>
                                            <p>
                                                UK: Wednesday 20th December 2017 (19th if ordering Embroidered products)<br>
                                                Europe: Wednesday 20th December 2017 (19th if ordering Embroidered products)<br>
                                                ROW: Monday 18th December 2017 (17th if ordering Embroidered products)
                                            </p>

                                             
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
        </div>
				
		
	
    </div>
        <!-- Hotjar Tracking Code for http://www.johnstonscashmere.com/ -->
            
</div>

@endsection

@section('scripts')


<script type="text/javascript" src="{{asset('js/pro6.js') }}" async=""></script>    


  

<script type="text/javascript" src="{{asset('js/pro7.js') }}"></script>
@endsection