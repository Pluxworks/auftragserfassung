<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["dataid"];

	
	$sql_getKunde = "SELECT * FROM kunden WHERE id = $id";
	$result_getKunde = mysqli_query($connection, $sql_getKunde) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result_getKunde);
	
?>

<h3>Kunde bearbeiten</h3><br/>
			
				<div class="form-group text-center center-block pinput-small">
				<label for="kundenid">ID</label>
					<div class="input-group">
					<div class="input-group-addon">#</div>
					 <input type="text" class="form-control bs-docs-popover" id="kundenid" name="kundenid" value="<?php echo $row["id"] ?>" disabled>
					</div>
				</div>
				<div class="form-group center-block pinput-middle">
					<label for="kunde">Bereich-Bezeichnung</label>
					<input type="text" class="form-control text-center" id="kunde" name="kunde" value="<?php echo $row["name"] ?>">
				</div>
				<div class="form-group center-block pinput-middle">
					<label for="kuerzel">Bereich-Bezeichnung</label>
					<input type="text" class="form-control text-center" id="kuerzel" name="kuerzel" value="<?php echo $row["kuerzel"] ?>">
				</div>
				<div id="kundeButtons" class="center-block">
					<button id="kundesaveEditButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt -->
				</div>


<script src="js/kunde.js"></script>