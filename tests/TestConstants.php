<?php
require_once 'AbstractFilterVarTest.php';

class TestConstants extends AbstractFilterVarTest
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
		$this->assertTrue(defined('FILTER_VALIDATE_EMAIL'), "The FILTER_VALIDATE_EMAIL constant is not defined.");
		$this->assertTrue(defined('FILTER_VALIDATE_IP'), "The FILTER_VALIDATE_IP constant is not defined.");
		$this->assertTrue(defined('FILTER_DEFAULT'), "The FILTER_DEFAULT constant is not defined.");
		$this->assertTrue(defined('FILTER_UNSAFE_RAW'), "The FILTER_UNSAFE_RAW constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_STRING'), "The FILTER_SANITIZE_STRING constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_STRIPPED'), "The FILTER_SANITIZE_STRIPPED constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_ENCODED'), "The FILTER_SANITIZE_ENCODED constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_SPECIAL_CHARS'), "The FILTER_SANITAIZE_SPECIAL_CHARS constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_EMAIL'), "The FILTER_SANITIZE_EMAIL constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_URL'), "The FILTER_SANITIZE_URL constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_NUMBER_INT'), "The FILTER_SANITIZE_NUMBER_INT constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_NUMBER_FLOAT'), "The FILTER_SANITIZE_NUMBER_FLOAT constant is not defined.");
		$this->assertTrue(defined('FILTER_SANITIZE_MAGIC_QUOTES'), "The FILTER_SANITIZE_MAGIC_QUOTES constant is not defined.");
		$this->assertTrue(defined('FILTER_CALLBACK'), "The FILTER_CALLBACK constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_OCTAL'), "The FILTER_FLAG_ALLOW_OCTAL constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_HEX'), "The FILTER_FLAG_ALLOW_HEX constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_STRIP_LOW'), "The FILTER_FLAG_STRIP_LOW constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_STRIP_HIGH'), "The FILTER_FLAG_STRIP_HIGH constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ENCODE_LOW'), "The FILTER_FLAG_ENCODE_LOW constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ENCODE_HIGH'), "The FILTER_FLAG_ENCODE_HIGH constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ENCODE_AMP'), "The FILTER_FLAG_ENCODE_AMP constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NO_ENCODE_QUOTES'), "The FILTER_FLAG_NO_ENCODE_QUOTES constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_EMPTY_STRING_NULL'), "The FILTER_FLAG_EMPTY_STRING_NULL constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_FRACTION'), "The FILTER_FLAG_ALLOW_FRACTION constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_THOUSAND'), "The FILTER_FLAG_ALLOW_THOUSAND constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_ALLOW_SCIENTIFIC'), "The FILTER_FLAG_ALLOW_SCIENTIFIC constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_PATH_REQUIRED'), "The FILTER_FLAG_PATH_REQUIRED constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_QUERY_REQUIRED'), "The FILTER_FLAG_QUERY_REQUIRED constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_IPV4'), "The FILTER_FLAG_IPV4 constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_IPV6'), "The FILTER_FLAG_IPV6 constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NO_RES_RANGE'), "The FILTER_FLAG_NO_RES_RANGE constant is not defined.");
		$this->assertTrue(defined('FILTER_FLAG_NO_PRIV_RANGE'), "The FILTER_FLAG_NO_PRIV_RANGE constant is not defined.");
	}//end function testConstantsAreDefined

	public function testConstantsDefinedValues()
	{
		$this->assertTrue(INPUT_POST === 0, "INPUT_POST value not correct.");
		$this->assertTrue(INPUT_GET === 1, "INPUT_GET value not correct.");
		$this->assertTrue(INPUT_COOKIE === 2, "INPUT_COOKIE value not correct.");
		$this->assertTrue(INPUT_ENV === 4, "INPUT_ENV value not correct.");
		$this->assertTrue(INPUT_SERVER === 5, "INPUT_SERVER value not correct.");
		$this->assertTrue(INPUT_SESSION === 6, "INPUT_SESSION value not correct.");
		$this->assertTrue(INPUT_REQUEST === 99, "INPUT_REQUEST value not correct.");
		$this->assertTrue(FILTER_FLAG_NONE === 0, "FILTER_FLAG_NONE value not correct.");
		$this->assertTrue(FILTER_REQUIRE_SCALAR === 33554432, "FILTER_REQUIRE_SCALAR value not correct.");
		$this->assertTrue(FILTER_REQUIRE_ARRAY === 16777216, "FILTER_REQURE_ARRAY value not correct.");
		$this->assertTrue(FILTER_FORCE_ARRAY === 67108864, "FILTER_FORCE_ARRAY value not correct.");
		$this->assertTrue(FILTER_NULL_ON_FAILURE === 134217728, "FILTER_NULL_ON_FAILURE value not correct.");
		$this->assertTrue(FILTER_VALIDATE_INT === 257, "FILTER_VALIDATE_INT value not correct.");
		$this->assertTrue(FILTER_VALIDATE_BOOLEAN === 258, "FILTER_VALIDATE_BOOLEAN value not correct.");
		$this->assertTrue(FILTER_VALIDATE_FLOAT === 259, "FILTER_VALIDATE_FLOAT value not correct.");
		$this->assertTrue(FILTER_VALIDATE_REGEXP === 272, "FILTER_VALIDATE_REGEXP value not correct.");
		$this->assertTrue(FILTER_VALIDATE_URL === 273, "FILTER_VALIDATE_URL value not correct.");
		$this->assertTrue(FILTER_VALIDATE_EMAIL === 274, "FILTER_VALIDATE_EMAIL value not correct.");
		$this->assertTrue(FILTER_VALIDATE_IP === 275, "FILTER_VALIDATE_IP value not correct.");
		$this->assertTrue(FILTER_DEFAULT === 516, "FILTER_DEFAULT value not correct.");
		$this->assertTrue(FILTER_UNSAFE_RAW === 516, "FILTER_UNSAFE_RAW value not correct.");
		$this->assertTrue(FILTER_SANITIZE_STRING === 513, "FILTER_SANITIZE_STRING value not correct.");
		$this->assertTrue(FILTER_SANITIZE_STRIPPED === 513, "FILTER_SANITIZE_STRIPPED value not correct.");
		$this->assertTrue(FILTER_SANITIZE_ENCODED === 514, "FILTER_SANITIZE_ENCODED value not correct.");
		$this->assertTrue(FILTER_SANITIZE_SPECIAL_CHARS === 515, "FILTER_SANITIZE_SPECIAL_CHARS value not correct.");
		$this->assertTrue(FILTER_SANITIZE_EMAIL === 517, "FILTER_SANITIZE_EMAIL value not correct.");
		$this->assertTrue(FILTER_SANITIZE_URL === 518, "FILTER_SANITIZE_URL value not correct.");
		$this->assertTrue(FILTER_SANITIZE_NUMBER_INT === 519, "FILTER_SANITIZE_NUMBER_INT value not correct.");
		$this->assertTrue(FILTER_SANITIZE_NUMBER_FLOAT === 520, "FILTER_SANITIZE_NUMBER_FLOAT value not correct.");
		$this->assertTrue(FILTER_SANITIZE_MAGIC_QUOTES === 521, "FILTER_SANITIZE_MAGIC_QUOTES value not correct.");
		$this->assertTrue(FILTER_CALLBACK === 1024, "FILTER_CALLBACK value not correct.");
		$this->assertTrue(FILTER_FLAG_ALLOW_OCTAL === 1, "FILTER_FLAG_ALLOW_OCTAL value not correct.");
		$this->assertTrue(FILTER_FLAG_ALLOW_HEX === 2, "FILTER_FLAG_ALLOW_HEX value not correct.");
		$this->assertTrue(FILTER_FLAG_STRIP_LOW === 4, "FILTER_FLAG_STRIP_LOW value not correct.");
		$this->assertTrue(FILTER_FLAG_STRIP_HIGH === 8, "FILTER_FLAG_STRIP_HIGH value not correct.");
		$this->assertTrue(FILTER_FLAG_ENCODE_LOW === 16, "FILTER_FLAG_ENCODE_LOW value not correct.");
		$this->assertTrue(FILTER_FLAG_ENCODE_HIGH === 32, "FILTER_FLAG_ENCODE_HIGH value not correct.");
		$this->assertTrue(FILTER_FLAG_ENCODE_AMP === 64, "FILTER_FLAG_ENCODE_AMP value not correct.");
		$this->assertTrue(FILTER_FLAG_NO_ENCODE_QUOTES === 128, "FILTER_FLAG_NO_ENCODE_QUOTES value not correct.");
		$this->assertTrue(FILTER_FLAG_EMPTY_STRING_NULL === 256, "FILTER_FLAG_EMPTY_STRING_NULL value not correct.");
		$this->assertTrue(FILTER_FLAG_ALLOW_FRACTION === 4096, "FILTER_FLAG_ALLOW_FRACTION value not correct.");
		$this->assertTrue(FILTER_FLAG_ALLOW_THOUSAND === 8192, "FILTER_FLAG_ALLOW_THOUSAND value not correct.");
		$this->assertTrue(FILTER_FLAG_ALLOW_SCIENTIFIC === 16384, "FILTER_FLAG_ALLOW_SCIENTIFIC value not correct.");
		$this->assertTrue(FILTER_FLAG_PATH_REQUIRED === 262144, "FILTER_FLAG_PATH_REQUIRED value not correct.");
		$this->assertTrue(FILTER_FLAG_QUERY_REQUIRED === 524288, "FILTER_FLAG_QUERY_REQUIRED value not correct.");
		$this->assertTrue(FILTER_FLAG_IPV4 === 1048576, "FILTER_FLAG_IPV4 value not correct.");
		$this->assertTrue(FILTER_FLAG_IPV6 === 2097152, "FILTER_FLAG_IPV6 value not correct.");
		$this->assertTrue(FILTER_FLAG_NO_RES_RANGE === 4194304, "FILTER_FLAG_NO_RES_RANGE value not correct.");
		$this->assertTrue(FILTER_FLAG_NO_PRIV_RANGE === 8388608, "FILTER_FLAG_NO_PRIV_RANGE value not correct.");
	}//end function testConstantsDefinedValues

}//end classTestConstants
