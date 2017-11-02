<?php

	class Ssubcategory
	{
		
		function __construct()
		{

		}

		function chooseCategory($category="", $subcategory="", $ssubcategory="")
		{
			
			$serverName = '108.63.178.195';
			$userName = "root";
			$dbName = 'soen341';
			$passWord = '';
			$db = new PDO("mysql:host=$serverName;port=3306;dbname=soen341;charset=utf8", "$userName", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $resultArray = $db->query("SELECT * FROM product  INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory = '$Category' AND ProductCategory2= '$Subcategory' AND ProductCategory3= '$SSubcategory' ORDER BY ProductId ASC");
		    return $resultArray;
		}
			
		
	}

?>