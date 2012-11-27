<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeEncoded extends AbstractFilterVarTest
{

	public function testSanitizeEncodedSimple()
	{
		$strings = array(
			'test+test',
			'test test'
		);
		
		foreach($strings as $string) {

			$filter_encoded_string = filter_var($string, FILTER_SANITIZE_ENCODED);
			$rawurlencode_encoded_string = rawurlencode($string);

			$this->assertTrue($filter_encoded_string === $rawurlencode_encoded_string, str_replace("%", "%%", "encoded {$string} to {$filter_encoded_string} instead of {$rawurlencode_encoded_string}"));
		}
	}
}//end class TestSanitizeEncoded
