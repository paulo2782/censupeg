$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
});
$('.fa-pencil').click(function(event) {
	/* Act on the event */
	$('#id_edt_modal').val($('#id').val())
})
if($('#alert').is(':visible')){
	$('#alert').fadeOut(6000)
}
if($('#message').is(':visible')){
	$('#message').fadeOut(6000)
}
