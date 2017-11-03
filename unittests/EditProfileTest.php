<?php  
	 
 	include('classes/class_editprofile.php'); 
 	use PHPUnit\Framework\TestCase; 
 ?> 
 <?php 
 	class EditProfileTest extends TestCase 
 	{ 
 		 
 		public function testEditProfileSuccess() 
 		{ 
 			 
 			$userName = 'neel'; 
 			$address = '123 St catherine'; 
			$phoneNumber = '5146541232'
 			$expect = true; 
 			$lg = new EditProfile(); 
 			$result = $lg->editProfile($userName, $address, $phoneNumber); 
 			$this->assertEquals($expect, $result); 
 		} 
 		 
 	} 
 ?> 
