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

<script type="text/javascript" src="category_ajax.js"></script>
  </head>
  <body>
    <?php include('include/header.php'); ?>


    
    <div class="container">
      <form action="include/addItemToDB.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="productName">Product Name :*
          </label>
          <input type="text" class="form-control" placeholder="enter product name" name="productName" required="">
        </div>
        <div class="form-group">
          <label for="productDetail">Product Details :*
          </label>
          <textarea name="text" class="form-control" placeholder="Enter description of product here." required="">
          </textarea>
        </div>
        <!-- not add validation yet -->
        <div class="form-group">
          <label for="price">Price:*
          </label>
          <input type="text" class="form-control" placeholder="enter price" name="price" required="">
        </div>

        <div class="form-group">
         <label>Product Category Level 1 :*</label>
		<select required name="productCategory1" id="productCategory1">
			<option value=''>------- Select --------</option>
			<?php 
			$sql = "select * from `category_level1`";
			$res = mysqli_query($conn, $sql);
			if(mysqli_num_rows($res) > 0) {
				while($row = mysqli_fetch_object($res)) {
					echo "<option value='".$row->Id."'>".$row->First_Category."</option>";
				}
			}
			?>
		</select>
    </div>
	 <div class="form-group">
    <label>Product Categroy Level 2:*</label>
    <select required name="product_category2" id="product_category2"><option>------- Select --------</option></select>
        </div>
		 <div class="form-group">
    <label>Product Categroy Level 3:*</label>
    <select required name="product_category3" id="product_category3"><option>------- Select --------</option></select>
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
        <button type="submit" class="btn btn-success">Submit</button>
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
