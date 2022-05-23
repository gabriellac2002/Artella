<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área administrativa produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../public/css/styles.css">
  <link rel="stylesheet" href="../../../public/css/adminproducts.css">
</head>
<body>
  <?php include 'sidebarAdmin.php'?>
  <main>
    <div class="container-xl">
      <h2>Produtos</h2>
      <div class="search">
        <i class="fa-solid fa-plus"></i>
        <div>
          <i class="fa-solid fa-magnifying-glass"></i>
          <input >
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">
              <span>
                Ações
              </span>
            </th>
          </tr>
        </thead>
        <tbody>

        <?php foreach ($products as $value) { ?>

          <tr id="row1">
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td>R$ <?php echo $value["price"] ?></td>
            <td hidden>
            <?php echo $value["description"] ?>
            </td>
            <td class="actions">
              <i  class="fa-solid fa-eye"></i>
              <i class="fa-solid fa-pen"></i>
              <i class="fa-solid fa-trash"></i>
            </td>
            <td  class="actionsResponsive">
              <i class="fa-solid fa-ellipsis fa-xl"></i>
            </td>
          </tr>

          <?php } ?>

        </tbody>

      </table>
      <div id="addModal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Novo Produto: </h5>
              <button id="addModalClose1Button" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="editingForm" method="post" action="productsCreat">
                <label for="nome">Nome</label>
                <input name="nome" placeholder="Nome">
                <label>Preço</label>
                <input placeholder="Preço">
                <label>Descrição</label>
                <textarea>
                  
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
      
    </div>
    <button id="EditingButton" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editingModal">
      Launch demo modal
    </button>

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
              <input id="editingNameInput" placeholder="Nome">
              <label>Preço</label>
              <input id="editingPriceInput" placeholder="Preço">
              <label>Descrição</label>
              <textarea id="editingDescriptionTextArea">
                
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
            </form>
          </div>
          <div class="modal-footer">
            <button id="editingModalClose2Button" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <button id="ViewProductModal" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
    Launch demo modal
  </button>

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
            
            <textarea id="viewDescription">
                
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
  
  </div>
  <button id="NewProductButton" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
    Launch demo modal
  </button>

  <div id="actionsModal" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <div>
            <i class="fa-solid fa-eye"></i>
            <i class="fa-solid fa-pen"></i>
            <i class="fa-solid fa-trash"></i>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  
  </div>
  <button id="ActionsModal" hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actionsModal">
    
  </button>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/91248aca6a.js" crossorigin="anonymous"></script>
  <script src="../../../public/js/adminProduct.js"></script>

  
</body>
</html>
