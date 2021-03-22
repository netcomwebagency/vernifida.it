<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Lavorazioni meccaniche di precisione | Verni & Fida',
	'meta_description' => 'L\'azienda è dotata di diverse macchine utensili in grado di eseguire lavorazioni meccaniche di precisione e fornire pezzi finiti pronti per il montaggio',
	'og_image' => '',
	'page_slide' => 'slide-lavorazioni-meccaniche',
	'caption' => 'Lavorazioni meccaniche<br/><span>un intero reparto dedicato alla precisione</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Lavorazioni meccaniche</h1>
	  <p>
	    Verni &amp; Fida dispone di un intero reparto interamente dedicato alle lavorazioni meccaniche di precisione, senza dover dipendere da fornitori esterni, riducendo così i tempi gestionali delle commesse.
	  </p>
	  <p>
	    È dotata di <b>diverse macchine utensili</b>:
		</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">1</div>
				<div class="lightgallery my-4"><a href="/images/pop/tornio.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/tornio.jpg" alt="Tornio"></a></div>
				<h3 class="subtitle">Torni</h3>
			</div>
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">2</div>
				<div class="lightgallery my-4"><a href="/images/pop/centri-lavoro.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/centri-lavoro.jpg" alt="Centri di lavoro"></a></div>
				<h3 class="subtitle">Centri di lavoro verticali ed orizzontali</h3>
			</div>
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">3</div>
				<div class="lightgallery my-4"><a href="/images/pop/frese-alesatrici.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/frese-alesatrici.jpg" alt="Frese alesatrici"></a></div>
				<h3 class="subtitle mb-3">Frese alesatrici a montante mobile con testa automatica birotativa</h3>
				per l'esecuzione di lavorazioni meccaniche di precisione per <b>lunghezze fino a 8 m.</b>
			</div>
		</div>

	</div>
	<div class="container text-center my-5">
		<h3 class="subtitle">Fornisce pezzi finiti per un montaggio preciso dei componenti e la successiva saldatura.</h3>
	  <p><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	</div>
	<!--
	<div class="container-fluid wow fadeInUp">
	  <div class="row mt-5 mb-1">
	    <div class="slick-carousel">
	      <div><a href="/images/pop/lavorazioni-meccaniche-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lavorazioni-meccaniche-1.jpg" alt="Macchina in azione"></a></div>
	      <div><a href="/images/pop/lavorazioni-meccaniche-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lavorazioni-meccaniche-2.jpg" alt="Esecuzione di lavorazione di precisione"></a></div>
	      <div><a href="/images/pop/lavorazioni-meccaniche-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lavorazioni-meccaniche-3.jpg" alt="Macchina per le lavorazioni di precisione"></a></div>
	    </div>
	  </div>
	</div>
	-->
</div>
<?php
getFullFooter($page);
?>
