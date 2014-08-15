<?php
 
 $books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

 foreach ($books as $title => $stats) {

 	// if ($stats['published']) {
 	//  	# code...
 	//  } 
 	echo "_____________\n" . "$title\n";
 	
 	
 	foreach ($stats as $category => $value) {
 		echo "$category = $value\n";
 	}

 	echo "_____________\n";
 }

 ?>