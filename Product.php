<?php
include 'ECTravel-action.php';

$user_product = $travelObj->user_product();

// echo "<pre>";
// print_r($products_list);
// //print_r is for developer, echo is for user
// echo "<pre>";
?>


<!doctype html>
<html lang="en">
  <head>
    <title>HOME</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost:8888/march-adv-night/portfolio/Homepage.php"><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Homepage.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">Aboust Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-primary my-2 my-sm-0" href="Registration.php">Sign Up</a>
      <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Sign In</a>
    </form>
  </div> <!-- collapse -->
</nav> <!-- navbar -->

<div class="container">

  <div class="row">
  <div class="col-sm-4">
      <div class="card border-light" style="width: 18rem;">
      <div class="card-body">
      <?php foreach($user_product as $row): 
            $product_id = $row['product_id'];
            ?> 

      <a href="product_list.php?product_id=<?php echo $product_id ?>">
      <img src="images/<?php echo $row['product_image'] ?>" class="" alt="" style="width: 300px; height:300px; object-fit: contain;">

      <div class="card-body">
        <h5 class="card-title"><?php echo $row['product_name']; echo $row['product_price'] ?></h5>
        <p class="card-text"><?php echo $row['short_description'] ?></p>
        <a href="login.php?product_id=<?php echo $product_id ?>" class="btn btn-primary">Add Cart</a>
        <a href="Product-list.php?product_id=<?php echo $product_id ?>" class="btn btn-info">See detail</a>
        
      </div>
      </a>
      </div>
      <?php endforeach; ?>
     </div>
    </div>
    </div>
 

</div> <!-- card -->
</div> <!-- row -->
</div>
</div>  



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>