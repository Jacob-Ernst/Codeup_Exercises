<?php
 // Set default timezone
 date_default_timezone_set('America/Chicago');


 //Get Day of Week as number
 //1 (for Monday) through 7 (for Sunday)
 $day_of_week = date('N');


// switch ($day_of_week) {
	
// 	case 1:
// 		echo "Monday" . PHP_EOL;
// 		break;
	
// 	case 2:
// 		echo "Tuesday" . PHP_EOL;
// 		break;

// 	case 3:
// 		echo "Wednesday" . PHP_EOL;
// 		break;
	
// 	case 4:
// 		echo "Thursday" . PHP_EOL;
// 		break;	
		
// 	case 5:
// 		echo "Friday" . PHP_EOL;
// 		break;

// 	case 6:
// 		echo "Saturday" . PHP_EOL;
// 		break;
	
// 	case 7:
// 		echo "Sunday" . PHP_EOL;
// 		break;		
// }
 if ($date_default_timezone_set = 1) {
 	echo "Monday" . PHP_EOL;
 }

 elseif($date_default_timezone_set = 2) {
 	echo "Tuesday" . PHP_EOL;
 }
 
 elseif($date_default_timezone_set = 3) {
 	echo "Wednesday" . PHP_EOL;
 }
		
elseif($date_default_timezone_set = 4) {
 	echo "Thursday" . PHP_EOL;
 }
 
 elseif($date_default_timezone_set = 5) {
 	echo "Friday" . PHP_EOL;
 }	
	
elseif($date_default_timezone_set = 6) {
 	echo "Saturday" . PHP_EOL;
 }
 
 elseif($date_default_timezone_set = 7) {
 	echo "Sunday" . PHP_EOL;
 }



