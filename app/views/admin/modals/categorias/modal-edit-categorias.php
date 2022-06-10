<button class="btn btnEdit" data-bs-toggle="modal" data-bs-target="#editAction">
    <i class="fa fa-pencil mx-1">
        <p class="mt-3">Editar</p>
    </i>
</button>


<!-- edit -->
<div class="modal modals fade mt-5" id="editAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- cabeçalho do modal -->
            <div class="modal-header my-3">
                <h5 class="modal-title" style="text-transform: uppercase;">Editar</h5>
                <!-- Botão fechar -->
                <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close" ></button>
            </div>
            <form action="/admin/categorias-edit" method="POST">
                <input type="hidden" value="<?= $categoria['id'] ?>" name="id">

                <!-- conteúdo do modal -->

                <div class="form-group mb-3 mt-5 mx-3 nova_categoria">
                    <label class="modals-label">Novo nome</label>
                    <input type="text" class="form-control modals-input" id="nameFormInput" name='name' value="<?php $categoria['name']?>" placeholder="">
                </div>

                <div class="modal-footer">
        
                    <button class="btn btn-primary modals-button">
                        <i class="fa-solid fa-floppy-disk" type="submit" id="conf-modal"> </i> Salvar
                    </button>
        
                </div>
            </form>     
        </div>

    </div>
</div>
