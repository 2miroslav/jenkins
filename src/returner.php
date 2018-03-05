<?php
namespace Jenkins\Demo;
 class returner{
 	public function returner(){
			return true;
    }

    public function hell(){
 		return "hello";
    }
    public function Uppercase($upperCase){
	    $str =strtoupper($upperCase);
    	return $str;
    }
 }
