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

</head>

<body>
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
                            <img src="../../../public/assets/products/<?php echo $images[0]['url'] ?>">
                        <?php } else { ?>
                            <img src="../../../public/assets/frame-product1.jpg">
                        <?php } ?>
                        <?php if (isset($images[2]['url'])) { ?>
                            <img src="../../../public/assets/products/<?php echo $images[1]['url'] ?>">
                        <?php } else { ?>
                            <img src="../../../public/assets/frame-product2.jpg">
                        <?php } ?>
                    </div>
                </div>
                <div class="selectPic">
                    <div class="itemPic">
                        <a href="#" data-id="1">

                            <?php if (isset($images[0]['url'])) { ?>
                                <img src="../../../public/assets/products/<?php echo $images[0]['url'] ?>">
                            <?php } else { ?>
                                <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80">
                            <?php } ?>

                        </a>
                    </div>
                    <div class="itemPic">
                        <a href="#" data-id="2">

                            <?php if (isset($images[1]['url'])) { ?>
                                <img src="../../../public/assets/products/<?php echo $images[0]['url'] ?>">
                            <?php } else { ?>
                                <img src="../../../public/assets/frame-product1.jpg">
                            <?php } ?>

                        </a>
                    </div>
                    <div class="itemPic">
                        <a href="#" data-id="3">

                            <?php if (isset($images[2]['url'])) { ?>
                                <img src="../../../public/assets/products/<?php echo $images[1]['url'] ?>">
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
                    <p>A escolha dos materiais e técnica adequadas está diretamente ligada ao resultado desejado para o trabalho e como se pretende que ele seja entendido. Desta forma, a análise de qualquer obra artística passa pela identificação do suporte e da técnica utilizadas.</p>
                    <p>A partir das pesquisas de Paul Cézanne, os artistas começaram a perceber que era possível lidar com realidades que não necessariamente as externas, dialogando com características dos elementos que são próprios da pintura, como a cor, a luz e o desenho. Com o aprofundamento destas pesquisas, Wassily Kandinsky chegou à abstração total em 1917. A pintura abstrata não procura retratar objetos ou paisagens, pois está inserida em uma realidade própria.</p>
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

    <script src="../../../public/js/scriptProductView.js"></script>
</body>

</html>