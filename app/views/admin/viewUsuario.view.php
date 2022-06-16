<?php include 'sidebarAdmin.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!--  FONTS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="../../../public/fontawesome/css/all.css" />

  <!-- Styles -->
  <link rel="stylesheet" href="../../../public/css/viewUsuarioStyle.css" />
  <link rel="stylesheet" href="../../../public/css/styles.css" />

  <title>View Administrativa de Usuários</title>
</head>

<body>
  <!-- NAV -->

  <!-- TABLE  -->
  <div class="container">
    <h1 class="title">USUÁRIOS</h1>
    <div class="tableBar mb-3 mx-0">

      <div class="tableBar-add">
        <?php require 'modal2/modal-create.php' ?>
        
        <button type ="button" id="add" class="btn btnAddMore ms-1" data-bs-toggle="modal" data-bs-target="#modal-create"><i
            class="fa-solid fa-plus" style="color:#d9d9d9;"></i></button>
      </div>

      <div class="tableBarForm d-flex">

        <form class="formSeach me-2">

          <input class="seachBar mx-2" type="search" aria-label="Search">
          <button class="btn ms-1" type="submit"><i class="fa-solid fa-magnifying-glass"
              style="color:#d9d9d9;"></i></button>


        </form>
      </div>

    </div>


    <div class="spaceTable">
      <table class="table tableUsers mx-0">

        <!-- CABEÇALHO -->
        <thead class="headTable">
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th id="hiddenEmail">EMAIL</th>
            <th>AÇÕES</th>
          </tr>
        </thead>
        <?php foreach ($users as $function) : ?>
        <?php require 'modal2/modal-view.php' ?>
        <?php require 'modal2/modal-edit.php' ?>
        <?php require 'modal2/modal-delete.php' ?>
        <?php require 'modal2/modal-mobile.php' ?>
        <!-- CONTEÚDO -->

        <tbody class="bodyTable">
          <!-- 1ª -->
          <tr class="rowTable2">
            <td><?=$function['id']?></td>
            <td><?=$function['name']?></td>
            <td id="hiddenEmail"><?=$function['email']?></td>
            <td class="btn-row">

              <!-- Botões desktop -->

              <div class="btns-desktop">

                <button class="btn btnView" data-bs-toggle="modal" data-bs-target="#modal-view-<?=$function['id']?>" id="usubutton" type="submit"">
                  
                  <i class="fa-solid fa-eye mx-1">
                    <p class="mt-3">Visualizar</p>
                  </i></button>

                <button class="btn btnEdit" data-bs-toggle="modal" data-bs-target="#modal-edit-<?=$function['id']?>" id="editbutton">
                  
                  <i class="fa fa-pencil mx-1">
                    <p class="mt-3">Editar</p>
                  </i></button>

                <button class="btn btnDelete" data-bs-toggle="modal" data-bs-target="#modal-delete-<?=$function['id']?>" id="excluibutton"><i
                    class="fa-solid fa-trash mx-1">
                    <p class="mt-3">Deletar</p>
                  </i></button>

              </div>

              <!-- Botões para mobile -->
              <button class="button-action" data-bs-toggle="modal" data-bs-target="#userAction">
                <i class="fa-solid fa-ellipsis-vertical mx-3"></i>
              </button>

            </td>
          </tr>

              <?php endforeach; ?>

          </tr>
        </tbody>
        </table>
    </div>  
  </div>

</body>
</html>