<?php
include_once("../sql/mysql_connect.php");
?>


	<table class="table table-bordered" id="table-aufwand">
		<thead>
			<tr>
                <th>ID</th>
                <th>Bereich</th>
            </tr>
        </thead>
		<tbody>
			<?php
				$sql_aufwand_liste = "SELECT * FROM bereich";
				$result_aufwand_liste = mysqli_query($connection, $sql_aufwand_liste);
				while($c = mysqli_fetch_array($result_aufwand_liste)) {
					echo "<a id=\"" . $c["id"] . "\" href=\"# " . $c["id"] .  "\">";
					echo "<tr id=\"" . $c["id"] . "\">";
					echo "<td id=\"" . $c["id"] . "\">". $c["id"] . "</td>";
					echo "<td id=\"" . $c["id"] . "\">". $c["name"] . "</td>";
					echo "</tr>";
					echo "</a>";
				}
			 ?>	
		</tbody>
	</table>
	
	<div id="bereichButtons" class="center-block">
					<button id="newBereichButton" class="btn btn-success" type="submit" name="newBereich">Neuen Bereich anlegen</button>
	</div>

<script src="js/tableBereich.js"></script>