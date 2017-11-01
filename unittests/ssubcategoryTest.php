
<?php 
	
	include('classes/ssubcategoryClass.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class ssubcategoryTest extends TestCase 
	{
		
		public function testCategorySuccess() 
		{
			
			$expectSSubcategory = "pug";
			$clickCategory = new SSubcategory;
			$click = $clickCategory->chooseCategory("Pet", "Dog", "pug");
			foreach($click as $eachRow)
          	{
          		$this->assertEquals($expectSSubcategory, $eachRow['ProductCategory3']);	     
          	}
			
		}
	}
?>