<?php
class DenpendencyFailureTest extends PHPUnit_Framework_TestCase
{
	public function testOne()
	{
		$this->assertTrue(FALSE);
	}

	/**
	 * @depends testOne
	 */
	public function testTwo()
	{

	}
}
