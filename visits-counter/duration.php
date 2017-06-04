<!DOCTYPE html>
<html>
<head>
	<title>I244-eksam-visit-duration</title>
	<meta charset="utf-8">	
</head>

<body>
<?php 
	if (!isset($_SESSION)) session_start();
		
	if (!isset($_SESSION['start'])) {
		$start = time();
		echo time();
		
		$_SESSION['start'] = $start;
		echo $_SESSION['start'];
	}
?>


<?php
	$failinimi = "duration.txt";
	if (file_exists($failinimi)) {		
		$failMassiiviks = file($failinimi);
		$massiiviSuurus = count($failMassiiviks);
		echo '<p>Viimane külastus</p>';
	
		echo $failMassiiviks[$massiiviSuurus-1];
	} else {
		echo '<h1>Faili ei leitud</h1>';
	}
	
	
	//$massiiviSuurus = count($failMassiiviks);
	//echo $massiiviSuurus;
	//echo '<p>Viimane külastus</p>';
	
	//echo $failMassiiviks[$massiiviSuurus-1];

?>

<p><a href="duration-logout.php">Väljalogimine</a></p>

</body>
</html>