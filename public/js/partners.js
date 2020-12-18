if($('#alert').is(':visible')){
	$('#alert').fadeOut(6000)
}
if($('#message').is(':visible')){
	$('#message').fadeOut(6000)
}

/* VALIDATION PHONE */
$(document).ready(function($){ 
	$('input[id=phone]').mask('(00) 0000-00009');
 });