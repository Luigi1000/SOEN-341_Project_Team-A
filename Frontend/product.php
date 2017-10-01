<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Product To Sell
    </title>
    <?php include('include/dbConnector.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link your own css here -->
    <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  </head>
  <body>
    <?php include('include/header.php'); ?>
    <!-- Add Product -->
    <div class="container">
      <form action="include/addItemToDB.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="productName">Product Name :*
          </label>
          <input type="text" class="form-control" placeholder="enter product name" name="productName">
        </div>
        <div class="form-group">
          <label for="productDetail">Product Detail:*
          </label>
          <textarea name="text" class="form-control" placeholder="Enter description of product here.">
          </textarea>
        </div>
        <!-- not add validation yet -->
        <div class="form-group">
          <label for="price">Price:*
          </label>
          <input type="text" class="form-control" placeholder="enter price" name="price">
        </div>
        <div class="form-group">
          <label for="productCategory">Product Category:*
          </label>
          <select name="productCategory">
            <option selected="selected">Choose one
            </option>
            <?php
// A sample product array
$products = array("Car", "TV", "Fridge", "Bike","Others");
// Iterating through the product array
foreach($products as $item){
?>
            <option value="<?php echo strtolower($item); ?>">
              <?php echo $item; ?>
            </option>
            <?php
}
?>
          </select>
        </div>
        <div class="form-group">
          <label for="image1">Image 1:*
          </label>
          <input type="file" name="image1" id="fileToUpload1">
        </div>
        <div class="form-group">
          <label for="image1">Image 2:
          </label>
          <input type="file" name="image2" id="fileToUpload2">
        </div>
        <button type="submit" class="btn btn-success">Submit
        </button>
      </form>
    </div>
    </div>
  <!-- //edit file end -->
  </div>
<!-- //tab content end -->
</div>
<!-- //body end -->
<br>
<br>
<?php include('include/footer.php') ;?>
</body>
</html>
