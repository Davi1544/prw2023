<?php
  while(true){
    $n = readline();
    
    if($n == 0) break;
    
    $fil = readline();
      
    $fil = explode(" ", $fil);
    $xd = intval($fil[0]);
    $yd = intval($fil[1]);
      
    for($i = 0; $i < $n; $i++){
      
      $sel = readline();
      
      $sel = explode(" ", $sel);
      $xr = intval($sel[0]);
      $yr = intval($sel[1]);
      
      if($xd == $xr || $yd == $yr) print("divisa\n");
      else if($xr > $xd){
        if($yr > $yd) print("NE\n");
        else print ("SE\n");
      }else{
        if($yr > $yd) print("NO\n");
        else print ("SO\n");
      }
    }
  }
?>