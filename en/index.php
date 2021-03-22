<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Large sheet metal processing | Verni & Fida',
	'meta_description' => 'We specialize in sheet metal processing of all types of steel, dealing with cutting, bending and welding of metals',
	'og_image' => '',
	'page_slide' => 'slide-video',
	'caption' => 'Specialized in the processing of large size sheet metal<br/><span>special and high-resistance steel</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container">
  <h1 class="title">Verni &amp; Fida – Metal sheet processing</h1>
  <p>Verni &Fida is specialized in <b>processing large size sheet metal and all types of steel</b>, especially in processing <b>high-tensile steel with yield points from 700 to 1100 MPa</b>, both steel coils and quenched and tempered steel for heavy quarto plates.</p>
	<p>
		For more than 50 years Verni & Fida has been working in the field of sheet metal processing for the manufacturing of hydraulic cranes, also in the marine sector and the sectors of aerial work platforms, telehandlers, concrete pumps and earth-moving machinery.<br/>
		Today it is one of the first reference operators at nation level and provider of important international groups in the field of lifting equipment.
  </p>
  <p class="my-5"><a href="/en/azienda/" class="btn btn-lg btn-custom">Company</a></p>
</div>
<div class="bg-custom pt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-7 py-xl-5">
        <div class="p-lg-5 p-3">
          <h2 class="title" style="color:green">Why choose us</h2>
          <p>
						What does it make us a reference point in the processing of special steel?<br/>
						More than 50 years experience in the sector, high <b>quality of the raw material, partnership with steelworks and qualified suppliers</b>.<br/>
						<b>One of the largest and internationally supplied warehouses</b> for a greater efficiency of the production cycle, an optimization of logistics and the reduction of delivery times.<br/>
						The <b>production cycle</b> starts from the raw material, in form of sheet metal of various sizes and thicknesses, and through laser, fibre, plasma or oxy-acetylene cutting, shaped profiles are obtained which are then sent to successive workstations, when required, such as chamfering, cold bending and welding.
          </p>
          <p class="my-5"><a href="/en/vantaggi/" class="btn btn-lg btn-custom">Discover the benefits</a></p>
        </div>
      </div>
      <div class="col-xl-5 no-padding wow fadeInRight">
        <img src="/images/img-perche-sceglierci.png" alt="Why choose Verni & Fida" class="img-right">
      </div>
    </div>
  </div>
</div>
<div class="bg-custom-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 order-lg-2 no-padding wow fadeInRight">
        <div class="p-lg-5 p-3">
          <h2 class="title">Materials</h2>
          <p>Verni &amp; Fida carries out works on all types of steel, structural and wear-resistant steel, and is specialized on steel coils and quenched and tempered high-tensile steel for heavy quarto plates, with yield points from 700 to 1100 MPa.</p>
          <p class="mt-5"><a href="/en/materiali/" class="btn btn-lg btn-custom-2">Discover</a></p>
        </div>
      </div>
			<div class="col-lg-6 order-lg-1 no-padding lightgallery wow fadeInLeft">
				<a href="/images/pop/materiali-magazzino.jpg" data-rel="ilightbox[gallery_1]">
	        <div style="background:url('/images/materiali-magazzino.jpg') no-repeat center center; background-size:cover; width:100%; height:100%; min-height:450px;"></div>
	      </a>
			</div>
    </div>
  </div>
</div>
<div class="container my-5">
  <h2 class="title">Machining</h2>
  <p>
    The production cycle starts from the raw material, in form of sheet metal of various sizes and thicknesses, and goes through the cutting process and successive work phases, mainly the chamfering to prepare the edges for welding and the cold bending.<br/>
		Upon request mechanical processing is carried out on the CNC machining centres.
  </p>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 wow fadeInLeft">
      <div class="box-img box-img-big" style="background:url('/images/bg-taglio.jpg') no-repeat center center;">
        <a href="/en/taglio-lamiere/">
          <h3 class="subtitle mb-2">Sheet metal cutting</h3>
          <p>Laser, fibre and plasma cutting with 3D Bevel head for inclined cuts and oxy cutting allow to process sizes till 4x24 metres and till 350 mm of thickness.</p>
          <p><img src="/images/icon-arrow.png" alt="Find out more"></p>
        </a>
      </div>
      <div class="box-img box-img-small" style="background:url('/images/bg-piegatura.jpg') no-repeat center center;">
        <a href="/en/piegatura/">
          <h3 class="subtitle mb-2">Sheet metal bending</h3>
          <p>Our company has various hydraulic folding presses available, of which one semi-automatic, equipped for the cold bending of high-tensile materials and allowing to process sheet metal till 12 metres.</p>
          <p><img src="/images/icon-arrow.png" alt="Find out more"></p>
        </a>
      </div>
    </div>
    <div class="col-lg-6 wow fadeInRight">
      <div class="box-img box-img-small" style="background:url('/images/bg-lavorazioni.jpg') no-repeat center center;">
        <a href="/en/lavorazioni-meccaniche/">
          <h3 class="subtitle mb-2">Mechanical machining</h3>
          <p>We also have different machine tools available: lathes, vertical and horizontal machining centres, boring milling machines with moving column and automatic bi-rotary head for precision machining of sheet metal lengths till 8 metres.</p>
          <p><img src="/images/icon-arrow.png" alt="Find out more"></p>
        </a>
      </div>
      <div class="box-img box-img-big" style="background:url('/images/bg-saldatura.jpg') no-repeat center center;">
        <a href="/en/saldatura/">
          <h3 class="subtitle mb-2">Welding</h3>
          <p>We have a well-equipped metallic carpentry department with welding robots to carry out automatic welding and metal processing through MIG/MAG and TIG welding processes.</p>
          <p><img src="/images/icon-arrow.png" alt="Find out more"></p>
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<?php
getFullFooter($page);
?>
