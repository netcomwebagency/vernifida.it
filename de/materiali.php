<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Bearbeitung aller Arten von Spezialstählen | Verni & Fida',
	'meta_description' => 'Wir bieten die Bearbeitung aller Arten von Stahl an, einschließlich struktureller, verschleißfester und thermomechanischer Stähle, die in unserem Lager in verschiedenen Stärken und Formaten erhältlich sind',
	'og_image' => '',
	'page_slide' => 'slide-materiali',
	'caption' => 'Materialien immer verfügbar<br/><span>um den unterschiedlichen Produktionsanforderungen gerecht zu werden</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Bearbeitung aller Arten von Stählen</h1>
	  <h2 class="subtitle">thermomechanisch aus Spule und aus Zug, strukturell und Verschleißschutz zurückgefordert</h2>
	  <p>
			Verni & Fida ist in <b>der Verarbeitung von allen Stahlsorten</b>, Baustahl und verschleiβfestem Stahl tätig und ist <b>besonders auf Stahlcoils und vergütete Quartobleche mit hoher Streckgrenze und Zugfestigkeiten von 700 bis 1100 MPa spezialisiert.</b><br/>
			Um verschiedene Erfordernisse der Produktion zufriedenzustellen, Das Unternehmen verfügt über eines der größten und am besten sortierten Lager im ganzen Land, in mehreren Formaten und Dicken, handelsüblich und nicht, ständig verfügbar. Und wenn einige Materialien zeitweilig nicht verfügbar sind, können wir sie dank unserer Partnerschaft mit ausgesuchten Stahlwerken auf dem Markt auffinden.
		</p>
		<p>Verni & Fida kann heute eine Verfügbarkeit aus den Stahlbeständen vorweisen, womit es jede Anfrage zufriedenstellen kann.</p>
	  <p class="my-5"><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	</div>
	<div class="bg-custom">
	  <div class="container py-5 text-center">
	    <h2 class="title">STAHLBESTÄNDE</h2>
	    <div class="row">
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">NICHT LEGIERTER STAHL FÜR STRUKTURELLE EINSÄTZE</h3>
	        <p>(Dicke 3 – 100 mm)</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">THERMOMECHANISCHER STAHL MIT HOHER STRECKGRENZE (STRENX®/alform®)</h3>
	        <p class="my-4"><img src="/images/logo-alform.png" alt="Alform"></p>
	        <p>
						Klasse 700 (Dicke 2 – 12 mm)<br/>
						Klasse 900 – 960 – 1100 N/mm (Dicke 3 – 10 mm)
	        </p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">NIEDRIGLEGIERTER UND VERGÜTETER STAHL MIT HOHER STRECKGRENZE (STRENX®)</h3>
	        <p>Klasse 690 - 890 – 960 – 1100 (Dicke 4 – 120 mm)</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">VERSCHLEISSFESTER STAHL (HARDOX®)</h3>
	        <p>Klasse HB 400 – HB 450 – HB 500</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">STAHL FÜR BALLISTISCHEN SCHUTZ</h3>
	        <p>(Dicke 3 – 8mm)</p>
	      </div>
	    </div>
	  </div>
	  <div class="container-fluid">
      <div class="row mt-5 mb-1">
        <div class="slick-carousel">
      		<a href="/images/pop/metallo-magazzino.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/metallo-magazzino.jpg" alt="Unser Lager"></a>
          <a href="/images/pop/lastra-1100.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lastra-1100.jpg" alt="Metallplatte"></a>
          <a href="/images/pop/lastre-metallo.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lastre-metallo.jpg" alt="Metallplatten im Lager"></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
