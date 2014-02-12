<?php

require_once 'AbstractFilterVarTest.php';

/**
 * @author Alexandre Quercia <alquerci@email.com>
 */
class TestFilterForceArray extends AbstractFilterVarTest
{
	public function testForceArrayFromString()
	{
		$input = 'foo';
		$expected = array('foo');
		$options = array('flags' => FILTER_FORCE_ARRAY);

		$this->assertTrue($expected === filter_var($input, FILTER_DEFAULT, $options));
	}

	public function testForceArrayFromArray()
	{
		$input = array('foo');
		$expected = array('foo');
		$options = array('flags' => FILTER_FORCE_ARRAY);

		$this->assertTrue($expected === filter_var($input, FILTER_DEFAULT, $options));
	}

	public function testForceArrayFromObject()
	{
		$input = new stdClass();
		$expected = array(false);
		$options = array('flags' => FILTER_FORCE_ARRAY);

		$this->assertTrue($expected === filter_var($input, FILTER_DEFAULT, $options));
	}

	public function testForceArrayFromObjectWithToString()
	{
		$input = new TestFilterForceArrayFixturesObjectWithToString();
		$expected = array('foo');
		$options = array('flags' => FILTER_FORCE_ARRAY);

		$this->assertTrue($expected === filter_var($input, FILTER_DEFAULT, $options));
	}

	public function testForceArrayFromResource()
	{
		$input = fopen(__FILE__, 'r');
		$expected = array("$input");
		$options = array('flags' => FILTER_FORCE_ARRAY);

		$this->assertTrue($expected === filter_var($input, FILTER_DEFAULT, $options));
	}
}

class TestFilterForceArrayFixturesObjectWithToString
{
	public function __toString()
	{
		return 'foo';
	}
}
