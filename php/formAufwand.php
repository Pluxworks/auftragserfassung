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
					  <option class="pinput">KD - Hardware</option>
					  <option>KD - Software</option>
					  <option>NW - Hardware</option>
					  <option>NW - Software</option>
					  <option>DV - Software</option>
					</select>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="kunde">Kunde</label>
					<select class="form-control pinput" id="kunde" name="kunde">
					  <option>Bönen</option>
					  <option>UKBS</option>
					  <option>NWL</option>
					  <option>WFG</option>
					  <option>GWA</option>
					</select>
				</div>
				<div class="form-group text-center center-block pinput-middle">
					<label for="vertrag">Vertragsfrage</label>
					<select class="form-control center-block" id="vertrag" name="vertrag">
					  <option>vertraglich abgedeckt</option>
					  <option>nicht vertraglich abgedeckt</option>
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
					  <option/>
					  <option>Maximilian Wollmeiner</option>
					  <option>Svenja Strohmenger</option>
					  <option>Tobias Heß</option>
					</select>
				</div>
				<div class="form-group center-block pinput">
					<label for="taetigkeit">Beschreibung der Tätigkeit</label>
					<textarea class="form-control" id="taetigkeit" placeholder="..." name="taetigkeit" rows="4"></textarea>
				</div>
				<div class="form-group center-block pinput">
					<label for="taetigkeit">Kommentar</label>
					<textarea class="form-control" id="taetigkeit" placeholder="..." name="taetigkeit" rows="4"></textarea>
				</div>
				<div id="aufwandButtons" class="center-block">
					<button id="aufwandsaveButton" class="btn btn-primary pinput-small" type="submit" name="speichern">speichern</button>
				</div>


<script src="js/aufwand.js"></script>