<?php 
<?php
class EditProfile 
	{ 
 		 
 		public function __construct() 
 		{ 
 	        
 	    } 
 		 
 		public function editProfile($userName, $address, $phoneNumber) 
 		{ 
 			 
 			$serverName = 'localhost'; 
 			$userName = "root"; 
			$dbName = 'soen341'; 
 			$passWord = ''; 
  
 			$db = new PDO("mysql:host=$serverName;port=3306;dbname=soen341;charset=utf8", "$userName", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
 			$log = $db->query("SELECT * FROM `user` WHERE `UserName` = '$userName'"); 
			$profile = $log->fetch(\PDO::FETCH_ASSOC); 
 			
 			 
 			if ($userName == $profile ['UserName'] && $address == $profile['Address'] && $phoneNumber == $profile ['PhoneNumber']) 
 				return true; 
 			else 
				return false; 
 		} 
 		 
 	} 
 ?> 
