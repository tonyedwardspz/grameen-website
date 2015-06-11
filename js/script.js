var welcomeMessage = "Function called on ready";


// called once the document has fully loaded
$(document).ready(function(){
	console.log("Ready");

	welcome(welcomeMessage);
});


// called when the browser window resizes
$(window).resize(function(){
	console.log('Resize')
});


// Storing functions in variables caches them in browser memory
var welcome = function(msg){
	console.log(msg);
}

// MJC Activate fancyBox
$(".fancybox")
	.attr('rel', 'gallery')
	.fancybox({
	    padding : 0
	});

// Launch fancyBox on first element
//$(".fancybox").eq(0).trigger('click');
