<?php
 
    $segR = readline();
    
    $sec = $segR %60;
    settype($sec, "int");
    
    $min = $segR /60;
    settype($min, "int");
 
    $hour = $min /60;
    settype($hour, "int");
    
    $min = $min % 60;
    settype($min, "int");
    
    print("$hour:$min:$sec\n");
?>