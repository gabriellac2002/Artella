<!DOCTYPE html>
<html>

<head>
    <title>Produto X</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/productView.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700;800;900&family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <?php include __DIR__ . '/../includes/navBar.php' ?>
    <div class="main">
        <div class="card">
            <!--esquerda -->
            <div class="productPic">
                <h2 class="title"><?php echo $product['name'] ?></h2>
                <div class="displayPic">
                    <div class="showPic">
                        <?php if (isset($images[0]['url'])) { ?>
                            <img src="../../../public/assets/products/<?php echo $images[0]['url'] ?>">
                        <?php } else { ?>
                            <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80">
                        <?php } ?>
                        <?php if (isset($images[1]['url'])) { ?>
                            <img src="../../../public/assets/products/<?php echo $images[1]['url'] ?>">
                        <?php } else { ?>
                            <img src="../../../public/assets/frame-product1.jpg">
                        <?php } ?>
                        <?php if (isset($images[2]['url'])) { ?>
                            <img src="../../../public/assets/products/<?php echo $images[2]['url'] ?>">
                        <?php } else { ?>
                            <img src="../../../public/assets/frame-product2.jpg">
                        <?php } ?>
                    </div>
                </div>
                <div class="selectPic">
                    <div class="itemPic" style="width:30%; ">
                        <a href="#" data-id="1">

                            <?php if (isset($images[0]['url'])) { ?>
                                <img src="../../../public/assets/products/<?php echo $images[0]['url'] ?>" style="height:110px;">
                            <?php } else { ?>
                                <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80">
                            <?php } ?>

                        </a>
                    </div>
                    <div class="itemPic" style="width:30%; ">
                        <a href="#" data-id="2">

                            <?php if (isset($images[1]['url'])) { ?>
                                <img src="../../../public/assets/products/<?php echo $images[1]['url'] ?>" style="height:110px;">
                            <?php } else { ?>
                                <img src="../../../public/assets/frame-product1.jpg">
                            <?php } ?>

                        </a>
                    </div>
                    <div class="itemPic" style="width:30%; ">
                        <a href="#" data-id="3">

                            <?php if (isset($images[2]['url'])) { ?>
                                <img src="../../../public/assets/products/<?php echo $images[2]['url'] ?>" style="height:110px;">
                            <?php } else { ?>
                                <img src="../../../public/assets/frame-product2.jpg">
                            <?php } ?>

                        </a>
                    </div>
                </div>
            </div>
            <!-- direita! -->
            <div class="productContent">


                <div class="productRating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                </div>

                <div class="productPrice">
                    <p class="lastPrice">Preço anterior: <span>R$<?php echo round($product['price'] * 2, 2) ?></span></p>
                    <p class="newPrice">Preço atual: <span>R$ <?php echo round($product['price'], 2) ?></span></p>
                </div>

                <div class="productDetail">
                    <h2>Sobre a arte:</h2>
                    <hr>
                    <p><?php echo $product['description'] ?> </p>
                    <p>A escolha dos materiais e técnica adequadas está diretamente ligada ao resultado desejado para o trabalho e como se pretende que ele seja entendido. Desta forma, a análise de qualquer obra artística passa pela identificação do suporte e da técnica utilizadas.</p>
                    <ul>
                        <li>Categoria: <span><?php echo $category['name'] ?></span></li>
                        <li>Disponibilidade: <span>Pronto para envio</span></li>
                    </ul>
                </div>

                <div class="share">
                    <p>Compartilhe:</p>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include __DIR__ . '/../includes/footer.php' ?>
    <script src="../../../public/js/scriptProductView.js"></script>
</body>

</html>