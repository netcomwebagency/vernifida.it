<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Welding stations | Verni & Fida',
	'meta_description' => 'Verni & Fida has Tig and Mig / Mag welding systems, as well as welding robots for automatic processing',
	'og_image' => '',
	'page_slide' => 'slide-saldatura',
	'caption' => 'Mechanical carpentry<br/><span>Mig / Mag / Tig welding robot</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Welding</h1>
	  <p>
	    The company has also a well-equipped metallic carpentry department with MIG/MAG and TIG welding stations and welding robots to carry out automatic welding.
	  </p>
	  <p class="my-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
	  <div class="row mt-5 mb-1">
	    <div class="slick-carousel">
	      <a href="/images/pop/saldatura-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-1.jpg" alt="Man proceeding with welding"></a>
	      <a href="/images/pop/saldatura-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-2.jpg" alt="Welding in detail"></a>
	      <a href="/images/pop/saldatura-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-3.jpg" alt="Welding department"></a>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
