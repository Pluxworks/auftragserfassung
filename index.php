
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard-Vorlage für Bootstrap</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/datepicker.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Navigation ein-/ausblenden</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Aufwandsdatenbank</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
		<h3>Allgemein</h3>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Aufwand eintragen <span class="sr-only">(aktuell)</span></a></li>
          </ul>
		  <h3>Administration</h3>
          <ul class="nav nav-sidebar">
            <li><a href="">Mitarbeiter bearbeiten</a></li>
            <li><a href="">Kunden bearbeiten</a></li>
          </ul>
		  <h3>Statistik</h3>
          <ul class="nav nav-sidebar">
            <li><a href="">Aufwandstabelle Gesamt</a></li>
          </ul>
        </div>
    
      </div>
    </div>
	<div class="container-fluid text-center mid">
		<div class="row">
			<div id="content" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h3>Neuen Aufwand eintragen</h3><br/>
				<div class="form-group text-center center-block pinput-small">
					<label for="datum">Datum</label>
					<div class="input-append date" id="dp3" data-date="<?php echo date("d.m.Y");?>" data-date-format="dd-mm-yyyy">
					<input class="form-control span2 text-center" size="16" type="text" value="<?php echo date("d/m/Y");?>" id="date">
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
					 <input type="text" class="form-control" id="aufwand" name="aufwand" placeholder="0,00">
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
			</div>
		</div>
	</div>
	<!---
	<div id="content" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		
		<div id="aufwandboxinhalt"class=" ">
			<h3 class="text-center">Neuen Aufwand eintragen</h3><br/>
			<div class="center-block row">
				<div class="form-group text-center pinput pull-left space">
					<label for="datum">Datum</label>
					<div class="input-append date" id="dp3" data-date="<?php echo date("d.m.Y");?>" data-date-format="dd-mm-yyyy">
					<input class="form-control pinput span2" size="16" type="text" value="<?php echo date("d/m/Y");?>" id="date">
					<span class="add-on"><i class="icon-th"></i></span>
					</div>
				</div>
				<div class="form-group text-center pinput pull-left space">
					<label for="bereich">Bereich</label>
					<select class="form-control pinput" id="bereich" name="bereich">
					  <option>KD - Hardware</option>
					  <option>KD - Software</option>
					  <option>NW - Hardware</option>
					  <option>NW - Software</option>
					  <option>DV - Software</option>
					</select>
				</div>
				<div class="form-group text-center center-block pull-left space">
					<label for="kunde">Kunde</label>
					<select class="form-control center-block pinput" id="kunde" name="kunde">
					  <option>Bönen</option>
					  <option>UKBS</option>
					  <option>NWL</option>
					  <option>WFG</option>
					  <option>GWA</option>
					</select>
				</div>
			</div>
			<div class=" center-block row">
				<div class="form-group text-center center-block  pull-left space">
					<label for="vertrag">Vertragsfrage</label>
					<select class="form-control center-block pinput" id="vertrag" name="vertrag">
					  <option>vertraglich abgedeckt</option>
					  <option>nicht vertraglich abgedeckt</option>
					</select>
				</div>
				<div class="form-group text-center center-block pull-left space">
				<label for="aufwand">Zeitaufwand in h</label>
					 <input type="text" class="form-control pinput center-block" id="aufwand" name="aufwand" placeholder="Zeitaufwand">
				</div>
				<div class="form-group text-center center-block pull-left space">
					<label for="mitarbeiter">Mitarbeiter</label>
					<select class="form-control center-block pinput" id="mitarbeiter" name="mitarbeiter">
					  <option/>
					  <option>Maximilian Wollmeiner</option>
					  <option>Svenja Strohmenger</option>
					  <option>Tobias Heß</option>
					</select>
				</div>
			</div>
			<div class="center-block row">
				<div class="form-group center-block pull-left space">
					<label for="taetigkeit">Beschreibung der Tätigkeit</label>
					<textarea class="form-control pinput" id="taetigkeit" placeholder="..." name="taetigkeit" rows="4"></textarea>
				</div>
				<div class="form-group center-block">
					<label for="taetigkeit">Kommentar</label>
					<textarea class="form-control pinput" id="taetigkeit" placeholder="..." name="taetigkeit" rows="4"></textarea>
				</div>
			</div>	
			<div class="center-block row">	
				<div id="aufwandButtons">
					<button id="aufwandsaveButton" class="btn btn-primary center-block" type="submit" name="speichern">speichern</button>
				</div>
				<div id="warningbox">
				<!-- Hier werden Warnungen angezeigt --/>
				</div>
			</div>
		</div>
		
	</div>
	-->
	</div>
    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/bootstrap-datepicker.js"></script>
	<script src="./js/functions.js"></script>
    
  </body>
</html>
