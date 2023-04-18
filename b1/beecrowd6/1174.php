<?php
  for($i = 0; $i < 100; $i++)$a[$i] = readline();
  for($i = 0; $i < 100; $i++){
    $a[$i] = number_format($a[$i], 1, ".", ""); 
    if($a[$i] <= 10)print("A[$i] = $a[$i]\n");
  }
?>