<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="..\..\..\public\css\styles.css">
  <link rel="stylesheet" href="..\..\..\public\css\styles_contato.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <title>Contatos</title>
</head>

<body>
  <?php include __DIR__ . '/../includes/navBar.php' ?>

  <div class="logo_contato">
    <img src="https://trello.com/1/cards/6245b4963426e13d81f187c3/attachments/624711352026307dadbed2e3/download/LogoArtella.png" alt="Artella logo">
  </div>

  <h1>Contate-nos</h1>
  <div class="container">
    <form class="formulario" action="contato/enviar" method="post">

      <?php if (isset($_SESSION['INFO'])) : ?>
        <div class="alert alert-<?php echo $_SESSION["INFO"]['tag'] ?> alert-dismissible fade show mt-5" role="alert">
          <strong><?php echo $_SESSION["INFO"]['msg1']; ?></strong> <?php echo $_SESSION["INFO"]['msg2']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        session_unset();
        session_destroy();
        ?>
      <?php endif; ?>



      <div class="form-floating mb-3 form nome">
        <input type="form-control" class="form-control" id="floatingPassword" placeholder="Password" name="full-name" required="required" />

        <label for="floatingInput">Nome completo</label>
      </div>
      <div class="form-floating mb-3 form email">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail" required="required" />

        <label for="floatingPassword">Endereço de email</label>
      </div>
      <div class="form-floating mb-3 form assunto">
        <input type="form-control" class="form-control" id="floatingPassword" placeholder="Password" name="about" required="required" />
        <label for="floatingPassword">Assunto</label>
      </div>
      <div class="form-floating mb-3 form mensagem">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="message" required="required"></textarea>
        <label for="floatingTextarea">Mensagem</label>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto butao">
        <button class="btn btn-primary" type="submit">Enviar Mensagem</button>
      </div>
    </form>
    <h2>Nos encontre aqui</h2>
    <div class="mapa_responsivo">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.2991074352017!2d-43.96684168528912!3d-19.869587986637587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690f4828e47dd%3A0x1602aa04e56222f1!2sDepartamento%20de%20Ci%C3%AAncia%20da%20Computa%C3%A7%C3%A3o%20-%20ICEx%20-%20UFMG!5e0!3m2!1spt-BR!2sbr!4v1651021239760!5m2!1spt-BR!2sbr" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <?php include __DIR__ . '/../includes/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>