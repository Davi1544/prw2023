<?php
    $n = readline();

    while($n > 0){
        $input = readline();
        $input = explode(" ", $input);
    	$input = array_reverse($input);
    	$input = implode(" ", $input);
    	
    	$replace = array("P", "F", "T", "R", "F", "J", "X");
    	$forreplace = array("B", "V", "D", "L", "S", "Z", "S");
    	$input = str_replace($replace, $forreplace, $input);
    	
    	print($input."\n");
    	$n--;
    }
?>