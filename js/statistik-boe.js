$(function(){
	$( "li#gesamt" ).click(function() {
		$('li#gesamt').addClass("active");
		$('li#kdhw').removeClass("active");
		$('li#kdsw').removeClass("active");
		$('li#nw').removeClass("active");
		$('li#dvv').removeClass("active");
		load_dataGesamt();
	});
	
	$( "li#kdhw" ).click(function() {
		$('li#kdhw').addClass("active");
		$('li#gesamt').removeClass("active");
		$('li#kdsw').removeClass("active");
		$('li#nw').removeClass("active");
		$('li#dvv').removeClass("active");
		load_dataGesamt();
	});
	
	$( "li#kdsw" ).click(function() {
		$('li#kdsw').addClass("active");
		$('li#kdhw').removeClass("active");
		$('li#gesamt').removeClass("active");
		$('li#nw').removeClass("active");
		$('li#dvv').removeClass("active");
		load_dataGesamt();
	});
	
	$( "li#nw" ).click(function() {
		$('li#nw').addClass("active");
		$('li#kdhw').removeClass("active");
		$('li#kdsw').removeClass("active");
		$('li#gesamt').removeClass("active");
		$('li#dvv').removeClass("active");
		load_dataGesamt();
	});
	
	$( "li#dvv" ).click(function() {
		$('li#dvv').addClass("active");
		$('li#kdhw').removeClass("active");
		$('li#kdsw').removeClass("active");
		$('li#nw').removeClass("active");
		$('li#gesamt').removeClass("active");
		load_dataGesamt();
	});

});