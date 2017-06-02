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
	$host = "localhost";
	$user = "test";
	$pass = "t3st3r123";
	$db = "test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("Ei saa ühendust mootoriga- ".mysqli_error());
		
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
		
	if (!isset($_SESSION['userip'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$aeg = date("h:i:s");		
		$_SESSION['userip'] = $ip;

		$host = "localhost";
		$user = "test";
		$pass = "t3st3r123";
		$db = "test";
		$connection = mysqli_connect($host, $user, $pass, $db) or die("Ei saa ühendust mootoriga- ".mysqli_error());
			
		mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

		$query = "INSERT INTO 10162828_eksamiks_visits (id, ip, aeg)VALUES(NULL, '$ip', '$aeg')";

		$result = mysqli_query($connection, $query);

		echo mysqli_error($connection);
	}

	
	$sql="SELECT COUNT(*) FROM 10162828_eksamiks_visits";
	$result = mysqli_query($connection, $sql);

	echo '<p>Külastajste arv:</p>';
	
	while($rows = mysqli_fetch_array($result)) {
		echo nl2br(htmlspecialchars($rows[0]) . PHP_EOL);
	}
	
	
	echo '<p>Unikaalsed IP-d</p>';
	$sql="SELECT ip, COUNT(*) as countip FROM 10162828_eksamiks_visits GROUP BY ip";
	$result = mysqli_query($connection, $sql);
		
	while($rows = mysqli_fetch_array($result)) {
		
		echo "<p>" . $rows['ip'] . " " . $rows['countip'] . "</p>";
		
	}

?>


<p><a href="logout-db.php">Väljalogimine</a></p>

</body>
</html>