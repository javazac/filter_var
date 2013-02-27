<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeMagicQuotes extends AbstractFilterVarTest
{

	public function testSanitize()
	{
		$strings = array(
			'test"test',
			"test'test"
		);

		foreach($strings as $string) {

			$filter_encoded_string = filter_var($string, FILTER_SANITIZE_MAGIC_QUOTES);
			$addslashes_encoded_string = addslashes($string);

			$this->assertTrue($filter_encoded_string === $addslashes_encoded_string, "encoded {$string} to {$filter_encoded_string} instead of {$addslashes_encoded_string}");
		}
	}//testSanitize

}//end TestSanitizeMagicQuotes
