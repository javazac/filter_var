<?php
require_once 'AbstractFilterVarTest.php';

class TestValidateUrlFilterVar extends AbstractFilterVarTest
{
	public function testValidateUrlEmpty()
	{
		$this->assertFalse(filter_var('', FILTER_VALIDATE_URL), 'FILTER_VALIDATE_URL didn\'t return false for empty string');
	}
	public function testValidateUrlNoOpts()
	{
		$url = 'http://www.google.com';
		$this->assertTrue(filter_var($url, FILTER_VALIDATE_URL) === $url, 'FILTER_VALIDATE_URL failed');
	}
}//end class TestValidateUrlFilterVar
