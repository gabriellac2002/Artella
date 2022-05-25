<button class="btn btnDelete " hidden id="deleteActionModal" data-bs-toggle="modal" data-bs-target="#deleteAction"><i class="fa-solid fa-trash"></i></button>

<div class="modal modals fade mt-5" id="deleteAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar </h5>
                <button color="white" id="editingModalClose1Button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p class="modals-text my-5" style="font-size: 16px;">Você deletará esse produto para sempre, deseja continuar?</p>

            </div>
            <div class="modal-footer">
                <form method="post" action='productsDelete'>
                <input name='id' id='form-delete' hidden></input>
                <button id="editingModalClose2Button" type="submit" class="btn btn-danger" data-bs-dismiss="modal">Deletar</button>
                <button type="button" class="btn btn-primary">Cancelar</button>

                </form>
            </div>
            </form>
        </div>

    </div>
</div>
</div>