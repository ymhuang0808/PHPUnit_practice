<?php
class DependencyAndDataProviderComboTest extends PHPUnit_Framework_TestCase
{
	public function provider()
	{
		return array(array('provider1'), array('provider2'));
	}

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
	 * @dataProvider provider
	 */
	public function testConsumer()
	{
		$this->assertEquals(array('provider1', 'first', 'second'), func_get_args());
	}
}