<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Piegatura lamiere fino a 12 metri di lunghezza | Verni & Fida',
	'meta_description' => 'Piegatura delle lamiere fino a 12 metri grazie a diverse diverse pressopiegatrici idrauliche attrezzate per la piegatura a freddo',
	'og_image' => '',
	'page_slide' => 'slide-piegatura',
	'caption' => 'Piegatura di lamiere<br/><span>di medie e grandi lunghezze</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Piegatura</h1>
	  <p>
	    L'esperienza di oltre 50 anni nel settore e l'investimento nelle tecnologie più avanzate ha permesso la realizzazione di un importante impianto di piegatura delle lamiere.<br/>
	    L'azienda dispone di diverse pressopiegatrici idrauliche, di cui una semiautomatica, tutte specificamente attrezzate per la <b>piegatura a freddo</b> di materiali ad alto limite elastico, che consentono di piegare <b>lamiere fino a 12 m di lunghezza</b>.
	  </p>
	  <p>
	    Verni & Fida in tanti anni di attività ha fatto tesoro delle esperienze nella piegatura, investendo capitali consistenti in attrezzature speciali e macchine uniche nel loro genere.<br/>
	    Questo reparto, dotato di un numero considerevole di macchine, dalla più piccola da 2 metri da 150 ton. alla più grande da 12 metri da 1600 ton., oggi ha raggiunto nella piega in aria una qualità impensabile soltanto pochi anni fa.
	  </p>
	  <p class="my-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
	  <div class="row mt-5 mb-1">
	    <div class="slick-carousel">
	      <a href="/images/pop/piegatura-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/piegatura-1.jpg" alt="Controllo piegatura lamiera"></a>
	      <a href="/images/pop/piegatura-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/piegatura-2.jpg" alt="Lamiere piegate"></a>
	      <a href="/images/pop/piegatura-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/piegatura-3.jpg" alt="Piegatura delle lamiere"></a>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
