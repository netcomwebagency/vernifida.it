<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Quality and certifications | Verni & Fida',
	'meta_description' => 'Our company has achieved ISO 9001: 2015 certification for sheet metal processing and metal carpentry work',
	'og_image' => '',
	'page_slide' => 'slide-certificazioni',
	'caption' => 'High quality standards<br/><span>ISO 9001: 2015 certification</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Synonymous of quality</h1>
	  <div class="my-5">
	    <div class="float-md-left lightgallery px-5"><a href="/images/pop/certificazione-iso.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/certificazione-iso.jpg" alt="Certifications ISO 9001 : 2015" style="border:1px solid #CCC;"></a></div>
	    <div class="my-4">
	      <h2 class="subtitle">Certifications ISO 9001:2015</h2>
	      <p>Verni & Fida achieved the certification ISO 9001: 2015 in the sheet metal processing and works of metallic carpentry, the recognised international reference standard for the quality management systems published by the ISO.</p>
	      <p class="my-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
	    </div>
	    <div class="clearfix"></div>
	  </div>
	</div>
	<div class="bg-custom py-5 text-center">
	  <div class="container">
	    <h2 class="title">Policy for Quality</h2>
	    <h3 class="subtitle">Quality Management System</h3>
	    <p class="mt-4"><a href="/pdf/politica-qualita.pdf" class="btn btn-lg btn-custom" target="_blank">Discover</a></p>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
