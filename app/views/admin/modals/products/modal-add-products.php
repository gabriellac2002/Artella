<button id="NewProductButton" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"></button>

<div id="addModal" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo Produto: </h5>
                <button id="addModalClose1Button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="editingForm" method="post" action="productsCreate">
                    <label for="nome">Nome</label>
                    <input name="nome" placeholder="Nome">
                    <label>Preço</label>
                    <input name="price" placeholder="Preço">
                    <label>Descrição</label>
                    <textarea name="description">

                </textarea>
                    <div class="row">
                        <label>Categoria </label>
                        <select>
                            <option name="">NFT</option>
                            <option name="">Quadro</option>
                            <option name="">Aquarela</option>
                        </select>
                    </div>
                    <h4 style="margin-top: 10px;">Imagens</h4>
                    <div id="dropzone" class="fileInput">
                        <input type="file" multiple hidden>
                        <i class="fa-solid fa-file"></i>
                        <h5>Arraste seus arquivos aqui</h5>
                    </div>
                    <div id="imagesPreview">

                    </div>
            </div>
            <div class="modal-footer">
                <button id="addModalClose2Button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>