

$(function(){
	$('#date').datepicker({
		format: "dd.mm.yyyy",
		todayBtn: "linked",
		language: "de",
		autoclose: true,
		todayHighlight: true
	});

	
	$( "input#aufwand" ).focusout(function() {
		
		if($('input#aufwand').val() == "") {
		$('#test').addClass("has-error");
		
	} else {
		$('#test').removeClass("has-error");
	}
	});
	
	$( "li#atabelle" ).click(function() {
		$('li#atabelle').addClass("active");
		$('li#aeintragen').removeClass("active");
		$('li#btabelle').removeClass("active");
		$('li#bkunde').removeClass("active");
		$('li#suebersicht').removeClass("active");
		$('li#sboenen').removeClass("active");
		reload_with_tableAufwand();
		
	});
	
	$( "li#aeintragen" ).click(function() {
		$('li#aeintragen').addClass("active");
		$('li#atabelle').removeClass("active");
		$('li#btabelle').removeClass("active");
		$('li#bkunde').removeClass("active");
		$('li#suebersicht').removeClass("active");
		$('li#sboenen').removeClass("active");
		reload_with_formAufwand();
	});
	
	$( "li#btabelle" ).click(function() {
		$('li#btabelle').addClass("active");
		$('li#atabelle').removeClass("active");
		$('li#aeintragen').removeClass("active");
		$('li#bkunde').removeClass("active");
		$('li#suebersicht').removeClass("active");
		$('li#sboenen').removeClass("active");
		reload_with_tableBereich();
	});
	
	$( "li#bkunde" ).click(function() {
		$('li#bkunde').addClass("active");
		$('li#atabelle').removeClass("active");
		$('li#aeintragen').removeClass("active");
		$('li#btabelle').removeClass("active");
		$('li#suebersicht').removeClass("active");
		$('li#sboenen').removeClass("active");
		reload_with_tableKunde();
	});
	
	$( "li#suebersicht" ).click(function() {
		$('li#suebersicht').addClass("active");
		$('li#atabelle').removeClass("active");
		$('li#aeintragen').removeClass("active");
		$('li#btabelle').removeClass("active");
		$('li#bkunde').removeClass("active");
		$('li#sboenen').removeClass("active");
		reload_with_statistikUeberischt();
	});
	
	$( "li#sboenen" ).click(function() {
		$('li#sboenen').addClass("active");
		$('li#suebersicht').removeClass("active");
		$('li#atabelle').removeClass("active");
		$('li#aeintragen').removeClass("active");
		$('li#btabelle').removeClass("active");
		$('li#bkunde').removeClass("active");
		reload_with_statistikBoenen();
	});
	
	$( "#aufwandsaveButton" ).click(function() {
		saveAufwand();
	});
	
	$( "#back" ).click(function() {
		back();
	});
	
});

function reload_with_tableAufwand(){
		$.get("php/tableAufwand.php", function(data) {
        $("div#content").html(data);
		});
}

function reload_with_formAufwand(){
		$.get("php/formAufwand.php", function(data) {
        $("div#content").html(data);
		});
}

function reload_with_tableBereich(){
		$.get("php/tableBereich.php", function(data) {
        $("div#content").html(data);
		});
}

function reload_with_tableKunde(){
		$.get("php/tableKunde.php", function(data) {
        $("div#content").html(data);
		});
}

function reload_with_statistikUeberischt(){
		$.get("php/statistikUebersicht.php", function(data) {
        $("div#content").html(data);
		});
}

function reload_with_statistikBoenen(){
		$.get("php/statistikBoenen.php", function(data) {
        $("div#content").html(data);
		});
}

function saveAufwand() {
	$.ajax ({
		type: "POST",
		url: "ajax/saveAufwand.php",
		data: {
			datum: $( "div#content input#date" ).val(),
			bereich_id: $( "div#content select#bereich option:selected" ).val(),
			kunde_id: $( "div#content select#kunde option:selected" ).val(),
			vertrag: $( "div#content select#vertrag option:selected" ).val(),
			aufwand: $( "div#content input#aufwand" ).val(),
			mitarbeiter_id: $( "div#content select#mitarbeiter option:selected" ).val(),
			taetigkeit: $( "div#content textarea#taetigkeit" ).val(),
			bemerkung: $( "div#content textarea#bemerkung" ).val()
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function back() {
	window.location.href = "./";
}
