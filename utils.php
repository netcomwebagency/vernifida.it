<?php

/*** LANGUAGES ***/

function getLanguage(){
  global $current_language;
    if (isset($_GET['lang']) && !empty($_GET['lang']) && strlen($_GET['lang']) == 2){
        $lang = checkInput($_GET['lang']);
        if($_SESSION['lang']){
            $_SESSION['lang'] = $lang;
        }
    } elseif (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    } else {
        $lang = DEFAULT_LANG;
        $_SESSION['lang'] = $lang;
    }
    return $lang;
}

function getLanguages($obj){
  $stmt = $obj->prepare("SELECT * FROM languages ORDER BY id DESC");
  $stmt->execute();
  $langs = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $langs;
}

function check_language(){
    global $current_language;

    if (isset($_GET['lang'])) {
        $current_language = checkInput($_GET['lang']);
        $_SESSION['language'] = $current_language;
    } elseif ($_SESSION['language']) {
        $current_language = $_SESSION['language'];
    } else {
        $current_language = DEFAULT_LANG;
        $_SESSION['language'] = $current_language;
    }
}

function languages_menu($obj,$view){
    global $current_language;
    $stmt = $obj->prepare("SELECT * FROM languages ORDER BY id DESC");
    $stmt->execute();
    $lngs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $uri = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];

    // Check querystring lang format

    if (strpos($uri,'&lang='.$current_language) !== false) {
        $uri = str_replace('&lang='.$current_language,'',$uri);
    } elseif (strpos($uri,'lang='.$current_language) !== false) {
        $uri = str_replace('lang='.$current_language,'',$uri);
    }

    $langmenu = '';

    switch ($view) {
      case 'inline':

      $langmenu .= <<< LANGMENU

      <ul>
LANGMENU;

      foreach($lngs as $row) {

          if ($row['country'] == $current_language){
              $langmenu .= ' <li><span><b>'.$row['language'].'</b></span></li> ';
          } else {
              $langmenu .= ' <li><a href="'.str_replace('/'.$current_language,'/'.$row['country'],$_SERVER['PHP_SELF']).'">'.$row['language'].'</a></li> ';
          }
      }

      $langmenu .= <<< LANGMENU
       </ul>
       </nav>
LANGMENU;

      break;

      case 'dropdown':

      $langmenu .= <<< LANGMENU
      <nav id="language-menu">
      <ul>
        <li class="dropdown btn-group">
          <button type="button" class="btn btn-default dropdown-toggle text-uppercase" data-toggle="dropdown">
            $current_language
          <br/><span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
LANGMENU;

        foreach($lngs as $row) {

            if ($row['country'] !== $current_language){
              $langmenu .= '<li><a href="'.str_replace('/'.$current_language,'/'.$row['country'],$_SERVER['PHP_SELF']).'">'.$row['country'].'</a></li>';
            }

        }

        $langmenu .= <<< LANGMENU
           </ul>
         </li>
         </ul>
         </nav>
LANGMENU;


        break;

      default:
        // code...
        break;
    }

    unset ($lngs);
    echo $langmenu;

}

/*** DATE ***/

function dateEngToIta($data){
  $data = date('d-m-Y',strtotime($data));
  return $data;
}

function dateItaToEng($data){
  $data = date('Y-m-d',strtotime($data));
  return $data;
}

function checkboxGetValue($data) {
  $data = isset($data) ? 1 : 0;
  return $data;
}

function printCheckboxStatus($data) {
  $status = ($data == 1) ? ' checked="checked"' : '' ;
  echo $status;
}


/* FORM FUNCTIONS */
function selectField($label,$name,$max_value){
  $htmlout = '<select class="form-control" id="'.$label.'" name="'.$name.'"><option value="0" selected>---</option>';
  for ($i = 1; $i <= $max_value; $i++){
    $htmlout .= '<option value="'.$i.'">'.$i.'</option>';
  }
  $htmlout .= '</select>';
  return $htmlout;
}


function checkInput($data) {

    switch ($data) {
      case is_numeric($data):
        $secure_data = intval(filter_var($data, FILTER_SANITIZE_NUMBER_INT));
        break;

      case is_float($data):
        $secure_data = intval(filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT));
        break;

      case is_string($data):
        $secure_data = filter_var($data, FILTER_SANITIZE_STRING);
        break;

      case is_array($data):
        $secure_data = filter_var_array($data,FILTER_SANITIZE_STRING);
        break;

      default:
        $secure_data = filter_var($data, FILTER_SANITIZE_STRING);
        break;
    }

    return $secure_data;

}

/* Retrieve all form fields and convert in every single variables */
function fieldsToVar($data,$limit) {
  if(count($data) < $limit){
    if (is_array($data)){
      foreach($data as $data => $value){
        global ${$data};
        ${$data} = checkUserInput($value);
      }
    } else {
      echo $data;
    }
  }
}

/* Securizing user input */
function checkUserInput($data) {
      switch ($data) {
        case is_numeric($data):
          $secure_data = intval(filter_var($data, FILTER_SANITIZE_NUMBER_INT));
          break;

        case is_float($data):
          $secure_data = intval(filter_var($data, FILTER_SANITIZE_NUMBER_FLOAT));
          break;

        case is_string($data):
          $secure_data = filter_var($data, FILTER_SANITIZE_STRING);
          break;

        case is_array($data):
          $secure_data = filter_var_array($data,FILTER_SANITIZE_STRING);
          break;

        default:
          $secure_data = filter_var($data, FILTER_SANITIZE_STRING);
          break;
      }
      return $secure_data;
}

function pagination($items){

    global $items_per_page;
    global $items_per_row;
    global $current_page;

    $current_page = ((isset($_GET['pag'])) && (!empty($_GET['pag'])) && ($_GET['pag'] >=0) ) ? $_GET['pag'] : 1;
    $total_items = count($items);
    $items_per_page = ($items_per_page) ? $items_per_page : 20;
    $items_per_row = ($items_per_row) ? $items_per_row : 4;
    $total_pages =  Floor($total_items / $items_per_page);
    $total_pages = ($total_items % $items_per_page == 0) ? $total_pages : $total_pages + 1;


    if($total_pages > 1){
      $querystring = str_replace('&pag='.$current_page,'',$_SERVER["QUERY_STRING"]);

      $pages_navbar = '<nav aria-label="page-navigation">';
      $pages_navbar .= '<ul class="pagination">';

      if ($current_page > 1) { $pages_navbar .= '<li class="page-item"><a class="page-link" href="dashboard.php?'.$querystring.'&pag='.($current_page-1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>'; };

      for ($i = 1; $i <= $total_pages; $i++){
          $pages_navbar .= '<li class="page-item'.($i == $current_page ? ' active' : '').'"><a class="page-link" href="dashboard.php?'.$querystring.'&pag='.$i.'">'.$i.'</a></li>';
      }

      if ($current_page < $total_pages ) { $pages_navbar .= '<li class="page-item"><a class="page-link" href="dashboard.php?'.$querystring.'&pag='.($current_page+1).'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>'; };

      $pages_navbar .= '</ul>';
      $pages_navbar .= '</nav>';

      return $pages_navbar;
    }
}

?>
