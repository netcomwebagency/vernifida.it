<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Why choose Verni & Fida for sheet metal processing | Verni & Fida',
	'meta_description' => 'Reference point thanks to the experience in the processing of large sheets, the warehouse with various types of steel always available and the high quality of the same',
	'og_image' => '',
	'page_slide' => 'slide-vantaggi',
	'caption' => 'Cutting-edge technologies<br/><span>in cutting and bending of medium and large thicknesses</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
	  <h1 class="title">Your partner in sheet metal processing</h1>
		<h2 class="subtitle">from the raw material to the finished assembled product</h2>
	  <p>Verni & Fida is a point of reference in the processing of special steel and large size sheet metal.</p>
		<p>The company, which over the years has continued its investments in the field of technological updating, has highly qualified personnel and manages on behalf of the customer complete orders from the processing of the raw material to the finished carpentry including precision machining and welding.</p>
	</div>
	<div class="bg-custom mt-5">
	  <div class="container py-5 text-center">
	    <h2 class="title" style="color:green">Why choose us:</h2>
	    <div class="row">
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <div class="big-number">1</div>
	        <h3 class="subtitle">More than 50 years of experience</h3>
	        <p class="text-left">
						A consolidated industrial reality, which since 1963 has been operating in the field of sheet metal processing with cutting-edge machinery and attentive to technological development.
	        </p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInRight">
	        <div class="big-number">2</div>
	        <h3 class="subtitle">Warehouse</h3>
	        <p class="text-left">
						To reduce delivery times, structural and wear-resistant thermomechanical steels from coil and tempered steel are always available, in different thicknesses and formats, commercial and non-commercial.<br/>
						Thanks to a widespread network of suppliers and relationships consolidated over time, it can find any materials temporarily unavailable on the market.
	        </p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInLeft">
	        <div class="big-number">3</div>
	        <h3 class="subtitle">High quality of raw material</h3>
	        <p class="text-left">
						Guaranteed by the Partnership with steel mills and qualified suppliers at national and international level.<br/>
						It allows to obtain very tight tolerances, reduced times, facilitated processes, thanks to the better characteristics of the semi-finished product, and less waste of material.
	        </p>
	      </div>
	      <div class="col-lg-6 my-4 wow fadeInRight">
	        <div class="big-number">4</div>
	        <h3 class="subtitle">Finished assembled product</h3>
	        <p class="text-left">
	          Starting from the raw material, in the state of sheet metal sheets of different sizes and thicknesses, and by laser, plasma or oxyacetylene cutting, shaped profiles are obtained which are then sent, when required, to subsequent work stations. Precision mechanical machining and welding of the finished product are carried out in the machining centers.
	        </p>
	      </div>
	    </div>
	    <p class="my-5"><a href="/en/contatti/" class="btn btn-lg btn-custom">Ask for information</a></p>
	  </div>
	</div>
<?php
getFullFooter($page);
?>
