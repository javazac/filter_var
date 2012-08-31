<?php
require_once 'simpletest/autorun.php';
require_once 'TestBooleanFilterVar.php';
require_once 'TestConstants.php';
require_once 'TestFilterHasVar.php';
require_once 'TestFilterId.php';
require_once 'TestFilterVar.php';
require_once 'TestIPFilterVar.php';
require_once 'TestNumericFilterVar.php';
require_once 'TestRegexpFilterVar.php';

class AllTests extends TestSuite {

	function __construct() {

		parent::__construct();

		$this->add(new TestBooleanFilterVar());
		$this->add(new TestFilterHasVar());
		$this->add(new TestFilterId());
		$this->add(new TestFilterVar());
		$this->add(new TestIPFilterVar());
		$this->add(new TestNumericFilterVar());
		$this->add(new TestRegexpFilterVar());
	}
}
