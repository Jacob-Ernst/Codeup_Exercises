<?php
 
 $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

 foreach ($things as $items) {
 	if (is_int($items)) {
 		echo "integer\n";
 	}

 	elseif (is_float($items)) {
 		echo "float\n";
 	}

 	elseif (is_bool($items)) {
 		echo "boolean\n";
 	}

 	elseif (is_array($items)) {
 		echo "array\n";
 	}

 	elseif (is_string($items)) {
 		echo "string\n";
 	}

 	else {
 		echo "null\n";
 	}
 }
