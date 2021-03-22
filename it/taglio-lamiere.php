<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Taglio lamiere tramite Laser Fibra, Plasma e Ossitaglio | Verni & Fida',
	'meta_description' => 'Verni & Fida offre diverse macchine per il taglio laser, taglio al plasma e ossitaglio per tagliare con precisione lamiere di diversi tipi e spessori',
	'og_image' => '',
	'page_slide' => 'slide-taglio-lamiere',
	'caption' => 'Laser Fibra, Plasma, Ossitaglio<br/><span>Tecnologie all\'avanguardia per la precisione di taglio</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Taglio lamiere</h1>
	  <p>
	    Verni &amp; Fida è dotato di impianti di taglio di ultima generazione.<br/>
	    Laser, Fibra, Plasma con testa bevel 3D per tagli inclinati, Ossitaglio che consentono di lavorare formati fino a 4x24 m e spessori fino a 350 mm.
	  </p>
	</div>
	<div class="bg-custom-2 mt-5">
	  <div class="container-fluid">
	    <div class="row">
	      <div class="col-lg-6 order-lg-2 no-padding text-center wow fadeInRight">
	        <div class="p-6">
	          <h3 class="title">Taglio Laser</h3>
	          <p class="text-left">
	            Per il taglio delle lamiere disponiamo di <b>diverse macchine laser</b> con le quali si possono tagliare lamiere di notevoli dimensioni, formati fino a 4x24 m e spessori fino a 20 mm, ideali per realizzare elementi che richiedono precisioni al decimo di mm.<br/>
	            Questa tecnologia è vantaggiosa soprattutto per particolari che prevedono successive lavorazioni robotizzate di saldatura, agevolando tutti gli accoppiamenti di carpenteria.<br/>
	            Negli anni l'azienda ha sempre investito in tecnologia e software con l'acquisto di macchine da taglio <b>laser fibra</b> ancora più performante.
	          </p>
	          <p class="mt-5"><a href="/it/contatti/" class="btn btn-lg btn-custom-2">Richiedi informazioni</a></p>
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
	        <h2 class="title">Taglio al Plasma</h2>
	        <p class="text-left">
	          Grazie al taglio al plasma con testa bevel 3D per tagli inclinati è possibile lavorare su formati fino a 3x18 m con spessori fino a 40 mm.
	        </p>
	        <p class="mt-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
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
	        <h2 class="title">Ossitaglio</h2>
	        <p class="text-left">
	          I nostri impianti di ossitaglio a controllo numerico permettono di lavorare con estrema precisione lamiere di formato fino a 5x12 m e spessore fino a 350 mm.
	        </p>
	        <p class="mt-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="container-fluid wow fadeInUp">
	    <div class="row mt-5 mb-1">
	      <div class="slick-carousel">
	    		<a href="/images/pop/ossitaglio-1.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-1.jpg" alt="Ossitaglio"></a>
	        <a href="/images/pop/ossitaglio-2.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-2.jpg" alt="Macchina per l'ossitaglio"></a>
	        <a href="/images/pop/ossitaglio-4.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-4.jpg" alt="Cannelli ossitaglio"></a>
	        <a href="/images/pop/ossitaglio-3.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/ossitaglio-3.jpg" alt="Dettaglio ossitaglio"></a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<?php
getFullFooter($page);
?>
