<?php
include_once("../sql/mysql_connect.php");
?>


	<table class="table table-bordered" id="table-aufwand">
		<thead>
			<tr>
                <th>Datum</th>
                <th>Bereich</th>
                <th>Kunde</th>
                <th>Vertragsfrage</th>
				<th class="table-medium">Zeitaufwand in h</th>
				<th>Mitarbeiter</th>
				<th class="table-large">Beschreibung der Tätigkeit</th>
				<th class="table-large">Bemerkung</th>
            </tr>
        </thead>
		<tbody>
			<?php
				$sql_aufwand_liste = "SELECT * FROM aufwand_liste";
				$result_aufwand_liste = mysqli_query($connection, $sql_aufwand_liste);
				while($c = mysqli_fetch_array($result_aufwand_liste)) {
					echo "<tr id=\"" . $c["id"] . "\">";
					echo "<td id=\"" . $c["id"] . "\">". $c["datum"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["bereich_id"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["kunde_id"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["vertrag"] . "</td>";
					echo "<td class=\"table-medium\" id=\"" . $c["id"] . "\">". $c["aufwand"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["mitarbeiter_id"] . "</td>";
					echo "<td class=\"table-large\" id=\"" . $c["id"] . "\">". $c["taetigkeit"] . "</td>";
					echo "<td class=\"table-large\" id=\"" . $c["id"] . "\">". $c["bemerkung"] . "</td>";
					echo "</tr>";
				}
			 ?>	
		</tbody>
	</table>


