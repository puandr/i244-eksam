<?php
	$failinimi = 'kommentaarid.txt';
	
	
	if (file_exists($failinimi)) {
		$tekst = file_get_contents($failinimi);
		echo nl2br($tekst);
	} else {
		echo '<h1>Faili ei leitud</h1>';
	}
	
	
	
	
	/*
	foreach(file($failinimi) as $line) {
		echo $line. "\n";
	}
	*/
?>