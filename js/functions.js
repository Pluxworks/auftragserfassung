

$(function(){
	$('#date').datepicker('language','de');
	
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
	});
	
	
});

function reload_with_tableAufwand(){
		$.get("php/tableAufwand.php", function(data) {
        $("div#content").html(data);
		});
}