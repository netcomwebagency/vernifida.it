<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Precision mechanical processing | Verni & Fida',
	'meta_description' => 'The company is equipped with various machine tools capable of performing precision mechanical machining and supplying finished parts ready for assembly',
	'og_image' => '',
	'page_slide' => 'slide-lavorazioni-meccaniche',
	'caption' => 'Mechanical processing<br/><span>an entire department dedicated to precision</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Mechanical machining</h1>
	  <p>
	    Verni & Fida has a whole department entirely dedicated to precision machining, without having to depend on external suppliers and thereby reducing the management and lead times of orders.
	  </p>
	  <p>
	    The company is equipped with <b>several machine tools</b>:
		</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">1</div>
				<div class="lightgallery my-4"><a href="/images/pop/tornio.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/tornio.jpg" alt="Tornio"></a></div>
				<h3 class="subtitle">Lathes</h3>
			</div>
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">2</div>
				<div class="lightgallery my-4"><a href="/images/pop/centri-lavoro.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/centri-lavoro.jpg" alt="Centri di lavoro"></a></div>
				<h3 class="subtitle">Vertical and horizontal machining centres</h3>
			</div>
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">3</div>
				<div class="lightgallery my-4"><a href="/images/pop/frese-alesatrici.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/frese-alesatrici.jpg" alt="Frese alesatrici"></a></div>
				<h3 class="subtitle mb-3">Moving column boring cutters with bi-rotating automatic head</h3>
				for the execution of precision mechanical machining for <b>lengths up to 8 metres.</b>
			</div>
		</div>

	</div>
	<div class="container text-center my-5">
		<h3 class="subtitle">Provides finished parts for precise assembly of components and the subsequent welding.</h3>
	  <p><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
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
