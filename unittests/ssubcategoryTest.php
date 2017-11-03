
<?php 
	
	include('classes/ssubcategoryClass.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class SsubcategoryTest extends TestCase 
	{
		
		public function testCategorySuccess() 
		{
			
			$expectSsubcategory = "pug";
			$clickCategory = new Ssubcategory;
			$click = $clickCategory->chooseCategory("Pet", "Dog", "pug");
			foreach($click as $eachRow){
          		$this->assertEquals($expectSsubcategory, $eachRow['ProductCategory3']);	     
          	}
			
		}
		
	}
?>