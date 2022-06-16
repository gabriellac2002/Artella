
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="../../../public/fontawesome/css/all.css" />

  <link rel="stylesheet" href="../../../public/css/styles.css">
  <link rel="stylesheet" href="../../../public/css/view_adm_categorias.css">

  <title>Categorias</title>
</head>

<body class="bg-universal text-universal">
<?php include 'sidebarAdmin.php' ?>
  <h1 class='titleU'>Categorias</h1>

  <div class="container">
    <div class="tableBar mb-3 mx-0">
      <?php require 'modals/categorias/modal-add-categorias.php' ?>

      <div class="tableBarForm d-flex">
        <form class="formSeach me-2" method="GET" action='categorias-search'>
          <input class="seachBar mx-2" type="search" aria-label="Search" name="search">
          <button class="btn ms-1" type="submit"><i class="fa-solid fa-magnifying-glass" style="color:#d9d9d9;"></i></button>
        </form>
      </div>
    </div>

    <div class="spaceTable">
      <table class="table  tableUsers mx-0">
        <thead class="headTable">
          <tr>
            <th>Id</th>
            <th colspan="2">Categoria</th>
            <th>Ações</th>
          </tr>
        </thead>

        <?php foreach ($categorias as $categoria) : ?>

          <tbody class="bodyTable">
            <tr class="rowTable1">
              <td> <?php echo $categoria['id']; ?> </td>
              <td colspan="2"> <?php echo $categoria['name']; ?> </td>
              <td class="btn-row botoes_de">
                <!--desktop-->
                <div class="">

                  <?php require 'modals/categorias/modal-view-categorias.php'; ?>
                  <?php require 'modals/categorias/modal-edit-categorias.php'; ?>
                  <?php require 'modals/categorias/modal-delete-categorias.php'; ?>

                </div>
                <?php require 'modals/categorias/modal-mobile-categorias.php'; ?>

                <!--mobile-->


              </td>
            </tr>
          </tbody>

        <?php endforeach; ?>


      </table>
     

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
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>