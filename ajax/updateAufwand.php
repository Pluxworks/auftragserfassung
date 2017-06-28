<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["id"];
	$datum = $_POST["datum"];
	$bereich_id = $_POST["bereich_id"];
	$kunde_id = $_POST["kunde_id"];
	$vertrag = $_POST["vertrag"];
	$aufwand = $_POST["aufwand"];
	$mitarbeiter_id = $_POST["mitarbeiter_id"];
	$taetigkeit = $_POST["taetigkeit"];
	$bemerkung = $_POST["bemerkung"];

	
	
	$sql_updateBereich = "UPDATE aufwand_liste SET datum = '$datum', taetigkeit = '$taetigkeit', bereich_id = '$bereich_id', kunde_id = '$kunde_id', vertrag = '$vertrag', aufwand ='$aufwand', mitarbeiter_id = '$mitarbeiter_id', bemerkung = '$bemerkung' WHERE id = '$id'";
	$result_updateBereich = mysqli_query($connection, $sql_updateBereich) or die(mysqli_error($connection));
	if(!$result_updateBereich) {
		echo "<div class=\"alert alert-danger center-block saismessage\">Der Aufwand konnte nicht aktualisiert werden.</div>";
		
	} else {
		
		echo "<div class=\"alert alert-success center-block saismessage\">Der Aufwand wurde erfolgreich aktualisiert.</div>";
		echo "<button id=\"back\" class=\"btn btn-default center-block\" name=\"back\">Zurück</button>";
	
		echo "<script src=\"js/aufwand.js\"></script>";
	}
	
	
?>