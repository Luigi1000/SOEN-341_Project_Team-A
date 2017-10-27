<?php 

	use PHPUnit\Framework\TestCase;
	
	class AddTest extends TestCase 
	{
		/*
		 * @dataProvider mathValues
		 */
		public function testAdd($x, $y, $sum) 
		{
			$this->assertEquals($sum, $x+$y);
		}
		
		public function mathValues
		{
			return[
				[0,0,0],
				[1,1,2],
				[2,3,5],
				[6,6,12],
				[8,8,16],
				[25,25,50]
			];
		}
	}
?>