<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Machining on all types of special steels | Verni & Fida',
	'meta_description' => 'We offer machining on all types of steel including structural, wear-resistant and thermomechanical, available in different thicknesses and formats in our warehouse',
	'og_image' => '',
	'page_slide' => 'slide-materiali',
	'caption' => 'Materials always available<br/><span>to meet the different production needs</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Machining on all types of steels</h1>
	  <h2 class="subtitle">thermomechanical from coil and reclaimed from train, structural and anti-wear</h2>
	  <p>
			Verni & Fida provides processing of all types of steel, structural and anti-wear steel, <b>specializing on thermo-mechanical steel coils and quenched and tempered high-tensile steel with yield points from 700 to 1100 MPa</b>.<br/>
			To satisfy the different production requirements, the company has one of the largest and most stocked warehouses nationwide, always offers all materials in several thicknesses and sizes, commercial and non-commercial ones. And if some materials are temporarily unavailable, it is possible to find them on the market due to our partnerships with steelworks.
	  </p>
	  <p>Verni & Fida today can boast special steel types available in stock in order to satisfy every request.</p>
	  <p class="my-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
	</div>
	<div class="bg-custom">
	  <div class="container py-5 text-center">
	    <h2 class="title">STEEL STOCK:</h2>
	    <div class="row">
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">UNALLOYED STEEL FOR STRUCTURAL APPLICATIONS</h3>
	        <p>(Thickness 3 – 100 mm)</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">THERMO-MECHANICAL HIGH-TENSILE STEEL (STRENX®/alform®)</h3>
	        <p class="my-4"><img src="/images/logo-alform.png" alt="Alform"></p>
	        <p>
						Class 700 (thickness 2 – 12 mm)<br/>
						Class 900 – 960 – 1100 N/mm (thickness 3 – 10 mm)
	        </p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">LOW ALLOYED, QUENCHED AND TEMPERED HIGH-TENSILE STEEL (STRENX®)</h3>
	        <p>Class 690 - 890 – 960 – 1100 (thickness 4 – 120 mm)</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">ANTI-WEAR STEEL (HARDOX®)</h3>
	        <p>Class HB 400 – HB 450 – HB 500</p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <h3 class="subtitle">STEEL FOR BALISTIC PROTECTION</h3>
	        <p>(Thickness 3 – 8mm)</p>
	      </div>
	    </div>
	  </div>
	  <div class="container-fluid">
      <div class="row mt-5 mb-1">
        <div class="slick-carousel">
      		<a href="/images/pop/metallo-magazzino.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/metallo-magazzino.jpg" alt="Our warehouse"></a>
          <a href="/images/pop/lastra-1100.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lastra-1100.jpg" alt="Metal plate"></a>
          <a href="/images/pop/lastre-metallo.jpg" data-rel="ilightbox[gallery_1]"><img src="/images/lastre-metallo.jpg" alt="Metal plates in warehouse"></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
