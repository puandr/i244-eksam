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

<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="pilt" />
    <input type="submit" value="lae pilt" />
</form>

<p>
<?php
	$fi = new FilesystemIterator("images", FilesystemIterator::SKIP_DOTS);
	printf("There were %d Files", iterator_count($fi));
?>
</p>

</body>
</html>