<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Schweißstationen | Verni & Fida',
	'meta_description' => 'erni & Fida verfügt über Tig- und Mig / Mag-Schweißsysteme sowie Schweißroboter für die automatische Bearbeitung',
	'og_image' => '',
	'page_slide' => 'slide-saldatura',
	'caption' => 'Mechanische Zimmerei<br/><span>Mig / Mag / Tig-Schweißroboter</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Schweiβen</h1>
	  <p>
	    Das Unternehmen verfügt auch über eine ausgerüstete Metallbauabteilung mit MIG-, MAG- und TIG-Schweiβstationen und Schweiβrobotern zum automatisierten Schweiβen.
	  </p>
	  <p class="my-5"><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
	  <div class="row mt-5 mb-1">
	    <div class="slick-carousel">
	      <a href="/images/pop/saldatura-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-1.jpg" alt="Mann fährt mit dem Schweißen fort"></a>
	      <a href="/images/pop/saldatura-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-2.jpg" alt="Schweißen im Detail"></a>
	      <a href="/images/pop/saldatura-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/saldatura-3.jpg" alt="Schweißabteilung"></a>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
