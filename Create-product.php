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
           ADD NEW PRODUCTS
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
        <form action="ECTravel-action.php" method="post" enctype="multipart/form-data">
          <input type="text" name="product_name" placeholder="ENTER PRODUCT NAME" id="" class="form-control mt-3"> 
          <input type="text" name="product_color" placeholder="ENTER PRODUCT COLOR" id="" class="form-control mt-3">
          <input type="text" name="product_price" placeholder="ENTER PRODUCT PRICE" id="" class="form-control mt-3">
          <input type="text" name="product_quantity" placeholder="ENTER PRODUCT QUANTITY" id="" class="form-control mt-3">
          <input type="file" name="picture" class ="form-control" id="">
          <textarea name="short_description" id="" cols="10" rows="5" placeholder="Summary" class="form-control"></textarea>
          <textarea name="product_description" id="" cols="30" rows="10" placeholder="Description" class="form-control"></textarea>

          <button type="submit" name="save_product" class="btn btn-outline-primary mt-3">SAVE PRODUCT</button>
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