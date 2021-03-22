<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Stazioni di saldatura | Verni & Fida',
	'meta_description' => 'Verni & Fida dispone di impianti di saldatura Tig e Mig/Mag, oltre a robot di saldatura per lavorazioni automatiche',
	'og_image' => '',
	'page_slide' => 'slide-saldatura',
	'caption' => 'Carpenteria meccanica<br/><span>Robot di saldatura Mig / Mag / Tig</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Saldatura</h1>
	  <p>
	    L’azienda è dotata anche di un reparto di carpenteria con stazioni di saldatura Mig/Mag e Tig e robot di saldatura per saldature in automatico.
	  </p>
	  <p class="my-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
	  <div class="row mt-5 mb-1">
	    <div class="slick-carousel">
	      <a href="/images/pop/saldatura-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-1.jpg" alt="Uomo che procede con la saldatura"></a>
	      <a href="/images/pop/saldatura-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-2.jpg" alt="Saldatura nel dettaglio"></a>
	      <a href="/images/pop/saldatura-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-3.jpg" alt="Reparto di saldatura"></a>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
