<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../public/css/styles.css">
  <link rel="stylesheet" href="../../../public/css/navBarStyle.css">


</head>

<body>

  <div class="nav-voucher d-none d-lg-block">
    <ul class="nav nav-bar-dark justify-content-center">
      <li class="nav-item">

        <a class="nav-link text-voucher" href="#">
          Aproveite nossas promoções de abertura! 50% de desconto em todas as telas e pinturas - somente esta semana!  
        </a>

      </li>
    </ul>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-nav text-nav">
    <div class="container">

      <a class="navbar-brand logo" href="home"><img src="../../../public/assets/LogoArtella.png" alt="Logo" class="img-fluid" /></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item nav-menu-itens mx-1">

            <a class="nav-link active text-nav active" href="home">
              Home
            </a>

          </li>

          <li class="nav-item dropdown mx-1">
            <a class="nav-link dropdown-toggle text-nav" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              GALERIA
            </a>

            <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end mx-1">

              <li><a class="dropdown-item "href="productsSearch?category=23&">Esculturas</a></li>
              <li><a class="dropdown-item " href="productsSearch?category=22&">NFTs</a></li>
              <li><a class="dropdown-item " href="productsSearch?category=21&">Pinturas</a></li>
              <li><a class="dropdown-item " href="productsSearch?category=20&">Telas</a></li>



              <!-- <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item " href="#">Mais procurados</a></li> -->

            </ul>
          </li>

          <li class="nav-item nav-menu-itens mx-1">

            <a class="nav-link active text-nav" href="products">
              Produtos
            </a>

          </li>

          <li class="nav-item nav-menu-itens mx-1">

            <a class="nav-link active text-nav" href="about">
              Sobre
            </a>

          </li>

          <li class="nav-item nav-menu-itens mx-1">

            <a class="nav-link active text-nav" href="contato">
              Contate-nos
            </a>

          </li>
        </ul>
        <div class="btn-group float-start">
          <a href="#" class="dropdown-toggle text-decoration-none text-light after-none" data-bs-toggle="dropdown">

            <i class="bi-person-circle icon-person"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">

            <li><a href="login" class="dropdown-item "><i class="bi bi-box-arrow-in-right itens-profile"></i>
                Login</a></li>
            <!-- <li><a href="#" class="dropdown-item"><i class="bi bi-person itens-profile"></i> Perfil</a></li> -->
            <!-- <li><a href="#" class="dropdown-item"><i class="bi bi-gear-fill itens-profile"></i> Configurações</a></li> -->

            <!-- <hr class="dropdown-divider">
            </li>
            <li><a href="#" class="dropdown-item"><i class="bi bi-box-arrow-right itens-profile"></i> Sign out</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>

</body>
</html>