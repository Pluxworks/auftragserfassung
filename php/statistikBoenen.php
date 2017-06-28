<?php
	include_once("../sql/mysql_connect.php");
	$sql_boenenGesamt = "SELECT count(al.id) AS anzahl
						FROM aufwand_liste al
						JOIN kunden ku
						ON al.kunde_id= ku.id
						WHERE ku.id = 1";
	
	$result_boenenGesamt = mysqli_query($connection, $sql_boenenGesamt);
	$row_boenenGesamt = mysqli_fetch_assoc($result_boenenGesamt);
						
	$sql_boenenKDhw = "SELECT count(al.id) AS anzahl
						FROM aufwand_liste al
						JOIN kunden ku
						ON al.kunde_id= ku.id
						JOIN bereich be
						ON al.bereich_id=be.id
						WHERE ku.id = 1 AND be.id = 1";

	$result_boenenKDhw = mysqli_query($connection, $sql_boenenKDhw);
	$row_boenenKDhw = mysqli_fetch_assoc($result_boenenKDhw);
	
	$sql_boenenKDsw = "SELECT count(al.id) AS anzahl
						FROM aufwand_liste al
						JOIN kunden ku
						ON al.kunde_id= ku.id
						JOIN bereich be
						ON al.bereich_id=be.id
						WHERE ku.id = 1 AND be.id = 2";
	
	$result_boenenKDsw = mysqli_query($connection, $sql_boenenKDsw);
	$row_boenenKDsw = mysqli_fetch_assoc($result_boenenKDsw);
						
	$sql_boenenNW = "SELECT count(al.id) AS anzahl
						FROM aufwand_liste al
						JOIN kunden ku
						ON al.kunde_id= ku.id
						JOIN bereich be
						ON al.bereich_id=be.id
						WHERE ku.id = 1 AND be.id = 3";
	
	$result_boenenNW = mysqli_query($connection, $sql_boenenNW);
	$row_boenenNW = mysqli_fetch_assoc($result_boenenNW);
						
	$sql_boenenDVverfahren = "SELECT count(al.id) AS anzahl
						FROM aufwand_liste al
						JOIN kunden ku
						ON al.kunde_id= ku.id
						JOIN bereich be
						ON al.bereich_id=be.id
						WHERE ku.id = 1 AND be.id = 4";
						
	$result_boenenDVverfahren = mysqli_query($connection, $sql_boenenDVverfahren);
	$row_boenenDVverfahren = mysqli_fetch_assoc($result_boenenDVverfahren);
?>

<h3>Bönen</h3><br/>

<ul class="nav nav-tabs nav-justified">
	<li role="presentation" id="gesamt" class="active"><a href="#">Gesamt</a></li>
	<li role="presentation" id="kdhw"><a href="#">KD - Hardware</a></li>
	<li role="presentation" id="kdsw"><a href="#">KD - Software</a></li>
	<li role="presentation" id="nw"><a href="#">NW</a></li>
	<li role="presentation" id="dvv"><a href="#">DV - Verfahren</a></li>
	
	
	
	<?php
	/*
		$sql_bereich = "SELECT * FROM bereich";
		$result_bereich = mysqli_query($connection, $sql_bereich);
		while($c = mysqli_fetch_array($result_bereich)) {
			echo "<li role=\"presenation\" id=\"" . $c["id"] . "\"><a href=\"#\">" . $c["name"] . "</a></li>";
		}
		
	*/
	?>	
</ul>

<div class="statcontent">
	
	Anzahl Aufträge (gesamt): <b><?php echo $row_boenenGesamt["anzahl"] ?></b><br />
	Anzahl Aufträge (KD - Software): <b><?php echo $row_boenenKDhw["anzahl"] ?></b><br />
	Anzahl Aufträge (KD - Hardware): <b><?php echo $row_boenenKDsw["anzahl"] ?></b><br />
	Anzahl Aufträge (NW): <b><?php echo $row_boenenNW["anzahl"] ?></b><br />
	Anzahl Aufträge (DV - Verfahren): <b><?php echo $row_boenenDVverfahren["anzahl"] ?></b><br />
</div>

<script src="js/statistik-boe.js"></script>