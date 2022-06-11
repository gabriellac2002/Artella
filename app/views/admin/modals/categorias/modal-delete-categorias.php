<button class="btn btnDelete" data-bs-toggle="modal" data-bs-target="#deleteAction-<?= $categoria['id']; ?>">
    <i class="fa-solid fa-trash mx-1">
        <p class="mt-3">Deletar</p>
    </i>
</button>


<!-- delete -->
<div class="modal modals fade mt-5" id="deleteAction-<?= $categoria['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header my-3">
                <h5 class="modal-title" style="text-transform: uppercase;">Deletar <?php echo $categoria['name']; ?></h5>
                <!-- Botão fechar -->
                <button data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
            </div>

            <!-- conteúdo do modal -->

            <div class="modal-body">
                <p class="modals-text my-5" style="font-size: 14px;">Você deletará essa categoria para sempre, deseja continuar?
                </p>
            </div>

            <form id="form_deleta" action="/admin/categorias-delete" method="POST">
                <input type="hidden" value="<?= $categoria['id'] ?>" name="id">
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary modals-button" id="conf-modal">
                        <i class="fa-solid fa-check" > </i> CONFIRMAR        
                    </button>

                    <button type="button" class="btn btn-danger  modals-button" data-dismiss="modal">
                        <i  class="fa-solid fa-close" > </i> CANCELAR        
                    </button>
                    
                </div>
            </form>    
        </div>


    </div>
</div>
