<button id="ViewProductModal" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal"></button>

<div id="viewModal" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ver produto: </h5>
                <button color="white" id="viewModalClose1Button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="editingForm">
                    <label>Nome</label>
                    <input id="viewName" disabled placeholder="Nome">
                    <label>Preço</label>
                    <input id="viewPrice" disabled placeholder="Preço">
                    <label>Descrição</label>

                    <textarea id="viewDescription"></textarea>
                    <div class="row">
                        <label>Categoria </label>
                        <select>
                            <option name="">NFT</option>
                            <option name="">Quadro</option>
                            <option name="">Aquarela</option>
                        </select>
                    </div>
                    <h4 style="margin-top: 10px;">Imagens</h4>
                    <div id="imagesPreview">

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="viewModalClose2Button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>