<?php
require_once 'simpletest/autorun.php';
require_once '../filter_var.php';

class TestConstants extends UnitTestCase
{
	public function testConstantsAreDefined()
	{
		$this->assertTrue(defined('INPUT_POST'));
		$this->assertTrue(defined('INPUT_GET'));
		$this->assertTrue(defined('INPUT_COOKIE'));
		$this->assertTrue(defined('INPUT_ENV'));
	}//end function testConstantsAreDefined

	public function testConstantsDefinedValues()
	{
		$this->assertTrue(INPUT_POST === 0);
		$this->assertTrue(INPUT_GET === 1);
		$this->assertTrue(INPUT_COOKIE === 2);
		$this->assertTrue(INPUT_ENV === 4);
	}//end function testConstantsDefinedValues

}//end classTestConstants
