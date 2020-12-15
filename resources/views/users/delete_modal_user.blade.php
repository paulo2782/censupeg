<form name="deleteUser" id="deleteUser" method="POST">    
  {{ method_field('DELETE') }}
  {!! csrf_field() !!}
  <div class="modal fade" id="modalDelete" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Excluir usuário</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <p class="text-confirm">Você tem certeza que deseja excluir o usuário "<span class="name"></span>" ? </p>
                <button type="button" id="btnDelete" class="form-control btn btn-outline-danger" data-dismiss=" ">Excluir</button>
              </div>
          </div>
      </div>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
</script>