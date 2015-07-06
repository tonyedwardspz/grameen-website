<?php
// Place functions in here and call them from within the html markup.
// This keeps the application logic out of our html/php files.

date_default_timezone_set('Europe/London');


function getCurrentURL($pagePath){

	$urlString = "http://www.grameentandoori.co.uk";

	return $urlString."/".$pagePath;
}



function getRandomReview(){
	$review = [
		'"The best, and most reliable, Indian restaurant in the town. A modern interior and discrete lighting make a pleasant atmosphere." - www.gourmetbritain.com',
		'"Everybody’s food was was delicious. I had the vegetable biryani which was fragrant and tasty and my daughter enjoyed the vegetable balti." - www.qype.co.uk',
    '"All the dishes were beautifully presented and the waiters were attentive, but never pushy. They do take-aways too!" - www.qype.co.uk'
	];

	//MJC - When we have the reviews, randomise the element selected from the array
	$random = rand(0,1);
	return $review[$random];
}

?>
