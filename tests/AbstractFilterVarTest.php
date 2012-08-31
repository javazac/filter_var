<?php
require_once 'simpletest/autorun.php';

abstract class AbstractFilterVarTest extends UnitTestCase
{
	public function setUp()
	{
		if(version_compare(PHP_VERSION, '5.2.0', '<')) {
			require_once '../filter_var.php';
		}
	}
}
