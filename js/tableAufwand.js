$(function(){
	$( "tr" ).click(function() {
		editAufwand(this.id);
	})
	
});

function editAufwand(id) {
	$.ajax ({
		type: "POST",
		url: "ajax/editAufwand.php",
		data: {
			dataid: id
		}
	}).done(function(data) {
		$("div#content").html(data);
	});
}