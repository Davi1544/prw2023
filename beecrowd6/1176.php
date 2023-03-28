<?php
  function Fibonacci($number){
    $numbs = array();
    $numbs[0] = 0;
    $numbs[1] = 1;
    
    for($i = 2; $i <= $number; $i++){
        $numbs[$i] = $numbs[$i-1] + $numbs[$i-2];
    } 
    return $numbs[$number];
  }
  
  $n = readline();

  for($i = 0; $i < $n; $i++){
    
    $t = readline();
    print("Fib($t) = ".Fibonacci($t)."\n");
  }
?>