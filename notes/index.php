<!DOCTYPE html>
<?php
	if (!isset($_COOKIE["note"])) {
		$cookie_name = "note";
		$note;
		setcookie($cookie_name, $note, time() + (86400 * 30), "/"); // 86400 = 1 day	
	}
?>

<html>
<head>
	<title>I244-eksam</title>
	<meta charset="utf-8">
</head>

<body>

<p>Hello There!</p>
<?php 
	//echo $_COOKIE["note"];
?>
<p>Your notes: so far</p>
<form method="post" action="addnote.php" id="usrform">
	<textarea rows="4" cols="50" name="comment" form="usrform">
	<?php 
		if (isset($_COOKIE["note"])) {
			echo $_COOKIE["note"];
		}
	?>
	</textarea>
	<br>
	<input type="submit" value="Lisa kommentaar">
</form>


</body>
</html>