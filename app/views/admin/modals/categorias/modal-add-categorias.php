<div class="tableBar-add">
    <button class="btn btnAddMore ms-1" data-bs-toggle="modal" data-bs-target="#addAction">
        <i class="fa-solid fa-plus" style="color:#d9d9d9;"></i>
    </button>
</div>

<!--MODALS-->
<div class="modal modals fade mt-5" id="addAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- cabeçalho do modal -->
            <div class="modal-header my-3">
                <h5 class="modal-title" style="text-transform: uppercase;">Cadastrar categoria</h5>
                <!-- Botão fechar -->
                <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
            </div>

            <!-- conteúdo do modal -->

            <div class="form-group mt-5 mb-3 mx-3 nova_categoria">
                <label class="modals-label">Nova categoria</label>
                <input type="text" class="form-control modals-input">
            </div>

        </div>

        <div class="modal-footer mt-3">

            <button class="btn btn-primary modals-button">
                <i class="fa-solid fa-floppy-disk"> </i> Salvar
            </button>

        </div>
    </div>
</div>