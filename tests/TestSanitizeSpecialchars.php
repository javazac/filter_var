<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeSpecialchars extends AbstractFilterVarTest
{
	public function testEscapeSingleQuote()
	{
		$input = "aaa'bbb";
		$output = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
		$this->assertTrue($output === 'aaa\\\'bbb', 'failed filtering '.$input);
	}
}
