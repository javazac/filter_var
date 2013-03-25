<?php
require_once 'AbstractFilterVarTest.php';

class TestSanitizeNumberFloat extends AbstractFilterVarTest
{
	public function testNoOptions()
	{
		$input = '1234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT);
		$this->assertTrue($output === $input, 'failed filtering '.$input.' to 1234: '.$output);

		$input = '-1234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT);
		$this->assertTrue($output === $input, 'failed filtering '.$input.' to -1234: '.$output);

		$this->assertTrue(filter_var('+1234', FILTER_SANITIZE_NUMBER_FLOAT) === '+1234', 'failed filtering +1234 to +1234');

		$this->assertTrue(filter_var('12.34', FILTER_SANITIZE_NUMBER_FLOAT) === '1234', '12.34 failed filtering to 1234');
		$this->assertTrue(filter_var('ab12.34', FILTER_SANITIZE_NUMBER_FLOAT) === '1234', 'ab12.34 failed filtering to 1234');
	}

	public function testFractionFlag()
	{
		$input = '1234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$this->assertTrue($output === $input, 'failed filtering '.$input.' to 1234: '.$output);

		$input = '12.34';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$this->assertTrue($output === $input, 'failed filtering '.$input.' to 12.34: '.$output);

		$input = '1234.';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$this->assertTrue($output === $input, 'failed filtering '.$input.' to 1234.: '.$output);
	}

	public function testThousandFlag()
	{
		$this->assertTrue(filter_var('1,234', FILTER_SANITIZE_NUMBER_FLOAT) === '1234', 'failed filtering 1,234 to 1234');
		$this->assertTrue(filter_var('1,234', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND) === '1,234', 'failed filtering 1,234 to 1234');
		$this->assertTrue(filter_var('1,2,3,4', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND) === '1,2,3,4', 'failed filtering 1,234 to 1234');
	}

	public function testScientificFlag()
	{

		$input = '1e234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT);
		$this->assertTrue($output === '1234', 'failed filtering '.$input.' to 1234: '.$output);

		$input = '1e234';
		$output = filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC);
		$this->assertTrue($output === $input, 'failed filtering '.$input.' to 1e234: '.$output);

		$this->assertTrue(filter_var('1e234', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC) === '1e234', 'failed filtering 1e234 to 1e234');

		$this->assertTrue(filter_var('1e2e3e4', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC) === '1e2e3e4', 'failed filtering 1e2e3e4 to 1e2e3e4');

		$this->assertTrue(filter_var('1E234', FILTER_SANITIZE_NUMBER_FLOAT) === '1234', 'failed filtering 1E234 to 1234');

		$this->assertTrue(filter_var('1E234', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC) === '1E234', 'failed filtering 1E234 to 1E234');

		$this->assertTrue(filter_var('1E2E3E4', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC) === '1E2E3E4', 'failed filtering 1E2E3E4 to 1E2E3E4');
	}
}
