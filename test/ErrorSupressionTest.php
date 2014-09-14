<?php
require 'lib/FileWriter.php';

class ErrorSupressionTest extends PHPUnit_Framework_TestCase
{
	public function testFileWriting()
	{
		$writer = new FileWriter;
		$this->assertFalse(@$writer->write('is_not_writable/file', 'Hello world'));
	}
}