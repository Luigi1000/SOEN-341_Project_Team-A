
<?php 
	
	include('classes/categoryClass.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class CategoryTest extends TestCase 
	{
		
		public function testCategorySuccess() 
		{
			
			$expectCategory = "Pet";
			$clickCategory = new Category;
			$click = $clickCategory->chooseCategory("Pet");
			foreach($click as $eachRow){
          		$this->assertEquals($expectCategory, $eachRow['ProductCategory1']);	     
          	}
			
		}
		
	}
?>