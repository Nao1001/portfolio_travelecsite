<?php
include 'ECTravel-action.php';
session_start();

$user_product = $travelObj->user_product();

// echo "<pre>";
// print_r($products_list);
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
    
 
  <nav class="navbar navbar-expand-md navbar-light bg-light p-1">
  <a class="navbar-brand" href="http://localhost:8888/march-adv-night/portfolio/Homepage-loggedin.php"><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Homepage-loggedin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">Aboust Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
    </ul>
    <a class="btn btn-outline-secondary my-2 my-sm-0" href="Myaccount.php">My Account</a>
      <a class="btn btn-outline-primary my-2 my-sm-0" href="Signout.php">Sign Out</a>
  </div> <!-- collapse -->
</nav> <!-- navbar -->


<h3>Welcome to <?php echo $_SESSION['display_name']; ?> !</h3> 
<div class="box" style="position: relative;">
<img src="./images/firstImage.jpg" class="img-fluid" alt="Responsive image" style="width:100%; hight:70%;">
</div> <!-- first photo -->


<div class="jumbotron mt-3">
   <h2 class="lead text-center mb-3">Go on your own journey</h2>
   <h2 class="lead text-center">All you need to take is these items</h2>
</div>

<!-- product -->
<div class="container mt-5">
<div class="row">
   <?php foreach($user_product as $row): 
            $product_id = $row['product_id'];
            ?> 
  
            <div class="card  col-3">
              <div class="card-header">
                  <a href="product_list.php?product_id=<?php echo $product_id ?>">
                  <img src="images/<?php echo $row['product_image'] ?>" class="card-img-top" alt="" style="width: 150px; height:150px; object-fit: contain;">
                  </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['product_name']; echo "<br>$ ".$row['product_price'] ?></h5>
                <p class="card-text"><?php echo $row['short_description'] ?></p>
        <a href="Cart.php?product_id=<?php echo $product_id ?>" class="btn btn-primary">Add Cart</a>
        <a href="Product-list.php?product_id=<?php echo $product_id ?>" class="btn btn-info">See detail</a>
        </div>
    </div> 
        <?php endforeach; ?>
</div>
</div>
<!-- product -->

<!-- About us -->
<div class="jumbotron">
   <h2 class="lead text-center mb-3">About Us</h2>
   </div>

<div class="aboutus-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-4 col-xs-4">
        <div class="aboutus">
              
         <p class="aboutus-text">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
        <p class="aboutus-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>

        </div>
      </div>

      <div class="col-md-6 col-sm-4 col-xs-4">
        <div class="feature">
          <div class="feature-box">
            <div class="clearfix">
              <div class="iconset">
              <span class="glyphicon glyphicon-cog icon"></span>
              </div>

            <div class="feature-content">
            <h4>Work with heart</h4>
            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
            </div>
          </div>
        </div>
        
        <div class="feature-box">
           <div class="clearfix">
            <div class="iconset">
              <span class="glyphicon glyphicon-cog icon"></span>
            </div>
          <div class="feature-content">
            <h4>Reliable services</h4>
            <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt</p>
          </div>
          </div>
        </div>
                        
      <div class="feature-box">
        <div class="clearfix">
        <div class="iconset">
         <span class="glyphicon glyphicon-cog icon"></span>
        </div>
       <div class="feature-content">
          <h4>Great support</h4>
          <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div> <!-- card -->
</div> <!-- row -->
</div>
</div>  
<!-- product -->

<!-- footer -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark p-1 mt-4">
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Homepage-loggedin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">Aboust Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
    </ul>
  </div> <!-- collapse -->
</nav> <!-- footer -->


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>