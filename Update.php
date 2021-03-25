<?php 
include 'ECTravel-action.php';
$product_id = $_GET['product_id'];

$one_product = $travelObj->get_one_product($product_id);

?>

<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
     <div class="jumbotron">
        <p class="lead text-center">
           UPDATE PRODUCT
        </p>
     </div>
    </div>

    <div class="container">
      <div class="card w-50 mx-auto">
        <div class="card-header">
          <p class="text-center lead">
            PRODUCT DETAILS
          </p>
        </div>

        <div class="card-body">
        <form action="ECTravel-action.php?id=<?php echo $product_id ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
          <p>Product Name</p>
          <input type="text" name="product_name" value="<?php echo $one_product['product_name'] ?>" id="" class="form-control mt-3"> 
          <p>Color</p>
          <input type="text" name="product_color" value="<?php echo $one_product['product_color'] ?>" id="" class="form-control mt-3">
          <p>Price</p>
          <input type="text" name="product_price" value="<?php echo $one_product['product_price'] ?>" id="" class="form-control mt-3">
          <p>Stock Quantity</p>
          <input type="text" name="product_quantity" value="<?php echo $one_product['product_quantity'] ?>" id="" class="form-control mt-3">
          <input type="file" name="picture" class ="form-control" id="" value="<?php echo $one_product['product_image'] ?>">
          <p>Summary</p>
          <input type="text" name="short_description" value="<?php echo $one_product['short_description'] ?>" id="" class="form-control mt-3">

          <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $one_product['product_description'] ?> </textarea>

          <button type="submit" name="update_product" class="btn btn-outline-primary mt-3">SAVE PRODUCT</button>
        </form>
        </div>

        <div class="card-footer">
          <a href="Read-product.php" class="card-link btn btn-outline-info">CHECK PRODUCT LIST</a>

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