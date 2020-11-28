if($('#alert').is(':visible')){
	$('#alert').fadeOut(4000);
}

$('.deleteUser').click(function(event) {
	/* Act on the event */
	id   = $(this).attr('data-id');
	name = $(this).attr('data-name');
	$('.name').html(name)
	$('#id').val(id)

	$('#modalDelete').modal('show');
});

$('#btnDelete').click(function(event) {
  /* Act on the event */
  $('#deleteUser').attr('action','destroyUser')
  $('#deleteUser').submit()
});

$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });