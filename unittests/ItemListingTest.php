<?php

	include('classes/class_itemlisting.php');
	use PHPUnit\Framework\TestCase;

?>
<?php

	class ItemListingTest extends TestCase 
	{
		public function testItemSuccess() 
		{
			$expectedItemNumber = '7';
			$expectedItemName = 'Pug Dog';
			$expectedItemPrice = '500';
			$expectedItemDescription = 'Available in black and brown';

			$clickItem = new ItemListing;
			$click = $clickItem->item($expectedItemNumber, $expectedItemName, $expectedItemPrice, $expectedItemDescription); 
			$this->assertEquals($expectedItemNumber, $click['ProductId']);
			$this->assertEquals($expectedItemName, $click['ProductName']);	
			$this->assertEquals($expectedItemPrice, $click['Price']);	
			$this->assertEquals($expectedItemDescription, $click['ProductDetail']);	
		}
	}

?> 
