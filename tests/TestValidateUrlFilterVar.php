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
			'ssh://zkonopa@javazac.com',
			'mailto://zac@javazac.com'
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
}//end class TestValidateUrlFilterVar
