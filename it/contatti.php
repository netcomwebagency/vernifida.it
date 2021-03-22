<?php
require_once "../global.php";

$current_language = "it";

$page = [
	'meta_title' => 'Contatta il nostro reparto commerciale per richiedere maggiori informazioni | Verni & Fida',
	'meta_description' => 'Compila il modulo o contattaci per richiedere maggiori informazioni sui tagli e le lavorazioni su lamiere di grandi dimensioni e su tutti i tipi di acciaio',
	'og_image' => '',
	'page_slide' => 'slide-contatti',
	'caption' => 'Richiedi informazioni<br/><span>contatta il nostro ufficio commerciale</span>'
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
    <h2 class="title">Lavora con noi</h2>
		<p>Invia il tuo curriculum vitae all'indirizzo email che comparirà dopo aver preso visione dell'informativa</p>
	  <input type="checkbox" id="curriculum" name="curriculum" value="check-ok" /> <small style="margin-left:5px;">Dichiaro di avere preso visione dell'<span data-iframe="true" id="open-website" data-src="/pdf/informativa-curriculum.pdf" class="lightgallery-iframe" style="cursor:pointer; color:#bfbfbf; text-decoration:underline;">informativa per Candidati per l'instaurazione di un rapporto di lavoro</span></small>
	  <div class="check-ok" style="display:none">
	    <p><a href="mailto:risorseumane@vernifida.it" style="color:#FFF;">risorseumane@vernifida.it</a>
	  </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
