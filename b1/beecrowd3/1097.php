<?php
	$i = 1;
  $n = 5;
  $j = 7;
   
  while($n > 0){
    
    print("I=$i J=".$j."\n");
    $j--;
    print("I=$i J=".$j."\n");
    $j--;
    print("I=$i J=".$j."\n");
    
    $i += 2;
    $n--;
    $j += 4;
  }
?>