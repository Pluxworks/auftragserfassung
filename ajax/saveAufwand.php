<?php
	include_once("../sql/mysql_connect.php");
	
	$datum = $_POST["datum"];
	$bereich_id = $_POST["bereich_id"];
	$kunde_id = $_POST["kunde_id"];
	$vertrag = $_POST["vertrag"];
	$aufwand = $_POST["aufwand"];
	$mitarbeiter_id = $_POST["mitarbeiter_id"];
	$taetigkeit = $_POST["taetigkeit"];
	$bemerkung = $_POST["bemerkung"];
	
	
	$sql_neuerAufwand = "INSERT INTO aufwand_liste(id,datum,taetigkeit,bereich_id,kunde_id,vertrag,aufwand,mitarbeiter_id,bemerkung) VALUES('', '$datum', '$taetigkeit', '$bereich_id', '$kunde_id', '$vertrag', '$aufwand', '$mitarbeiter_id', '$bemerkung')";
	$result_neuerAufwand = mysqli_query($connection, $sql_neuerAufwand) or die(mysqli_error($connection));
	if(!$result_neuerAufwand) {
		echo "<div class=\"alert alert-danger center-block saismessage\">Der Aufwand konnte nicht gespeichert werden.</div>";
		
	} else {
		
		echo "<div class=\"alert alert-success center-block saismessage\">Der Aufwand wurde erfolgreich gespeichert.</div>";
		echo "<button id=\"back\" class=\"btn btn-default center-block\" name=\"back\">Zurück</button>";
	
		echo "<script src=\"js/aufwand.js\"></script>";
	}
	
	
?>