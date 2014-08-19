<?php

function errMsg () {
	echo "Human, please enter numeric parameters." . PHP_EOL;
}

function add($a, $b) {
 	
 	if (is_numeric($a) && is_numeric($b)) {
 		echo $a + $b . PHP_EOL;
 	} 

 	else {
 		errMsg();
 		echo "Your input was $a and $b" . PHP_EOL;
 	}	
 }

add(30, 0);

function subtract($a, $b) {
 	if (is_numeric($a) && is_numeric($b)) {
 		echo $a - $b . PHP_EOL;
 	}
 	
 	else {
 		errMsg();
 		echo "Your input was $a and $b" . PHP_EOL;
 	}	

 }

subtract(30, 0);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
 		echo $a * $b . PHP_EOL;
 	}
 	
 	else {
 		errMsg();
 		echo "Your input was $a and $b" . PHP_EOL;
 	}	

 }

multiply(30, 0);

function divide($a, $b) {
 	if (is_numeric($a) && is_numeric($b)) {
 		if($b == 0){
 			echo "FLY, you fool!" . PHP_EOL;
 		}else{
 			echo $a / $b . PHP_EOL;
 		}
 	}
 	
 	else {
 		errMsg();
 		echo "Your input was $a and $b" . PHP_EOL;
 	}	
 }

divide(30, 0);

function modulus($a, $b) {
 	if (is_numeric($a) && is_numeric($b)) {
 		if($b == 0){
 			echo "FLY, you fool!" . PHP_EOL;
 		}else{
 			echo $a % $b . PHP_EOL;
 		}
 	}
 	
 	else {
 		errMsg();
 		echo "Your input was $a and $b" . PHP_EOL;
 	}	
 }

modulus(30, 0);


