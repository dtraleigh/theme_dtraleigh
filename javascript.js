$(document).ready(function() {
	
	$('div.accordionButton').click(function() {
		$('div.accordionContent').slideUp('normal');	
		$(this).next().slideDown('normal');
	});
	
	$("div.accordionContent").hide();

});
