<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="../../../public/css/navBarStyle.css">
  <link rel="stylesheet" href="../../../public/css/styles.css">
  <link rel="stylesheet" href="../../../public/css/productsStyle.css">
  <link rel="stylesheet" href="../../../public/css/navBarStyle.css">
  <title>Artella - Produtos</title>
</head>

<body class="bg-universal text-universal">

  <main>
    <section class="productsList">
      <h2>Artes</h2>
      <div class="ordenated">
        <span>Exibindo 1-20 de 200 resultados</span>
        <span class="rowMain">
          <label>Ordenar por: </label>
          <select name="orderBy" style="margin-left: 0px;">
            <option value="greaterPrice">Maior preço</option>
            <option value="lowerPrice">Menor preço</option>
            <option value="new">Lançamento</option>
          </select>
        </span>
        <span class="rowMain">
          <label>Categoria: </label>
          <select style="margin-left: 0px;" id="select-category" >
          <option selected value="none" name="none">All</option>

          <?php foreach ($categorys as $category):?>
            <option value="<?php echo $category['id']?>" name="<?php echo $category['name']?>"><?php echo $category['name']?></option>
          <?php endforeach;?>
          </select>
        </span>
      </div>
      <!-- Button trigger modal -->
      <button hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Filtros</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <section class="filtersResponsive">
                <h4>Filtros selecionados: (0)</h4>
                <div class="filterSection">
                  <h4>Buscar pelo nome: </h4>
                  <div class="filterSearch">
                    <input type="text" value="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </div>
                </div>
                <div class="filterSection">
                  <h4>Tipo</h4>
                  <ul class="filterUl" style="list-style: none;">
                    <li>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>NFT</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>Arte física</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>Arte digital</label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="filterSection">
                  <h4>Categoria: </h4>
                  <div class="filterSearch">
                    <input type="text" value="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </div>
                  <ul class="filterUl" style="list-style: none;">
                    <li>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>Aquarela</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>Cubista</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>Pintura a óleo</label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="filterSection">
                  <h4>Preço: </h4>
                  <div class="filterSearch">
                    <input type="text" value="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </div>
                  <ul class="filterUl" style="list-style: none;">
                    <li>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>R$ 1 - R$ 150</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>R$ 150 - R$ 250</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>R$ 300 - R$ 450</label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="filterSection">
                  <h4>Desconto: </h4>
                  <div class="filterSearch">
                    <input type="text" value="">
                    <i style="margin-left: 10px;" class="fa-solid fa-magnifying-glass"></i>
                  </div>
                  <ul class="filterUl" style="list-style: none;">
                    <li>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>5% - 17%</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>18% - 30%</label>
                      </div>
                      <div class="containerFlex">
                        <input type="checkbox">
                        <label>31% - 43%</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button style="background-color: #051d40; border: 1px solid #051d40; color: white;" type="button" class="btn">Buscar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-xl">
        <div class="refine">
          <input type="search" id="searchProduct" placeholder="Pesquisar produto" />
          <i class="fa-solid fa-magnifying-glass" onclick="search();"></i>
        </div>
        <ul class="pagination">
            
        </ul>
        <div id="allProducts" class="row row-cols-lg-2" style="flex-wrap: wrap;">

          <?php foreach ($itens as $iten):?>

          <a class="col-md-6 col-sm-12 col-lg-4 align-items-center justify-content-center" style="text-decoration: none; color: black" href="products/1">
            <div class="card cardWidth">
              <img class="card-img-top" src=" <?php if(!empty($iten[1][0]['url'])) echo "../../../public/assets/products/". $iten[1][0]['url']; else echo "https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80"?>" alt="Card image cap" style="max-width:600px;max-height:240px;">
              <div class="card-body">

                <h5 class="card-title"><?php echo $iten[0]['name']?></h5>
                <div style="display: flex; flex-direction: row; margin-bottom: 10px; margin-top: 5px;">
                  <i class="fa-solid fa-star starChecked"></i>
                  <i class="fa-solid fa-star starChecked"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <div style="display: flex; flex-direction: column;">
                  <span class="oldPrice">R$ <?php echo $iten[0]['price'] * 1.2?></span>
                  <span style="margin-bottom: 4px; margin-top: 0px" class="card-text">R$ <?php echo $iten[0]['price']?></span>
                  <span class="secondPrice">ou 5x de R$ <?php echo ($iten[0]['price'] * 1.05)/5?> </span>
                  <span class="category">
                  <?php echo $iten[2][0]['name']?>
                  </span>
                </div>

              </div>
            </div>
          </a>
            <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/91248aca6a.js" crossorigin="anonymous"></script>
  <script src="../../../public/js/productsFilters.js"></script>

</body>

</html>