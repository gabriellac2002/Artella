<button class="btn btnView" data-bs-toggle="modal" data-bs-target="#viewAction-<?= $categoria['id']; ?>">
    <i class="fa-solid fa-eye mx-1">
        <p class="mt-3">Vizualizar</p>
    </i>
</button>

<!--modal view -->

<div class="modal modals fade mt-5" id="viewAction-<?= $categoria['id'];?>"  tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- cabeçalho do modal -->
            <div class="modal-header my-3">
                <h5 class="modal-title" style="text-transform: uppercase;">Visualização da categoria:</h5>
                <!-- Botão fechar -->
                <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
            </div>

            <!-- conteúdo do modal -->
            <div class="modal-body my-5">
                <div class="form-group mt-2 mb-2 mx-5">
                    <p class="modals-text">Nome da categoria: <?=$categoria['name']; ?></p>
                </div>

            </div>
        </div>

    </div>
</div>