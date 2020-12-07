<form id="deleteCall" action="{{ route('destroyCallAjax') }}" method="POST">
{{ method_field('DELETE') }}
{!! csrf_field() !!}
  <input type="hidden" name="call_id" id="call_id">
</form> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).on('click','.deleteMailing[data-id]',function(data) {
    /* Act on the event */
    $('#call_id').val($(this).attr('data-id'))
    Swal.fire({
      title: 'Confirma Excluir?',
      showDenyButton: true,
      icon: 'warning',
      confirmButtonText: `Sim`,
      denyButtonText: `Não`,
    }).then((result) => {
      if (result.isConfirmed) {
        $('#deleteCall').submit()
        
      } else if (result.isDenied) { 

      }
    })
});
</script>