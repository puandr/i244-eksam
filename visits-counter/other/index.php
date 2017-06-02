<!DOCTYPE html>
<html>
<head>
<title>I244-eksam</title>
<meta charset="utf-8" />

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
<div id="sisu">
	<h2>Tere tulemast!!!</h2>
	
	<?php
	//loome sessiooni kui pole seda loodud
	if(!isset($_SESSION)) session_start();
	
	if(!isset($_SESSION["userip"])) {
		//logime IP ja aja logifaili
		$logfile = "kylalised.txt";
		$ip = $_SERVER['REMOTE_ADDR'];
		$line = date('Y-m-d H:i:s') . " - " . $ip;	
		file_put_contents($logfile, $line . PHP_EOL, FILE_APPEND);
		$_SESSION["userip"]=$ip;
	}
	?>
	
	 <?php
	 	//loeme mitu rida on logis ja saama külastuste arvu.
  		$logfile = "kylalised.txt";
  		$lines = count(file($logfile));
  		echo "Sellel lehel on $lines külastust";
	?>
	<br> 
  	<a href="logout.php" >Lõpeta sessioon</a>
</div>
</body>
</html>
