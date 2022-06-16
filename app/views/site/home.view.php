<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="..\..\..\public\css\styles.css">
  <link rel="stylesheet" href="..\..\..\public\css\styles_home.css">


  <title>Artella</title>
</head>

<body>

<?php include __DIR__ .'/../includes/navBar.php' ?>

  <div class="container_home">
    <!--Slides-->
    <div class="one">

      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active slide_1" data-bs-interval="4000">
            <img src="http://obviousmag.org/archives/uploads/2014/06/Starry%20Night%20de%20Vincent%20Van%20Gogh-thumb-800x500-49668.jpg" class="d-block w-100" alt="Starry Night">
          </div>
          <div class="carousel-item slide_2" data-bs-interval="4000">
            <img src="https://s2.glbimg.com/1-2w1G1tzCos8rZODN9Ng77BqVU=/smart/e.glbimg.com/og/ed/f/original/2020/05/27/pinturas-famosas-criacao-de-adao-capela-sistina-roma-vaticano-italia.png" class="d-block w-100" alt="Bal au moulin de la Galette">
          </div>
          <div class="carousel-item slide_3" data-bs-interval="4000">
            <img src="https://cdn.culturagenial.com/imagens/guernica-cke.jpg" class="d-block w-100" alt="Les Amants">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

    </div>
    <h1 class="title">Lançamentos</h1>
    <!--Lançamentos-->
    <div class="two my-5 ms-0 mx-xl-5 ms-lg-3 ms-md-1">
        <div class="row  mx-2 cards_todos">
          <?php 
            foreach($data as $element) :
          ?>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="<?php if(isset($element["url"])) { echo '../../../public/assets/products/'.$element["url"]; } else { echo 'https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80'; }?>" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title"><?php if(strlen($element["name"]) > 15) echo substr($element["name"], 0, 10).'...'; else echo $element["name"];?></h5>
                <p class="card-text">R$<?php echo $element["price"]?></p>
                <?php ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    <!--Quem somos e contate-nos-->
    <div class="children three mx-0 mx-lg-5 mx-md-4 mx-sm-3">
      <div class="img1">
        <a href="about"><img src="https://supermercadosgrandmarche.com.br/wp-content/uploads/2020/10/q-somos.png" alt="Quem Somos"></a>
      </div>
      <div class="img2">
        <a href="contato"><img src="https://www.wld.com.br/wp-content/uploads/2020/01/faleconosco.png" alt="Fale conosco"></a>
      </div>
    </div>

    <!--Mais produtos-->
    <div class="children five">

      <h1 class="title">Populares</h1>
      <hr>

      <h2 class="sub-title mb-2 mt-5">Obras</h2>
      <div class="two my-5 ms-0 mx-xl-5 ms-lg-3 ms-md-1">
        <div class="row  mx-2 cards_todos">
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  <hr>
      <h2 class="sub-title mb-2 mt-5">NFTs</h2>
      <div class="two my-5 ms-0 mx-xl-5 ms-lg-3 ms-md-1">
        <div class="row  mx-2 cards_todos">
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <h2 class="sub-title mb-2 mt-5">Artistas</h2>
      <div class="two my-5 ms-0 mx-xl-5 ms-lg-3 ms-md-1">
        <div class="row  mx-2 cards_todos">
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <h2 class="sub-title mb-2 mt-5">Exposições</h2>
      <div class="two my-5 ms-0 mx-xl-5 ms-lg-3 ms-md-1">
        <div class="row  mx-2 cards_todos">
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mb-4 mx-0 cards">
            <div class="card mx-auto">
              <a href="#"><img src="https://2.bp.blogspot.com/-xqirkw3AdWE/UC1hr7Atu_I/AAAAAAAAD08/cQ2SMPUMdzM/s1600/abaporu.jpeg" class="card-img-top" alt="Abaporu"></a>
              <div class="card-body">
                <h5 class="card-title">Abaporu</h5>
                <p class="card-text">R$100</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <?php include __DIR__ .'/../includes/footer.php' ?>

</body>

</html>