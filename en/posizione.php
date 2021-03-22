<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'How to reach Verni & Fida in San Giovanni in Marignano',
	'meta_description' => 'Find out where our various production sites in San Giovanni in Marignano are located for the machining of high-elastic limit steels',
	'og_image' => '',
	'page_slide' => 'slide-posizione',
	'caption' => 'How to reach us<br/><span>Administrative and production sites</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container mt-5">
	  <h2 class="title">Where we are</h2>
	  <p>
			Verni &amp; Fida is located in San Giovanni in Marignano, in the province of Rimini.<br/>
			The headquarters are located 500 m from the Cattolica - San Giovanni in Marignano motorway exit and Gabicce Mare from the A14 Adriatica motorway, towards the center of San Giovanni in Marignano.
	  </p>
		<div class="my-5">
			<h3 class="subtitle mb-3">Verni &amp; Fida s.r.l.</h3>
			<p>
				Phone number: <a href="tel:+390541828211">+39 0541 828211</a><br>
				Fax. +39 0541 828249<br>
				Email: <a href="mailto:info@vernifida.it">info@vernifida.it</a>
			</p>
		</div>
	  <div class="d-none d-md-block my-5"><img src="/images/mappa.jpg" alt="Where to find Verni & Fida"></div>
		<div class="d-md-none d-sm-block my-5"><img src="/images/mappa-small.jpg" alt="Where to find Verni & Fida"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-1.jpg" alt="Verni &amp; Fida - Sites"></p>
				<h3 class="subtitle mb-2">Administrative and production sites</h3>
				<p>Via Brenta, 3 <br> 47842 - San Giovanni in Marignano (RN)</p>
			</div>
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-2.jpg" alt="Verni &amp; Fida - Production sites 2"></p>
				<h3 class="subtitle mb-2">Production sites 2</h3>
				<p>Via Isonzo, 14 <br> 47842 – San Giovanni in Marignano (RN)</p>
			</div>
		</div>
		<div class="row m-3">
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-3.jpg" alt="Verni &amp; Fida - Production sites 3"></p>
				<h3 class="subtitle mb-2">Production sites 3</h3>
				<p>Via Malpasso, 1441/1447 <br> 47842 - San Giovanni In Marignano (RN)</p>
			</div>
			<div class="col-lg-6 my-3">
				<p><img src="/images/sede-4.jpg" alt="Verni &amp; Fida - Production site Romania"></p>
				<h3 class="subtitle mb-2">Sites Verni &amp; Fida - Romania</h3>
				<p>Strada Napoli, 1 <br> 300516 Timisoara (Romania)</p>
			</div>
		</div>
	</div>

</div>
<?php
getFullFooter($page);
?>
