<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Come raggiungere Verni & Fida a San Giovanni in Marignano',
	'meta_description' => 'Scopri dove si trovano le nostre diverse sedi produttive a San Giovanni in Marignano per la lavorazione di acciai ad alto limite elastico',
	'og_image' => '',
	'page_slide' => 'slide-posizione',
	'caption' => 'Come raggiungerci<br/><span>Sedi amministrative e produttive</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container mt-5">
	  <h2 class="title">Dove siamo</h2>
	  <p>
	    Verni &amp; Fida si trova a San Giovanni in Marignano in provincia di Rimini.<br/>
	    La sede si trova a 500 m dal casello autostradale uscita Cattolica – San Giovanni in Marignano e Gabicce Mare dall'autostrada A14 Adriatica, direzione centro San Giovanni in Marignano.
	  </p>
		<div class="my-5">
			<h3 class="subtitle mb-3">Verni &amp; Fida s.r.l.</h3>
			<p>
				Telefono: <a href="tel:+390541828211">+39 0541 828211</a><br>
				Fax. +39 0541 828249<br>
				Email: <a href="mailto:info@vernifida.it">info@vernifida.it</a>
			</p>
		</div>
	  <div class="d-none d-md-block my-5"><img src="/images/mappa.jpg" alt="Dove trovare Verni & Fida"></div>
		<div class="d-md-none d-sm-block my-5"><img src="/images/mappa-small.jpg" alt="Dove trovare Verni & Fida"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-1.jpg" alt="Verni &amp; Fida - Sede"></p>
				<h3 class="subtitle mb-2">Sede produttiva ed amministrativa</h3>
				<p>Via Brenta, 3 <br> 47842 - San Giovanni in Marignano (RN)</p>
			</div>
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-2.jpg" alt="Verni &amp; Fida - Sede Produttiva 2"></p>
				<h3 class="subtitle mb-2">Sede produttiva 2</h3>
				<p>Via Isonzo, 14 <br> 47842 – San Giovanni in Marignano (RN)</p>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-3.jpg" alt="Verni &amp; Fida - Sede Produttiva 3"></p>
				<h3 class="subtitle mb-2">Sede produttiva 3</h3>
				<p>Via Malpasso, 1441/1447 <br> 47842 - San Giovanni In Marignano (RN)</p>
			</div>
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-4.jpg" alt="Verni &amp; Fida - Sede Produttiva Romania"></p>
				<h3 class="subtitle mb-2">Sede Verni &amp; Fida - Romania</h3>
				<p>Strada Napoli, 1 <br> 300516 Timisoara (Romania)</p>
			</div>
		</div>
	</div>

</div>
<?php
getFullFooter($page);
?>
