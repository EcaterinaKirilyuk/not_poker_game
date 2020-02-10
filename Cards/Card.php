<?php

abstract class Card {
	
	//protected $suit;
	//public $color;
	public $value;
	
	public function __construct($value){
		//$this->suit=$suit;
		// $this->color=$color;
		$this->value=$value;
	}
}