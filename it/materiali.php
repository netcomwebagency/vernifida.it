<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Lavorazioni su tutti i tipi di acciai speciali | Verni & Fida',
	'meta_description' => 'Offriamo lavorazioni su tutti i tipi di acciaio tra cui strutturali, antiusura e termomeccanici, disponibili in diversi spessori e formati nel nostro magazzino',
	'og_image' => '',
	'page_slide' => 'slide-materiali',
	'caption' => 'Materiali sempre disponibili<br/><span>per soddisfare le differenti esigenze produttive</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Lavorazioni su tutti i tipi di acciai</h1>
	  <h2 class="subtitle">termomeccanici da coil e bonificati da treno, strutturali ed antiusura</h2>
	  <p>
	    Verni & Fida esegue <b>lavorazioni su tutti i tipi di acciaio</b>, strutturali ed antiusura, <b>specializzandosi principalmente sugli acciai termomeccanici da coil e bonificati da treno ad alto limite elastico, con carichi di snervamento da 700 a 1100 MPa.</b><br/>
	    Per soddisfare le differenti esigenze produttive, l'azienda è dotata di un <b>magazzino</b> tra i più grandi e forniti a livello internazionale, sono sempre disponibili tutti i materiali in diversi spessori e formati, commerciali e non. E se alcuni materiali non fossero temporaneamente disponibili, è possibile reperirli sul mercato grazie alle nostre partnership con acciaierie.
	  </p>
	  <p>La Verni & Fida può vantare, oggi, una disponibilità dal pronto di acciai speciali che consentono di esaudire ogni richiesta.</p>
	  <p class="my-5"><a href="/it/contatti/" class="btn btn-lg btn-custom">Richiedi informazioni</a></p>
	</div>
	<div class="bg-custom">
	  <div class="container py-5 text-center">
	    <h2 class="title">Stock acciai</h2>
	    <div class="row">
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">Non legati per impieghi strutturali</h3>
	        <p>(sp 3 – 100 mm)</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">Termomeccanici ad alto limite elastico (STRENX®/alform®)</h3>
	        <p class="my-4"><img src="/images/logo-alform.png" alt="Alform"></p>
	        <p>
	          Classe 700 (sp. 2 – 12 mm)<br/>
	          Classe 900 – 960 – 1100 MPa (sp. 3 – 10 mm)
	        </p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">Basso legati e bonificati ad alto limite elastico (STRENX®)</h3>
	        <p>Classe 690 - 890 – 960 – 1100 (sp. 4 – 120 mm)</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">Antiusura (HARDOX®)</h3>
	        <p>Classe HB 400 – HB 450 – HB 500</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">Per protezione balistica</h3>
	        <p>(sp. 3 – 8 mm)</p>
	      </div>
	    </div>
	  </div>
	  <div class="container-fluid">
      <div class="row mt-5 mb-1">
        <div class="slick-carousel">
      		<a href="/images/pop/metallo-magazzino.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/metallo-magazzino.jpg" alt="Il nostro magazzino"></a>
          <a href="/images/pop/lastra-1100.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lastra-1100.jpg" alt="Lastra di metallo"></a>
          <a href="/images/pop/lastre-metallo.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lastre-metallo.jpg" alt="Lastre di metallo in magazzino"></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
