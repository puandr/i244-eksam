<?php
/*
$allowedExts = array("jpg", "jpeg", "gif", "png");
$allowedTypes = array("image/gif", "image/jpeg", "image/png", "image/pjpeg");
*/
$allowedExts = array("txt", "rtx");
$allowedTypes = array("text/plain", "text/richtext");

$extension = end(explode(".", $_FILES['pilt']["name"]));
/*$extension = pathinfo($_FILES["rfile"]["name"])['extension'];*/
$bytes= 100000;
$loc = "images";

if (in_array($_FILES['pilt']["type"], $allowedTypes) && ($_FILES['pilt']["size"] < $bytes) && in_array($extension, $allowedExts) ) {
    // fail �iget t��pi ja suurusega

    if ($_FILES['pilt']["error"] > 0) {
        echo "faili �leslaadimine luhtus, veakood: " . $_FILES['pilt']["error"];
    } else {

        if ( file_exists("$loc/" . $_FILES['pilt']["name"]) ) {
            // samanimeline fail on kaustas $loc olemas �ra uuesti lae, prindi failinimi

            echo "fail $loc/".$_FILES['pilt']["name"]." juba eksisteerib";
        } else {
            // k�ik ok, aseta pilt kausta $loc

            move_uploaded_file($_FILES['pilt']["tmp_name"], $loc."/" . $_FILES['pilt']["name"]);
            echo "faili ".$_FILES['pilt']["name"]." laadmine kausta $loc edukas";
        }
    }
} else {
    echo "Fail ei ole sbivat t��pi v�i on vales m��tmes";
}

header("Location: index.php");

?>