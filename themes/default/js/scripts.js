
  $(document).ready(function(){
    $('.lightgallery').lightGallery({
      keyPress:false,
      getCaptionFromTitleOrAlt:false,
      download:false,
      counter:false,
      share:false,
      actualSize:false
    });

    $(".slick-carousel").lightGallery({
      keyPress:false,
      getCaptionFromTitleOrAlt:false,
      download:false,
      counter:false,
      share:false,
      actualSize:false
    });

    $('.lightgallery-iframe').lightGallery({
      selector: 'this'
    });

		$('.slick-carousel').slick({
			autoplay:true,
			dots:true,
			arrows:false,
			speed: 300,
			slidesToShow:3,
			slidesToScroll: 1,
			infinite:false,
			responsive: [
			{
	      breakpoint: 992,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
			{
				breakpoint: 768,
				settings: {
				slidesToShow: 1,
				slidesToScroll: 1
				}
			}]
		});

	});

	$(window).scroll(function(){
		if($(this).scrollTop() > 150) {
			$("#sticky-wrapper").addClass("sticky");
		}
		else {
			$("#sticky-wrapper").removeClass("sticky");
		}
	});

	/* Function menù */
	function openNav() {
		document.getElementById("myNav").style.width = "100%";
	}
	/* Close */
	function closeNav() {
		document.getElementById("myNav").style.width = "0%";
	}

  wow = new WOW({offset: 300})
	wow.init();


// Iubenda scripts
(function (w,d) {
  var loader = function () {
    var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
    s.src="https://cdn.iubenda.com/iubenda.js";
    tag.parentNode.insertBefore(s,tag);};
    if(w.addEventListener){
      w.addEventListener("load", loader, false);
    } else if (w.attachEvent){
      w.attachEvent("onload", loader);
    } else {
      w.onload = loader;
    }
  }
)
(window, document);
