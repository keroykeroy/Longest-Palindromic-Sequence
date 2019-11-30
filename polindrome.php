<?php

	function Polindrome($data){
 	
 	// length of data
 	$length = strlen($data);
 	$longest = [];
 	$count =0;
 	 
 	for($i=0; $i<$length; $i++){
 		$algo = "";
 		for($x=$i+1; $x<$length; $x++){
 			if(empty($algo)){
 				// get the 1st and 2nd letter
 				$algo = $data[$i] . $data[$x];
 			}else{
 				// get the next letter
 				$algo = $algo . $data[$x];

 				// determine if palindrome
 				if($algo == strrev($algo)){
 					$count ++;
 					echo "Palindrome " .  $count . ": " . $algo .  "<br>";

 					// save the palindrome to array
 					$longest[] = $algo;
 				}else{
 					// Not palindrome
 				}
 			}
 		}
 	}
 	Longest($longest);
 }

	function Longest($longestpal){

		$longest = "";

		foreach ($longestpal as $key => $value){
			if($key != 0){
				if($val >= strlen($value)){
				
				}else{
					// save as longest
					$val = strlen($value);
					$longest = $value;
				}
			}else{
				$val = strlen($value);
				$longest = $value;
			}
		}
		echo "The Longest Palindrome: " . $longest . "</br>" . "Length: " . strlen($longest);
	} 

	$data = "abcdefedc12321uiasdj";
	Polindrome($data);
?>