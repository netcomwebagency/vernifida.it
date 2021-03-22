<?php
  include_once("module-config.php");

  if (isset($_GET['act'])){
    if (isset($_POST) && isset($_POST['recaptcha_response'])){

      $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
      $recaptcha_response = $_POST['recaptcha_response'];

      $recaptcha = file_get_contents($recaptcha_url.'?secret='.GOOGLE_RECAPTCHA_SECRET_KEY.'&response='.$recaptcha_response);
      $recaptcha = json_decode($recaptcha);

      if ($recaptcha->score >= 0.5) {

        //retrieve all fields from form and convert into variables
        //fieldsToVar($_POST,20);

        //Sanitize the user input
        $postdata = checkUserInput($_POST);

        //CODE FOR SENDINBLUE
        if (isset($postdata['iscrizione_newsletter']) && $postdata['iscrizione_newsletter'] == "Si") {
    			echo '<script>
    		 	$(function(){
    			$.post("'.NL_FORM_URL.'",{"'.NL_NAME_FIELD.'":"'.$postdata['nome'].'","'.NL_SURNAME_FIELD.'":"'.$postdata['cognome'].'","'.NL_LANG_FIELD.'":"'.$current_language.'","'.NL_EMAIL_FIELD.'":"'.$postdata['email'].'","from_url":"yes","js_id":"'.NL_JSID.'","id":"'.NL_FORM_ID.'"});
    			});
    			</script>';
        }

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n".
        "Content-type:text/html;charset=UTF-8" . "\r\n".
        "From: ".$postdata['nome']." ".$postdata['cognome']." <noreply@".SITE_DOMAIN.">". "\r\n".
        "Reply-to: ".$postdata['nome']." ".$postdata['cognome']." <".$postdata['email'].">";

        $message = '<p>Il seguente nominativo ha richiesto informazioni</p>
        <ul>
        <li>lingua : '.$current_language.'</li>';

        foreach($postdata as $postdata => $value){
          ($postdata == 'recaptcha_response') ?: $message .= '<li>'.$postdata.' : '.$value.'</li>'  ;
        }

        $message .= '</ul>';

        if(mail(SITE_EMAIL,'Richiesta informazioni dal sito '.SITE_DOMAIN,$message,$headers)){
          echo $module_dictionary['msg-success'];
        } else {
          echo $module_dictionary['msg-failed'];
        }

      } else {
        echo $module_dictionary['msg-failed'];
      }

    } else {
      echo $module_dictionary['msg-failed'];
    }
 } else {
   echo '<h1 class="title">'.$module_dictionary["module-title"].'</h1>'.
   '<h2 class="subtitle">'.$module_dictionary["module-subtitle"].'</h2>
   <p class="mt-4 mb-4">'.$module_dictionary["module-paragraph"].'</p>';

  ?>
  <div id="mod_form">
    <form name="hotel-form" id="hotel-form" action="<?=$_SERVER['PHP_SELF'].'?act=submit';?>" method="POST">
      <div class="row">
        <div class="col-md-6">
          <h4><?=$module_dictionary["title-personal-info"]?></h4>
          <div class="form-row">
            <div class="form-group col">
              <label for="name"><?=$module_dictionary["label-name"]?> : * </label>
              <input class="form-control" id="name" name="nome" type="text" placeholder="<?=$module_dictionary["pholder-name"]?>" data-cons-subject="first_name" required />
            </div>
            <div class="form-group col">
              <label for="surname"><?=$module_dictionary["label-surname"]?> : * </label>
              <input class="form-control" id="surname" name="cognome" type="text" placeholder="<?=$module_dictionary["pholder-surname"]?>" data-cons-subject="last_name" required />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <label for="email"><?=$module_dictionary["label-email"]?> : * </label>
              <input class="form-control" id="email" name="email" type="email" placeholder="<?=$module_dictionary["pholder-email"]?>" data-cons-subject="email" email required />
            </div>
            <div class="form-group col">
              <label for="tel"><?=$module_dictionary["label-tel"]?> : * </label>
              <input class="form-control" id="tel" name="tel" type="tel" placeholder="<?=$module_dictionary["pholder-tel"]?>" required />
            </div>
          </div>
          <h4><?=$module_dictionary["title-holiday-info"]?></h4>
          <div class="form-row">
            <div class="form-group col">
              <label for="arrival"><?=$module_dictionary["label-arrival"]?> :</label>
              <input class="form-control dateselect" id="arrival" name="arrivo" type="text" placeholder="gg/mm/aaaa" />
            </div>
            <div class="form-group col">
              <label for="departure"><?=$module_dictionary["label-departure"]?> :</label>
              <input class="form-control" id="departure" name="partenza" type="text" placeholder="gg/mm/aaaa" />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <input id="flex-date" name="date flessibili" type="checkbox" value="Si">
              <label for="flex-date"><?=$module_dictionary["label-flex-date"]?> </label>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col bootstrap-select-wrapper">
              <label for="rooms"><?=$module_dictionary["label-rooms"]?> :</label>
              <?=SelectField('rooms','camere',10)?>
            </div>
            <div class="form-group col">
              <label for="adults"><?=$module_dictionary["label-adults"]?> :</label>
              <?=SelectField('adults','adulti',10)?>
            </div>
            <div class="form-group col">
              <label for="children"><?=$module_dictionary["label-children"]?> : </label>
              <?=SelectField('children','bambini',12)?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              <div class="row" id="children-block"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h4><?=$module_dictionary["title-message"]?></h4>
          <div class="form-row">
            <div class="form-group col">
              <label for="message"><?=$module_dictionary["label-message"]?> </label>
              <textarea class="form-control" id="message" name="messaggio" rows="6"></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="form-check col pl-4">
              <input class="form-check-input" name="consenso privacy" type="checkbox" id="privacy-policy" value="Si" data-cons-preference="privacy_policy" required />
              <label class="form-check-label" for="privacy-policy"><small><?=$module_dictionary["label-privacy"]?></small></label>
            </div>
          </div>
          <div class="form-row">
            <div class="form-check col pl-4">
              <input class="form-check-input" name="trattamento dati personali" type="checkbox" id="personal-data" value="Si" data-cons-preference="data_processing" required />
              <label class="form-check-label" for="personal-data"><small><?=$module_dictionary["label-personal-data"]?></small></label>
            </div>
          </div>
          <?php
          if (NL_ENABLED){
            echo '
            <h4 class="mt-2">'.$module_dictionary["title-newsletter"].'</h4>
            <p>'.$module_dictionary["subtitle-newsletter"].'</p>
            <div class="form-row">
              <div class="form-check col pl-4">
                <input class="form-check-input" name="iscrizione newsletter" type="checkbox" id="newsletter" value="Si" data-cons-preference="newsletter" />
                <label class="form-check-label" for="newsletter"><small>'.$module_dictionary["label-newsletter"].'</small></label>
              </div>
            </div>
            ';
          }
          ?>
        </div>
        <div class="form-group col text-center m-5">
          <button type="submit" id="btn-submit" class="btn btn-custom btn-lg"><?=$module_dictionary["button-send"]?></button>
        </div>
      </div>
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse" />
    </form>
  </div>
  <?php
  unset($module_dictionary);
}
?>
