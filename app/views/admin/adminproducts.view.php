<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área administrativa produtos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../public/css/styles.css">
  <link rel="stylesheet" href="../../../public/css/adminproducts.css">
</head>

<body>
  <?php include 'sidebarAdmin.php' ?>
  <main>

    <?php require 'tables/table-products.php' ?>

    <?php foreach ($products as $value) : ?>

      <tr id="row1">
        <th scope="row"><?php echo $value["id"] ?></th>
        <td><?php echo $value["name"] ?></td>
        <td>R$ <?php echo $value["price"] ?></td>
        <td hidden>
          <?php echo $value["description"] ?>
        </td>
        <td class="actions">
          <i class="fa-solid fa-eye"></i>
          <i class="fa-solid fa-pen"></i>
          <i class="fa-solid fa-trash"></i>
        </td>
        <td class="actionsResponsive">
          <i class="fa-solid fa-ellipsis fa-xl"></i>
        </td>
      </tr>

    <?php endforeach; ?>

    </tbody>

    </table>


    <?php require 'modals/products/modal-add-products.php' ?>
    <?php require 'modals/products/modal-adit-products.php' ?>
    <?php require 'modals/products/modal-view-products.php' ?>
    <?php require 'modals/products/modal-mobile-products.php' ?>


  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/91248aca6a.js" crossorigin="anonymous"></script>
  <script src="../../../public/js/adminProduct.js"></script>


</body>

</html>