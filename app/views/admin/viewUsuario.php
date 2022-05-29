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
        <button class="btn btnAddMore ms-1" data-bs-toggle="modal" data-bs-target="#addAction"><i
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
            <th>EMAIL</th>
            <th>AÇÕES</th>
          </tr>
        </thead>

        <!-- CONTEÚDO -->
        <!-- ! AINDA SEM O PHP -->

        <tbody class="bodyTable">
          <!-- 1ª -->
          <tr class="rowTable1">
            <td>1</td>
            <td>Eu</td>
            <td>eu@gmail.com Lorem ipsum dolor sit amet, co?</td>
            <td class="btn-row">

              <!-- Botões desktop -->

              <div class="btns-desktop">

                <button class="btn btnView" data-bs-toggle="modal" data-bs-target="#viewAction"><i
                    class="fa-solid fa-eye mx-1">
                    <p class="mt-3">Vizualizar</p>
                  </i></button>

                <button class="btn btnEdit" data-bs-toggle="modal" data-bs-target="#editAction"><i
                    class="fa fa-pencil mx-1">
                    <p class="mt-3">Editar</p>
                  </i></button>

                <button class="btn btnDelete" data-bs-toggle="modal" data-bs-target="#deleteAction"><i
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

          <!-- 2ª -->
          <tr class="rowTable2">
            <td>2</td>
            <td>Ok ffffffffffffff</td>
            <td>eu@gmail.com Lorem ipsum dolor sit amet, co?</td>
            <td class="btn-row">

              <!-- Botões desktop -->

              <div class="btns-desktop">

                <button class="btn btnView" data-bs-toggle="modal" data-bs-target="#viewAction"><i
                    class="fa-solid fa-eye mx-1">
                    <p class="mt-3">Vizualizar</p>
                  </i></button>

                <button class="btn btnEdit" data-bs-toggle="modal" data-bs-target="#editAction"><i
                    class="fa fa-pencil mx-1">
                    <p class="mt-3">Editar</p>
                  </i></button>

                <button class="btn btnDelete" data-bs-toggle="modal" data-bs-target="#deleteAction"><i
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
        </tbody>
      </table>
    </div>
  </div>


  <!--! MODALS -->

  <!-- modal add more -->
  <div class="modal modals fade mt-5" id="addAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- cabeçalho do modal -->
        <div class="modal-header my-3">
          <h5 class="modal-title" style="text-transform: uppercase;">Cadastrar Usuário</h5>
          <!-- Botão fechar -->
          <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
        </div>

        <!-- conteúdo do modal -->
      <form method="post" action="">
        <div class="form-group mt-5 mb-3 mx-3">
          <label class="modals-label">Nome</label>
          <input type="text" class="form-control modals-input">
        </div>

        <div class="form-group my-3 mx-3">
          <label class="modals-label">
            EMAIL
          </label>
          <input type="text" class="form-control modals-input">
        </div>

        <div class="form-group mt-3 mb-5 mx-3">
          <label class="modals-label">Senha</label>
          <input type="password" class="form-control modals-input">
        </div>
      </form>
      </div>

      <div class="modal-footer mt-3">

        <button class="btn btn-primary modals-button">
          <i class="fa-solid fa-floppy-disk"> </i> Salvar
        </button>

      </div>
    </div>
  </div>

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

          <button class="btn btnView" data-bs-toggle="modal" data-bs-target="#viewAction"><i class="fa-solid fa-eye">
              <p class="mt-3 modals-text">Vizualizar</p>
            </i></button>

          <button class="btn btnEdit" data-bs-toggle="modal" data-bs-target="#editAction"><i class="fa fa-pencil">
              <p class="mt-3 modals-text">Editar</p>
            </i></button>

          <button class="btn btnDelete" data-bs-toggle="modal" data-bs-target="#deleteAction"><i
              class="fa-solid fa-trash">
              <p class="mt-3 modals-text">Deletar</p>
            </i></button>

        </div>
      </div>
    </div>
  </div>

  <!--modal view -->
  <div class="modal modals fade mt-5" id="viewAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- cabeçalho do modal -->
        <div class="modal-header my-3">
          <h5 class="modal-title" style="text-transform: uppercase;">Usuário</h5>
          <!-- Botão fechar -->
          <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
        </div>

        <!-- conteúdo do modal -->
        <div class="modal-body my-5">
          <div class="form-group mt-2 mb-2 mx-5">
            <p class="modals-text">Nome do usuário</p>

          </div>

          <div class="form-group mt-2 mb-2 mx-5">
            <p class="modals-text">email do usuário</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

  <!-- delete -->
  <div class="modal modals fade mt-5" id="deleteAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header my-3">
          <h5 class="modal-title" style="text-transform: uppercase;">Deletar Usuário</h5>
          <!-- Botão fechar -->
          <button data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
        </div>

        <!-- conteúdo do modal -->

        <div class="modal-body">
          <p class="modals-text my-5" style="font-size: 14px;">Você deletará esse usuário para sempre, deseja continuar?
          </p>
        </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-primary modals-button">
          <i class="fa-solid fa-check"> </i> CONFIRMAR

        </button>
        <button type="button" class="btn btn-danger  modals-button">
          <i class="fa-solid fa-close"> </i> CANCELAR

        </button>

      </div>

    </div>
  </div>
  </div>

  <!-- edit -->
  <div class="modal modals fade mt-5" id="editAction" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- cabeçalho do modal -->
        <div class="modal-header my-3">
          <h5 class="modal-title" style="text-transform: uppercase;">Editar</h5>
          <!-- Botão fechar -->
          <button data-bs-dismiss="modal" class="btn-close btnClose" aria-label="Close"></button>
        </div>

        <!-- conteúdo do modal -->

        <div class="form-group mb-3 mt-5 mx-3">
          <label class="modals-label">Novo Nome</label>
          <input type="text" class="form-control modals-input">
        </div>

        <div class="form-group my-3 mx-3">
          <label class="modals-label">
            Novo EMAIL
          </label>
          <input type="text" class="form-control modals-input">
        </div>

        <div class="form-group mt-3 mb-5 mx-3">
          <label class="modals-label">Nova Senha</label>
          <input type="password" class="form-control modals-input">
        </div>

      </div>

      <div class="modal-footer">

        <button class="btn btn-primary modals-button">
          <i class="fa-solid fa-floppy-disk"> </i> Salvar
        </button>

      </div>
    </div>
  </div>
  </div>
  </tr>


</body>

</html>