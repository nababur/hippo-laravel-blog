(function ($) {
    "use strict";

    // preloader
    $(window).on('load', function(event) {
      $('.preloader').delay(500).fadeOut(500);
  });
  
  


    /*--
		 Mobile Menu 
	-----------------------------------*/       
    
    /*Variables*/
    var $offCanvasNav = $('.mobile-menu'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active-expand');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active-expand');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.closest('li').siblings('li').removeClass('active-expand');
                $this.siblings('ul').slideDown();
            }
        }
    });
    
    $( ".sub-menu" ).parent( "li" ).addClass( "menu-item-has-children" );

  /*--
		sticky Menu
	-----------------------------------*/
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 245) {
			$(".header-bottom").removeClass("sticky");
		} else {
			$(".header-bottom").addClass("sticky");
		}
	});

      /*--
        nice select
      -----------------------------------*/
      $('select').niceSelect();

 
    /*--
      WOW Js  
    -----------------------------------*/
    new WOW().init();
    
  
    $(".alert-danger, .alert-success").fadeTo(2000, 9000).fadeOut(9000, function(){
        $(".alert-danger, .alert-success").fadeOut(9000);
    });



    
    
})(jQuery);