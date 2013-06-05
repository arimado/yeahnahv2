

var $ob = jQuery.noConflict();




/* STREETSTYLE */


$ob(function() {
	$ob('.streetstyle-side-box').mouseenter(function(){
		$ob('.streetstyle-side-txt').fadeTo(100, 0.3);
	});
	$ob('.streetstyle-side-box').mouseout(function(){
		$ob('.streetstyle-side-txt').fadeTo(100, 0.5);
	});

});

/* 

// this was my last attempt at trying to get the thing hover

$ob(function() { //fade effect
    $ob('.streetstyle-hover').hover(function() {
        $ob(this).stop().fadeTo(100, .5);
    }, function() {
        $ob(this).stop().fadeTo(200, 1);
    });
});

$ob(function() {
	$ob('.streetstyle-side-box').mouseenter(function() {
		$ob('.streetstyle-hover').mouseenter(function(){
			
		});
	});
});

*/

/*


$ob(function(){
	$ob('.streetstyle-side-box').hover(function() {
		$ob('.streetstyle-side-txt').function(){
			$ob(this).fadeTo(100, .5);
		}); 
	});
});

*/

/*

$ob(function() {
	$ob('.streetstyle-side-box').mouseenter(function(){
		$ob('.streetstyle-side-txt').mouseenter(function(){
			$ob(this).fadeTo(100, 0.3);
		});
	});
	$ob('.streetstyle-side-box').mouseout(function(){
		$ob('.streetstyle-side-txt').mouseout(function(){
			$ob(this).fadeTo(100, 1);
		});
	});
	
});

*/


/* MOST POPULAR TABS */

$ob(function() {
	$ob('#quicktabs-focused_side_tab > .item-list').css('margin-left','8px');
});

/* HAIKU */


$ob(function() {
	$ob('.haiku-page-title-wrapper').mouseenter(function(){
		$ob(this).css('display', 'none');
	});
	
	$ob('.haiku-page-title-wrapper').mouseout(function(){
		$ob(this).css('display', '1');
	});
	
});


$ob(function() {
	var prevURL = $ob(".prev > a").attr('href');
	var nextURL = $ob(".next > a").attr('href');
	
	$ob(".content-streetstyle-next > .control-button").wrap(function() {
  	 	var link = $ob('<a/>');
  		 link.attr('href', nextURL);
  		 return link;
	});
	
	$ob(".content-streetstyle-prev > .control-button").wrap(function() {
  	 	var link = $ob('<a/>');
  		 link.attr('href', prevURL);
  		 return link;
	});
	
	
	$ob(function(){
		if (prevURL === undefined) {
			$ob('.content-streetstyle-prev').css('display', 'none');
		} 
	});
	
	$ob(function(){
		if (nextURL === undefined) {
			$ob('.content-streetstyle-next').css('display', 'none');
		} 
	});

	
});

/*

******** VIDEO PAGE ********

*/

/*
$ob(function() {  // Append Link
	var videoURL = $ob(".video-txt > a").attr('href');
	$ob(".video-hover-bg-txt").click(function() {
		window.location=(videoURL); 
	});
}) 

*/

$ob(function() { 
    $ob('.video-hover-bg-txt').hover(function() {
        $ob(this).stop().fadeTo(100, 1);
    		}, function() {
        $ob(this).stop().fadeTo(200, 0);
    });
    
});

/*FEATURED 

PREVIOUS  / NExXT BUTTONS 

*/

$ob(function(){

	$ob(function(){
		var replaced = $ob("#vscc_controls_next_focused_featured-block").html().replace('next','>');
		$ob("#vscc_controls_next_focused_featured-block").html(replaced);
	});


	$ob(function(){
		var replaced = $ob("#vscc_controls_previous_focused_featured-block").html().replace('previous','<');
		$ob("#vscc_controls_previous_focused_featured-block").html(replaced);
	});


	$ob(function(){
		$ob('#vscc_controls_next_focused_featured-block').wrap('<div class="featured-next-button" />');
	});


	$ob(function(){
		$ob('#vscc_controls_previous_focused_featured-block').wrap('<div class="featured-previous-button" />');
	});
});


/* FOOTER */




$ob(function(){
	$ob('.footer-box-link a').hover(function(){
		$ob('.footer-box-link').stop().css('background', 'white');
  		  }, function() {
        	$ob('.footer-box-link').stop().css('background','black');
   	 });
   	 
   	 $ob('.footer-box-link a').hover(function(){
		$ob('.footer-box-link a').stop().css('color', 'black');
  		  }, function() {
        	$ob('.footer-box-link a').stop().css('color', 'white');
   	 });
});






