<?php
$started = $_SESSION['start'];
$finished = time();
$duration = $finished - $started;
$filename = "duration.txt";
file_put_contents($filename, $duration . PHP_EOL, FILE_APPEND);	
if(isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '',
		time()-42000, '/');
	}
	$_SESSION = array();
	session_destroy();
	
	header("Location: duration.php");
?>