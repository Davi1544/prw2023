<?php

    $hm = ['O', 'l','á', ' ','M','u','n','d','o'];

    $i = 0;

    while($i < count($hm)){
        echo $hm[$i];

        $i++;
    }

    $h2 = [];

    echo "<br><br>";

    $i = 0;
    $j = 0;
    $t = 0;


    // Com matriz


    while($i < count($hm)){

        $h2[$i][$j] = '0';

        if($i == $j){
            $h2[$i][$j] = $hm[$t];
        }

        echo $h2[$i][$j];

        if($j == count($hm)-1){
            $i++;
            $j = 0;
            echo '<br>';
            $t++;
        }else{
            $j++;
        }
        
    }

    $i = 0;
    $j = 0;
    $t = 0;
    echo "<br><br>";

    while($i < count($hm)){

        if($i == $j){
            echo $h2[$i][$j];
        }

        if($j == count($hm)-1){
            $i++;
            $j = 0;
            $t++;
        }else{
            $j++;
        }

    }