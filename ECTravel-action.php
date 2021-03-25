<?php
include 'classes/ECTravel.php';
$travelObj = new ECTravel;


if(isset($_POST['Register'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $display_name = $_POST['display_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_pword = $_POST['password_confirmation'];

  // user registration
  if($password == $confirm_pword){
    $travelObj->add_user($first_name,$last_name,$display_name,$email,$password);
  }else{
    echo "password dont match";
  } 

  
// }elseif(isset($_POST['update_user'])){

//   $first_name = $_POST['f_name'];
//   $last_name = $_POST['l_name'];
//   $user_name = $_POST['display_name'];
//   $email = $_POST['email'];
//   $password = $_POST['password'];

//   $travelObj->update_user($first_name,$last_name,$display_name,$email,$password);

//user log in
}elseif(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $travelObj->login($email,$password);
}

// create product for admin
if(isset($_POST['save_product'])){
  $product_name = $_POST['product_name'];
  $product_color = $_POST['product_color'];
  $product_price = $_POST['product_price'];
  $product_quantity = $_POST['product_quantity'];
  $product_image = $_FILES['picture']['name'];
  $description = $_POST['product_description'];
  $short_description = $_POST['short_description'];

  //  add
  $travelObj->add_product($product_name,$product_color,$product_price,$product_quantity,$product_image,$description,$short_description);
}elseif(isset($_POST['update_product'])){

  $product_name = $_POST['product_name'];
  $product_color = $_POST['product_color'];
  $product_price = $_POST['product_price'];
  $product_quantity = $_POST['product_quantity'];
  $product_id = $_POST['product_id'];
  $product_image = $_FILES['picture']['name'];
  $description = $_POST['product_description'];
  $short_description = $_POST['short_description'];

   // update
  $travelObj->update_product($product_name,$product_color,$product_price,$product_quantity,$product_image,$description,$product_id,$short_description);
}

 // product for user, press go cart
   //not sure if it is right
if(isset($_POST['user_product'])){
  $product_name = $_POST['product_name'];
  $product_color = $_POST['product_color'];
  $product_price = $_POST['product_price'];
  $product_image = $_FILES['picture']['name'];
  $description = $_POST['product_description'];
  $product_id = $_POST['product_id'];
  $short_description = $_POST['short_description'];

  $travelObj->user_product($product_name,$product_color,$product_price,$product_image,$description,$product_id,$short_description);
}

?>
