<?php

class returnerTest extends PHPUnit_Framework_TestCase{
	//public $returner;
	//public function setUp() {
		//$this->returner= new \Jenkins\Demo\returner();
	//}

	public function testReturner(){
		$returner= new Jenkins\Demo\returner();
		$this->assertEquals(true, $returner->returner());
	}
	public function testHelo(){
		$helo= new Jenkins\Demo\returner();
		$this->assertEquals("hello",$helo->hell());
	}
}

