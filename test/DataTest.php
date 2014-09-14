<?php
require 'lib/CsvFileIterator.php';

class DataTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider csvProvider
	 */
	public function testAdd($a, $b, $expected)
	{
		$this->assertEquals($expected, $a + $b);
	}

	public function csvProvider()
	{
		return new CsvFileIterator(__DIR__ . '/data/data.csv');
	}

	public function additionProvider()
	{
		return array(
			array(0, 0, 0),
			array(0, 1, 1),
			array(1, 0, 1),
			array(1, 1, 3)
			);
	}
}