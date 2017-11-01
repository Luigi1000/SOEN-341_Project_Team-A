
<?php 
	
	include('classes/categoryClass.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class categoryTest extends TestCase 
	{
		
		public function testCategorySuccess() 
		{
			
			$expectcategory = "Pet";
			$clickCategory = new Category;
			$click = $clickCategory->chooseCategory("Pet");
			foreach($click as $eachRow)
          	{
          		$this->assertEquals($expectcategory, $eachRow['ProductCategory']);	     
          	}
			
		}
	}
?>