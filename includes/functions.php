<?php
// Place functions in here and call them from within the html markup.
// This keeps the application logic out of our html/php files.

date_default_timezone_set('Europe/London');


function getCurrentURL($pagePath){

	$urlString = "http://www.grameentandoori.co.uk";

	return $urlString."/".$pagePath;
}



function getRandomReview(){
	$review = ["This is an awesome review","Another awesome review"];

	//MJC - When we have the reviews, randomise the element selected from the array
	$random = rand(0,1);
	return $review[$random];
}

?>
