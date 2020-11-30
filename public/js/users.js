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

$('.editUser').click(function(event) {
  /* Act on the event */
  id    = $(this).attr('data-id')
  level = $(this).attr('data-level')
  name  = $(this).attr('data-name')
  email = $(this).attr('data-email')

  $('#level_edit').val(level)
  $('#name_edit').val(name)
  $('#email_edit').val(email)
  $('#id_edit').val(id)
});

$('#btnUpdate').click(function(event) {
  /* Act on the event */
  $('#updateUser').attr('action','updateUser')
  $('#updateUser').submit()
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