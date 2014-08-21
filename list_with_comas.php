<?php
 $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Tony Stark, Bruce Banner';
 function humanized_list($string, $alphabetize = FALSE) {
 	$array = explode(', ', $string);

 	if ($alphabetize) {
 		sort($array);
 	}

 	$last_item = array_pop($array);

 	$humanized_list = implode(', ', $array);

 	$humanized_list .= ', and ' . $last_item;

 	return $humanized_list;
 
 }


 // Humanize that list
 $famous_fake_physicists = humanized_list($physicists_string, $alphabetize);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;