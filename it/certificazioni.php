<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Qualità e certificazioni | Verni & Fida',
	'meta_description' => 'La nostra azienda ha conseguito la certificazione ISO 9001 : 2015 per la lavorazione delle lamiere e lavori di carpenteria metallica',
	'og_image' => '',
	'page_slide' => 'slide-certificazioni',
	'caption' => 'Alti standard di qualità<br><span>Certificazione ISO 9001:2015</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Sinonimo di qualità</h1>
	  <div class="my-5">
	    <div class="float-md-left lightgallery px-5"><a href="/images/pop/certificazione-iso.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/certificazione-iso.jpg" alt="certificazione ISO 9001 : 2015" style="border:1px solid #CCC;"></a></div>
	    <div class="my-4">
	      <h2 class="subtitle">Certificazione ISO 9001:2015</h2>
	      <p>Verni & Fida ha conseguito la certificazione ISO 9001 : 2015, per la lavorazione lamiere e lavori di carpenteria metallica,  standard di riferimento internazionale riconosciuto per i sistemi di gestione per la qualità pubblicata dall’ISO.</p>
	      <p class="my-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	    </div>
	    <div class="clearfix"></div>
	  </div>
	</div>
	<div class="bg-custom py-5 text-center">
	  <div class="container">
	    <h2 class="title">Politica per la qualità</h2>
	    <h3 class="subtitle">Sistema di Gestione per la Qualità</h3>
	    <p class="mt-4"><a href="/pdf/politica-qualita.pdf" class="btn btn-lg btn-custom" target="_blank">Scopri</a></p>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
