<?php
/**
 *
 */
define('INPUT_POST', 0); 					//POST variables
define('INPUT_GET', 1); 					//GET variables
define('INPUT_COOKIE', 2); 					//COOKIE variables
define('INPUT_ENV', 4); 					//ENV variables
define('INPUT_SERVER', 5);					//SERVER variables
define('INPUT_SESSION', 6);					//SESSION variables (not implemented yet)
define('INPUT_REQUEST', 99);				//REQUEST variables (not implemented yet)
define('FILTER_FLAG_NONE', 0);				//No flags.
define('FILTER_REQUIRE_SCALAR', 33554432);	//Flag used to require scalar as input.
define('FILTER_REQUIRE_ARRAY', 16777216);	//Require an array as input.
define('FILTER_FORCE_ARRAY', 67108864);		//Always returns an array.
define('FILTER_NULL_ON_FAILURE', 134217728);//Use NULL instead of FALSE on failure.
define('FILTER_VALIDATE_INT', 257);			//ID of "int" filter.
define('FILTER_VALIDATE_BOOLEAN', 258);		//ID of "boolean" filter.
define('FILTER_VALIDATE_FLOAT', 259);		//ID of "float" filter.
define('FILTER_VALIDATE_REGEX', 272);		//ID of "validate_regexp" filter.
