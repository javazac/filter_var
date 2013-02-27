<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeEmail extends AbstractFilterVarTest
{
	
	public function testSanitizeEmailNoChanges() 
	{
		$this->assertTrue(filter_var('', FILTER_SANITIZE_EMAIL) === '', 'failed to return empty string from empty string');
		$this->assertTrue(filter_var('testing@cleverconcepts.net', FILTER_SANITIZE_EMAIL) === 'testing@cleverconcepts.net', 'failed to return same string w/o any invalid characters');
	}//end method testSanitizeEmail

	public function testSanitizeEmailChanges()
	{
		$testEmails = array(
			'test<>ing@cleverconcepts.net'
		);

		foreach($testEmails as $email) {
			$this->assertTrue(filter_var($email, FILTER_SANITIZE_EMAIL) === 'testing@cleverconcepts.net', 'sanitize email failed for '.$email);
		}
	}

}//end class TestSanitizeEmail
