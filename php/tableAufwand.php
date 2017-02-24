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
				<th>Zeitaufwand</th>
				<th>Mitarbeiter</th>
				<th class="table-large">Beschreibung der Tätigkeit</th>
				<th class="table-large">Bemerkung</th>
            </tr>
        </thead>
		<tbody>
			<?php
				$sql_aufwand_liste = "SELECT al.id as id, DATE_FORMAT(al.datum,'%d.%m.%Y') as datum, al.vertrag as vertrag, al.aufwand as aufwand, al.taetigkeit as taetigkeit, al.bemerkung as bemerkung, ku.kuerzel as kkuerzel, be.name as bname, mi.name as mname
				FROM aufwand_liste al
				JOIN kunden ku
				ON al.kunde_id=ku.id
				JOIN bereich be
				ON al.bereich_id=be.id
				JOIN mitarbeiter mi
				ON al.mitarbeiter_id=mi.id
				ORDER BY al.id";
				$result_aufwand_liste = mysqli_query($connection, $sql_aufwand_liste);
				while($c = mysqli_fetch_array($result_aufwand_liste)) {
					echo "<tr id=\"" . $c["id"] . "\">";
					echo "<td id=\"" . $c["id"] . "\">". $c["datum"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["bname"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["kkuerzel"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["vertrag"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["aufwand"] . " h</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["mname"] . "</td>";
					echo "<td class=\"table-large\" id=\"" . $c["id"] . "\">". $c["taetigkeit"] . "</td>";
					echo "<td class=\"table-large\" id=\"" . $c["id"] . "\">". $c["bemerkung"] . "</td>";
					echo "</tr>";
				}
			 ?>	
		</tbody>
	</table>


