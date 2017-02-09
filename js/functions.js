

$(function(){
	$('#date').datepicker('language','de');
	
	$("input#aufwand").focusout(function() {
		if($('input#aufwand').value() == '') {
		$('#test').addClass("has-error");
	}
	});
	
	
});