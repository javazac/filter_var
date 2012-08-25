<?php
require_once 'simpletest/autorun.php';

if(version_compare(PHP_VERSION, '5.2.0', '<')) {
	require_once '../filter_var.php';
}

class TestFilterVar extends UnitTestCase
{
	public function testFunctionExists()
	{
		$this->assertTrue(function_exists('filter_var'), "filter_var is not defined.");
	}//end function testFunctionExists

	public function testBogusFilter()
	{
		$this->assertFalse(filter_var('testing...', 987654321), 'The bogus filter ran incorrectly.');
	}

	public function testValidateEmail()
	{
		$this->assertTrue(filter_var('testing@testing.com', FILTER_VALIDATE_EMAIL) === 'testing@testing.com', 'The validate email filter is returning false for a valid email.');
		$this->assertTrue(filter_var('testing', FILTER_VALIDATE_EMAIL) === FALSE, 'The validate email fiter is not returning FALSE for a valid email.');
	}


	public function testValidateIP()
	{
		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP) === '192.168.1.1', 'FILTER_VALIDATE_IP (no flags) fails for 192.168.1.1');
		$this->assertTrue(filter_var('192.168.1.1 ', FILTER_VALIDATE_IP) === FALSE, 'FILTER_VALIDATE_IP (no flags) fails for "192.168.1.1 "');
		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === FALSE, 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV6) fails for "192.168.1.1"');
		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === '192.168.1.1', 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV4) fails for "192.168.1.1"');
		$this->assertTrue(filter_var('2001:0db8:85a3:0000:0000:8a2e:0370:7334', FILTER_VALIDATE_IP) === '2001:0db8:85a3:0000:0000:8a2e:0370:7334', 'FILTER_VALIDATE_IP (no flag) failed');
		$this->assertTrue(filter_var('2001:0db8:85a3:0000:0000:8a2e:0370:7334', FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE, 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV4) failed');
		$this->assertTrue(filter_var('2001:0db8:85a3:0000:0000:8a2e:0370:7334', FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === '2001:0db8:85a3:0000:0000:8a2e:0370:7334', 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV6) failed');
		$this->assertTrue(filter_var('2001:db8:85a3:0:0:8a2e:370:7334', FILTER_VALIDATE_IP) === '2001:db8:85a3:0:0:8a2e:370:7334', 'FILTER_VALIDATE_IP failed for shorthand ipv6');
		$this->assertTrue(filter_var('2001:db8:85a3::8a2e:370:7334', FILTER_VALIDATE_IP) === '2001:db8:85a3::8a2e:370:7334', 'FILTER_VALIDATE_IP failed for shorthand ipv6');
		$this->assertTrue(filter_var('::1', FILTER_VALIDATE_IP) === '::1', 'FILTER_VALIDATE_IP failed for shorthand ipv6 loopback');
		$this->assertTrue(filter_var('::', FILTER_VALIDATE_IP) === '::', 'FILTER_VALIDATE_IP failed for shorthand ipv6 unspecified');
	}

}//end class TestFilterVar
