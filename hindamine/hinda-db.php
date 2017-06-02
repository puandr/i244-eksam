<?php


	$host = "localhost";
	$user = "test";
	$pass = "t3st3r123";
	$db = "test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("Ei saa ühendust mootoriga- ".mysqli_error());
		
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

	$tekst = mysqli_real_escape_string($connection, $_POST['hinne']);


	$query = "INSERT INTO 10162828_eksamiks_hinne (id, hinne)VALUES(NULL, '$tekst')";

	$result = mysqli_query($connection, $query);

	echo mysqli_error($connection);


	//failisse kirjutamine
	$failinimi ="keskmine.txt";
	file_put_contents($failinimi, $_POST['hinne'] . PHP_EOL, FILE_APPEND);
		
header("Location: index.php");

?>