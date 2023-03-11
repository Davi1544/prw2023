<?php
  $n = 0;
  $j = 0.01;
  $i = 0.01;
  settype($j, 'double');
  settype($i, 'double');
    
  while($n <= 10){
    $j = 1+$n*0.2;
    $i = 0+$n*0.2;
    
    //print("\n".$i."     $n\n");
    
    print("I=$i J=$j\n");
    $j++;
    print("I=$i J=$j\n");
    $j++;
    print("I=$i J=$j\n");
    
    $n++;
  }
?>