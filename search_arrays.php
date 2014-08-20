<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

 
 function compare_arrays ($array1, $array2){
 	$i=0;

 	foreach ($array1 as $name) {
 	
 		if (truefalse($name, $array2)) {
 			$i++;
 		}

 	}

 	return $i;	
 }
 function truefalse($name, $array){
 	$result = array_search($name, $array);
 	if ($result === false) {
 		$thing = FALSE;
 	} 
 	else {
 		$thing = TRUE;
 	}
 	return $thing;
 }

 // var_dump(truefalse('Tina', $names));

 // var_dump(truefalse('Bob', $names));


 echo compare_arrays($names, $compare) . PHP_EOL;





