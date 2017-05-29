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

<form id="form1" name="gb_form" method="post" action="comment-write-db.php">
	<p>Kommentaar:</p>
	<p><textarea name="kommentaar" cols="40" rows="3" id="kommentaar" placeholder="Teie kommentaar"></textarea></p>
	<p><input type="submit" name="Submit" value="Saada"></p>
</form>

<p>Juba lisatud kommentaarid</p>
<?php include 'comment-show-db.php'?>

</body>
</html>