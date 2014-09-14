<?php
class ExceptionTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testException()
	{
	}

	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionMessage Right message
	 */
	public function testExceptionHasRightMessage()
	{
		throw new InvalidArgumentException('Some messages', 20);
	}

	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionCode 20
	 */
	public function testExceptionCode()
	{
		throw new InvalidArgumentException('Right message', 10);
	}
}