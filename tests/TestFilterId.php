<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

class TestFilterId extends UnitTestCase
{
	public function testFunctionExists()
	{
		$this->assertTrue(function_exists('filter_id'), "filter_has_var is not defined.");
	}//end function testFunctionExists

	public function testBogusFilter()
	{
		$this->assertTrue(filter_id('bogus') === false, "filter_id('bogus') should isn't returning false.");
	}

	public function testFilterIdInt()
	{
		$this->assertTrue(filter_id('int') === FILTER_VALIDATE_INT, "filter_id('int') not returning same value as FILTER_VALIDATE_INT");
		$this->assertTrue(filter_id('int') === 257, "filter_id('int') not returning 257");
	}

	public function testFilterIdBool()
	{
		$this->assertTrue(filter_id('boolean') === FILTER_VALIDATE_BOOLEAN, "filter_id('boolean') not returning same value as FILTER_VALIDATE_BOOLEAN");
		$this->assertTrue(filter_id('boolean') === 258, "filter_id('boolean') not returning 258");
	}//end function testFilterIdBool

	public function testFilterIdFloat()
	{
		$this->assertTrue(filter_id('float') === FILTER_VALIDATE_FLOAT, "filter_id('float') not returning same value as FILTER_VALIDATE_FLOAT");
		$this->assertTrue(filter_id('float') === 259, "filter_id('float') not returning 259");
	}//end function testFilterIdFloat

	public function testFilterIdValidateRegexp()
	{
		$this->assertTrue(filter_id('validate_regexp') === FILTER_VALIDATE_REGEXP, "filter_id('validate_regexp') not returning same value as FILTER_VALIDATE_REGEXP");
		$this->assertTrue(filter_id('validate_regexp') === 272, "filter_id('validate_regexp') not returning 272");
	}//end function testFilterIdValidateRegexp

	public function testFilterIdValidateUrl()
	{
		$this->assertTrue(filter_id('validate_url') === FILTER_VALIDATE_URL, "filter_id('validate_url') not returning same value as FILTER_VALIDATE_URL");
		$this->assertTrue(filter_id('validate_url') === 273, "filter_id('validate_url') not returning 273");
	}//end function testFilterIdValidateUrl

	public function testFilterIdValidateEmail()
	{
		$this->assertTrue(filter_id('validate_email') === FILTER_VALIDATE_EMAIL, "filter_id('validate_email') not returning same value as FILTER_VALIDATE_EMAIL");
		$this->assertTrue(filter_id('validate_email') === 274, "filter_id('validate_email') not returning 274");
	}//end function testFilterIdValidateEmail

	public function testFilterIdValidateIp()
	{
		$this->assertTrue(filter_id('validate_ip') === FILTER_VALIDATE_IP, "filter_id('validate_ip') not returning same value as FILTER_VALIDATE_IP");
		$this->assertTrue(filter_id('validate_ip') === 275, "filter_id('validate_ip') not returning 275");
	}//end function testFilterIdValidateIp

	public function testFilterIdString()
	{
		$this->assertTrue(filter_id('string') === FILTER_SANITIZE_STRING, "filter_id('string') not returning same value as FILTER_STRING");
		$this->assertTrue(filter_id('string') === 513, "filter_id('string') not returning 513");
	}//end function testFilterIdString

	public function testFilterIdStripped()
	{
		$this->assertTrue(filter_id('stripped') === FILTER_SANITIZE_STRIPPED, "filter_id('stripped') not returning same value as FILTER_STRIPPED");
		$this->assertTrue(filter_id('stripped') === 513, "filter_id('stripped') not returning 513");
	}//end function testFilterIdStripped

	public function testFilterIdEncoded()
	{
		$this->assertTrue(filter_id('encoded') === FILTER_SANITIZE_ENCODED, "filter_id('encoded') not returning same value as FILTER_ENCODED");
		$this->assertTrue(filter_id('encoded') === 514, "filter_id('encoded') not returning 514");
	}//end function testFilterIdEncoded

	public function testFilterIdSpecialChars()
	{
		$this->assertTrue(filter_id('special_chars') === FILTER_SANITIZE_SPECIAL_CHARS, "filter_id('special_chars') not returning same value as FILTER_SPECIAL_CHARS");
		$this->assertTrue(filter_id('special_chars') === 515, "filter_id('special_chars') not returning 515");
	}//end function testFilterIdSpecialChars

	public function testFilterIdUnsafeRaw()
	{
		$this->assertTrue(filter_id('unsafe_raw') === FILTER_UNSAFE_RAW, "filter_id('unsafe_raw') not returning same value as FILTER_UNSAFE_RAW");
		$this->assertTrue(filter_id('unsafe_raw') === 516, "filter_id('unsafe_raw') not returning 516");
	}//end function testFilterIdUnsafeRaw

	public function testFilterIdEmail()
	{
		$this->assertTrue(filter_id('email') === FILTER_SANITIZE_EMAIL, "filter_id('email') not returning same value as FILTER_SANITIZE_EMAIL");
		$this->assertTrue(filter_id('email') === 517, "filter_id('email') not returning 517");
	}//end function testFilterIdEmail

	public function testFilterIdUrl()
	{
		$this->assertTrue(filter_id('url') === FILTER_SANITIZE_URL, "filter_id('url') not returning same value as FILTER_SANITIZE_URL");
		$this->assertTrue(filter_id('url') === 518, "filter_id('url') not returning 518");
	}//end function testFilterIdUrl

	public function testFilterIdNumberInt()
	{
		$this->assertTrue(filter_id('number_int') === FILTER_SANITIZE_NUMBER_INT, "filter_id('number_int') not returning same value as FILTER_SANITIZE_NUMBER_INT");
		$this->assertTrue(filter_id('number_int') === 519, "filter_id('number_int') not returning 519");
	}//end function testFilterIdNumberInt

	public function testFilterIdNumberFloat()
	{
		$this->assertTrue(filter_id('number_float') === FILTER_SANITIZE_NUMBER_FLOAT, "filter_id('number_float') not returning same value as FILTER_SANITIZE_NUMBER_FLOAT");
		$this->assertTrue(filter_id('number_float') === 520, "filter_id('number_float') not returning 520");
	}//end function testFilterIdNumberFloat

	public function testFilterIdMagicQuotes()
	{
		$this->assertTrue(filter_id('magic_quotes') === FILTER_SANITIZE_MAGIC_QUOTES, "filter_id('magic_quotes') not returning same value as FILTER_SANITIZE_MAGIC_QUOTES");
		$this->assertTrue(filter_id('magic_quotes') === 521, "filter_id('magic_quotes') not returning 521");
	}//end function testFilterIdMagicQuotes

	public function testFilterIdCallback()
	{
		$this->assertTrue(filter_id('callback') === FILTER_CALLBACK, "filter_id('callback') not returning same value as FILTER_CALLBACK");
		$this->assertTrue(filter_id('callback') === 1024, "filter_id('callback') not returning 1024");
	}//end function testFilterIdCallback

}//end class TestFilterId
