$(function(){
	$( "tr" ).click(function() {
		editBereich(this.id);
	});
	
	$( "#newBereichButton" ).click(function() {
		newBereich();
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