<form name="deleteUser" id="deleteUser" method="POST">    
  {{ method_field('DELETE') }}
  {!! csrf_field() !!}
  <div class="modal fade" id="modalDelete" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Excluir Usuário</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <p>Você tem certeza que deseja excluir o usuário "<span class="name"></span>" ? </p>
                <div class="line-horizontal"></div>
                <button type="button" id="btnDelete" class="btn btn-outline-danger" data-dismiss=" ">Excluir</button>
              </div>
          </div>
      </div>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$('#btnDelete').click(function(event) {
  /* Act on the event */
  $('#deleteUser').attr('action','destroyUser')
  $('#deleteUser').submit()
});
</script>