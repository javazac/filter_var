<?php
require_once 'AbstractFilterVarTest.php';

class TestIPFilterVar extends AbstractFilterVarTest
{
	public function testValidateIPv4()
	{
		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP) === '192.168.1.1', 'FILTER_VALIDATE_IP (no flags) fails for 192.168.1.1');
		$this->assertTrue(filter_var('192.168.1.1 ', FILTER_VALIDATE_IP) === FALSE, 'FILTER_VALIDATE_IP (no flags) fails for "192.168.1.1 "');
	}//end function testValidateIPv4

	public function testValidateIPv4wFlags()
	{
		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === FALSE, 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV6) fails for "192.168.1.1"');
		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === '192.168.1.1', 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV4) fails for "192.168.1.1"');

		$this->assertTrue(filter_var('192.168.1.1', FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE) === FALSE, 'FILTER_VALIDATE_IP (FILTER_FLAG_NO_PRIV_RANGE) fails for "192.168.1.1"');
		$this->assertTrue(filter_var('72.29.164.70', FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE) === '72.29.164.70', 'FILTER_VALIDATE_IP (FILTER_FLAG_NO_PRIV_RANGE) fails for "72.29.164.70"');

	}

	public function testValidateIPv6()
	{
		$this->assertTrue(filter_var('2001:0db8:85a3:0000:0000:8a2e:0370:7334', FILTER_VALIDATE_IP) === '2001:0db8:85a3:0000:0000:8a2e:0370:7334', 'FILTER_VALIDATE_IP (no flag) failed');
		$this->assertTrue(filter_var('2001:db8:85a3:0:0:8a2e:370:7334', FILTER_VALIDATE_IP) === '2001:db8:85a3:0:0:8a2e:370:7334', 'FILTER_VALIDATE_IP failed for shorthand ipv6');
		$this->assertTrue(filter_var('2001:db8:85a3::8a2e:370:7334', FILTER_VALIDATE_IP) === '2001:db8:85a3::8a2e:370:7334', 'FILTER_VALIDATE_IP failed for shorthand ipv6');
		$this->assertTrue(filter_var('::1', FILTER_VALIDATE_IP) === '::1', 'FILTER_VALIDATE_IP failed for shorthand ipv6 loopback');
		$this->assertTrue(filter_var('::', FILTER_VALIDATE_IP) === '::', 'FILTER_VALIDATE_IP failed for shorthand ipv6 unspecified');
	}//end function testValidateIPv6

	public function testValidateIPv6wFlags()
	{
		$this->assertTrue(filter_var('2001:0db8:85a3:0000:0000:8a2e:0370:7334', FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE, 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV4) failed');
		$this->assertTrue(filter_var('2001:0db8:85a3:0000:0000:8a2e:0370:7334', FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === '2001:0db8:85a3:0000:0000:8a2e:0370:7334', 'FILTER_VALIDATE_IP (FILTER_FLAG_IPV6) failed');
	}
}//end class TestIPFilterVar
