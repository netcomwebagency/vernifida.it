<?php
  include_once("languages/$current_language.php");

  $recipient = SITE_EMAIL;
  $domain = SITE_DOMAIN;
?>
<script src="https://www.google.com/recaptcha/api.js?render=<?=GOOGLE_RECAPTCHA_SITE_KEY?>"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
$(function(){
  moment.locale('<?=$current_language?>');

  $('input[name="arrivo"]').daterangepicker({
      ranges: true,
      autoApply: true,
      minDate : new Date(),
      applyButtonClasses: false,
      autoUpdateInput: false
    },function (start, end) {
      $('input[name="arrivo"]').val(start.format('DD/MM/YYYY'));
      $('input[name="partenza"]').val(end.format('DD/MM/YYYY'));
  });

  $("#children").change(function(){
    $("#children-block").empty();
    childs = $(this).val();
    childs_age_label = '<?=$module_dictionary["label-child-age"]?>';
    child_age_row = 16 ;


    if(Math.floor(childs) && $.isNumeric(childs)){
      count = 1;
      for(i=0; i<childs; i++){
        $("#children-block").append('<div class="col-md-3"><label><small>'+childs_age_label+' '+count+'</small></label>'+selectField(childs_age_label+count,childs_age_label+count,child_age_row)+'</div>');
        count++;
        if(count > childs) break;
      }
    }
  });

  function selectField(label,name,max_value){
    htmlout = '<select class="form-control" id="'+label+'" name="'+name+'"><option value="0" selected>---</option>';
    for (f = 1; f <= max_value; f++){
      htmlout += '<option value="'+f+'">'+f+'</option>';
    }
    htmlout += '</select>';
    return htmlout;
  }


  grecaptcha.ready(function() {
    grecaptcha.execute('<?=GOOGLE_RECAPTCHA_SITE_KEY?>', {action: 'submit'}).then(function(token) {
      var recaptchaResponse = document.getElementById('recaptchaResponse');
      recaptchaResponse.value = token ;
    });
  });

  //Validate the form
  $('#btn-submit').click(function(e){
    e.preventDefault();

    _iub.cons.submit({
      writeOnLocalStorage: false, // default: false
      form: {
        selector: document.getElementById('hotel-form'),
      },
      consent: {
        legal_notices: [
          {
            identifier: 'privacy_policy',
          },

          {
            identifier: 'data_processing',
          }
        ],
      }
    })
      .success(function (response) {
        console.log("success", response);
        $('form').submit();

      })
      .error(function (response) {
        console.log("error", response);
      });
  });
});
</script>
