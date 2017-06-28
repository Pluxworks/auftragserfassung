<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["dataid"];

	
	$sql_getBereich = "SELECT * FROM bereich WHERE id = $id";
	$result_getBereich = mysqli_query($connection, $sql_getBereich) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result_getBereich);
	
?>

<h3>Bereich bearbeiten</h3><br/>
			
				<div class="form-group text-center center-block pinput-small">
				<label for="bereichid">ID</label>
					<div class="input-group">
					<div class="input-group-addon">#</div>
					 <input type="text" class="form-control bs-docs-popover" id="bereichid" name="bereichid" value="<?php echo $row["id"] ?>" disabled>
					</div>
				</div>
				<div class="form-group center-block pinput-middle">
					<label for="bereich">Bereich-Bezeichnung</label>
					<input type="text" class="form-control text-center" id="bereich" name="bereich" value="<?php echo $row["name"] ?>">
				</div>
				<div id="bereichButtons" class="center-block">
					<button id="bereichsaveEditButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt -->
				</div>


<script src="js/bereich.js"></script>