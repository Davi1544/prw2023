<?php

    $linha1 = readline();

    $val = explode(' ', $linha1);
    $n1 = intval($val[0]);
    $n2 = intval($val[1]);
    $n3 = intval($val[2]);

    if($n1 >= $n2 && $n1 >= $n3){
        print("$n1 eh o maior\n");
        return 0;
    }
    if($n2 >= $n1 && $n2 >= $n3){
        print("$n2 eh o maior\n");
        return 0;
    }
    if($n3 >= $n2 && $n3 >= $n1){
        print("$n3 eh o maior\n");
        return 0;
    }
?>