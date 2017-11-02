<?php

	include('classes/class_searchbar.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class SearchBarTest extends TestCase
	{

		public function testSearch()
		{
			$expectedItem = 'dog';
			$expectedAds = 'Pet';
			$expectedCity = 'Quebec';

			$searching = new SearchBar;
			$result = $searching->search($expectedItem,$expectedAds,$expectedCity);

			foreach($result as $eachRow){
			$this->assertContains($expectedItem, $eachRow['ProductName'], '', true);
			$this->assertEquals($expectedAds, $eachRow['ProductCategory']);
			$this->assertEquals($expectedCity, $eachRow['Province']);
			
			}

		}
		
	}
?>
