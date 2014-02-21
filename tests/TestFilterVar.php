<?php
require_once 'AbstractFilterVarTest.php';

class TestFilterVar extends AbstractFilterVarTest
{
	public function testFunctionExists()
	{
		$this->assertTrue(function_exists('filter_var'), "filter_var is not defined.");
	}//end function testFunctionExists

	public function testBogusFilter()
	{
		$this->assertFalse(filter_var('testing...', 987654321), 'The bogus filter ran incorrectly.');
		$this->assertFalse(filter_var('testing...', 987654321, FILTER_NULL_ON_FAILURE), 'The bogus filter ran incorrectly.');
	}

	public function testValidateEmail()
	{
		$this->assertTrue(filter_var('testing@testing.com', FILTER_VALIDATE_EMAIL) === 'testing@testing.com', 'The validate email filter is returning false for a valid email.');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_EMAIL) === FALSE, 'The validate email fiter is not returning FALSE for a valid email.');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE) === NULL, 'The validate email fiter is not returning NULL for an invalid email.');
	}



}//end class TestFilterVar
