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
	if (!isset($_SESSION)) session_start();
	$failinimi = 'visiite.txt';
	
	if (!isset($_SESSION['userip'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$tekst = date("h:i:s");
		
		file_put_contents($failinimi, $tekst . PHP_EOL, FILE_APPEND);
		$_SESSION['userip'] = $ip;
	}

?>


<p>Kokku külastajaid</p>

<?php
	if (file_exists($failinimi)) {
		/*
		$failisisu = file_get_contents($failinimi);
		*/
		$failMassiiviks = file($failinimi);
	} else {
		echo '<h1>Faili ei leitud</h1>';
	}
	
	
	$massiiviSuurus = count($failMassiiviks);
	echo $massiiviSuurus;
	echo '<p>Viimane külastus</p>';
	
	echo $failMassiiviks[$massiiviSuurus-1];

?>

<p><a href="logout.php">Väljalogimine</a></p>

</body>
</html>