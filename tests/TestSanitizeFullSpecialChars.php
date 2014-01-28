<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeFullSpecialChars extends AbstractFilterVarTest
{
	public function testFullSpecialCharsSingleAmpersand() {

		$input = 'aaa&bbb';
		$output = filter_var($input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

		$this->assertTrue($output === 'aaa&#38;bbb', 'failed filtering '.$input.' to aaabbb: '.$output);
	}

	public function testFullSpecialCharsSingleEncodedAmpersand() {

		$input = 'aaa&#38;bbb';
		$output = filter_var($input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

		$this->assertTrue($output === 'aaa&#38;#38;bbb', 'failed filtering '.$input.' to aaabbb: '.$output);
	}
}
