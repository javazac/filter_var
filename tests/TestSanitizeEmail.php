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
		$this->assertTrue(FALSE, 'These tests need to be implemented...');
	}

}//end class TestSanitizeEmail
