<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

class TestFilterHasVar extends UnitTestCase
{
	public function testGET()
	{

	}//end function testGET

}//end class TestFilterHasVar
