<!DOCTYPE html>
<?php
	$cookie_name = "user";
	$visits = 2;
	$visitTime = date("h:i:s");
	setcookie($cookie_name, $visits, time() + (86400 * 30), "/"); // 86400 = 1 day
	setcookie("lastVisit", $visitTime, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<html>
<head>
	<title>I244-eksam</title>
	<meta charset="utf-8">
</head>

<body>

<p>Hello There!</p>
<?php
	//$previousVisists = $_COOKIE[$visits];
	//echo $previousVisists;
	if (isset($_COOKIE["user"])) {
		$previousVisists = $_COOKIE["user"];
		$previousVisists++;
		setcookie($cookie_name, $previousVisists, time() + (86400 * 30), "/");
		echo '<p>You have visited this page ' . $_COOKIE["user"] . ' times</p>';
	}
	if (isset($_COOKIE["lastVisit"])) {
		echo '<p>Your las visit was at '. $_COOKIE["lastVisit"].' </p>';
		setcookie("lastVisit", $visitTime, time() + (86400 * 30), "/");
	}
?>


</body>
</html>