<?php

function errMsg () {
	return "Human, please enter numeric parameters." . PHP_EOL;
}

function add($a, $b) {
 	
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a + $b . PHP_EOL;
 	} 

 	else {
 		errMsg();
 		return "Your input was $a and $b" . PHP_EOL;
 	}	
 }

function subtract($a, $b) {
 	if (is_numeric($a) && is_numeric($b)) {
 		return $a - $b . PHP_EOL;
 	}
 	
 	else {
 		errMsg();
 		return "Your input was $a and $b" . PHP_EOL;
 	}	

 }

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
 		return $a * $b . PHP_EOL;
 	}
 	
 	else {
 		errMsg();
 		return "Your input was $a and $b" . PHP_EOL;
 	}	

 }

function divide($a, $b) {
 	if (is_numeric($a) && is_numeric($b)) {
 		if($b == 0){
 			return "FLY, you fool!" . PHP_EOL;
 		}
 		else{
 			return $a / $b . PHP_EOL;
 		}
 	}
 	
 	else {
 		errMsg();
 		return "Your input was $a and $b" . PHP_EOL;
 	}	
 }

function modulus($a, $b) {
 	if (is_numeric($a) && is_numeric($b)) {
 		if($b == 0){
 			return "FLY, you fool!" . PHP_EOL;
 		}
 		else{
 			return $a % $b . PHP_EOL;
 		}
 	}
 	
 	else {
 		errMsg();
 		return "Your input was $a and $b" . PHP_EOL;
 	}	
 }

echo add(30, 0);
echo subtract(30, 0);
echo multiply(30, 0);
echo divide(30, 0);
echo modulus(30, 0);


