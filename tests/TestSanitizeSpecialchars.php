<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeSpecialchars extends AbstractFilterVarTest
{
	public function testEscapeSingleQuote()
	{
		$input = "aaa'bbb";
		$output = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
		$this->assertTrue($output === 'aaa&#39;bbb', 'failed filtering: '.$output);
	}

	public function testEscapeDoubleQuote()
	{
		$input = 'aaa"bbb';
		$output = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
		$this->assertTrue($output === 'aaa&#34;bbb', 'failed filtering: '.$output);
	}

	public function testEscapeAmpersand()
	{
		$input = 'aaa&bbb';
		$output = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
		$this->assertTrue($output === 'aaa&#38;bbb', 'failed filtering: '.$output);
	}

	public function testEscapeGreaterThan()
	{
		$input = 'aaa<bbb';
		$output = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
		$this->assertTrue($output === 'aaa&#60;bbb', 'failed filtering: '.$output);
	}
}
