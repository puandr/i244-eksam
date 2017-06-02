<!DOCTYPE html>

<html>
<head>
	<title>I244-eksam</title>
	<meta charset="utf-8">
</head>

<body>

<p>Hello There!</p>
<?php
	echo '<p>Serveri aeg on '. date("H:i:s").'</p>';
?>
<p>Kliendipoolne aeg on  
<script type="text/javascript">
	var now = new Date();
	var hours = now.getHours();
	var minutes = now.getMinutes();
	var seconds = now.getSeconds();
	document.write(hours,":", minutes,":", seconds)
</script>
</p>


</body>
</html>