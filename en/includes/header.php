<div id="sticky-wrapper">
  <div class="container-fluid">
    <div class="row">
			<div class="col-xl-3 col-6">
	      <a href="/en/index/"><img src="/images/logo.png" alt="Verni&Fida" class="logo"></a>
	    </div>
	    <div class="col-xl-8 d-none d-xl-block d-xs-none">
				<nav>
					<ul class="menu">
						<li><a href="/en/index/">Home</a></li>
						<li><a href="/en/azienda/">Company</a></li>
            <li><a href="/en/vantaggi/">Why choose us</a></li>
						<li><a href="/en/materiali/">Materials</a></li>
						<li class="nav-item dropdown">
  		        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  		          Machining
  		        </a>
  		        <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/en/lavorazioni/">Machining</a></li>
    						<li><a class="dropdown-item" href="/en/taglio-lamiere/">Sheet metal cutting</a></li>
    						<li><a class="dropdown-item" href="/en/piegatura/">Sheet metal bending</a></li>
                <li><a class="dropdown-item" href="/en/lavorazioni-meccaniche/">Mechanical machining</a></li>
								<li><a class="dropdown-item" href="/en/saldatura/">Welding</a></li>
  		        </ul>
  		      </li>
						<li><a href="/en/certificazioni/">Certifications</a></li>
            <li><a href="/en/posizione/">Where we are</a></li>
            <li><a href="/en/contatti/">Contact</a></li>
					</ul>
				</nav>
      </div>
      <div class="col-xl-1 d-none d-xl-block d-xs-none">
        <?php
        $current_language = $_SESSION["lang"] = "en";

        $langs = Array("de","it","en");
        $langmenu = <<< LANGMENU
        <nav id="language-menu">
        <ul>
          <li class="dropdown btn-group">
            <button type="button" class="btn btn-default dropdown-toggle text-uppercase" data-toggle="dropdown">
              $current_language<br/>
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
LANGMENU;

        foreach ($langs as $value){
          if ( !($current_language == $value)) {
            $langmenu .= '<li><a href="'.str_replace('/'.$current_language,'/'.$value,$_SERVER['PHP_SELF']).'">'.$value.'</a></li>';
          }
        }

         $langmenu .= <<< LANGMENU
            </ul>
          </li>
          </ul>
        </nav>
LANGMENU;
         echo $langmenu;
        ?>
	    </div>
      <div class="menu-mobile col-6 d-block d-xl-none">
				<!-- Start mobile menu -->
				<div id="myNav" class="overlay">
		      <!-- Button to close the overlay navigation -->
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		      <!-- Overlay content -->
					<div class="overlay-content">
            <div class="language-menu">
              <?php
              $langmenu = <<< LANGMENU
              <div class="language-menu">
              <ul>
                <li>
                  <span>
                    $current_language
                  </span>
                </li>
LANGMENU;

              foreach ($langs as $value){
                if ( !($current_language == $value)) {
                  $langmenu .= '<li><a href="'.str_replace('/'.$current_language,'/'.$value,$_SERVER['PHP_SELF']).'">'.$value.'</a></li>';
                }
              }
               $langmenu .= <<< LANGMENU
                </ul>
              </div>
LANGMENU;
               echo $langmenu;
              ?>
            </div>
		        <ul class="nav navbar-nav">
							<li><a href="/en/index/">Home</a></li>
							<li><a href="/en/azienda/">Company</a></li>
              <li><a href="/en/vantaggi/">Why choose us</a></li>
							<li><a href="/en/materiali/">Materials</a></li>
							<li class="nav-item dropdown">
    		        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		          Machining
    		        </a>
    		        <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/en/lavorazioni/">Machining</a></li>
      						<li><a class="dropdown-item" href="/en/taglio-lamiere/">Sheet metal cutting</a></li>
      						<li><a class="dropdown-item" href="/en/piegatura/">Sheet metal bending</a></li>
                  <li><a class="dropdown-item" href="/en/lavorazioni-meccaniche/">Mechanical machining</a></li>
									<li><a class="dropdown-item" href="/en/saldatura/">Welding</a></li>
    		        </ul>
    		      </li>
							<li><a href="/en/certificazioni/">Certifications</a></li>
              <li><a href="/en/posizione/">Where we are</a></li>
              <li><a href="/en/contatti/">Contact</a></li>
		        </ul>
		      </div>
				</div>
				<!-- Use any element to open/show the overlay navigation menu -->
				<div onclick="openNav()">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
						<span class="navbar-toggler-icon"></span>
				  </button>
				</div>
				<!-- End mobile menu -->
	    </div>
    </div>
  </div>
</div>
<?php
//require_once($page['page_slide']);
?>
