<?php

/*
echo '<p>cookie : ' . $_COOKIE["note"] . '</p>';
echo '<p> POST : ' . $_POST['comment'] . '</p>';
*/
setcookie("note", $_POST['comment'], time() + (86400 * 30), "/"); // 86400 = 1 day	
header("Location: index.php");

?>