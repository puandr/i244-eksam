<?php

//die('Eksam ei ole hetkel avatud.');

require('missions.php');
$m = new MyMission();

?><!DOCTYPE html>
<html lang="et"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>I244 kaugõpe: eksam</title>
</head>
<body>

<h1>Eksam</h1>
<p>Kõikide vahendite (välja arvatud sõbrad ja tuttavad) kasutamine on lubatud.</p>

<h2>Sinu ülesanne</h2>
<p><?php echo $m->getMyMission(); ?></p>
<p>Lahendust mõeldes eelda, et kasutaja brauseris on lubatud nii Javascript kui ka küpsised.</p>

<h2>Tulemuse esitamine</h2>
<p>Tulemuse kood peab olema versioonihalduses ning töötav lahendus kuskil serveris (näiteks enoses).</p>
<p>Pärast eksamiaja lõppu tehtud muudatused ei lähe arvesse.</p>
<form method="POST" action="go.php">
<table>
  <tr>
    <td>Sinu nimi:</td>
    <td><input type="text" name="name" required /></td>
  </tr>
  <tr>
    <td>Viide töö versioonihaldusele:</td>
    <td><input type="url" name="version_control" size="50" required /></td>
  </tr>
  <tr>
    <td>Link töötavale rakendusele:</td>
    <td><input type="url" name="demo_url" size="50" required /></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="esita eksami tulemused!" /></td>
  </tr>
</table>
</form>

</body></html>
