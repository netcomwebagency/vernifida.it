<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'So erreichen Sie Verni & Fida in San Giovanni in Marignano',
	'meta_description' => 'Finden Sie heraus, wo sich unsere verschiedenen Produktionsstandorte in San Giovanni in Marignano für die Verarbeitung hochelastischer Grenzstähle befinden',
	'og_image' => '',
	'page_slide' => 'slide-posizione',
	'caption' => 'So erreichen Sie uns<br/><span>Verwaltungs- und Produktionsstandorte</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container mt-5">
	  <h2 class="title">Wo wir sind </h2>
	  <p>
			Verni & Fida liegt in San Giovanni in Marignano, in der Provinz von Rimini.<br/>
			Der Hauptsitz befindet sich 500 m von der Autobahnausfahrt Cattolica - San Giovanni an der Autobahnausfahrt Marignano und Gabicce von der Autobahn A14 Adriatica in Richtung Zentrum von San Giovanni in Marignano entfernt.
	  </p>
		<div class="my-5">
			<h3 class="subtitle mb-3">Verni &amp; Fida s.r.l.</h3>
			<p>
				Telefon: <a href="tel:+390541828211">+39 0541 828211</a><br>
				Fax. +39 0541 828249<br>
				Email: <a href="mailto:info@vernifida.it">info@vernifida.it</a>
			</p>
		</div>
	  <div class="d-none d-md-block my-5"><img src="/images/mappa.jpg" alt="Wo finden Sie Verni & Fida"></div>
		<div class="d-md-none d-sm-block my-5"><img src="/images/mappa-small.jpg" alt="Wo finden Sie Verni & Fida"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-1.jpg" alt="Verni &amp; Fida - Hauptquartier"></p>
				<h3 class="subtitle mb-2">Produktions- und Verwaltungssitz</h3>
				<p>Via Brenta, 3 <br> 47842 - San Giovanni in Marignano (RN)</p>
			</div>
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-2.jpg" alt="Verni &amp; Fida - Produktions 2"></p>
				<h3 class="subtitle mb-2">Produktions 2</h3>
				<p>Via Isonzo, 14 <br> 47842 – San Giovanni in Marignano (RN)</p>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-3.jpg" alt="Verni &amp; Fida - Produktions 3"></p>
				<h3 class="subtitle mb-2">Produktions 3</h3>
				<p>Via Malpasso, 1441/1447 <br> 47842 - San Giovanni In Marignano (RN)</p>
			</div>
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-4.jpg" alt="Verni &amp; Fida - Produktionsstätte Rumänien"></p>
				<h3 class="subtitle mb-2">Verni &amp; Fida - Rumänien</h3>
				<p>Strada Napoli, 1 <br> 300516 Timisoara (Rumänien)</p>
			</div>
		</div>
	</div>

</div>
<?php
getFullFooter($page);
?>
