<button class="button-action" data-bs-toggle="modal" data-bs-target="#userAction">
    <i class="fa-solid fa-ellipsis-vertical mx-3"></i>
</button>

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

                <?php require 'modal-view-categorias.php'; ?>
                <?php require 'modal-edit-categorias.php'; ?>
                <?php require 'modal-delete-categorias.php'; ?>

            </div>
        </div>
    </div>
</div>