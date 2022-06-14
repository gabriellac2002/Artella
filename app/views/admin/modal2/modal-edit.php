<div class="modal modals fade mt-5" id="modal-edit-<?=$function['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header my-3">
              <h5 class="modal-title" style="text-transform: uppercase;">Editar</h5>
              <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/update" method="POST">
                    <input type="hidden" value="<?= $function['id'] ?>" name="id">
                    <div class="form-group mb-3 mt-3 mx-3">
                        <label class ="modals-label" for="exampleInputEmail1">Nome de usuário:</label>
                        <input type="text" class="form-control modals-input" id="nameFormInput" name='name' value="<?=$function['name']?>" placeholder="">
                    </div>
                    <div class="form-group mb-3 mt-3 mx-3">
                        <label class="modals-label" for="exampleInputPassword1">Email:</label>
                        <input type="text" class="form-control modals-input" id="exampleInputPassword1" name='email' value="<?=$function['email']?>" placeholder="">
                    </div>
                    <div class="form-group mb-3 mt-3 mx-3">
                        <label class="modals-label" for="exampleInputPassword1">Senha:</label>
                        <input type="password" class="form-control modals-input" id="exampleInputPassword1" name='password' value="<?=$function['password']?>" placeholder="">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary modals-button" id="conf-modal">Salvar</button>
                    </div>  
                </form>                 
            </div>
        </div>
    </div>
</div>  
