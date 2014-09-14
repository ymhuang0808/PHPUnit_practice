<?php 
class OutputTest extends PHPUnit_Framework_TestCase
{
	public function testExpectFoolActualFoo()
	{
		$this->expectOutputString('foo');
		print 'foo';
	}

	public function testExpectBarActualBaz()
	{
		$this->expectOutputString('bar');
		echo 'baz';
	}
}