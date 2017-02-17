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
	<?php
		include_once("/sql/mysql_connect.php");
	?>
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
            <li id="aeintragen" class="active"><a id="aeintragen" href="#">Aufwand eintragen <span class="sr-only">(aktuell)</span></a></li>
			<li id="atabelle"><a id="atabelle" href="#">Aufwandstabelle</a></li>
          </ul>
		  <h3>Administration</h3>
          <ul class="nav nav-sidebar">
            <li><a href="#">Mitarbeiter bearbeiten</a></li>
            <li><a href="#">Kunden bearbeiten</a></li>
          </ul>
		  <h3>Statistik</h3>
          <ul class="nav nav-sidebar">
            <li><a href="#">Bönen</a></li>
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
			</div>
		</div>
	</div>
	
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
