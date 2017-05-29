<?php
	/* Classic way
	
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	*/
		
	function data_validation($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	//New way
	$failinimi = 'kommentaarid.txt';
	// The new person to add to the file
	/*
	$tekst_unvalidated = $_POST['kommentaar'];
	$tekst = data_validation($tekst_unvalidated);
	*/
	$tekst = $_POST['kommentaar'];
	
	
	// Write the contents to the file, 
	// using the FILE_APPEND flag to append the content to the end of the file
	// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
	file_put_contents($failinimi, $tekst . PHP_EOL, FILE_APPEND);	
	header("Location: comment-file.php");
?>