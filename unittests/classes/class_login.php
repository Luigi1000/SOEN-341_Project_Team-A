<?php
	class Login
	{
		
		public function __construct()
		{
	       
	    }
		
		public function login($inputName, $inputPwd)
		{
			
			$serverName = '108.63.178.195';
			$userName = "root";
			$dbName = 'soen341';
			$passWord = '';

			$db = new PDO("mysql:host=$serverName;port=3306;dbname=soen341;charset=utf8", "$userName", "$passWord", array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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