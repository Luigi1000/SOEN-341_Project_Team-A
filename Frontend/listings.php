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
      
        $Category = (isset($_GET['category'])) ? $_GET['category'] : "All" ;
        $Subcategory = (isset($_GET['subcategory'])) ? $_GET['subcategory'] : " ";
        $SSubcategory = (isset($_GET['ssubcategory'])) ? $_GET['ssubcategory'] : " ";
        // may be have more variable for location and price
        // query code...
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
          <?php if ($Category=='All') { ?>
                <ul class="list-group">
                  <li class="list-group-item"><h4><a href="listings.php?category=Vehicle">Vehicle</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Pet">Pet</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Book">Book</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Phone">Phone</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Computer">Computer</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Instrument">Instrument</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=Bike">Bike</a></h4></li>
                  <li class="list-group-item"><h4><a href="listings.php?category=TV">TV</a></h4></li>
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
        <!-- search base on budget not implement yet  -->
        <div class="well text-center" > <!-- Budget range slider     -->
          <div id="slidecontainer" >
            <input class="slider" id="myRange2" type="range" value="100" min="0" max="50000" step="10" oninput="dragMe2()" />
              <p>Budget: <span id="range2">100 CAD</span></p>
          </div>
        </div>
      
      </div>
      <!-- //side bar end -->
      <!-- list part -->
      <div class="col-sm-9 text-left">
        <div class="list-group">
          <!-- first item -->
	<?php

      $stmt = $db->query("SELECT ProductId FROM product");
      $rowcount = $stmt->rowCount();
      $cntr=1;
      $loc = $db->query("SELECT CityName FROM user WHERE UserId = '1'");
      $location = $loc->fetch(\PDO::FETCH_ASSOC);
      $dblocation = "".$location["CityName"];
      if(isset($_GET['category']) && isset($_GET['subcategory']) && isset($_GET['ssubcategory']))  
      {
          $resultArray = $db->query("SELECT * FROM product WHERE ProductCategory = '$Category' AND ProductCategory2= '$Subcategory' AND ProductCategory3= '$SSubcategory' ORDER BY ProductId ASC");
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
                        ".$dblocation." <span class=\"glyphicon glyphicon-time\"></span>
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
      if(isset($_GET['category']) && isset($_GET['subcategory']) && !isset($_GET['ssubcategory']))
      {
          $resultArray = $db->query("SELECT * FROM product WHERE ProductCategory = '$Category' AND ProductCategory2= '$Subcategory' ORDER BY ProductId ASC");
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
                        ".$dblocation." <span class=\"glyphicon glyphicon-time\"></span>
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
        $resultArray = $db->query("SELECT * FROM product WHERE ProductCategory = '$Category' ORDER BY ProductId ASC");
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
                      ".$dblocation." <span class=\"glyphicon glyphicon-time\"></span>
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

      if($Category=="All")
      {
        $resultArray = $db->query("SELECT * FROM product ORDER BY ProductId ASC");
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
                      ".$dblocation." <span class=\"glyphicon glyphicon-time\"></span>
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