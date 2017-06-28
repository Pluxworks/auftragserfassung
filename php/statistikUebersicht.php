<div id="uebersicht" style="height: 350px;"></div>


<?php 
	include_once("../sql/mysql_connect.php");
	$sql_kunde = "SELECT count(al.id) as anzahl, ku.kuerzel as kunde
				FROM aufwand_liste al
				JOIN kunden ku
				ON al.kunde_id=ku.id
				GROUP BY ku.id";
	$result_kunde = mysqli_query($connection, $sql_kunde);
	
	
	
	$sql_countKunde = "SELECT count(id) as count FROM kunden";
	$result_countKunde = mysqli_query($connection, $sql_countKunde);
	$row = mysqli_fetch_assoc($result_countKunde);
	
			
			

?>

<script>

new Morris.Donut({
  // ID of the element in which to draw the chart.
  element: 'uebersicht',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
	<?php 
			$i=0;
			while($c = mysqli_fetch_array($result_kunde)) {
				$i++;
				if($i == $row["count"]) {
					echo "{ label: '" . $c["kunde"] . "', value:" . $c["anzahl"] . "}";
				} else {
					echo "{ label: '" . $c["kunde"] . "', value:" . $c["anzahl"] . "},";
				}
			}

		/*
		while($c = mysqli_fetch_array($result_kunde)) {
		echo "{ label: '" . $c["kunde"] . "', value:" . $c["anzahl"] . "\"},";
		}
		*/
	?>
  ]
});


</script>


