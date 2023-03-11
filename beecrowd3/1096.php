<?php
	$i = 1;
  $n = 5;
    
  while($n > 0){
    $j = 7;
    
    print("I=$i J=".$j."\n");
    $j--;
    print("I=$i J=".$j."\n");
    $j--;
    print("I=$i J=".$j."\n");
    
    $i += 2;
    $n--;
  }
?>