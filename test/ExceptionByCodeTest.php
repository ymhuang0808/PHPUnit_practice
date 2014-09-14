<?php
class ExceptionByCodeTest extends PHPUnit_Framework_TestCase
{
	public function testException()
	{
		$this->setExpectedException('InvalidArgumentException');
	}

	public function testExceptionHasRightMessage()
	{
		$this->setExpectedException('InvalidArgumentException', 'Right message');
		throw new InvalidArgumentException('Some messages', 20);
	}

	public function testExceptionCode()
	{
		$this->setExpectedException('InvalidArgumentException', 'Right message', 20);
		throw new InvalidArgumentException('Right message', 10);
	}
}