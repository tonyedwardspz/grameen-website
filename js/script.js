var welcomeMessage = "Function called on ready";


// called once the document has fully loaded
$(document).ready(function(){
	console.log("Ready");

	welcome(welcomeMessage);

	//MJC actrivate fancybox
	$('.fancybox').fancybox();
});


// called when the browser window resizes
$(window).resize(function(){
	console.log('Resize')
});


// Storing functions in variables caches them in browser memory
var welcome = function(msg){
	console.log(msg);
}


function applyActiveClass(){

    var myElement = $("body").attr('class');

    switch (myElement)
    {
        case "home":
            $("li.index").addClass("navActive");
            break;
        case "restaurant":
            $("li.restaurant").addClass("navActive");
            break;
        case "takeaway":
            $("li.takeaway").addClass("navActive");
            break;
        case "contact":
            $("li.contact").addClass("navActive");
            break;
        case "attractions":
            $("li.attractions").addClass("navActive");
            break;
       	case "privacy":
            $("li.privacy").addClass("navActive");
            break;
    }
}
