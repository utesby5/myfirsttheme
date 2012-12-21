// Execute jQuery functions only *after* jQuery JS has loaded
$(function(){
	$('#primary-nav').attr('data-spy','affix');
	$('#primary-nav').attr('data-offset-top','220')
	
	
//	 Capture click event of main div
//	$('#main .row .span9').click(function(){
//		$(this).addClass('highlight');
//	});
//	
	
	// Capture hover over sidebar
	$('#main .row .span3').hover(
//		function(){
//			$(this).addClass('highlight');
//		},	
//		function(){
//			$(this).removeClass('highlight');
//		}
	);
	
	// Capture double-click of post paragraphs 
	$('p').dblclick(function(){
		$(this).slideUp(1000);
	});
});

// Listen for keyup events
$(document).keyup(function(e){
//	switch(e.which){
//	case 39: //right arrow
//		window.location= 'http://www.google.com';
//		break;
//	case 20: //caps lock
//		$('input[name=s]').val('');
//		break;
//	case 76: // escape key
//		// Get the URL for wp-admin
//		var url = $('footer a.login').attr('href');
//		window.location = url;
//		break;
//	}
});
