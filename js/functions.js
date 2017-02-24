

$(function(){
	$('#date').datepicker({
		format: "mm-dd-yyyy",
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
		reload_with_tableAufwand();
		
	});
	
	$( "li#aeintragen" ).click(function() {
		$('li#aeintragen').addClass("active");
		$('li#atabelle').removeClass("active");
		reload_with_formAufwand();
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
