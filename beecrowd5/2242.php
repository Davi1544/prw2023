<?php
  $laugh = readline();
  $actuallaught = '';
  
  for($i = 0; $i < strlen($laugh); $i++){
    $l = $laugh[$i];
    if($l == "a" || $l == "e" || $l == "i" || $l == "o" || $l == "u"){
      $actuallaught .= $laugh[$i];
    }
  }
  
  if($actuallaught == strrev($actuallaught)){
    print("S\n");
  }else{
    print("N\n");
  }
?>