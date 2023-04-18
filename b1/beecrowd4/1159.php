<?php
    
    $x = 0;
    $soma = 0;
    
    while(true){
        $x = readline();
        if($x == 0){
            break;
        }
        if ($x % 2 == 0){
            $soma += $x;
            for($i = 0; $i < 4; $i++){
                $x += 2;
                $soma += $x;
            }
        }
        else{
            $x--;
            for($i = 0; $i < 5; $i++){
                $x += 2;
                $soma += $x;
            }
        }
        
        print("$soma\n");
        $soma = 0;
    }
?>