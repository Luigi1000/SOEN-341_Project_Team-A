<?php 
	
	include('classes/class_login.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class LoginTest extends TestCase
	{
		
		public function testLoginSuccess()
		{
			
			$inputName = 'wilsonluyongtang@gmail.com';
			$inputPwd = 'test123';
			$expect = true;
			$lg = new Login();
			$result = $lg->login($inputName, $inputPwd);
			$this->assertEquals($expect, $result);
		}
		
	}
?>