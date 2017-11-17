<?php
	class Login {
		
		public function __construct() {
	       
	   }
		
		public function login($inputName, $inputPwd) {
			
			$servername = 'localhost';
			$username = "root";
			$dbname = 'soen341';
			$password = '';

			$db = new PDO("mysql:host=$servername;dbname=soen341;charset=utf8", "$username", "$password", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$log = $db->query("SELECT * FROM `user` WHERE `Email` = '$inputName'");
			$login = $log->fetch(\PDO::FETCH_ASSOC);
//			$password = md5($inputPwd);
			
			if ($inputName == $login['Email'] && $inputPwd == $login['Password'])
				return true;
			else
				return false;
		}
	}
?>