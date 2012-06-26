<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

class TestConstants extends UnitTestCase
{
	public function testConstantsAreDefined()
	{
		$this->assertTrue(defined('INPUT_POST'), "The INPUT_POST constant is not defined.");
		$this->assertTrue(defined('INPUT_GET'), "The INPUT_GET constant is not defined.");
		$this->assertTrue(defined('INPUT_COOKIE'), "The INPUT_COOKIE constant is not defined.");
		$this->assertTrue(defined('INPUT_ENV'), "The INPUT_ENV constant is not defined.");
		$this->assertTrue(defined('INPUT_SERVER'), "The INPUT_SERVER constant is not defined.");
		$this->assertTrue(defined('INPUT_SESSION'), "The INPUT_SESSION constant is not defined.");
		$this->assertTrue(defined('INPUT_REQUEST'), "The INPUT_REQUEST constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NONE'), "The FILTER_FLAG_NONE constant is not defined.");
		$this->assertTrue(defined('FILTER_REQUIRE_SCALAR'), "The FILTER_REQUIRE_SCALAR constant is not defined.");
		$this->assertTrue(defined('FILTER_REQUIRE_ARRAY'), "The FILTER_REQUIRE_ARRAY constant is not defined.");
		$this->assertTrue(defined('FILTER_FORCE_ARRAY'), "The FILTER_FORCE_ARRAY constant is not defined.");
		$this->assertTrue(defined('FILTER_NULL_ON_FAILURE'), "The FILTER_NULL_ON_FAILURE constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_INT'), "The FILTER_VALIDATE_INT constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_BOOLEAN'), "The FILTER_VALIDATE_BOOLEAN constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_FLOAT'), "The FILTER_VALIDATE_FLOAT constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_REGEXP'), "The FILTER_VALIDATE_REGEX constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_URL'), "The FILTER_VALIDATE_URL constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_EMAIL'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_IP'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_DEFAULT'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_UNSAFE_RAW'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_STRING'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_STRIPPED'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_ENCODED'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_SPECIAL_CHARS'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_EMAIL'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_URL'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_NUMBER_INT'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_NUMBER_FLOAT'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_MAGIC_QUOTES'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_CALLBACK'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_OCTAL'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_HEX'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_STRIP_LOW'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_STRIP_HIGH'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ENCODE_LOW'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ENCODE_HIGH'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ENCODE_AMP'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NO_ENCODE_QUOTES'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_EMPTY_STRING_NULL'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_FRACTION'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_THOUSAND'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_SCIENTIFIC'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_PATH_REQUIRED'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_QUERY_REQUIRED'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_IPV4'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_IPV6'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NO_RES_RANGE'), "The XXX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NO_PRIV_RANGE'), "The XXX constant is not defined.");
	}//end function testConstantsAreDefined

	public function testConstantsDefinedValues()
	{
		$this->assertTrue(INPUT_POST === 0);
		$this->assertTrue(INPUT_GET === 1);
		$this->assertTrue(INPUT_COOKIE === 2);
		$this->assertTrue(INPUT_ENV === 4);
	}//end function testConstantsDefinedValues

}//end classTestConstants
