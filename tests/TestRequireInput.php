<?php

require_once 'AbstractFilterVarTest.php';

/**
 * @author Alexandre Quercia <alquerci@email.com>
 */
class TestRequireInput extends AbstractFilterVarTest
{
	public function testRequireArray()
	{
		$expected = array('foo');
		$options = array('flags' => FILTER_REQUIRE_ARRAY);

		$this->assertTrue($expected === filter_var($expected, FILTER_DEFAULT, $options));
	}

	public function testRequireArrayReturnFalseWhenIsNotAnArray()
	{
		$expected = 'foo';
		$options = array('flags' => FILTER_REQUIRE_ARRAY);

		$this->assertFalse(filter_var($expected, FILTER_DEFAULT, $options));
	}

	public function testRequireScalar()
	{
		$expected = 'foo';
		$options = array('flags' => FILTER_REQUIRE_SCALAR);

		$this->assertTrue($expected === filter_var($expected, FILTER_DEFAULT, $options));
	}

	public function testRequireScalarReturnFalseWhenIsNotAnScalar()
	{
		$expected = array('foo');
		$options = array('flags' => FILTER_REQUIRE_SCALAR);

		$this->assertFalse(filter_var($expected, FILTER_DEFAULT, $options));
	}
}
