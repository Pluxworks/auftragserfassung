<?php
include_once("../sql/mysql_connect.php");
?>

<h3>Neuen Aufwand eintragen</h3><br/>
				<div class="form-group text-center center-block pinput-small">
					<label for="datum">Datum</label>
					<div class="input-append date" id="dp3" data-date="<?php echo date("m/d/Y");?>" data-date-format="mm-dd-yyyy">
					<input class="form-control span2 text-center" size="16" type="text" value="<?php echo date("m/d/Y");?>" id="date">
					<span class="add-on"><i class="icon-th"></i></span>
					</div>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="bereich">Bereich</label>
					<select class="form-control pinput" id="bereich" name="bereich">
					  <?php
						$sql_bereich = "SELECT * FROM bereich";
						$result_bereich = mysqli_query($connection, $sql_bereich);
						while($c = mysqli_fetch_array($result_bereich)) {
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
					 <input type="text" class="form-control bs-docs-popover" id="aufwand" name="aufwand" placeholder="0,00">
					<div class="input-group-addon">h</div>
					</div>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="mitarbeiter">Mitarbeiter</label>
					<select class="form-control center-block" id="mitarbeiter" name="mitarbeiter">
					  select class="form-control pinput" id="kunde" name="kunde">
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
					<textarea class="form-control" id="taetigkeit" placeholder="..." name="taetigkeit" rows="4"></textarea>
				</div>
				<div class="form-group center-block pinput-large">
					<label for="bemerkung">Bemerkung</label>
					<textarea class="form-control" id="bemerkung" placeholder="..." name="bemerkung" rows="4"></textarea>
				</div>
				<div id="aufwandButtons" class="center-block">
					<button id="aufwandsaveButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt -->
				</div>


<script src="js/aufwand.js"></script>