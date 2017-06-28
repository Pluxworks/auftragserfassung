$(function(){
	$( "tr" ).click(function() {
		editKunde(this.id);
	});
	
	$( "#newKundeButton" ).click(function() {
		newKunde();
	});
	
	$( "#kundesaveButton" ).click(function() {
		saveKunde();
	});
	
	$( "#kundesaveEditButton" ).click(function() {
		updateKunde();
	});
	
	$( "#back" ).click(function() {
		reload_with_tableKunde();
	});
});

function editKunde(id) {
	$.ajax ({
		type: "POST",
		url: "ajax/editKunde.php",
		data: {
			dataid: id
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function newKunde() {
	$.ajax ({
		type: "GET",
		url: "ajax/newKunde.php"
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function saveKunde() {
	$.ajax ({
		type: "POST",
		url: "ajax/saveKunde.php",
		data: {
			id: $( "div#content input#kundeid" ).val(),
			bez: $( "div#content input#kunde" ).val(),
			kuerzel: $( "div#content input#kuerzel" ).val()
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function updateKunde() {
	$.ajax ({
		type: "POST",
		url: "ajax/updateKunde.php",
		data: {
			id: $( "div#content input#kundenid" ).val(),
			bez: $( "div#content input#kunde" ).val(),
			kuerzel: $( "div#content input#kuerzel" ).val()
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function reload_with_tableBereich(){
		$.get("php/tableBereich.php", function(data) {
        $("div#content").html(data);
		});
}