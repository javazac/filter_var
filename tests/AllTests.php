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
require_once 'TestSanitizeEmail.php';
require_once 'TestSanitizeEncoded.php';
require_once 'TestSanitizeMagicQuotes.php';
require_once 'TestSanitizeNumberFloat.php';
require_once 'TestSanitizeNumberInt.php';
require_once 'TestSanitizeNumberSpecialchars.php';
require_once 'TestValidateUrlFilterVar.php';

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
		$this->add(new TestSanitizeEmail());
		$this->add(new TestSanitizeEncoded());
		$this->add(new TestSanitizeMagicQuotes());
		$this->add(new TestSanitizeNumberFloat());
		$this->add(new TestSanitizeNumberInt());
		$this->add(new TestSanitizeSpecialchars());
		$this->add(new TestValidateUrlFilterVar());

	}
}
