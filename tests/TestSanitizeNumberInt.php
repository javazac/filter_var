<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeNumberFloat extends AbstractFilterVarTest
{
	public function testNoFilters()
	{
		$input = '1234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
		$this->assertTrue($input === $output, "Failed filtering {$input} to {$input}: {$output}\n");
	}

	public function testEmptyString()
	{
		$input = '';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
		$this->assertTrue($input === $output, "Failed filtering '{$input}' to '{$input}': {$output}\n");
	}

	public function testSomeFiltering()
	{
		$input = '1234abcd1234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
		$this->assertTrue($output === '12341234', "Failed filtering '{$input}' to '12341234': {$output}\n");
	}
}
