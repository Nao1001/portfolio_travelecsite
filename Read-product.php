<?php
include 'ECTravel-action.php';

$products_list = $travelObj->read_product();

// echo "<pre>";
// print_r($products_list);
// //print_r is for developer, echo is for user
// echo "<pre>";



?>


<!doctype html>
<html lang="en">
  <head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

  <div class="container-fluid">
    <div class="jumbotron-fluid">
      <h2 class="display-4 text-center">
        product_list
      </h2>
    </div>
  </div>

  <div class="container mt-3">

  <ul class="list-group">
          <?php foreach($products_list as $row): 
            $product_id = $row['product_id'];
            ?>        
        <li class="list-group-item"><a href="product_detail.php?product_id=<?php echo $product_id ?>"><?php echo $row['product_name'] ?>
        <a href="Update.php?product_id=<?php echo $product_id ?>" class="float-right btn btn-info mr-3">Update</a>
        <a href="Delete-product.php?product_id=<?php echo $product_id ?>" class="float-right btn btn-danger">Delete</a>
        </a>
        
        </li>
          <?php endforeach; ?>
      
    </ul>
  </div>

       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>