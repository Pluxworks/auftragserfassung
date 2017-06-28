<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["id"];
	$bez = $_POST["bez"];
	
	
	
	$sql_neuerBereich = "INSERT INTO bereich(id,name) VALUES('', '$bez')";
	$result_neuerBereich = mysqli_query($connection, $sql_neuerBereich) or die(mysqli_error($connection));
	if(!$result_neuerBereich) {
		echo "<div class=\"alert alert-danger center-block saismessage\">Der Bereich konnte nicht gespeichert werden.</div>";
		
	} else {
		
		echo "<div class=\"alert alert-success center-block saismessage\">Der Bereich wurde erfolgreich gespeichert.</div>";
		echo "<button id=\"back\" class=\"btn btn-default center-block\" name=\"back\">Zurück</button>";
	
		echo "<script src=\"js/bereich.js\"></script>";
	}
	
	
?>