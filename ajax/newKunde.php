<?php
	include_once("../sql/mysql_connect.php");

	
	$sql_getKundeId = "SELECT max(id) as id FROM kunden";
	$result_getKundeId = mysqli_query($connection, $sql_getKundeId) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result_getKundeId);
	
?>

<h3>Kunde anlegen</h3><br/>
			
				<div class="form-group text-center center-block pinput-small">
				<label for="bereichid">ID</label>
					<div class="input-group">
					<div class="input-group-addon">#</div>
					 <input type="text" class="form-control bs-docs-popover" id="kundeid" name="kundeid" value="<?php echo $row["id"]+1 ?>" disabled>
					</div>
				</div>
				<div class="form-group center-block pinput-middle">
					<label for="kunde">Kunden-Bezeichnung</label>
					<input type="text" class="form-control text-center" id="kunde" name="kunde" placeholder="Bezeichnung">
				</div>
				<div class="form-group center-block pinput-middle">
					<label for="kuerzel">Kunden-Kuerzel</label>
					<input type="text" class="form-control text-center" id="kuerzel" name="kuerzel" placeholder="Kuerzel">
				</div>
				<div id="kundeButtons" class="center-block">
					<button id="kundesaveButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt -->
				</div>
				
				<script src="js/kunde.js"></script>