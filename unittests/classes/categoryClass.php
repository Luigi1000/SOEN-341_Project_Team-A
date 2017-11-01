<?php

	class Category
	{
		
		function __construct()
		{

		}

		function chooseCategory($Category="")
		{
			
			$servername = '108.63.178.195';
			$username = "root";
			$dbname = 'soen341';
			$password = '';
			$db = new PDO("mysql:host=$servername;port=3306;dbname=soen341;charset=utf8", "$username", "$password", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $resultArray = $db->query("SELECT * FROM product  INNER JOIN user ON product.UserId = user.UserId WHERE ProductCategory = '$Category' ORDER BY ProductId ASC");
		    return $resultArray;
		}
			
		
	}

?>