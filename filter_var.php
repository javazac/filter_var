<?php
/**
 *	Rewrite of filter_var package for purposes of back porting to php < 5.2
 *
 *  Older versions of php don't include the filter_var package. If your software
 *  depends on this package this can be a hassle to work around. This package
 *  is meant as a drop in replacement for the filter_var package.
 * 
 *  @package filter_var
 *  @version 0.0.0
 *  @auther Zac Konopa <zac@javazac.com>
 */
define('INPUT_POST', 0); 						//POST variables
define('INPUT_GET', 1); 						//GET variables
define('INPUT_COOKIE', 2); 						//COOKIE variables
define('INPUT_ENV', 4); 						//ENV variables
define('INPUT_SERVER', 5);						//SERVER variables
define('INPUT_SESSION', 6);						//SESSION variables (not implemented yet)
define('INPUT_REQUEST', 99);					//REQUEST variables (not implemented yet)
define('FILTER_FLAG_NONE', 0);					//No flags.
define('FILTER_REQUIRE_SCALAR', 33554432);		//Flag used to require scalar as input.
define('FILTER_REQUIRE_ARRAY', 16777216);		//Require an array as input.
define('FILTER_FORCE_ARRAY', 67108864);			//Always returns an array.
define('FILTER_NULL_ON_FAILURE', 134217728);	//Use NULL instead of FALSE on failure.
define('FILTER_VALIDATE_INT', 257);				//ID of "int" filter.
define('FILTER_VALIDATE_BOOLEAN', 258);			//ID of "boolean" filter.
define('FILTER_VALIDATE_FLOAT', 259);			//ID of "float" filter.
define('FILTER_VALIDATE_REGEXP', 272);			//ID of "validate_regexp" filter.
define('FILTER_VALIDATE_URL', 273);				//ID of "validate_url" filter.
define('FILTER_VALIDATE_EMAIL', 274);			//ID of "validate_email" filter.
define('FILTER_VALIDATE_IP', 275);				//ID of "validate_id" filter.
define('FILTER_DEFAULT', 516);					//ID of default ("string") filter.
define('FILTER_UNSAFE_RAW', 516);				//ID of "unsafe_raw" filter.
define('FILTER_SANITIZE_STRING', 513);			//ID of "string" filter.
define('FILTER_SANITIZE_STRIPPED', 513);		//ID of "stripped" filter.
define('FILTER_SANITIZE_ENCODED', 514);			//ID of "encoded" filter.
define('FILTER_SANITIZE_SPECIAL_CHARS', 515);	//ID of "special_chars" filter.
define('FILTER_SANITIZE_EMAIL', 517);			//ID of "email" filter.
define('FILTER_SANITIZE_URL', 518);				//ID of "url" filter.
define('FILTER_SANITIZE_NUMBER_INT', 519);		//ID of "number_int" filter.
define('FILTER_SANITIZE_NUMBER_FLOAT', 520);	//ID of "number_float" filter.
define('FILTER_SANITIZE_MAGIC_QUOTES', 521);	//ID of "magic_quotes" filter.
define('FILTER_CALLBACK', 1024);				//ID of "callback" filter.
define('FILTER_FLAG_ALLOW_OCTAL', 1);			//Allow octal notation (0[0-7]+) in "int" filter.
define('FILTER_FLAG_ALLOW_HEX', 2);				//Allow hex notation (0x[0-9a-fA-F]+) in "int" filter. 
define('FILTER_FLAG_STRIP_LOW', 4);				//Strip characters with ASCII value less than 32.
define('FILTER_FLAG_STRIP_HIGH', 8);			//Strip characters with ASCII value greater than 127. 
define('FILTER_FLAG_ENCODE_LOW', 16);			//Encode characters with ASCII value less than 32.
define('FILTER_FLAG_ENCODE_HIGH', 32);			//Encode characters with ASCII value greater than 127.
define('FILTER_FLAG_ENCODE_AMP', 64);			//Encode &. 
define('FILTER_FLAG_NO_ENCODE_QUOTES', 128);	//Don't encode ' and ". 
define('FILTER_FLAG_EMPTY_STRING_NULL', 256);	//(No use for now.)
define('FILTER_FLAG_ALLOW_FRACTION', 4096);		//Allow fractional part in "number_float" filter. 
define('FILTER_FLAG_ALLOW_THOUSAND', 8192);		//Allow thousand separator (,) in "number_float" filter. 
define('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);	//Allow scientific notation (e, E) in "number_float" filter. 
define('FILTER_FLAG_PATH_REQUIRED', 262144);	//Require path in "validate_url" filter. 
define('FILTER_FLAG_QUERY_REQUIRED', 524288);	//Require query in "validate_url" filter. 
define('FILTER_FLAG_IPV4', 1048576);			//Allow only IPv4 address in "validate_ip" filter. 
define('FILTER_FLAG_IPV6', 2097152);			//Allow only IPv6 address in "validate_ip" filter. 
define('FILTER_FLAG_NO_RES_RANGE', 4194304);	//Deny reserved addresses in "validate_ip" filter. 
define('FILTER_FLAG_NO_PRIV_RANGE', 8388608);	//Deny private addresses in "validate_ip" filter. 

/**
 * Checks if varialbe of specified type exists
 * 
 * @param int $type One of INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.
 * @param string $variable_name Name of a variable to check.
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function filter_has_var($type, $variable_name)
{
	switch($type) {

		case INPUT_GET:
			return array_key_exists($variable_name, $_GET);

		case INPUT_POST:
			return array_key_exists($variable_name, $_POST);

		case INPUT_COOKIE:
			return array_key_exists($variable_name, $_COOKIE);

		case INPUT_SERVER:
			return array_key_exists($variable_name, $_SERVER);

		case INPUT_ENV:
			return array_key_exists($variable_name, $_ENV);

	}//end switch

	return false;

}//end function filter_has_var
