<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["id"];
	$bez = $_POST["bez"];
	$kuerzel = $_POST["kuerzel"];
	
	
	
	$sql_neuerKunde = "INSERT INTO kunden(id,name,kuerzel) VALUES('', '$bez', '$kuerzel')";
	$result_neuerKunde = mysqli_query($connection, $sql_neuerKunde) or die(mysqli_error($connection));
	if(!$result_neuerKunde) {
		echo "<div class=\"alert alert-danger center-block saismessage\">Der Kunde konnte nicht gespeichert werden.</div>";
		
	} else {
		
		echo "<div class=\"alert alert-success center-block saismessage\">Der Kunde wurde erfolgreich gespeichert.</div>";
		echo "<button id=\"back\" class=\"btn btn-default center-block\" name=\"back\">Zurück</button>";
	
		echo "<script src=\"js/kunde.js\"></script>";
	}
	
	
?>