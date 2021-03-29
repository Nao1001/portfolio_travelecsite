<?php
 include 'ECTravel-action.php';
 if(empty($_SESSION['login_id'])){
    header('location:login.php');
 }

// echo $_SESSION['login_id'];


	$product_id = $_GET['product_id'];
	// include your travel class
	// create object
 
	$item = $travelObj->get_one_product($product_id);



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Cart.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  </head>
  <body>



<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<div class="cart-wrap">
	<div class="container">
	        <div class="row">
			    <div class="col-lg-10">
			        <div class="main-heading">
							<h2 class="text-monospace">Shopping Cart</h2>
							</div>
							
			        <div class="table-cart">
									<table class="table table-bordered table-secondary">
										<thead>
											<td>Name</td>
											<td>Variant</td>
											<td>Price</td>
											<td>Description</td>
											<td>Quantity</td>
										</thead>
										<tbody>
											<td><?php echo $item['product_name'] ?></td>
											<td><?php echo $item['product_color'] ?></td>
											<td>$<?php echo $item['product_price'] ?></td>
											<td><?php echo $item['short_description'] ?></td>
											<td><form action="ECTravel-action.php" method="post">
												<input type="hidden" name="id" value="<?php echo $item['product_id'] ?>" id="">
												<input type="number" class="border-0" name="quantity" value="1" id="">
										</td>
										</tbody>
									</table>
								<br>
								<button type="submit" name="confirm_order" class="btn btn-outline-secondary btn-block">CONFIRM ORDER</button>
										</form>


						
			        </div>
			        <!-- /.table-cart -->
			    </div>
			    <!-- /.col-lg-8 -->
			   

			</div>
		</div>
	</div>
	
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>