<?php
	include_once("../sql/mysql_connect.php");

	
	$sql_getBereichId = "SELECT max(id) as id FROM bereich";
	$result_getBereichId = mysqli_query($connection, $sql_getBereichId) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result_getBereichId);
	
?>

<h3>Bereich anlegen</h3><br/>
			
				<div class="form-group text-center center-block pinput-small">
				<label for="bereichid">ID</label>
					<div class="input-group">
					<div class="input-group-addon">#</div>
					 <input type="text" class="form-control bs-docs-popover" id="bereichid" name="bereichid" value="<?php echo $row["id"]+1 ?>" disabled>
					</div>
				</div>
				<div class="form-group center-block pinput-middle">
					<label for="bereich">Bereich-Bezeichnung</label>
					<input type="text" class="form-control text-center" id="bereich" name="bereich" placeholder="Bezeichnung">
				</div>
				<div id="bereichButtons" class="center-block">
					<button id="bereichsaveButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt -->
				</div>
				
				<script src="js/bereich.js"></script>