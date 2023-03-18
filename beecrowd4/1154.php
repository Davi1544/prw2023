<?php
  $sum = 0;
  $cases = 0;
  while(true){
    $age = readline();
    if($age < 0){
      break;
    }
    $sum += $age;
    $cases++;
  }
  
  $media = $sum / $cases;
  $media = number_format($media, 2, ".", "");
  print("$media\n");
?>