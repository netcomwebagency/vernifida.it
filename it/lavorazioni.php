<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Lavorazioni su lamiere di diversi formati e qualità | Verni & Fida',
	'meta_description' => 'Ciclo di lavorazione delle lamiere di ogni tipo di acciaio con taglio laser, fibra, plasma e ossiacetilenico, per poi passare ai lavori successivi',
	'og_image' => '',
	'page_slide' => 'slide-lavorazioni',
	'caption' => 'Taglio e piegatura<br/><span>lamiere di grandi dimensioni e tutti gli spessori</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Lavorazioni</h1>
	  <p>
	    Verni &amp; Fida si occupa della lavorazione delle lamiere di grandi dimensioni e di ogni tipo di acciaio, speciali ed altoresistenziali.<br/>
	    Il ciclo di lavorazione parte da materia prima in stato di fogli di lamiera di diversi formati e qualità e mediante taglio laser, fibra, plasma o ossiacetilenico si ricavano profili sagomati che vengono poi inviati, quando richiesto, alle successive stazioni di lavoro, principalmente la cianfrinatura per la preparazione dei bordi alla saldatura e la piegatura a freddo.<br/>
	    All'occorrenza è disponibile anche un impianto di sabbiatura di lamiere di larghezza fino a 3 m.
	  </p>
	  <p class="my-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
    <div class="row mt-5 mb-1">
      <div class="slick-carousel">
    		<a href="/images/pop/dettaglio-prodotto.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/dettaglio-prodotto.jpg" alt="Dettaglio di una nostra realizzazione"></a>
        <a href="/images/pop/prodotto-lavorato.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/prodotto-lavorato.jpg" alt="Acciaio lavorato"></a>
        <a href="/images/pop/prodotto-assemblato.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/prodotto-assemblato.jpg" alt="Prodotto composto da varie parti unite tra loro"></a>
      </div>
    </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
