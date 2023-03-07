<?php
    $numero = readline();
    
    if ($numero >= 0 && $numero <= 25){
        
        print("Intervalo [0,25]\n");
    }
    else if ($numero > 25 && $numero <= 50){
        
        print("Intervalo (25,50]\n");
    }
    else if ($numero > 50 && $numero <= 75){
        
        print("Intervalo (50,75]\n");
    }
    else if ($numero > 75 && $numero <= 100){
        
        print("Intervalo (75,100]\n");
        
    } else {
        
        print("Fora de intervalo\n");
    }
?>
