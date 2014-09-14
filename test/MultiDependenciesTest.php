<?php
class MultiDependenciesTest extends PHPUnit_Framework_TestCase
{
	public function testProducerFirst()
	{
		$this->assertTrue(TRUE);
		return 'first';
	}

	public function testProducerSecond()
	{
		$this->assertTrue(TRUE);
		return 'second';
	}

	/**
	 * @depends testProducerFirst
	 * @depends testProducerSecond
	 */
	public function testConsumer()
	{
		$this->assertEquals(array('first', 'second'), func_get_args());
	}
}