<?php

class returnerTest extends PHPUnit_Framework_TestCase{
	public function testReturner(){
		$returner= new Jenkins\Demo\returner();
		$this->assertEquals(true, $returner->returner());
	}
}

