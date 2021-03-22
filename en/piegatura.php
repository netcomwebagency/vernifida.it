<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Sheet bending up to 12 meters in length | Verni & Fida',
	'meta_description' => 'Sheet metal bending up to 12 meters thanks to several different hydraulic press brakes equipped for cold bending',
	'og_image' => '',
	'page_slide' => 'slide-piegatura',
	'caption' => 'Bending of sheets<br/><span>of medium and large lengths</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Bending</h1>
	  <p>
			More than 50 years' experience in the field and the investment in the most advanced technologies have enabled the construction of an important sheet metal bending machine.<br/>
			Our company has several hydraulic folding presses, of which one semi-automatic, all specifically equipped for the <b>cold bending</b> of high-tensile materials, allowing the bending of <b>sheet metals up to 12 metres length</b>.
		</p>
		<p>
			In many years of activity Verni & Fida has gained much from its knowledge and experience in bending, by investing a significant capital in special equipment and unique machines in their field.<br/>
			This department, equipped with a considerable number of machines, from the smallest one of 2 metres and 150 tons to the largest one of 12 metres and 1600 tons, is now a leader in air bending, reaching an unconceivable quality only a few years ago.
	  </p>
	  <p class="my-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
	  <div class="row mt-5 mb-1">
	    <div class="slick-carousel">
	      <a href="/images/pop/piegatura-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/piegatura-1.jpg" alt="Sheet metal bending control"></a>
	      <a href="/images/pop/piegatura-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/piegatura-2.jpg" alt="Bent sheets"></a>
	      <a href="/images/pop/piegatura-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/piegatura-3.jpg" alt="Sheet metal bending"></a>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
