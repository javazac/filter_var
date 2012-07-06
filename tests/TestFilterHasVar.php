<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

/**
 * The filter_has_var implementation that is part of this package checks for array keys in 
 * the PHP superglobals. The actual implementation checks a variable that we don't have 
 * access to so it's actually much more accurate (ie it won't return true for variables that
 * are set programatically like "$_GET['testvar'] = true").
 *
 * This means we can't really duplicate the behaviour correctly. We can get close enough that
 * it won't matter for our purposes though.
 */
class TestFilterHasVar extends UnitTestCase
{
	public function testFunctionExists()
	{
		$this->assertTrue(function_exists('filter_has_var'), "filter_has_var is not defined.");
	}

	public function testGET()
	{
		if(version_compare(PHP_VERSION, '5.2.0', '<')) {

			$this->assertFalse(filter_has_var(INPUT_GET, 'testvar'), "filter_has_var returned TRUE for non-existant variable in GET.");

			$_GET['testvar'] = null;

			$this->assertTrue(filter_has_var(INPUT_GET, 'testvar'), "filter_has_var returned FALSE for an existing variable in GET.");
		}
	}//end function testGET

	public function testPOST()
	{
		if(version_compare(PHP_VERSION, '5.2.0', '<')) {

			$this->assertFalse(filter_has_var(INPUT_POST, 'testvar'), "filter_has_var returned TRUE for non-existant variable in POST.");

			$_POST['testvar'] = null;

			$this->assertTrue(filter_has_var(INPUT_POST, 'testvar'), "filter_has_var returned FALSE for an existing variable in POST.");
		}
	}//end function testPOST

	public function testCOOKIE()
	{
		if(version_compare(PHP_VERSION, '5.2.0', '<')) {

			$this->assertFalse(filter_has_var(INPUT_COOKIE, 'testvar'), "filter_has_var returned TRUE for non-existant variable in COOKIE.");

			$_COOKIE['testvar'] = null;

			$this->assertTrue(filter_has_var(INPUT_COOKIE, 'testvar'), "filter_has_var returned FALSE for an existing variable in COOKIE.");
		}
	}//end function testCOOKIE

	public function testSERVER()
	{
		if(version_compare(PHP_VERSION, '5.2.0', '<')) {

			$this->assertFalse(filter_has_var(INPUT_SERVER, 'testvar'), "filter_has_var returned TRUE for non-existant variable in SERVER.");

			$_SERVER['testvar'] = null;

			$this->assertTrue(filter_has_var(INPUT_SERVER, 'testvar'), "filter_has_var returned FALSE for an existing variable in SERVER.");
		}
	}//end function testSERVER

	public function testENV()
	{
		if(version_compare(PHP_VERSION, '5.2.0', '<')) {

			$this->assertFalse(filter_has_var(INPUT_ENV, 'testvar'), "filter_has_var returned TRUE for non-existant variable in ENV.");

			$_ENV['testvar'] = null;

			$this->assertTrue(filter_has_var(INPUT_ENV, 'testvar'), "filter_has_var returned FALSE for an existing variable in ENV.");
		}
	}//end function testENV

}//end class TestFilterHasVar
