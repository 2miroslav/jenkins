<?php

class CalculatorTest extends PHPUnit_Framework_TestCase{

	//public $calculator;
	//public function setUp(){
	//	$calculator = new Jenkins\Demo\Calculator() ;
	//}
	public function testCalc(){
		$calculator= new Jenkins\Demo\Calculator();
		$this->assertEquals(5,$calculator->calc(3,2));
	}

}
