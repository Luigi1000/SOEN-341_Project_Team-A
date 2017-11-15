
<?php 
	
	include('classes/subcategoryClass.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class SubcategoryTest extends TestCase 
	{
		
		public function testCategorySuccess() 
		{
			
			$expectSubcategory = "Dog";
			$clickCategory = new Subcategory;
			$click = $clickCategory->chooseCategory("Pet", "Dog");
			foreach($click as $eachRow){
          		$this->assertEquals($expectSubcategory, $eachRow['ProductCategory2']);	     
          	}
			
		}
	}
?>