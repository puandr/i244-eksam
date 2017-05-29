<?php
	$host = "localhost";
	$user = "test";
	$pass = "t3st3r123";
	$db = "test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("Ei saa ühendust mootoriga- ".mysqli_error());
	
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
	
	$sql="SELECT * FROM 10162828_i244_eksam_comment";
	$result = mysqli_query($connection, $sql);
	
	while($rows = mysqli_fetch_array($result)) {
		echo nl2br(htmlspecialchars($rows['kommentaar']) . PHP_EOL);
	}

?>