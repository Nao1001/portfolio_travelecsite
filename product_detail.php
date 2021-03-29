<?php 
include 'ECTravel-action.php';
$product_id = $_GET['product_id'];

 $product = $travelObj->get_one_product($product_id);


?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h2 class="text-monospace">product Details</h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-6">
        <img src="images/<?php echo $product['product_image'] ?>" class="img-thumbnail" alt="">
      </div>
      <div class="col-6">
        <div class="jumbotron">
          <!-- display product details -->
          <p>Product: <?php echo $product['product_name'] ?></p>

          <p>Color: <?php echo $product['product_color'] ?></p>

          <p>Price: <?php echo $product['product_price'] ?></p>

          <p>Quantity: <?php echo $product['product_quantity'] ?></p>

          <p>Summary: <?php echo $product['short_description'] ?></p>

          <p>Description: <?php echo $product['product_description'] ?></p>
          

  <hr class="mt-5">
         <div class="row">
          <div class="col-6">
          <a href="Update.php?product_id=<?php echo $product_id ?>" class="btn btn-outline-info">Update Product</a>
          </div>
          <div class="col-6"><a href="Delete.php" class="btn btn-outline-danger">Delete Product</a></div>
         </div>
        </div>
      </div>
    </div>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>