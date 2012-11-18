<?php
require_once 'AbstractFilterVarTest.php';

class TestValidateUrlFilterVar extends AbstractFilterVarTest
{
	public function testValidateUrlEmpty()
	{
		$this->assertFalse(filter_var('', FILTER_VALIDATE_URL), 'FILTER_VALIDATE_URL didn\'t return false for empty string');
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
}//end class TestValidateUrlFilterVar
