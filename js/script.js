// called once the document has fully loaded
$(document).ready(function(){

    applyActiveClass();
    alterTitleText();
    phoneNumberSmallScreen();

    // Plugin calls
	$('.fancybox').fancybox();
});


// called when the browser window resizes
$(window).resize(function(){
    alterTitleText();
    phoneNumberSmallScreen();
});


var alterTitleText = function() {
    if(window.innerWidth <= 280) {
        $("a.navbar-brand").text("Grameen");
    } else if (window.innerWidth <= 370){
        $("a.navbar-brand").text("Grameen Tandoori");
    } else {
        $("a.navbar-brand").text("Grameen Tandoori Restaurant");
    }
}

var phoneNumberSmallScreen = function(){
    if (window.innerWidth <= 600) {
        $(".address a").addClass("btn");
    }
}


var applyActiveClass = function(){

    var myElement = $("body").attr('class');

    switch (myElement){
        case "home":
            $("li.home").addClass("navActive");
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
        default:
            return;
    }
}
