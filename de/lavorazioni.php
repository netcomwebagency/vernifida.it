<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Verarbeitung auf Bögen unterschiedlicher Größe und Qualität | Verni & Fida',
	'meta_description' => 'Bearbeitungszyklus von Blechen aller Stahlsorten mit Laser-, Faser-, Plasma- und Oxyacetylenschneiden und anschließende Weiterverarbeitung',
	'og_image' => '',
	'page_slide' => 'slide-lavorazioni',
	'caption' => 'Schneiden und Biegen<br/><span>von großen Blechen und allen Stärken</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Bearbeitungen</h1>
	  <p>
			Verni & Fida ist in der Verarbeitung von Groβblechen und allen Stahlsorten, Spezialstählen und hochfesten Stählen tätig.<br/>
			Der Bearbeitungszyklus beginnt vom Rohmaterial, in Form von Stahlblechen unterschiedlicher Dicke und Format, und dann werden es durch Laser-, Plasma- oder Brennschneiden mit Azetylen, geformte Stahlprofile erhalten, die auf Antrag an nachfolgende Arbeitsstationen versandt werden, vor allem die Kantenabschrägung für die Vorbereitung der Kanten zum Schweiβen und das Kaltbiegen.<br/>
			Bei Bedarf steht auch eine Sandstrahlanlage für Blechbreiten bis 3 Meter zur Verfügung.
	  </p>
	  <p class="my-5"><a href="/de/contatti/" class="btn btn-lg btn-custom">Informationen anfragen</a></p>
	</div>
	<div class="container-fluid wow fadeInUp">
    <div class="row mt-5 mb-1">
      <div class="slick-carousel">
    		<a href="/images/pop/dettaglio-prodotto.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/dettaglio-prodotto.jpg" alt="Detail einer unserer Kreationen"></a>
        <a href="/images/pop/prodotto-lavorato.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/prodotto-lavorato.jpg" alt="Bearbeiteter Stahl"></a>
        <a href="/images/pop/prodotto-assemblato.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/prodotto-assemblato.jpg" alt="Produkt bestehend aus verschiedenen Teilen zusammengefügt"></a>
      </div>
    </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
