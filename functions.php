<?php
//Connect database

try{
    global $db;
    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset='.DB_CHAR, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Database connection error : <br>'.$e;
}


function getHeader($page,$header_end = null){
    if (file_exists(ROOT.THEME_PATH.DS.'header.php')) {
        // NOT WORKING YET
        include_once ROOT.THEME_PATH.DS.'header.php';
    } else {
        getFullHeader($page);
    }
}

function getFooter($page,$footer_end = null){
    if (file_exists(THEME_PATH.DS.'footer.php')) {
        // NOT WORKING YET
        include_once THEME_PATH.DS.'footer.php';
    } else {
        getFullFooter($page);
    }
}

function htmlHeader($page){

  global $current_language;


  echo '<head>
  <title>'.$page['meta_title'].'</title>
  <meta name="description" content="'.$page['meta_description'].'" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="'.$_SERVER['HTTP_HOST'].'" />
  <meta property="og:site_name" content="'.SITE_NAME.'" />
  <meta charset="UTF-8" />
  <link rel="alternate" hreflang="'.$current_language.'" href="'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'" />
  <meta name="robots" content="index,follow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="/favicon.ico">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
  <!-- Code Lightgallery -->
  <script src="https://cdn.devdata.net/assets/jquery/plugins/lightgallery/dist/js/lightgallery-all.min.js"></script>
  <link rel="stylesheet" href="'.THEME_PATH.'/css/lightgallery.min.css" />
  <script src="https://cdn.devdata.net/assets/jquery/plugins/lightgallery/lib/jquery.mousewheel.min.js"></script>
  <!-- Code Wow.js -->
  <link rel="stylesheet" href="/assets/js/wow/css/libs/animate.css">
  <script src="/assets/js/wow/dist/wow.min.js"></script>
  <!-- Code bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">
  <link href="'.THEME_PATH.'/css/styles.css" rel="stylesheet" type="text/css" />
  <script src="/themes/default/js/scripts.js"></script>
  <!--[if lt IE 9]>
  <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <script src="https://cdn.iubenda.com/cons/beta/iubenda_cons.js"></script>
  <script src="//cdn.iubenda.com/cs/iubenda_cs.js" async></script>
  <script>
    var _iub = _iub || {};
    _iub.cons_instructions = _iub.cons_instructions || [];
    _iub.cons_instructions.push(["init", {
      api_key: "'.IUBENDA_CS_API_KEY.'"
    }]);
    _iub.csConfiguration = {"enableCcpa":true,"lang":"'.$current_language.'","siteId":'.IUBENDA_SITE_ID.',"cookiePolicyId":'.IUBENDA_DOCS_ID[$current_language].', "banner":{
      "acceptButtonDisplay":true,
      "customizeButtonDisplay":true,
      "position":"float-top-center"
     }};
  </script>

  </head>';
}

function getFullHeader($page,$header_prepend=null,$header_append=null){
  global $current_language;
  global $db;

  echo '<!DOCTYPE html>
  <html lang="'.$current_language.'">
  '.$header_prepend;
  htmlHeader($page);
  echo $header_append;

  //Start the layout header
  echo '<body>
  <header id="page-header">';
  include_once $current_language.'/includes/header.php';
  include_once '../global/slides/'.$page['page_slide'].'.php';
  echo '</header>';
}

function getFullFooter($page){
  global $current_language;
  require_once 'includes/top-footer.php';
  echo '<footer id="page-footer">';
    require_once 'includes/footer.php';
  echo '</footer>
</body>
</html>';
}

function privacyPolicyLink($id){
  return '<a href="https://www.iubenda.com/privacy-policy/'.$id.'/legal?ifr=true&height=800&newmarkup=no" class="iubenda-nostyle no-brand iubenda-embed" title="Privacy Policy">Privacy Policy</a>';
}
function cookiePolicyLink($id){
  return '<a href="https://www.iubenda.com/privacy-policy/'.$id.'/cookie-policy" class="iubenda-nostyle no-brand iubenda-embed" title="Cookie Policy">Cookie Policy</a>';
}

function printGoogleAnalytics($code){
    return '<script async src="https://www.googletagmanager.com/gtag/js?id='.$code.'"></script>
    <script type="text/plain" class="_iub_cs_activate">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag("js", new Date());

    gtag("config", "'.$code.'", { "anonymize_ip": true });
    </script>';
}
?>
