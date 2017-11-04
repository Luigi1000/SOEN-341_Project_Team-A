<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listings</title>
  <?php include('include/dbConnector2.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- link your own css here -->
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/listings.css">
  <script src="myScript/myScript.js"></script>
</head>
<body>
  <?php include('include/header.php'); ?>
  <div class="container-fluid">
    <div class="row">
      <!-- side bar -->
      <!-- dynamic change side bar -->
      <!-- all item categorys EXAMPLE two level hierarchy -->
      <?php
        $_SESSION['previous_page'] = "listingsphp";
        $Category = (isset($_GET['category'])) ? $_GET['category'] : "No" ; // get the hierarchical categories that user clicked
        $Subcategory = (isset($_GET['subcategory'])) ? $_GET['subcategory'] : " ";
        $SSubcategory = (isset($_GET['ssubcategory'])) ? $_GET['ssubcategory'] : " ";
        // may be have more variable for location and price
        // query code...
      ?>
      <?php 
        if(isset($_GET['search'])) // get the searching information
        {
          $item = $_GET['item'];
          $Ads = $_GET['Ads'];
          $city = $_GET['city'];
        }
      ?>
      <?php
          $items = array('Vehicle'=>array(
                                  'Sedan'=>array('BMW-328','Adui-A6','Volvo-C40'),
                                  'SUV'=>array('Caynne','LandRover','Audi-Q7'),
                                  'Pickup Truck'=>array('RAM','Rock','Titan'),
                                  'Van'=>array('Dodge Caravan','Nissan Sentra','Honda Odyssey')),
                       'Pet' => array(
                                'Dog' => array('pug','chihuahua','yorkshire'),
                                'Bird' => array('perroquet','canari','cockatiel'),
                                'Cat' => array('bengal','persian')),
                       'Book' => array(
                                'Textbook' => array('Accounting','Computer','History','Nursing'),
                                'Cookbook' => array('Baking','Meals','Quik and Easy'),
                                'Fiction' => array('Fantasy','Science Fiction','Gaming')),
                       'Phone' => array(
                                 'Telephone' => array('Samsung','LG'),
                                 'Smart phone' => array('Iphone','Samsung','Nokia','Black Berry')),
                       'Bike'=>array(
                              'Bike in road'=>array('Felt VR30','Felt Z6 Disc','Devinci Leo SL'),
                              'Bike in mountain'=>array('Devinci Troy','Rock Mountain Pipeline','Giant Iguana')),
                       'Instrument'=>array(
                                    'Guitars'=>array('Electric Guitar','Acoustic Guitar','Base Guitar'),
                                    'Piano'=>array('Classic Piano','Electric Piano','Mute Piano'),
                                    'Drum'=>array('Jazz Drum','Electric Drum','Classic Drum')),
                       'Computer'=>array(
                                    'Desk Computer'=>array('Dell','HP','Lenovo'),
                                    'Laptop'=>array('Macbook Pro','Macbook Air','Thinkpad')),
                        'TV'=>array(
                              'LED'=>array('SONY','SHARP','SAMSUNG'),
                              '4K UHD'=>array('SONY','SHARP','SAMSUNG')),

                      );
       ?>
     <div class="col-sm-3 sidenav">
          <!-- dynamic category -->
        <div class="well text-left leftsidebar" >
          <!-- content in sidevar will change base on which category user click in index page-->
          <?php foreach ($items as $multiArr => $sub) { ?>
            <?php if($Category==$multiArr){ ?>
            <h4><a href="listings.php?category=<?php echo $multiArr?>"><?php echo $multiArr?></a></h4>
              <?php foreach ($sub as $key => $value) {?>
                <li class="list-group-item">
                  <a href="listings.php?category=<?php echo str_replace (" ", "", $multiArr)?>&subcategory=<?php echo str_replace (" ", "", $key)?>" style="color:black"><?php echo $key?></a>
                  <?php foreach ($value as $k => $v) { ?>
                    <ul style="list-style:none">
                        <li><a href="listings.php?category=<?php echo str_replace (" ", "", $multiArr)?>&subcategory=<?php echo str_replace (" ", "", $key)?>&ssubcategory=<?php echo str_replace (" ", "", $v)?>"><?php echo $v?></a></li>
                    </ul>
                  <?php  }?>
                </li>
              <?php } ?>
            <?php } ?>
          <?php } ?>
          <!-- display all category if user want to see all category -->
          <?php if ($Category=='All' || $Category=='No') { ?>
                <ul class="list-group">
                  <li class="list-group-item"><h4><a href="listings.php?category=Vehicle">Vehicle</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Pet">Pet</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Book">Book</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Phone">Phone</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Computer">Computer</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Instrument">Instrument</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Bike">Bike</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=TV">TV</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=others">Others</a></h4></li>
                </ul>
          <?php } ?>
        </div>
        <!-- search base on location  not implement  yet   -->
        <div class="well text-center" > <!-- Distance range slider     -->
          <!-- <form class="" action="listings.php?category=car" method=""> -->
            <div id="slidecontainer" >
              <input class="slider" id="myRange1" name="distance" type="range" value="50" min="0" max="500" oninput="dragMe1()" />
                <p>Distance: <span id="range1">50 km</span></p>
                <!-- <input type="submit"> -->
            </div>
          <!-- </form> -->
        </div>
        <!-- search base on budget  -->
        <div class="well text-center" > <!-- Budget range slider     -->
          <div class="form-group">
            <form action="listings.php?category=<?php echo $Category;?>" method="post">
              <div id="slidecontainer" >
                <!-- When the budget is selected, the system submits the form. -->
                <?php if(isset($_POST['myBudget']) && $_POST['myBudget'] != 0) { ?>
                <input class="slider" id="myRange2" name="myBudget" type="range" value="<?php echo $_POST['myBudget']; ?>" min="0" max="10000" step="5" oninput="dragMe2()" onMouseUp="this.form.submit()" />
                <p>Budget: <span id="range2"> <?php echo $_POST['myBudget']," CAD"; ?></span></p>
                <?php } 
                
                // When the budget is not selected, the slider remains at "0".
                else { ?>
                <input class="slider" id="myRange2" name="myBudget" type="range" value="0" min="0" max="10000" step="5" oninput="dragMe2()" onMouseUp="this.form.submit()" />
                <p>Budget: <span id="range2">unlimited</span></p>
                <?php }
                ?>
              </div>
            </form>
          </div>
        </div>

      </div>
      <!-- //side bar end -->
      <!-- list part -->
      <div class="col-sm-9 text-left">
        <div class="list-group">
          <!-- sorted by -->
          <div class="well text-right topBar">
            <form action="listings.php" name="sortBy" method="get">
              <div class="sort"> <kbd>Sort by</kbd>
                <select class="selectpicker"  name="sortBy"> 
                <option value="dateAsc">Posted: oldest first</option>
                <option value="dateDesc" selected="selected">Posted: newest first</option>
                <option value="priceAsc">Price: from lowest to highest</option>
                <option value="priceDesc">Price: from highest to lowest</option>
                </select>
                <?php         // include('../unittests/classes/class_searchbar.php');
                  if(isset($_GET['search']))
                  {
                    echo(" <input type='hidden' name='item' value='" .$_GET['item']. "'>
                           <input type='hidden' name='Ads' value='" .$_GET['Ads']. "'>
                           <input type='hidden' name='city' value='" .$_GET['city']. "'>  
                           <input type='hidden' name='search' value='" .$_GET['search']. "'>  ");
                  }
                  if (isset($_GET['category']))
                  {
                    echo(" <input type='hidden' name='category' value='" .$_GET['category']. "'> ");
                  }
                  if (isset($_GET['subcategory']))
                  {
                    echo(" <input type='hidden' name='category' value='" .$_GET['category']. "'>
                           <input type='hidden' name='subcategory' value='" .$_GET['subcategory']. "'> ");
                  }
                  if (isset($_GET['ssubcategory']))
                  {
                    echo(" <input type='hidden' name='category' value='" .$_GET['category']. "'>
                           <input type='hidden' name='subcategory' value='" .$_GET['subcategory']. "'>
                           <input type='hidden' name='ssubcategory' value='" .$_GET['ssubcategory']. "'> ");
                  }
                ?>
                <button class="btn btn-success btn-xs" type="submit" name="sortBasedOn">
                  <i class="glyphicon glyphicon-filter"></i>
                </button>         
              </div>
            </form>
          </div>
        <?php
        if(isset($_GET['search']))  // if user want to search based on the keywords
        {
          if($_GET['Ads'] == "All")
          {
            if(isset($_GET['sortBasedOn']))
            {
              $sortingRequirement = $_GET['sortBy'];
              if($sortingRequirement == 'dateAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY timeStamp ASC ");
              }
              if($sortingRequirement == 'dateDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY timeStamp DESC ");
              }
              if($sortingRequirement == 'priceAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY Price ASC ");
              }
              if($sortingRequirement == 'priceDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY Price DESC ");
              }            
            }
            else
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY ProductId ASC ");
            }
          }
          else
          {
            if(isset($_GET['sortBasedOn']))  // if user want to sort based on the searching results
            {
              $sortingRequirement = $_GET['sortBy'];
              if($sortingRequirement == 'dateAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 ='$Ads' AND (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY timeStamp ASC ");
              }
              if($sortingRequirement == 'dateDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 ='$Ads' AND (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY timeStamp DESC ");
              }
              if($sortingRequirement == 'priceAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 ='$Ads' AND (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY Price ASC ");
              }
              if($sortingRequirement == 'priceDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 ='$Ads' AND (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY Price DESC ");
              } 
            }
            else
            {
               $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 ='$Ads' AND (CityName = '$city' OR Province = '$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ORDER BY ProductId ASC ");
            }
          }
      
          foreach($resultArray as $eachRow)
          {
            echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                    </div>
                    <div class=\"col-sm-9\">
                      <div>
                        <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                      </div>
                      <div class=\"pull-right\" style=\"color: #27a34a\" >
                        <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                      </div>
                      <div class=\"\">
                        ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                        .$eachRow['timeStamp']."
                      </div><br>
                      <div>
                        <p style=\"color:#1f0935;font-weight:bold;\">
                          ".$eachRow['ProductDetail']."
                        </p>
                      </div>
                    </div>
                  </div>
                </a>";  
          }
        }
      ?>
  <?php

      // $stmt = $db->query("SELECT ProductId FROM product");
      // $rowcount = $stmt->rowCount();
      // $cntr=1;
      // $loc = $db->query("SELECT CityName FROM user WHERE UserId = '1'");
      // $location = $loc->fetch(\PDO::FETCH_ASSOC);
      // $dblocation = "".$location["CityName"];

      // A budget is selected by the user.
      if (isset($_POST['myBudget']) && $_POST['myBudget'] != 0)
      {
        $budget = $_POST['myBudget'];
        if(isset($_GET['category']) && isset($_GET['subcategory']) && isset($_GET['ssubcategory'])) // if three layers of the categories have been clicked
          {
            if(isset($_GET['sortBasedOn'])) // if user want to sort
            {
              $sortingRequirement = $_GET['sortBy']; 
              if($sortingRequirement == 'dateAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY timeStamp ASC");
              }
              if($sortingRequirement == 'dateDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY timeStamp DESC");
              }
              if($sortingRequirement == 'priceDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY Price DESC");
              }
              if($sortingRequirement == 'priceAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY Price ASC");
              }   
            }
            else // if user do not want to sort, just randomly display everyting order by ProductId
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY ProductId ASC");
            }

            foreach($resultArray as $eachRow)
            {
                echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                    </div>
                    <div class=\"col-sm-9\">
                      <div>
                        <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                      </div>
                      <div class=\"pull-right\" style=\"color: #27a34a\" >
                        <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                      </div>
                      <div class=\"\">
                        ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                        .$eachRow['timeStamp']."
                      </div><br>
                      <div>
                        <p style=\"color:#1f0935;font-weight:bold;\">
                          ".$eachRow['ProductDetail']."
                        </p>
                      </div>
                    </div>
                  </div>
                </a>";
         
            }
          }
        if(isset($_GET['category']) && isset($_GET['subcategory']) && !isset($_GET['ssubcategory'])) // if two layers of the categories have been clicked
        {
          if(isset($_GET['sortBasedOn'])) // if user want to sort
          {
            $sortingRequirement = $_GET['sortBy']; 
            if($sortingRequirement == 'dateAsc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2 = '{$_GET['subcategory']}' ORDER BY timeStamp ASC");
            }
            if($sortingRequirement == 'dateDesc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2 = '{$_GET['subcategory']}' ORDER BY timeStamp DESC");
            }
            if($sortingRequirement == 'priceDesc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2 = '{$_GET['subcategory']}' ORDER BY Price DESC");
            }
            if($sortingRequirement == 'priceAsc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2 = '{$_GET['subcategory']}' ORDER BY Price ASC");
            }
          }
          else  // if user do not want to sort, just randomly display everyting order by ProductId
          {
            $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2 = '{$_GET['subcategory']}' ORDER BY ProductId ASC");
          }
        
          foreach($resultArray as $eachRow)
          {
            echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
              <div class=\"row\">
                <div class=\"col-sm-3\">
                  <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                </div>
                <div class=\"col-sm-9\">
                  <div>
                    <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                  </div>
                  <div class=\"pull-right\" style=\"color: #27a34a\" >
                    <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                  </div>
                  <div class=\"\">
                    ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                    .$eachRow['timeStamp']."
                  </div><br>
                  <div>
                    <p style=\"color:#1f0935;font-weight:bold;\">
                      ".$eachRow['ProductDetail']."
                    </p>
                  </div>
                </div>
              </div>
            </a>";

         
          }
        }
        if(isset($_GET['category']) && !isset($_GET['subcategory']) && !isset($_GET['ssubcategory']))  // if user only click the outer most category, either "All categories" or any one of the outer most category
        {
          if($_GET['category'] == "All") // By clicking "All categories" button
          {
            if(isset($_GET['sortBasedOn']))  // if user want to sort
            {
              $sortingRequirement = $_GET['sortBy'];
              if($sortingRequirement == 'dateAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY timeStamp ASC");
              }
              if($sortingRequirement == 'dateDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY timeStamp DESC");
              }
              if($sortingRequirement == 'priceDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY Price DESC");
              }
              if($sortingRequirement == 'priceAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY Price ASC");
              }
            }
            else // if user do not want to sort, just randomly display everyting order by ProductId
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY ProductId ASC");
            }
         
          }

          else// if user only click the outer most category
          {
            if(isset($_GET['sortBasedOn']))  // if user want to sort
            {
              $sortingRequirement = $_GET['sortBy'];
              if($sortingRequirement == 'dateAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' ORDER BY timeStamp ASC");
              }
              if($sortingRequirement == 'dateDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' ORDER BY timeStamp DESC");
              }
              if($sortingRequirement == 'priceDesc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' ORDER BY Price DESC");
              }
              if($sortingRequirement == 'priceAsc')
              {
                $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' ORDER BY Price ASC");
              }
            }
            else  // if user do not want to sort, just randomly display everyting order by ProductId
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' ORDER BY ProductId ASC");
            }
            
          }
          foreach($resultArray as $eachRow)
          {
             echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                    </div>
                    <div class=\"col-sm-9\">
                      <div>
                        <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                      </div>
                      <div class=\"pull-right\" style=\"color: #27a34a\" >
                        <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                      </div>
                      <div class=\"\">
                        ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                        .$eachRow['timeStamp']."
                      </div><br>
                      <div>
                        <p style=\"color:#1f0935;font-weight:bold;\">
                          ".$eachRow['ProductDetail']."
                        </p>
                      </div>
                    </div>
                  </div>
                </a>";
          }


        }

        if(!isset($_GET['search']) && !isset($_GET['category']))// directly open listings.php page
        {     
                                                        
          if(isset($_GET['sortBasedOn'])) // if user want to sort
          {
            $sortingRequirement = $_GET['sortBy']; 
            //echo $sortingRequirement ; 
           
            if($sortingRequirement == 'dateAsc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY timeStamp ASC");
            }
            if($sortingRequirement == 'dateDesc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY timeStamp DESC");
            }
            if($sortingRequirement == 'priceDesc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY Price DESC");
            }
            if($sortingRequirement == 'priceAsc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY Price ASC");
            }
        
          }
        
          else  // if not,  just randomly display everyting order by ProductId
          {
            $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId ORDER BY ProductId ASC ");
          }
          foreach($resultArray as $eachRow)
          {
   
              echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                    </div>
                    <div class=\"col-sm-9\">
                      <div>
                        <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                      </div>
                      <div class=\"pull-right\" style=\"color: #27a34a\" >
                        <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                      </div>
                      <div class=\"\">
                        ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                        .$eachRow['timeStamp']."
                      </div><br>
                      <div>
                        <p style=\"color:#1f0935;font-weight:bold;\">
                          ".$eachRow['ProductDetail']."
                        </p>
                      </div>
                    </div>
                  </div>
                </a>";
          }
        }  
      }
      // When no budget is selected  
      else
      {
        if(isset($_GET['category']) && isset($_GET['subcategory']) && isset($_GET['ssubcategory'])) // if three layers of the categories have been clicked
        {
          if(isset($_GET['sortBasedOn'])) // if user want to sort
          {
            $sortingRequirement = $_GET['sortBy']; 
            if($sortingRequirement == 'dateAsc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY timeStamp ASC");
            }
            if($sortingRequirement == 'dateDesc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY timeStamp DESC");
            }
            if($sortingRequirement == 'priceDesc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY Price DESC");
            }
            if($sortingRequirement == 'priceAsc')
            {
              $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY Price ASC");
            }
          }
          else // if user do not want to sort, just randomly display everyting order by ProductId
          {
            $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '{$_GET['category']}' AND ProductCategory2= '{$_GET['subcategory']}' AND ProductCategory3= '{$_GET['ssubcategory']}' ORDER BY ProductId ASC");
          }

          foreach($resultArray as $eachRow)
          {
              echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                <div class=\"row\">
                  <div class=\"col-sm-3\">
                    <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                  </div>
                  <div class=\"col-sm-9\">
                    <div>
                      <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                    </div>
                    <div class=\"pull-right\" style=\"color: #27a34a\" >
                      <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                    </div>
                    <div class=\"\">
                      ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                      .$eachRow['timeStamp']."
                    </div><br>
                    <div>
                      <p style=\"color:#1f0935;font-weight:bold;\">
                        ".$eachRow['ProductDetail']."
                      </p>
                    </div>
                  </div>
                </div>
              </a>";
       
          }
        }
        if(isset($_GET['category']) && isset($_GET['subcategory']) && !isset($_GET['ssubcategory']))
        {
          $resultArray = $db->query("SELECT * FROM product  INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '$Category' AND ProductCategory2= '$Subcategory' ORDER BY ProductId ASC");
          foreach($resultArray as $eachRow)
          {
            echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                      </div>
                      <div class=\"col-sm-9\">
                        <div>
                          <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                        </div>
                        <div class=\"pull-right\" style=\"color: #27a34a\" >
                          <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                        </div>
                        <div class=\"\">
                          ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>
                          post time
                        </div><br>
                        <div>
                          <p style=\"color:#1f0935;font-weight:bold;\">
                            ".$eachRow['ProductDetail']."
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>";
          }
        }
        if(isset($_GET['category']) && !isset($_GET['subcategory']) && !isset($_GET['ssubcategory']))
        {
          $resultArray = $db->query("SELECT * FROM product  INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '$Category' ORDER BY ProductId ASC");
          foreach($resultArray as $eachRow)
          {
            echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                      </div>
                      <div class=\"col-sm-9\">
                        <div>
                          <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                        </div>
                        <div class=\"pull-right\" style=\"color: #27a34a\" >
                          <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                        </div>
                        <div class=\"\">
                          ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>
                          post time
                        </div><br>
                        <div>
                          <p style=\"color:#1f0935;font-weight:bold;\">
                            ".$eachRow['ProductDetail']."
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>";
          }
        }

        if($Category=="All" && !isset($_POST['search']))
        {
          $resultArray = $db->query("SELECT * FROM product  INNER JOIN user ON product.UserId = user.UserId ORDER BY ProductId ASC");
          foreach($resultArray as $eachRow)
          {
            echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                    <div class=\"row\">
                      <div class=\"col-sm-3\">
                        <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                      </div>
                      <div class=\"col-sm-9\">
                        <div>
                          <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                        </div>
                        <div class=\"pull-right\" style=\"color: #27a34a\" >
                          <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                        </div>
                        <div class=\"\">
                          ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>
                          post time
                        </div><br>
                        <div>
                          <p style=\"color:#1f0935;font-weight:bold;\">
                            ".$eachRow['ProductDetail']."
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>";
          }
        }
      }

      $cntr++;

  ?>
          <!-- //end item  -->

        </div>
      </div>
    </div>
  </div>
  <br><br>
  <!-- fake pages -->
  <div>
    <ul class="pager">
    <li></li>
      <ul class="pagination pagination-lg">
        <li><a href="#">Previous </a></li>
        <li><a href="#">1 </a></li>
        <li><a href="#">2 </a></li>
        <li><a href="#">3 </a></li>
        <li><a href="#">4 </a></li>
        <li><a href="#">5 </a></li>
        <li><a href="#">6 </a></li>
        <li><a href="#">7 </a></li>
        <li><a href="#">8 </a></li>
        <li><a href="#">9 </a></li>
        <li><a href="#">10 </a></li>
        <li><a href="#">Next</a></li>
      </ul>
    <li></li>
  </ul>
  </div>
  <?php include('include/footer.php') ;?>
</body>
</html>
