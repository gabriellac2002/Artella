<div class="modal modals fade mt-5" id="modal-delete-<?=$function['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header my-3">
              <h5 class="modal-title" style="text-transform: uppercase;">Deletar Usuário</h5>
              <button data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p class="modals-text my-3" style="font-size: 14px;">Você deletará esse usuário para sempre, deseja continuar?
              <div class="modal-footer">
                <form id="form_deleta" action="/admin/delete" method="POST">
                  <input type="hidden" value="<?= $function['id'] ?>" name="id">
                  <button type="submit" class="btn btn-primary modals-button" id="conf-modal">Excluir</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
