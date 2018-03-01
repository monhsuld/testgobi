@extends('welcome')
@section('styles') 
<style type="text/css">
    .containerr {
  max-width: 800px;
  /*margin: auto;*/
  border: white solid 5px;
  background-color: white;
}

.panel-main img, .thumbs img {
  width: 75%;
  float: right;
}

.thumbs {
  display: grid;
  /*grid-template-columns: repeat(5, 1fr);*/
  grid-gap: 5px;
}
@keyframes 
fadeIn {  to {
 opacity: 1;
}
}

.fade-in {
  opacity: 0;
  animation: fadeIn 0.5s ease-in 1 forwards;
}
</style>
@endsection

@section('content')
<div class="container">
    <br>
    <div class="col-md-6">
        <div class="containerr">
          <div class="panel-main">
            <img src="{{ asset('imgs/01.jpg') }}" id="selected">
          </div>

          <div class="thumbs">
            <img src="{{ asset('imgs/01.jpg') }}">
            <img src="{{ asset('imgs/02.jpg') }}">
            <img src="{{ asset('imgs/03.jpg') }}">
          </div>
        </div>
    </div>
    <div class="col-md-6">
          <h2>ПАЛЬТО</h2>
          <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Тайлбар</a>
                </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
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
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Хэмжээ</a>
                </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
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
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Арчилгаа</a>
                </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
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
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
    



@endsection

@section('scripts')
<!-- We will use PrefixFree - a script that takes care of CSS3 vendor prefixes
You can download it from http://leaverou.github.com/prefixfree/ -->
<script type="text/javascript">
    const current = document.querySelector("#selected");
const thumbs = document.querySelectorAll(".thumbs img");
const opacity = 1;

// Set opacity of first image
thumbs[0].style.opacity = opacity;

thumbs.forEach(img => img.addEventListener("click", imgActivate));

function imgActivate(e) {
  // Reset opacity on all thumbs
  thumbs.forEach(img => (img.style.opacity = 0.5));

  // Change current image to source of clicked image
  current.src = e.target.src;

  // Add fadeIn class
  current.classList.add("fade-in");

  // Remove fadeIn class after animation time elapsed
  setTimeout(() => current.classList.remove("fade-in"), 500);

  // Change opacity to variable value
  e.target.style.opacity = opacity;
}
</script>
@endsection