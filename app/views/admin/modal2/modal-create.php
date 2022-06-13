<div class="modal modals fade mt-5" id="modal-create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header my-3">
          <h5 class="modal-title" style="text-transform: uppercase;">Cadastrar Usuário</h5>
          <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
        </div>

      <form action="/admin/create" method="POST">
        <div class="form-group mt-5 mb-3 mx-3">
          <label class="modals-label">Nome</label>
          <input type="text" class="form-control modals-input" id="nameFormInput" name='name' placeholder="Digite seu nome">
        </div>

        <div class="form-group my-3 mx-3">
          <label class="modals-label">
            EMAIL
          </label>
          <input type="text" class="form-control modals-input" id="nameFormInput" name='email' placeholder="Digite seu email">
        </div>

        <div class="form-group mt-3 mb-5 mx-3">
          <label class="modals-label">Senha</label>
          <input type="password" class="form-control modals-input" id="exampleInputPassword1" name='password' placeholder="Digite sua senha">
        </div>


      <div class="modal-footer mt-3">
        <button type="submit" class="btn btn-primary" id="conf-modal">Adicionar</button>
      </div>
      </form>
      </div>
    </div>
  </div>
