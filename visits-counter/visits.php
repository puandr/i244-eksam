<!DOCTYPE html>
<html>
<head>
	<title>I244-eksam</title>
	<meta charset="utf-8">
	<style type="text/css">
		#sisu {
			margin: auto;
			margin-top: 10%;
			width: 40%;
			border: 3px solid #73AD21;
			padding: 10px;
		}
	</style>
</head>

<body>
<?php 
	$failinimi = 'visiite.txt';

	if (!isset($_SESSION)) {
		session_start();
		$tekst = date("h:i:sa");
		file_put_contents($failinimi, $tekst . PHP_EOL, FILE_APPEND);	
	}

?>


<p>Kokku külastajaid</p>

<?php
	if (file_exists($failinimi)) {
		$failisisu = file_get_contents($failinimi);
	} else {
		echo '<h1>Faili ei leitud</h1>';
	}
	
	$failMassiiviks = file($failinimi);
	$massiiviSuurus = count($failMassiiviks);
	echo $massiiviSuurus;
	echo '<p>Viimane külastus</p>';
	
	echo $failMassiiviks[$massiiviSuurus-1];
?>

</body>
</html>