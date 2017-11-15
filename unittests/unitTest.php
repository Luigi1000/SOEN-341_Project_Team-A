<?php

	use PHPUnit\Framework\TestCase;
?>
<?php

	class unitTest extends TestCase 
	{
		public function unitTestSuccess() 
		{
			$expect = true;
			$result = true;
			$this->assertEquals($expect, $result);
		}
	}

?> 