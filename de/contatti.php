<?php
require_once "../global.php";

$current_language = "de";

$page = [
	'meta_title' => 'Wenden Sie sich an unsere Verkaufsabteilung, um weitere Informationen anzufordern | Verni & Fida',
	'meta_description' => 'Füllen Sie das Formular aus oder kontaktieren Sie uns, um weitere Informationen zu Schnitten und Verarbeitung auf großen Blechen und allen Stahlsorten anzufordern',
	'og_image' => '',
	'page_slide' => 'slide-contatti',
	'caption' => 'Informationen anfordern<br/><span>wenden Sie sich an unsere Verkaufsabteilung</span>'
];

getHeader($page);
?>
<div id="page-contents">
	<div class="container mt-5">
		<?php
		require_once('../modules/mod_form/simple-form.php');
		?>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#curriculum').on('click',function () {
	 if($(this).is(':checked'))
	    $(".check-ok").show("slow");
	 else
	   $(".check-ok").hide("slow");
	});
});
</script>
<div class="bg-custom-2 mt-5 py-5">
  <div class="container text-center">
    <h2 class="title">Arbeiten Sie mit uns</h2>
		<p>Senden Sie Ihren Lebenslauf an die E-Mail-Adresse, die nach dem Lesen der Informationen angezeigt wird</p>
	  <input type="checkbox" id="curriculum" name="curriculum" value="check-ok" /> <small style="margin-left:5px;">Ich erkläre, dass ich die <span data-iframe="true" id="open-website" data-src="/pdf/informativa-curriculum.pdf" class="lightgallery-iframe" style="cursor:pointer; color:#bfbfbf; text-decoration:underline;">Informationen für Kandidaten zum Aufbau eines Arbeitsverhältnisses gelesen habe</span></small>
	  <div class="check-ok" style="display:none">
	    <p><a href="mailto:risorseumane@vernifida.it" style="color:#FFF;">risorseumane@vernifida.it</a>
	  </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
