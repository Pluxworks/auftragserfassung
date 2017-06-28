<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["id"];
	$kundenbez = $_POST["bez"];
	$kuerzel = $_POST["kuerzel"];
	
	
	$sql_updateKunde = "UPDATE kunden SET name = '$kundenbez', kuerzel = '$kuerzel' WHERE id = '$id'";
	$result_updateKunde = mysqli_query($connection, $sql_updateKunde) or die(mysqli_error($connection));
	if(!$result_updateKunde) {
		echo "<div class=\"alert alert-danger center-block saismessage\">Der Kunde konnte nicht aktualisiert werden.</div>";
		
	} else {
		
		echo "<div class=\"alert alert-success center-block saismessage\">Der Kunde wurde erfolgreich aktualisiert.</div>";
		echo "<button id=\"back\" class=\"btn btn-default center-block\" name=\"back\">Zurück</button>";
	
		echo "<script src=\"js/kunde.js\"></script>";
	}
	
	
?>