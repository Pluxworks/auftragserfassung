$(function(){
	$('#date').datepicker('language','de');
	
	$( "input#aufwand" ).focusout(function() {
		
		if($('input#aufwand').val() == "") {
		$('#test').addClass("has-error");
		
	} else {
		$('#test').removeClass("has-error");
	}
	});
	
	$( "#aufwandsaveButton" ).click(function() {
		saveAufwand();
	});
	
	$( "#back" ).click(function() {
		back();
	});
	
});

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