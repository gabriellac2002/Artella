  <!-- modal ações mobile -->
  <div class="modal modals my-5" id="userAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- cabeçalho do modal -->
        <div class="modal-header">
          <h5 class="modal-title" style="text-transform: uppercase;">Ações</h5>
          <!-- Botão fechar -->
          <button data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
        </div>

        <!-- conteúdo do modal -->
        <div class="modal-body my-5">

          <!-- Botões do modal -->

          <button class="btn btnView" data-bs-toggle="modal" data-bs-target="#modal-view-<?=$function['id']?>"><i class="fa-solid fa-eye">
              <p class="mt-3 modals-text">Visualizar</p>
            </i></button>

          <button class="btn btnEdit" data-bs-toggle="modal" data-bs-target="#modal-edit-<?=$function['id']?>"><i class="fa fa-pencil">
              <p class="mt-3 modals-text">Editar</p>
            </i></button>

          <button class="btn btnDelete" data-bs-toggle="modal" data-bs-target="#modal-delete-<?=$function['id']?>"><i
              class="fa-solid fa-trash">
              <p class="mt-3 modals-text">Deletar</p>
            </i></button>

        </div>
      </div>
    </div>
  </div>
