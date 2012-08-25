<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

class TestRegexpFilterVar extends UnitTestCase
{

	public function testValidateRegexp()
	{
		$string = 'Match this string.';

		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/a/'))) === $string, 'FILTER_VALIDATE_REGEX failed');
		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/\d/'))) === FALSE, 'FILTER_VALIDATE_REGEX failed');
	}

	public function testErrorTriggered()
	{
		$string = 'Match this string.';

		$this->expectError();
		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array())) === FALSE, 'FILTER_VALIDATE_REGEX failed w/o a regex passed');
	}

}//end class TestRegexpFilterVar
