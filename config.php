<?php
// Errors Sections
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

// Engine
define('ROUTER','router.php');

// Theme
define('THEME','default');
define('ADMIN_THEME','default');

// Paths Section
define('DS',DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('SITE_URL', DS);
define('SITE_UPLOAD_PATH', DS.'upload');
define('UPLOAD_PATH', ROOT.DS.'upload');
define('MODULES_PATH', ROOT.DS.'modules');
define('CLASSES_PATH', ROOT.DS.'classes');
define('THEME_PATH',DS.'themes'.DS.THEME);

//Images Section
define('THUMB_WIDTH',600);
define('THUMB_HEIGHT',400);

// Database Section
define('DB_NAME','c13pralba522');
define('DB_USER','c13primalba2205');
define('DB_PASSWORD','zhJTpU@2');
define('DB_HOST','localhost');
define('DB_CHAR','utf8');

// Domain and site info
define('SITE_NAME','Verni & Fida Lavorazione Lamiere');
define('SITE_DOMAIN','vernifida.it');
define('SITE_EMAIL','info@vernifida.it');
define('BOOKING_EMAIL', 'info@vernifida.it');

// Newsletter
define('NL_ENABLED',false);
define('NL_FORM_URL','https://sib.netcomitaly.com/users/subscribeembed');
define('NL_JSID','5s91');
define('NL_FORM_ID','1');
define('NL_NAME_FIELD','NOME');
define('NL_SURNAME_FIELD','COGNOME');
define('NL_EMAIL_FIELD','email');
define('NL_LANG_FIELD','LINGUA');

// Privacy and cookies settings
define('IUBENDA_CS_API_KEY','b0rFbmUVYFrTHWNPcMGQ8FEY31wJQUqj');
define('IUBENDA_SITE_ID','1790861');
define('IUBENDA_DOCS_ID', array("it"=>"80823420","en"=>"62841362","de"=>"73772852"));

//Google Services
define('GOOGLE_RECAPTCHA_SITE_KEY','6Lfa5d4ZAAAAAOPidbWRHaroze2U_mRxrHY9KwCV');
define('GOOGLE_RECAPTCHA_SECRET_KEY','6Lfa5d4ZAAAAAF140yOuArvA6c8R64y90Uu7OiVc');
define('GOOGLE_TRACKING_ID','');

// Language Section
define('DEFAULT_LANG','it');

// Module Config Section
// Last Minute Module

define('LASTMINUTE_PAGE','');
define('BOOKING_PAGE','');

// Newsletter Section
