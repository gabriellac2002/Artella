<button id="EditingButton" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editingModal"></button>

<div id="editingModal" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar produto: </h5>
                <button color="white" id="editingModalClose1Button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="editingForm">
                    <label>Nome</label>
                    <input name='name' id="editingNameInput" placeholder="Nome">
                    <label>Preço</label>
                    <input name='price' id="editingPriceInput" placeholder="Preço">
                    <label>Descrição</label>
                    <textarea name='description' id="editingDescriptionTextArea">

              </textarea>
                    <div class="row">
                        <label>Categoria </label>
                        <select name="selection">
                            <?php foreach ($categorys as $category): ?>

                            <option  name="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                            
                            <?php endforeach ?>
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
                    <div class="modal-footer">
                        <button id="editingModalClose2Button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>