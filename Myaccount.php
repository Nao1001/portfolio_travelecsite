<?php
include 'ECTravel-action.php';
$user_id = $_SESSION['login_id'];

$user_account = $travelObj->user_account($user_id);


// echo "<pre>";
// print_r($products_list);
// //print_r is for developer, echo is for user
// echo "<pre>";
?>


<!doctype html>
<html lang="en">
  <head>
    <title>My account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Cart.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container container-fluid">
	<h1 class="display-4 mt-5"><?php echo $_SESSION['display_name']; ?> 's account</h1>


	<div class="row">
		<div class="col-md-12">
		
			<p></p>
			<h3>Your shopping history</h3>
			<table class="table">
				<thead>
					<tr class="table-warning">
						<th>	#  </th>
						<th>Item</th>
						<th>Price</th>
						<th>Qauntity</th>
						<th>Total Price</th>
					</tr>
				</thead>
        
				<tbody>
<?php foreach($user_account as $row): 
            $user_id = $row['user_id'];
						$total = $total + $row['cart_subtotal'];
						$number = $number + 1;
            ?> 

					<tr>
						<td> <?php echo $number ?>	</td>
						<td><?php echo $row['cart_product']; ?></td>
						<td>$<?php echo $row['cart_price']; ?></td>
						<td><?php echo $row['cart_quantity']; ?></td>
						<td>$<?php echo $row['cart_subtotal']; ?></td>
					</tr>
			
			</a>
      <?php endforeach; ?>
	</tbody>
        
			</table>
			
			<p class="text-rght">Total: $ <?php echo $total ?></p>
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