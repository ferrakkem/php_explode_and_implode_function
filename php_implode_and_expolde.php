<?php
	class Myclass{

		public function Myfunction(){
			$s = "Once upon a time there was a turtle.";
			//string convert into array
			$word = explode(' ', $s);
			//string reverse
			$word = array_reverse($word);
			//convert into string
			$s = implode(' ', $word);
			echo $s;
		}
	}
	$obj = new Myclass();
	$obj -> Myfunction();

?>