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
			$resultArray = $db->("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId");
			
            		if ($itemNumber == $listing['ProductId'] && $itemName == $listing['ProductName'] && $itemPrice == $listing['Price'] && $itemDescription == $listing['ProductDetail'] && $userId == $listing['UserId'])  
            		{
            			return true;
           		}
            		else 
            		{
            			return false;
            		}
		}
	}
?>
