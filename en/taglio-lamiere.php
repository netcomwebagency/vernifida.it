<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Sheet metal cutting using Fiber Laser, Plasma and Oxy cutting | Verni & Fida',
	'meta_description' => 'Verni & Fida offers various laser cutting, plasma cutting and Oxy cutting cutting machines to precisely cut sheets of different types and thicknesses',
	'og_image' => '',
	'page_slide' => 'slide-taglio-lamiere',
	'caption' => 'Fiber Laser, Plasma, Oxy cutting<br/><span>Cutting technologies for cutting precision</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Sheet metal cutting</h1>
	  <p>
			Verni & Fida is equipped with cutting machines of latest generation.<br/>
			Laser, fibre, plasma cutting with 3D Bevel head for inclined cuts and oxy cutting allow to process sizes up to 4x24 m and thicknesses till 350 mm.
	  </p>
	</div>
	<div class="bg-custom-2 mt-5">
	  <div class="container-fluid">
	    <div class="row">
	      <div class="col-lg-6 order-lg-2 no-padding text-center wow fadeInRight">
	        <div class="p-6">
	          <h3 class="title">Laser cutting</h3>
	          <p class="text-left">
							For the sheet metal cutting we have <b>various laser cutting machines</b> available, allowing the cut of large size sheet metal, sizes up to 4x24 m and thicknesses till 20 mm which are ideal for producing parts, asking for accuracies of a few tenths of millimetre.<br/>
							This technology is especially advantageous for details which require successive robotic welding processing, by facilitating all carpentry pairings.<br/>
							Over the years the company has always invested in technology and software, buying even higher performance <b>laser fibre</b> cutting machines.
	          </p>
	          <p class="mt-5"><a href="/en/contatti/" class="btn btn-lg btn-custom-2">Ask for information</a></p>
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
	        <h2 class="title">Plasma cutting</h2>
	        <p class="text-left">
	          Thanks to the plasma cutting with 3D Bevel head for inclined cuts it is possible to work on sizes up to 3x18 m with thicknesses till 40 mm.
	        </p>
	        <p class="mt-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
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
	        <h2 class="title">Oxy cutting</h2>
	        <p class="text-left">
	          Our numerically controlled oxy cutting machines enable the processing of sheet metal sizes up to 5x12 m and thicknesses till 350 mm with extreme precision.
	        </p>
	        <p class="mt-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
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
