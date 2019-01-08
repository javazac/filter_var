<?php
require_once 'AbstractFilterVarTest.php';

class TestValidateUrlFilterVar extends AbstractFilterVarTest
{
	public function testValidateUrlEmpty()
	{
		$this->assertFalse(filter_var('', FILTER_VALIDATE_URL), 'FILTER_VALIDATE_URL didn\'t return false for empty string');
		$this->assertNull(filter_var('', FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE), 'FILTER_VALIDATE_URL didn\'t return null for empty string');
	}

	public function testValidateUrlNoOpts()
	{
		$urls = array(
			'http://www.google.com',
			'https://github.com',
			'https://github.com/javazac',
			'ssh://zkonopa@javazac.com',
			'mailto://zac@javazac.com?subject=testing%20testing...'
		);

		foreach($urls as $url) {
				$this->assertTrue(
					filter_var(
						$url, 
						FILTER_VALIDATE_URL
					) === $url, 
					"FILTER_VALIDATE_URL failed for {$url}"
				);
		}
	}

	public function testValidateUrlRequirePath()
	{

		$this->assertTrue(filter_var('https://github.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === FALSE, "FILTER_VALIDATE_URL failed with path required");
		$this->assertTrue(filter_var('https://github.com/javazac', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) === 'https://github.com/javazac', "FILTER_VALIDATE_URL failed with path required");
	}

	public function testValidateUrlRequireQuery()
	{

		$this->assertTrue(filter_var('https://github.com', FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === FALSE, "FILTER_VALIDATE_URL failed with query required");
		$this->assertTrue(filter_var('https://github.com?testing=testing', FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === 'https://github.com?testing=testing', "FILTER_VALIDATE_URL failed with query required");
	}

	public function testValidateUrlRequireQueryAndPath()
	{

		$this->assertTrue(filter_var('https://github.com', FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_PATH_REQUIRED) === FALSE, "FILTER_VALIDATE_URL failed with query and path required");

		$this->assertTrue(filter_var('https://github.com/javazac', FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_PATH_REQUIRED) === FALSE, "FILTER_VALIDATE_URL failed with query and path required");

		$this->assertTrue(filter_var('https://github.com?testing=testing', FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_PATH_REQUIRED) === FALSE, "FILTER_VALIDATE_URL failed with query and path required");

		$this->assertTrue(filter_var('https://github.com/javazac?testing=testing', FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED | FILTER_FLAG_PATH_REQUIRED) === 'https://github.com/javazac?testing=testing', "FILTER_VALIDATE_URL failed with query and path required");
	}
}//end class TestValidateUrlFilterVar
