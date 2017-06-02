<!DOCTYPE html>
<html>
<head>
	<title>I244-eksam</title>
	<meta charset="utf-8">
</head>

<body>
<?php if (!isset($_SESSION['keskmine'])) session_start(); ?>
<p>Palun andke leheküljele hinnet</p>

<form action="hinda-db.php" method="POST">
    <select name="hinne">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<input type="submit" value="Hinda!"/>
</form>

<?php 
	
	$host = "localhost";
	$user = "test";
	$pass = "t3st3r123";
	$db = "test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("Ei saa ühendust mootoriga- ".mysqli_error());
		
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
	
	//keskmine andmebaasist
	$sql="SELECT COUNT(*) FROM 10162828_eksamiks_hinne";
	$result = mysqli_query($connection, $sql);
		
	while($rows = mysqli_fetch_array($result)) {
		$hindeidKokku = $rows[0];
	}
	
	$summa = 0;
	
	$sql="SELECT hinne FROM 10162828_eksamiks_hinne";
	$result2 = mysqli_query($connection, $sql);
	while($rows2 = mysqli_fetch_array($result2)) {
		$summa = $summa + $rows2['hinne'];
	}
	
	$keskmine = $summa / $hindeidKokku;
	echo '<p>Keskmine hinne andmebaasis on ' . $keskmine . '</p>';
	
	//keskmine failist
	$failinimi = "keskmine.txt";
	if (file_exists($failinimi)) {
		/*
		$failisisu = file_get_contents($failinimi);
		*/
		$failMassiiviks = file($failinimi);
	} else {
		echo '<h1>Faili ei leitud</h1>';
	}
	
	$summaFailist = 0;
	$massiiviSuurus = count($failMassiiviks);
	for ($i = 0; $i < $massiiviSuurus; $i++) {
		$summaFailist = $summaFailist + $failMassiiviks[$i];
	}
	
	$keskmineFailist = $summaFailist / $massiiviSuurus;
	echo '<p>Keskmine hinne failist on ' . $keskmineFailist . '</p>';
	
	
?>



</body>
</html>