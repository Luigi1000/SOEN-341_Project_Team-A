<?php
	class Login {
		
		public function __construct() {
	       
	   }
		
		public function login($inputName, $inputPwd) {
			
			$servername = '108.63.178.195';
			$username = "root";
			$dbname = 'soen341';
			$password = '';

			$db = new PDO("mysql:host=$servername;port=3306;dbname=soen341;charset=utf8", "$username", "$password", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$log = $db->query("SELECT * FROM `user` WHERE `Email` = '$inputName'");
			$login = $log->fetch(\PDO::FETCH_ASSOC);
			$password = md5($inputPwd);
			
			if ($inputName == $login['Email'] && $password == $login['Password'])
				return true;
			else
				return false;
		}
	}
?>