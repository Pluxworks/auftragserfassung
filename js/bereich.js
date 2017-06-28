$(function(){
	$( "tr" ).click(function() {
		editBereich(this.id);
	});
	
	$( "#newBereichButton" ).click(function() {
		newBereich();
	});
	
	$( "#bereichsaveButton" ).click(function() {
		saveBereich();
	});
	
	$( "#bereichsaveEditButton" ).click(function() {
		updateBereich();
	});
	
	$( "#back" ).click(function() {
		reload_with_tableBereich();
	});
});

function editBereich(id) {
	$.ajax ({
		type: "POST",
		url: "ajax/editBereich.php",
		data: {
			dataid: id
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function newBereich() {
	$.ajax ({
		type: "GET",
		url: "ajax/newBereich.php"
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function saveBereich() {
	$.ajax ({
		type: "POST",
		url: "ajax/saveBereich.php",
		data: {
			id: $( "div#content input#bereichid" ).val(),
			bez: $( "div#content input#bereich" ).val()
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}

function updateBereich() {
	$.ajax ({
		type: "POST",
		url: "ajax/updateBereich.php",
		data: {
			id: $( "div#content input#bereichid" ).val(),
			bez: $( "div#content input#bereich" ).val()
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