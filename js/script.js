var welcomeMessage = "Function called on ready";



$(document).ready(function(){
	console.log("Ready");

	welcome(welcomeMessage);
});

$(window).resize(function(){
	console.log('Resize')

	
});


var welcome = function(msg){
	console.log(msg);
}
