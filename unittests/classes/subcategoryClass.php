<?php

	class Subcategory
	{
		
		function __construct()
		{

		}

		function chooseCategory($category="", $subcategory="")
		{
			
			$serverName = 'localhost';
			$userName = "root";
			$dbName = 'soen341';
			$passWord = '';
			$db = new PDO("mysql:host=$serverName;port=3306;dbname=soen341;charset=utf8", "$userName", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $resultArray = $db->query("SELECT * FROM product  INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory1 = '$category' AND ProductCategory2= '$subcategory' ORDER BY ProductId ASC");
		    return $resultArray;
		}
			
		
	}

?>