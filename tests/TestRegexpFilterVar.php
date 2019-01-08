<?php
require_once 'AbstractFilterVarTest.php';

class TestRegexpFilterVar extends AbstractFilterVarTest
{

	public function testValidateRegexp()
	{
		$string = 'Match this string.';

		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/a/'))) === $string, 'FILTER_VALIDATE_REGEX failed');
		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/\d/'))) === FALSE, 'FILTER_VALIDATE_REGEX failed');
		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/\d/'), 'flags' => FILTER_NULL_ON_FAILURE)) === NULL, 'FILTER_VALIDATE_REGEX failed');
	}

	public function testErrorTriggered()
	{
		$string = 'Match this string.';

		$this->expectError();
		$this->assertTrue(filter_var($string, FILTER_VALIDATE_REGEXP, array('options' => array())) === FALSE, 'FILTER_VALIDATE_REGEX failed w/o a regex passed');
	}

}//end class TestRegexpFilterVar
