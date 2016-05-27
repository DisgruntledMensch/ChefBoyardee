<?php

	include('contact-database.php');

	$url = $_SERVER['REQUEST_URI'];

	switch($url){

		case '/cavalheiroe/index/index.php':
			$name = "Index";
			break;
		case '/cavalheiroe/subpages/about.php':
			$name = "About";
			break;
		case '/cavalheiroe/subpages/contact.php':
			$name = "Contact";
			break;
	}

	$query = 'SELECT * FROM ConTable WHERE Name = "' . $name . '"';
	$result = mysql_query($query);
	$line = mysql_fetch_array($result);
	echo $line["Text"] . '<br/>';

	mysql_close($link);
?>