<?php
include 'Database.php';

class ECTravel extends Database{

  
  public function add_user($fName,$lName,$dName,$email,$password){
  $sql = "INSERT INTO customers(first_name,last_name,display_name,email,password)VALUES('$fName','$lName','$dName','$email','$password')";
  $result = $this->conn->query($sql);
  // query is located inside of mysqli ans works for translator between php and database

  if($result == TRUE){
    echo "user added successfully";
    //header('location:read.php'); // means go to read.php if there is no error
  } else {
    die('ERROR: '.$this->conn->error); 
  }
}

public function login($email,$password){
  $sql = "SELECT * FROM customers WHERE email='$email' AND password='$password' ";
  $result = $this->conn->query($sql);

  if($result->num_rows == 1){
    $row= $result->fetch_assoc();
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['last_name'] = $row['last_name'];
    $_SESSION['login_id'] = $row['user_id'];
    header('location:Homepage-loggedin.php'); // go to homepage if there is no error
  }else{
    echo 'Your email and password are not valid.';

  }
}

public function add_product($product_name,$product_color,$product_price,$product_quantity,$product_image,$description,$short_description){
  $target_dir = 'images/';
  $target_file = $target_dir.basename($product_image);
  $sql = "INSERT INTO products(product_name,product_color,product_price,product_quantity,product_image,product_description,short_description)VALUE('$product_name','$product_color','$product_price','$product_quantity', '$product_image','$description', '$short_description')";
  $result = $this->conn->query($sql);

  if($result == TRUE){
    echo "product added successfully";
    move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
  }else{

    die('ERROR: '.$this->conn->error);
  }
}

public function read_product(){
  $sql ="SELECT * FROM products";
  $result = $this->conn->query($sql);

  if($result->num_rows > 0){
    $container = array();
    while($row = $result->fetch_assoc()){
      $container[] = $row;
    }
    return $container;
  }else{
    return FALSE;
  }
}

public function delete_product($id){
  $sql = "DELETE FROM products WHERE product_id = '$id'";
  $result = $this->conn->query($sql);

  if($result == TRUE){
    header('location:Read-product.php');
  }else{
    die("ERROR: ".$this->conn->error);
  }
}

public function get_one_product($id){
  $sql = "SELECT * FROM products WHERE product_id='$id'";
  $result = $this->conn->query($sql);

  if($result == FALSE){
    die('ERROR: '.$this->conn->error);
  }else{
    return $result->fetch_assoc();
  }
}

public function update_product($product_name,$product_color,$product_price,$product_quantity,$product_image,$description,$product_id,$short_description){
  $target_dir = 'images/';
  $target_file = $target_dir.basename($product_image);
  $sql = "UPDATE products SET product_name = '$product_name',product_color ='$product_color',product_price = '$product_price', product_quantity = '$product_quantity' ,product_image = '$product_image' , product_description ='$description', short_description = '$short_description' WHERE product_id ='$product_id'";
  $result = $this->conn->query($sql);

  if($result == FALSE){
    die('ERROR: '.$this->conn->error);
  }else{
    echo "<script>
    window.location.replace('Read-product.php');
    </script>";
    move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
  }
}

public function user_product(){
  $sql ="SELECT * FROM products";
  $result = $this->conn->query($sql);

  if($result->num_rows > 0){
    $container = array();
    while($row = $result->fetch_assoc()){
      $container[] = $row;
    }
    return $container;
  }else{
    return FALSE;
  }
}

// call product_query method/function passing the product_id

public function add_cart($product_id){
  $sql ="SELECT * FROM products WHERE product_id='$product_id'";
  $result = $this->conn->query($sql);

  if($result->num_rows > 0){
    $container = array();
    while($row = $result->fetch_assoc()){
      // insert to cart table
      // product id
      // quantity = 1
      // price
      // subtotal
      // user_id which you have to get from session
      // status automatic X (not yet paid)

      $sql = "INSERT INTO Cart(cart_product,cart_price,cart_subtotal,cart_quantity,cart_status,user_id)VALUE('$cart_product','$cart_price','$cart_subtotal','$cart_quantity', '$cart_status','$user_id')";
       $result = $this->conn->query($sql);

       if($result->num_rows == 1){
        $row= $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];

      }else{
        echo '';
    
      }
    }
}

}
}

?>

