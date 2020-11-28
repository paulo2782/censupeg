$('.deleteUser').click(function(event) {
	/* Act on the event */
	id = $(this).attr('data-id');
	name = $(this).attr('data-name');
	$('.name').html(name)
	$('#modalDelete').modal('show');
});
