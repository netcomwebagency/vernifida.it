<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Blechschneiden mit Faserlaser, Plasma und Autogen | Verni & Fida',
	'meta_description' => 'Verni & Fida bietet verschiedene Laserschneid-, Plasmaschneid- und Autogenschneidemaschinen zum präzisen Schneiden von Blechen unterschiedlicher Art und Dicke an',
	'og_image' => '',
	'page_slide' => 'slide-taglio-lamiere',
	'caption' => 'Faserlaser, Plasma, Oxy-Fuel<br/><span>Spitzentechnologien für Schneidpräzision</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Blechschneiden</h1>
	  <p>
			Verni & Fida verfügt über Schneidanlagen der neuesten Generation.<br/>
			Laser-, Faser-, Plasmaschneiden mit Bevel 3D-Schneidkopf zum Schiefschneiden und Brennschneiden dienen dazu, Formate bis 4x24 Meter und Dicken bis 350 Millimeter zu bearbeiten.
	  </p>
	</div>
	<div class="bg-custom-2 mt-5">
	  <div class="container-fluid">
	    <div class="row">
	      <div class="col-lg-6 order-lg-2 no-padding text-center wow fadeInRight">
	        <div class="p-6">
	          <h3 class="title">Laserschneiden</h3>
	          <p class="text-left">
							Um Blech zu schneiden, sind wir mit <b>verschiedenen Lasermaschinen</b> versehen, womit man Bleche erheblicher Gröβe, Formate bis 4x24 Meter und Dicken bis 20 Millimeter schneiden kann, die ideal für die Realisierung von Elementen mit Genauigkeiten im Bereich von Zehntelmillimetern sind.
							Diese Technologie ist besonders für Bestandteile vorteilhaft, die nachfolgende automatisierte Schweiβbearbeitungen voraussehen, und erleichtert dabei alle Kopplungen des Zimmerhandwerks.
							Im Laufe der Jahre hat das Unternehmen immer in Technologie und Software investiert, indem es noch leistungsfähiger Laser-Faserschneidanlagen gekauft hat.
	          </p>
	          <p class="mt-5"><a href="/de/contatti/" class="btn btn-lg btn-custom-2">Informationen anfragen</a></p>
	        </div>
	      </div>
				<div class="col-lg-6 order-lg-1 lightgallery no-padding wow fadeInLeft">
		      <a href="/images/pop/taglio-laser.jpg" data-rel="ilightbox[gallery_1]">
		        <div style="background:url('/images/taglio-laser.jpg') no-repeat center bottom; background-size:cover; width:100%; height:100%; min-height:450px;"></div>
		      </a>
				</div>
	    </div>
	  </div>
	</div>
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-6 no-padding text-center wow fadeInRight">
	      <div class="p-6">
	        <h2 class="title">Plasmaschneiden</h2>
	        <p class="text-left">
	          Dank dem Plasmaschnitt durch Bevel 3D-Schneidkopf zum Schiefschneiden können wir Formate bis 3x19 Meter und bis 40 mm Dicke bearbeiten.
	        </p>
	        <p class="mt-5"><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	      </div>
	    </div>
			<div class="col-lg-6 no-padding lightgallery wow fadeInLeft">
		    <a href="/images/pop/taglio-plasma.jpg" data-rel="ilightbox[gallery_1]">
		      <div style="background:url('/images/taglio-plasma.jpg') no-repeat center top; background-size:cover; width:100%; height:100%; min-height:450px;"></div>
		    </a>
			</div>
	  </div>
	</div>
	<div class="bg-custom">
	  <div class="container py-5 text-center">
	    <div class="row">
	      <div class="col-lg-12 wow fadeInLeft">
	        <h2 class="title">Brennschneiden</h2>
	        <p class="text-left">
	          Unsere numerisch gesteuerten Brennschneidanlagen erlauben uns, mit absoluter Genauigkeit Blechformate bis 5x12 Meter und bis 350 Millimeter Dicke zu bearbeiten.
	        </p>
	        <p class="mt-5"><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="container-fluid wow fadeInUp">
	    <div class="row mt-5 mb-1">
	      <div class="slick-carousel">
	    		<a href="/images/pop/ossitaglio-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-1.jpg" alt="Brennschneiden"></a>
	        <a href="/images/pop/ossitaglio-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-2.jpg" alt="Autogenmaschine"></a>
	        <a href="/images/pop/ossitaglio-4.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-4.jpg" alt="Autogenbrenner"></a>
	        <a href="/images/pop/ossitaglio-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-3.jpg" alt="Oxy-Fuel-Detail"></a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
