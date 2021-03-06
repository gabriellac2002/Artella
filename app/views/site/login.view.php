<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../public/css/styles.css">
  <link rel="stylesheet" href="../../../public/css/loginStyle.css">
  <title>Artella - Login</title>
</head>
<body class="bg-universal">
  <main>
    <section style="background-color: white;" class="animation">
      <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_jmn5frwv.json" background="white"  speed="1" class="animationComponent" loop autoplay></lottie-player>
    </section>
    <section style="" class="form">
      <form action="login/valida" method="POST">
        <h2>Entre na área administrativa</h2>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <div class="inputRow">
            <i class="fa-solid fa-envelope"></i>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <small id="emailHelp" class="form-text">Não compartilhe dados sensíveis com ninguém</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <div class="inputRow">
            <i class="fa-solid fa-key"></i>
            <input name="password" type="password" class="form-control" id="password" placeholder="Senha">
            <i style="color: grey;" class="fa-solid fa-eye"></i>
          </div>
          <small class="message form-text"></small>
        </div>
        <button style="background-color: #245eab !important; font-weight: bold;" type="submit" class="btn btn-primary">Logar</button>
      </form>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/91248aca6a.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="../../../public/js/login.js"></script>
</body>
</html>