<?php
date_default_timezone_set('Europe/London');

function getCurrentURL($pagePath){
	return "http://www.grameentandoori.co.uk/".$pagePath;
}

function getRandomReview(){
	$review = array('"The best, and most reliable, Indian restaurant in the town. A modern interior and discrete lighting make a pleasant atmosphere." - www.gourmetbritain.com',
		'"Everybody’s food was was delicious. I had the vegetable biryani which was fragrant and tasty and my daughter enjoyed the vegetable balti." - www.qype.co.uk',
    '"All the dishes were beautifully presented and the waiters were attentive, but never pushy. They do take-aways too!" - www.qype.co.uk'
   );

	$random = rand(0,1);
	return $review[$random];
}

?>
