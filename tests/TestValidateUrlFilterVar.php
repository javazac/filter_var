<?php
require_once 'AbstractFilterVarTest.php';

class TestValidateUrlFilterVar extends AbstractFilterVarTest
{
	public function testValidateUrlNoOpts()
	{
		$url = 'http://www.google.com';
		$this->assertTrue(filter_var($url, FILTER_VALIDATE_URL) === $url, 'FILTER_VALIDATE_URL failed');
	}
}//end class TestValidateUrlFilterVar
