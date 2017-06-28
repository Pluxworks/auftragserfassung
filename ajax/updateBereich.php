<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["id"];
	$bereichbez = $_POST["bez"];
	
	
	$sql_updateBereich = "UPDATE bereich SET name = '$bereichbez' WHERE id = '$id'";
	$result_updateBereich = mysqli_query($connection, $sql_updateBereich) or die(mysqli_error($connection));
	if(!$result_updateBereich) {
		echo "<div class=\"alert alert-danger center-block saismessage\">Der Bereich konnte nicht aktualisiert werden.</div>";
		
	} else {
		
		echo "<div class=\"alert alert-success center-block saismessage\">Der Bereich wurde erfolgreich aktualisiert.</div>";
		echo "<button id=\"back\" class=\"btn btn-default center-block\" name=\"back\">Zurück</button>";
	
		echo "<script src=\"js/bereich.js\"></script>";
	}
	
	
?>