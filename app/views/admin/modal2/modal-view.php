<div class="modal modals fade mt-5" id="modal-view-<?=$function['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header my-3">
          <h5 class="modal-title" style="text-transform: uppercase;">Usuário</h5>
          <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
        </div>
        <div class="modal-body my-2">
            <form action="/admin/show" method="GET">
              <input type="hidden" value="<?=$function['id']?>" name="id">
                <div class="form-group mt-2 mb-2 mx-5">
                    <label class ="modals-label" for="exampleInputEmail1">Nome de usuário:</label>
                    <input type="text" class="form-control" id="nameFormInput" value="<?=$function['name']?>" readonly placeholder="">     
                </div>
                <div class="form-group mt-2 mb-2 mx-5">
                    <label class ="modals-label" for="exampleInputEmail1">Email:</label>
                    <input type="text" class="form-control" id="nameFormInput" value="<?=$function['email']?>" readonly placeholder="">     
                </div>
                <div class="form-group mt-2 mb-2 mx-5">
                    <label class ="modals-label" for="exampleInputPassword1">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?=$function['password']?>" readonly placeholder="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary modals-button" data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close">Fechar</button>
        </div>
      </div>
    </div>
  </div> 
</div>
