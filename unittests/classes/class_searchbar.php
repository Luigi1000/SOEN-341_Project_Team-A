<?php
  /**
   * search bar
   */
  class SearchBar
  {

    function __construct() {}

    function search($item,$Ads,$city) {

      include('../Frontend/include/dbConnector2.php');

      // $servername = '108.63.178.195';
      // $username = "root";
      // $dbname = 'soen341';
      // $password = '';

      // $db = new PDO("mysql:host=$servername;port=3306;dbname=soen341;charset=utf8", "$username", "$password", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      if ($Ads=='All') {
        $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province='$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ");
      }
      else
        $resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory ='$Ads' AND (CityName = '$city' OR Province='$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ");

      return $resultArray;
    }

  }


 ?>
