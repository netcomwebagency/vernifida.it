<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Präzise mechanische Bearbeitung | Verni & Fida',
	'meta_description' => 'Das Unternehmen ist mit verschiedenen Werkzeugmaschinen ausgestattet, die eine präzise mechanische Bearbeitung durchführen und fertige Teile montagefertig liefern können',
	'og_image' => '',
	'page_slide' => 'slide-lavorazioni-meccaniche',
	'caption' => 'Mechanische Bearbeitung<br/><span>eine ganze Abteilung, die sich der Präzision widmet</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Mechanische Bearbeitungen </h1>
	  <p>
	    Verni & Fida verfügt über eine ganze Abteilung, die den mechanischen Feinbearbeitungen gewidmet ist und ist somit von externen Anbietern unabhängig, indem es die Liefer- und Verwaltungszeiten der Aufträge reduziert hat.
	  </p>
	  <p>
	    Es ist mit <b>verschiedenen Werkzeugmaschinen</b> ausgestattet:
		</p>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">1</div>
				<div class="lightgallery my-4"><a href="/images/pop/tornio.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/tornio.jpg" alt="Drehbänke"></a></div>
				<h3 class="subtitle">Drehbänke</h3>
			</div>
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">2</div>
				<div class="lightgallery my-4"><a href="/images/pop/centri-lavoro.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/centri-lavoro.jpg" alt="Bearbeitungszentren"></a></div>
				<h3 class="subtitle">Vertikale und horizontale CNC-Bearbeitungszentren</h3>
			</div>
			<div class="col-lg-4 my-4 wow fadeInLeft">
				<div class="big-number text-center">3</div>
				<div class="lightgallery my-4"><a href="/images/pop/frese-alesatrici.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/frese-alesatrici.jpg" alt="Langweilige Messer"></a></div>
				<h3 class="subtitle mb-3">Bewegliche Säulenbohrfräser mit bidirektionalem Automatikkopf</h3>
				für die Ausführung der präzisen mechanischen Bearbeitung für <b>Längen bis 8 Meter</b> auszuführen.
			</div>
		</div>

	</div>
	<div class="container text-center my-5">
		<h3 class="subtitle">Bietet fertige Teile für die präzise Montage von Bauteilen und das anschließende Schweißen.</h3>
	  <p><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	</div>
</div>
<?php
getFullFooter($page);
?>
