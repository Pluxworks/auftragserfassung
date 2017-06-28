<?php
	include_once("../sql/mysql_connect.php");
	
	$id = $_POST["dataid"];

	
	$sql_getAufwand = "SELECT * FROM aufwand_liste WHERE id = $id";
	$result_getAufwand = mysqli_query($connection, $sql_getAufwand) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result_getAufwand);
	
?>


<h3>Aufwand bearbeiten</h3><br/>
				<input type="text" class="form-control text-center hidden" id="id" name="id" value="<?php echo $row["id"] ?>">
				<div class="form-group text-center center-block pinput-small">
					<label for="datum">Datum</label>
					<input type="text" class="form-control text-center" id="date" name="datum" value="<?php echo $row["datum"] ?>">
					</div>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="bereich">Bereich</label>
					<select class="form-control pinput" id="bereich" name="bereich">
					  <?php
						$sql_bereich = "SELECT * FROM bereich";
						$result_bereich = mysqli_query($connection, $sql_bereich);
						while($c = mysqli_fetch_array($result_bereich)) {
							if($row["bereich_id"] == $c["id"]) {
								echo "<option selected value=\"" . $c["id"] . "\">" . $c["name"] . "</option>";
							}
							echo "<option value=\"" . $c["id"] . "\">" . $c["name"] . "</option>";
						}
					 ?>	
					</select>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="kunde">Kunde</label>
					<select class="form-control pinput" id="kunde" name="kunde">
					 <?php
						$sql_kunde = "SELECT * FROM kunden";
						$result_kunde = mysqli_query($connection, $sql_kunde);
						while($c = mysqli_fetch_array($result_kunde)) {
							if($row["kunde_id"] == $c["id"]) {
								echo "<option selected value=\"" . $c["id"] . "\">" . $c["kuerzel"] . "</option>";
							}
							echo "<option value=\"" . $c["id"] . "\">" . $c["kuerzel"] . "</option>";
						}
					 ?>		 
					</select>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="vertrag">Vertragsfrage</label>
					<select class="form-control center-block" id="vertrag" name="vertrag">
					  <option value="vertraglich abgedeckt">vertraglich abgedeckt</option>
					  <option value="nicht vertraglich abgedeckt">nicht vertraglich abgedeckt</option>
					</select>
				</div>
				<div class="form-group text-center center-block pinput-middle">
				<label for="aufwand">Zeitaufwand in h</label>
					<div id="test" class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>
					 <input type="text" class="form-control bs-docs-popover" id="aufwand" name="aufwand" value="<?php echo $row["aufwand"] ?>" placeholder="0,00">
					<div class="input-group-addon">h</div>
					</div>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="mitarbeiter">Mitarbeiter</label>
					<select class="form-control center-block" id="mitarbeiter" name="mitarbeiter">
					 <?php
						$sql_mitarbeiter = "SELECT * FROM mitarbeiter";
						$result_mitarbeiter= mysqli_query($connection, $sql_mitarbeiter);
						while($c = mysqli_fetch_array($result_mitarbeiter)) {
							echo "<option value=\"" . $c["id"] . "\">" . $c["name"] . "</option>";
						}
					 ?>	
					</select>
				</div>
				<div class="form-group center-block pinput-large">
					<label for="taetigkeit">Beschreibung der Tätigkeit</label>
					<textarea class="form-control" id="taetigkeit" placeholder="..." name="taetigkeit" rows="4"><?php echo $row["taetigkeit"] ?></textarea>
				</div>
				<div class="form-group center-block pinput-large">
					<label for="bemerkung">Bemerkung</label>
					<textarea class="form-control" id="bemerkung" placeholder="..." name="bemerkung" rows="4"><?php echo $row["bemerkung"] ?></textarea>
				</div>
				<div id="aufwandButtons" class="center-block">
					<button id="aufwandeditButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt -->
				</div>
				
	<script src="js/aufwand.js"></script>