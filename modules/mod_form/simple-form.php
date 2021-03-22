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
        "From: $name $surname <noreply@$domain>". "\r\n".
        "Reply-to: $name $surname <$email>";

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
     '<h2 class="subtitle">'.$module_dictionary["module-subtitle"].'</h2>';
  ?>
  <div id="mod_form">
    <form name="mod_form" action="<?=$_SERVER['PHP_SELF'].'?act=submit';?>" method="POST">
      <div class="form-row">
        <div class="form-group col">
          <label for="name"><?=$module_dictionary["label-name"]?> : * </label>
          <input class="form-control" id="name" name="name" type="text" placeholder="<?=$module_dictionary["pholder-name"]?>" required />
        </div>
        <div class="form-group col">
          <label for="surname"><?=$module_dictionary["label-surname"]?> : * </label>
          <input class="form-control" id="surname" name="surname" type="text" placeholder="<?=$module_dictionary["pholder-surname"]?>" required />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col">
          <label for="email"><?=$module_dictionary["label-email"]?> : * </label>
          <input class="form-control" id="email" name="email" type="text" placeholder="<?=$module_dictionary["pholder-email"]?>" email required />
        </div>
        <div class="form-group col">
          <label for="tel"><?=$module_dictionary["label-tel"]?> : </label>
          <input class="form-control" id="tel" name="tel" type="text" placeholder="<?=$module_dictionary["pholder-tel"]?>" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col">
          <label for="message"><?=$module_dictionary["label-message"]?> </label>
          <textarea class="form-control" id="message" name="message" rows="5"></textarea>
        </div>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="privacy-policy" type="checkbox" id="privacy-policy" value="ok" required />
        <label class="form-check-label" for="privacy-policy"><small><?=$module_dictionary["label-privacy"]?></small></label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="personal-data" type="checkbox" id="personal-data" value="ok" required />
        <label class="form-check-label" for="personal-data"><small><?=$module_dictionary["label-personal-data"]?></small></label>
      </div>
      <div class="form-group text-center mt-5">
        <input type="submit" name="submit" class="btn btn-lg btn-primary" value="<?=$module_dictionary["button-send"]?>" />
      </div>
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse" />
    </form>
  </div>
  <?php
  unset($module_dictionary);
  }
?>
