<?php
class ExpectedErrorTest extends PHPUnit_Framework_TestCase
{
	 /**
	  * @expectedException PHPUnit_Framework_Error
	  */
	 public function testFailingInclude()
	 {
	 	include 'not_exist_file.php';
	 }
}