<?php

	include('classes/class_itemlisting.php');
	use PHPUnit\Framework\TestCase;

?>
<?php

	class ItemListingTest extends TestCase 
	{
		public function testItemSuccess() 
		{
			$itemNumber = '13';
			$itemName = 'calculator';
			$itemPrice = '1000';
			$itemDescription = 'item details';
			$userId = '1'; 
			$expect = true;
			$click = new ItemListing();
			$result = $click->item($itemNumber, $itemName, $itemPrice, $itemDescription, $userId); 
			$this->assertEquals($expect, $result);
		}
	}

?> 