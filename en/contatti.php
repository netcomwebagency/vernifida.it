<?php
require_once "../global.php";

$current_language = "en";

$page = [
	'meta_title' => 'Contact our sales department to request more information | Verni & Fida',
	'meta_description' => 'Fill out the form or contact us to request more information on cuts and processing on large sheets and on all types of steel',
	'og_image' => '',
	'page_slide' => 'slide-contatti',
	'caption' => 'Request information<br/><span>contact our sales department</span>'
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
    <h2 class="title">Work with us</h2>
		<p>Send your curriculum vitae to the email address that will appear after having read the information</p>
	  <input type="checkbox" id="curriculum" name="curriculum" value="check-ok" /> <small style="margin-left:5px;">I declare that I have read the <span data-iframe="true" id="open-website" data-src="/pdf/informativa-curriculum.pdf" class="lightgallery-iframe" style="cursor:pointer; color:#bfbfbf; text-decoration:underline;">information for Candidates for the establishment of an employment relationship</span></small>
	  <div class="check-ok" style="display:none">
	    <p><a href="mailto:risorseumane@vernifida.it" style="color:#FFF;">risorseumane@vernifida.it</a>
	  </div>
  </div>
</div>
<?php
getFullFooter($page);
?>
