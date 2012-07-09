<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

class TestFilterVar extends UnitTestCase
{
	public function testFunctionExists()
	{
		$this->assertTrue(function_exists('filter_var'), "filter_var is not defined.");
	}//end function testFunctionExists
}//end class TestFilterVar
