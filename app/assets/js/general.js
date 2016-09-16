jQuery(document).ready(function($) {
    //resize
    $( window ).resize(function() {
      location.reload();
      return false;
    });

    //Mobile menu buttons
    $menu_toggle = $('.menu-toggle');
    
    // menu-item-has-children
    $header = $('#header');
    $main = $('main');
    $main_menu = $('#menu-navigation');
    $sub_menus = $('#main-industries');
    $sub_menus.width($main.outerWidth());
    $sub_menus.css({'margin-left': '-'+($main.outerWidth()-$header.outerWidth())+'px', 'display': 'block'});
    $red_line = $('.red-line');
    var $current_menu;
    $main_menu.find('li.menu-item-has-children').on(
    	'click', 
    	function(e) {
            $main.removeClass('slided');
            $sub_menus.removeClass('slided');
            $red_line.removeClass('slided');
            jQuery('#main-industries > li.active').removeClass('active');
	    	// get managment class
	    	var $classes = $(this).attr('class').split(' ');
	    	$($classes).each(function(key, value) {
	    		if (value.indexOf('menu-item-') == 0) {
	    			$sub_menus.find('li.'+value).each(function() {
	    				$main.addClass('slided');
	    				$sub_menus.addClass('slided');
	    				$red_line.addClass('slided');
	    				$menu_toggle.toggle();
	    				$current_menu = $(this).addClass('active');
	    			});	
	    		}
	    	});
            e.preventDefault();
    	}
	);

    $( window ).resize(function() {
      $sub_menus.width($main.outerWidth());
      $sub_menus.css({'margin-left': '-'+($main.outerWidth()-$header.outerWidth())+'px', 'display': 'block'});
    });

    $('.red-line__btn-industries, .submenu_back_button').click(function() {
		$main.removeClass('slided');
		$sub_menus.removeClass('slided');
		$red_line.removeClass('slided');
		$current_menu.removeClass('active');
		$menu_toggle.toggle();
    });


    // Toggle search field
    $('.cir').click(function(){
    	$('.logo-img').toggle();
    	$('.search-field').toggle();
    	return false;
    });
    // Home page
	    // Slider
	    $('.slider').slick({
	   		autoplay: true,
	   		autoplaySpead: 4000,
	   		speed: 1200,
	   		dots: true,
	   		arrows: false
	   });
	// Menu toggle
	$menu_toggle.click(function(){
		$('#header').slideToggle();
		$('#main-solutions').toggle();
		$('#main-industries').toggle();
		$('#main-contact-us').toggle();
		$('#main-download').toggle();
		$('#main').toggle();
		$(this).toggleClass('opened');
		return false;
	});

	// Solution page
		// hide/show modal window
		$('.cu-jq').click(function(){
			$('.modal-window-js').show();
			return false;
		});
		$('.modal-window__btn-exit').click(function(){
			$('.modal-window-js').hide();
			return false;
		});
		//Slider
		$('.main-solutions__screenshots__slider').slick({
	   		autoplay: true,
	   		autoplaySpead: 4000,
	   		speed: 1200,
	   		dots: false
	   	});
		//Toggle text
		$('.btn-slide-toggle').click(function(){
			var toggleText = $(this).parent().parent().children().eq(1);
			if (toggleText.css('display') == 'none'){
				toggleText.css('display','block');
			} else {
				toggleText.css('display','none');
			}
			return false;
		});
		//Chat
		$('.chat-btn').click(function(){
			$('.chat').slideDown();
			return false;
		});
		$('.chat__btn-exit').click(function(){
			$('.chat').slideUp();
			return false;
		});
	// Industries page		

		// Toggle product block
		$('.main-industries__tile__col').click(function(){
			$('.main-industries__tile__col__triangle, .main-industries__tile__col-ins').hide();

			var title = $(this).find('.main-industries__tile__col__block-product__title').text();
			var txt = $(this).find('.main-industries__tile__col__block-product__txt').text();
			var butt = $(this).find('.main-industries__tile__col__block-product__butt').html();
			$('.main-industries__tile__col-ins__title').text(title);
			$('.main-industries__tile__col-ins__txt').text(txt);
			$('.main-industries__tile__col-ins__butt').html(butt);

			$(this).children('.main-industries__tile__col__triangle').show();
			if ($(document).width() > 767) {
				if ($(this).css('order') == 1) $('.main-industries__tile__col-ins').css('order',2);
				else if ($(this).css('order') == 3) $('.main-industries__tile__col-ins').css('order',4);
				else if ($(this).css('order') == 0) $('.main-industries__tile__col-ins').css('order',0);
				
			} else {
				var order = parseInt($(this).css('order')) + 1;
				$('.main-industries__tile__col-ins').css('order', order);
			}
			$('.main-industries__tile__col-ins').show();
			return false;
		});		
		$('.main-industries__tile__col-ins__butt').click(function(){
			$('.main-industries__tile__col__triangle, .main-industries__tile__col-ins').hide();
			return false;
		});

		// Toggle fields block
		$('.main-industries__fields__item').click(function(){
			$('.main-industries__fields__item__block-inside').hide();
			$(this).children('.main-industries__fields__item__block-inside').show();
			return false;
		});
		$('.main-industries__fields__item__block-inside__butt').click(function(){
			$('.main-industries__fields__item__block-inside').hide();
			return false;
		});
});		