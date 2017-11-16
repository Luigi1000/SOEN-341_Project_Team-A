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
			$result = $db->("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId");
			
            		if ($itemNumber == $result['ProductId'] && $itemName == $result['ProductName'] && $itemPrice == $result['Price'] && $itemDescription == $result['ProductDetail'] && $userId == $result['UserId'])  
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
