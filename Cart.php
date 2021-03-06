<?php
	$product_id = $_GET['product_id'];
	// include your travel class
	// create object
	include 'ECTravel.php';

	$travelObj = new ECTravel;
	$travelObj->add_cart($product_id);

	// after inserting to cart table
	// create a new public function to query (select)
	// the items of the logged in user (session)
	// you can now dipslay the items in your cart.php

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
			    <div class="col-lg-8">
			        <div class="main-heading">Shopping Cart</div>
			        <div class="table-cart">
							<?php foreach($add_cart as $row): 
            $product_id = $row['product_id'];
            ?> 
	                    <table>
	                        <thead>
	                            <tr>
	                                <th>Product</th>
	                                <th>Price</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            <tr>
	                                <td>
	                                	<div class="display-flex align-center">
		                                    <div class="img-product">
		                                        <img src="images/<?php echo $row['product_image'] ?>" alt="" class="mCS_img_loaded">
		                                    </div>
		                                    <div class="name-product"><?php echo $row['product_name']?>
		                                        <br><?php echo $row['product_color']?>
		                                    </div>
	                                    </div>
	                                </td>
	                                <td>
	                                    <div class="total">
																			<?php echo $row['product_name']?>
	                                    </div>
	                                </td>
	                                <td>
	                                    <a href="#" title="">
	                                        <img src="images/icons/delete.png" alt="" class="mCS_img_loaded">
	                                    </a>
	                                </td>
	                            </tr>
	                            
	                        </tbody>
	                    </table>
											<?php endforeach; ?>
			        </div>
			        <!-- /.table-cart -->
			    </div>
			    <!-- /.col-lg-8 -->
			    <div class="col-lg-4">
			        <div class="cart-totals">
			            <h3>Cart Totals</h3>
			            <form action="#" method="get" accept-charset="utf-8">
			                <table>
			                    <tbody>
			                        <tr>
			                            <td>Subtotal</td>
			                            <td class="subtotal">$2,589.00</td>
			                        </tr>
			                        <tr>
			                            <td>Shipping</td>
			                            <td class="free-shipping">Free Shipping</td>
			                        </tr>
			                        <tr class="total-row">
			                            <td>Total</td>
			                            <td class="price-total">$1,591.00</td>
			                        </tr>
			                    </tbody>
			                </table>
			                <div class="btn-cart-totals">
			                    <a href="#" class="update round-black-btn" title="">Update Cart</a>
			                    <a href="#" class="checkout round-black-btn" title="">Proceed to Payment</a>
			                </div>
			                <!-- /.btn-cart-totals -->
			            </form>
			            <!-- /form -->
			        </div>
			        <!-- /.cart-totals -->
			    </div>
			    <!-- /.col-lg-4 -->
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