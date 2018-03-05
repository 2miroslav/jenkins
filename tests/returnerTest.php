<?php

class returnerTest extends PHPUnit_Framework_TestCase{
	public $returner;
	public function setUp() {
		$this->returner= new \Jenkins\Demo\returner();
	}

	public function testReturner(){
		$this->assertEquals(true, $this->returner->returner());
	}
	public function testHelo(){
		$this->assertEquals("hello",$this->returner->hell());
	}
	public function testUppercase(){
		$this->assertEquals("MENO",$this->returner->Uppercase("meno"));
	}
}

