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

	public function testBogusFilter()
	{
		$this->assertFalse(filter_var('testing...', 987654321), 'The bogus filter ran incorrectly.');
	}

	public function testValidateTrueBoolean()
	{
		$this->assertTrue(filter_var('true', FILTER_VALIDATE_BOOLEAN) === TRUE, 'The "boolean" filter is fialing for "true"');
		$this->assertTrue(filter_var('1', FILTER_VALIDATE_BOOLEAN) === TRUE, 'The "boolean" filter is failing for "1"');
		$this->assertTrue(filter_var('on', FILTER_VALIDATE_BOOLEAN) === TRUE, 'The "boolean" filter is failing for "on"');
		$this->assertTrue(filter_var('yes', FILTER_VALIDATE_BOOLEAN) === TRUE, 'The "boolean" filter is failing for "yes"');
	}

	public function testValidateFalseBoolean()
	{
		$this->assertTrue(filter_var('bogus', FILTER_VALIDATE_BOOLEAN) === FALSE, 'The "boolean" filter is failing for "bogus"');
		$this->assertTrue(filter_var('false', FILTER_VALIDATE_BOOLEAN) === FALSE, 'The "boolean" filter is failing for FALSE');
		$this->assertTrue(filter_var('0', FILTER_VALIDATE_BOOLEAN) === FALSE, 'The "boolean" filter is failing for "0"');
		$this->assertTrue(filter_var('off', FILTER_VALIDATE_BOOLEAN) === FALSE, 'The "boolean" filter is failing for "off"');
		$this->assertTrue(filter_var('no', FILTER_VALIDATE_BOOLEAN) === FALSE, 'The "boolean" filter is failing for "no"');
	}

	public function testValidateFalseBooleanReturnNULL()
	{
		$this->assertTrue(filter_var('false', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === FALSE, 'The "boolean" filter is failing for FALSE');
		$this->assertTrue(filter_var('0', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === FALSE, 'The "boolean" filter is failing for "0"');
		$this->assertTrue(filter_var('off', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === FALSE, 'The "boolean" filter is failing for "off"');
		$this->assertTrue(filter_var('no', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === FALSE, 'The "boolean" filter is failing for "no"');
		$this->assertTrue(filter_var(FALSE, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === NULL, 'The "boolean" filter is not returning FALSE.');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) === NULL, 'The "boolean" filter is not returning NULL.');
	}

	public function testValidateEmail()
	{
		$this->assertTrue(filter_var('testing@testing.com', FILTER_VALIDATE_EMAIL) === 'testing@testing.com', 'The validate email filter is returning false for a valid email.');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_EMAIL) === FALSE, 'The validate email fiter is not returning FALSE for a valid email.');
	}

	public function testValidateFloat()
	{
		$this->assertTrue(filter_var('', FILTER_VALIDATE_FLOAT) === FALSE, 'The validate float filter is not returning FALSE for ""');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_FLOAT) === FALSE, 'The validate float filter is not returning FALSE for "testing"');
		$this->assertTrue(filter_var(.009, FILTER_VALIDATE_FLOAT) === .009, 'The validate float filter is not returning .009 for .009');
		$this->assertTrue(filter_var(1.1, FILTER_VALIDATE_FLOAT) === 1.1, 'The validate float filter is not return 1.1 for 1.1.');
		$this->assertTrue(filter_var(.1, FILTER_VALIDATE_FLOAT) === .1, 'The validate float filter is not return .1 for .1');
		$this->assertTrue(filter_var(1., FILTER_VALIDATE_FLOAT) === 1., 'The validate float filter is not return 1. for 1.');
		$this->assertTrue(filter_var(1, FILTER_VALIDATE_FLOAT) === 1., 'The validate float filter is not return 1. for 1');
		$this->assertTrue(filter_var('1.1', FILTER_VALIDATE_FLOAT) === 1.1, 'The validate float filter is not return 1.1 for "1.1"');
		$this->assertTrue(filter_var(' 1.1 ', FILTER_VALIDATE_FLOAT) === 1.1, 'The validate float filter is not return 1.1 for " 1.1 "');
		$this->assertTrue(filter_var('.1', FILTER_VALIDATE_FLOAT) === .1, 'The validate float filter is not return .1 for .1');
		$this->assertTrue(filter_var('1.', FILTER_VALIDATE_FLOAT) === 1., 'The validate float filter is not return 1. for "1."');
		$this->assertTrue(filter_var('1', FILTER_VALIDATE_FLOAT) === 1., 'The validate float filter is not return 1. for "1"');

		$this->assertTrue(filter_var('1,000', FILTER_VALIDATE_FLOAT) === FALSE, 'The validate float filter is not returning FALSE for "1,000" w/o the FILTER_FLAG_ALLOW_THOUSAND flag set.');
		$this->assertTrue(filter_var('1,000', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND) === 1000., 'The validate float filter is not returning FALSE for "1,000" w/o the FILTER_FLAG_ALLOW_THOUSAND flag set.');
	}

	public function testValidateInt()
	{
		$this->assertTrue(filter_var('', FILTER_VALIDATE_INT) === FALSE, 'The validate int filter is not returning FALSE for ""');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_INT) === FALSE, 'The validate int filter is not returning FALSE for "testing"');
		$this->assertTrue(filter_var(.009, FILTER_VALIDATE_INT) === FALSE, 'The validate int filter is not returning FALSE for .009');
		$this->assertTrue(filter_var(1.1, FILTER_VALIDATE_INT) === FALSE, 'The validate int filter is not returning FALSE for 1.1');
		$this->assertTrue(filter_var(1, FILTER_VALIDATE_INT) === 1, 'The validate int filter is not returning 1 for 1');
		$this->assertTrue(filter_var(1, FILTER_VALIDATE_INT, array(array('options' => 'min_range' => 10))) === FALSE, 'The validate int filter is not returning FALSE for 1 with min_range = 10');
		$this->assertTrue(filter_var(100, FILTER_VALIDATE_INT, array(array('options' => 'max_range' => 10))) === FALSE, 'The validate int filter is not returning FALSE for 100 with max_range = 10');
	}

}//end class TestFilterVar
