<?php
    $soma=0;
    $q=0;
    
    $x = readline();
    $z = readline();
    
    while($x >= $z){
        $z = readline();
    }
    
    while($soma < $z){
        $soma += $x;
        $q += 1;
        $x++;
    }
    
    print("$q\n");
?>