<?php
	$result = "";
	$drama = array();
	array_push($drama, "The Shawshank Redemption");
	array_push($drama, "The Green Mile");
	array_push($drama, "Requiem for a Dream");
	$comedy = array();
	array_push($comedy, "The Hangover");
	array_push($comedy, "Knocked Up");
	array_push($comedy, "Due Date");
	$horror = array();
	array_push($horror, "Halloween");
	array_push($horror, "The Conjuring");
	array_push($horror, "The Shining");
	if ($_POST['gendre'] == 'Drama' || $_POST['gendre'] == 'any') {
		foreach ($drama as $movie) {
			if ($_POST['title'] == "" || stristr($movie, $_POST['title']) != false) {
				$result = $result . " - " . $movie;
			} 
		}
	} 
	if ($_POST['gendre'] == 'Comedy' || $_POST['gendre'] == 'any') {
		foreach ($comedy as $movie) {
			if ($_POST['title'] == "" || stristr($movie, $_POST['title']) != false) {
				$result = $result . " - " . $movie;
			} 
		}
	} 
	if ($_POST['gendre'] == 'Horror' || $_POST['gendre'] == 'any') {
		foreach ($horror as $movie) {
			if ($_POST['title'] == "" || stristr($movie, $_POST['title']) != false) {
				$result = $result . " - " . $movie;
			} 
		}
	} 
	echo $result;
?>