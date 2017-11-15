<?php

	include('classes/class_sortby.php');
	use PHPUnit\Framework\TestCase;
?>
<?php
	class SortByTest extends TestCase
	{

		public function testSortPriceAsc()
		{
			$input = 'priceAsc';
			
			$sort = new SortBy;
			$result = $sort->sort($input);

			$first = $result->fetch(PDO::FETCH_ASSOC);
			$second = $result->fetch(PDO::FETCH_ASSOC);

			// test pass if Price of first item less or equal than second item
			$this->assertLessThanOrEqual($second['Price'], $first['Price']);

		}

		public function testSortPriceDsc()
		{
			$input = 'priceDesc';
			
			$sort = new SortBy;
			$result = $sort->sort($input);

			$first = $result->fetch(PDO::FETCH_ASSOC);
			$second = $result->fetch(PDO::FETCH_ASSOC);

			// test pass if Price of first item greater or equal than second item
			$this->assertGreaterThanOrEqual($second['Price'], $first['Price']);

		}

		public function testSortDateAsc()
		{
			$input = 'dateAsc';
			
			$sort = new SortBy;
			$result = $sort->sort($input);

			$first = $result->fetch(PDO::FETCH_ASSOC);
			$second = $result->fetch(PDO::FETCH_ASSOC);

			// test pass if Price of first item greater or equal than second item
			$this->assertLessThanOrEqual($second['timeStamp'], $first['timeStamp']);

		}
		
	}
?>