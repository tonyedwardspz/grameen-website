<?php
// Place functions in here and call them from within the html markup.
// This keeps the application logic out of our html/php files.

function getCurrentURL($pagePath){

	$urlString = "http://www.grameentandoori.co.uk";

	return $urlString."/".$pagePath;
}



function getRandomReview(){
	$review = ["This is a awesome review","Another awesome review"];


	return $review[0];
}

?>