<?PHP
 
 function circle_area($radius){
 	$area = pi() * ($radius * $radius);
 	return $area;
 }


 function donut_area($radius1, $radius2){
 	$area1 = pi() * ($radius1 * $radius1);
 	$area2 = pi() * ($radius2 * $radius2);
 	$d_area = $area1 - $area2;
 	return $d_area;
 }

 echo circle_area(5). PHP_EOL;

 echo donut_area(15, 5) . PHP_EOL;
