<?php

class CardsController {
	
	
	public function get_random_cards($max=4){
		
		$cards_suit = array("Club", "Diamond", "Heart", "Spade"); 
		
		for($i = 0; $i < $max; $i++)
        {
			$class = new $cards_suit[array_rand($cards_suit)](random_int(2, 14));
            $cards[] = $class;
        }
		
		return $cards;
	}
	
	public function check_same($cards)
	{
		$result = array();
		
		foreach($cards as $card)
		{
			// we add @ so that we don't get notice
			@$same[$card->color]++;
			@$same[$card->suit]++;
		}
		
		foreach($same as $key => $value)
		{
			if($value >= 3)
			{
				$result[] = $key;
			}
		}
		
		return $result;
	}
}