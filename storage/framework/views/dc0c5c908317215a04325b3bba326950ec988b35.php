<form id="deleteCall" action="<?php echo e(route('destroyCallAjax')); ?>" method="POST">
<?php echo e(method_field('DELETE')); ?>

<?php echo csrf_field(); ?>

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
</script><?php /**PATH C:\censupeg\resources\views/mailing/delete_modal_mailing.blade.php ENDPATH**/ ?>