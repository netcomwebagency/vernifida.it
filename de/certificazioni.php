<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Qualität und Zertifizierungen | Verni & Fida',
	'meta_description' => 'Unser Unternehmen hat die ISO 9001: 2015-Zertifizierung für Blechbearbeitung und Metallschreinerei erhalten',
	'og_image' => '',
	'page_slide' => 'slide-certificazioni',
	'caption' => 'Hohe Qualitätsstandards<br><span>ISO 9001: 2015 Zertifizierung</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Garant für Qualität</h1>
	  <div class="my-5">
	    <div class="float-md-left lightgallery px-5"><a href="/images/pop/certificazione-iso.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/certificazione-iso.jpg" alt="Zertifizierungen ISO 9001 : 2015" style="border:1px solid #CCC;"></a></div>
	    <div class="my-4">
	      <h2 class="subtitle">Zertifizierungen ISO 9001:2015</h2>
	      <p>Was di Blechbearbeitung und Metallbauverarbeitungen angeht, hat Verni & Fida die ISO 9001: 2015 Zertifizierung erlangt, den anerkannten internationalen Referenzstandard für die Qualitätsmanagementsysteme, der von der ISO-Norm veröffentlicht ist.</p>
	      <p class="my-5"><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	    </div>
	    <div class="clearfix"></div>
	  </div>
	</div>
	<div class="bg-custom py-5 text-center">
	  <div class="container">
	    <h2 class="title">Qualitätspolitik</h2>
	    <h3 class="subtitle">Qualitätsmanagementsystem</h3>
	    <p class="mt-4"><a href="/pdf/politica-qualita.pdf" class="btn btn-lg btn-custom" target="_blank">Entdecken Sie</a></p>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
