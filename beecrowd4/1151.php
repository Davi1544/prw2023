<?php
    $numbs = array();
    $numbs[0] = 0;
    $numbs[1] = 1;
    
    $numb = readline();
    
    if($numb >= 46 || $numb <= 0){
        return 0;
    }
    
    for($i = 2; $i <= 46; $i++){
        $numbs[$i] = $numbs[$i-1] + $numbs[$i-2];
    } 
    print("0");
    for($y = 1; $y < $numb; $y++){
        print(" ".$numbs[$y]);
    }
    print("\n");
?>