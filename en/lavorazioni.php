<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Processing on sheets of different sizes and qualities | Verni & Fida',
	'meta_description' => 'Processing cycle of sheet metal of all types of steel with laser, fiber, plasma and oxyacetylene cutting, and then moving on to subsequent works',
	'og_image' => '',
	'page_slide' => 'slide-lavorazioni',
	'caption' => 'Cutting and bending<br/><span>of large sheets and all thicknesses</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Machining</h1>
	  <p>
			Verni & Fida deals with processing of large size sheet metal and any type of steel, special and high-resistance steel.<br/>
			The production cycle starts from the raw material, in form of sheet metal of various sizes and thicknesses, and through the laser, fibre, plasma or oxy-acetylene cutting, shaped profiles are obtained which are then sent to successive workstations, when required, manly chamfering to prepare the edges for welding and cold bending.<br/>
			If necessary there is also a sand blasting facility available for sheet metal wide till 3 metres.
	  </p>
	  <p class="my-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
    <div class="row mt-5 mb-1">
      <div class="slick-carousel">
    		<a href="/images/pop/dettaglio-prodotto.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/dettaglio-prodotto.jpg" alt="Detail of one of our creations"></a>
        <a href="/images/pop/prodotto-lavorato.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/prodotto-lavorato.jpg" alt="Machined steel"></a>
        <a href="/images/pop/prodotto-assemblato.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/prodotto-assemblato.jpg" alt="Product composed of various parts joined together"></a>
      </div>
    </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
