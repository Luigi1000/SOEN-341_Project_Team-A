<?php

	class ItemListing 
	{

		public function __construct() 
		{

		}

		public function item($itemNumber, $itemName, $itemPrice, $itemDescription, $userId) 
		{

			$servername = 'localhost'; 
 			$username = "root"; 
 			$dbname = 'soen341'; 
  			$passWord = ''; 
  			$db = new PDO("mysql:host=$servername;port=3306;dbname=soen341;charset=utf8", "$username", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$result = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductId = '$itemNumber' AND ProductName = '$itemName' AND Price = '$itemPrice' AND ProductDetail = '$itemDescription' AND UserId = '$userId'");
			return $result;
		}
	}
?>
