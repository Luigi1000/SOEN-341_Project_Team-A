<?php
  /**
   * search bar
   */
	class SearchBar
	{

		function __construct() 
		{
			
		}

		function search($item, $ads, $city)
		{
			include('../Frontend/include/dbConnector2.php');

		  // $serverName = '108.63.178.195';
		  // $userName = "root";
		  // $dbName = 'soen341';
		  // $passWord = '';

		  // $db = new PDO("mysql:host=$serverName;port=3306;dbname=soen341;charset=utf8", "$userName", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

			if ($ads=='All'){
				$resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE (CityName = '$city' OR Province='$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ");
			}else{
				$resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 ='$ads' AND (CityName = '$city' OR Province='$city') AND (ProductDetail LIKE '%{$item}%' OR ProductName LIKE '%{$item}%') ");	
			}
			return $resultArray;

		}

	}


 ?>
