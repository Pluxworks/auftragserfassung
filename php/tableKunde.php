<?php
include_once("../sql/mysql_connect.php");
?>


	<table class="table table-bordered" id="table-aufwand">
		<thead>
			<tr>
                <th>ID</th>
                <th>Kunde</th>
				<th>Kürzel</th>
            </tr>
        </thead>
		<tbody>
			<?php
				$sql_kunde = "SELECT * FROM kunden";
				$result_kunde = mysqli_query($connection, $sql_kunde);
				while($c = mysqli_fetch_array($result_kunde)) {
					echo "<a id=\"" . $c["id"] . "\" href=\"# " . $c["id"] .  "\">";
					echo "<tr id=\"" . $c["id"] . "\">";
					echo "<td id=\"" . $c["id"] . "\">". $c["id"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["name"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["kuerzel"] . "</td>";
					echo "</tr>";
					echo "</a>";
				}
			 ?>	
		</tbody>
	</table>
	
	<div id="kundeButtons" class="center-block">
					<button id="newKundeButton" class="btn btn-success" type="submit" name="newKunde">Neuen Kunden anlegen</button>
	</div>

<script src="js/kunde.js"></script>