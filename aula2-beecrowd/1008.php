<?php

    $num = readline();
    $wh = readline();
    $phw = readline();

    settype($num, "int");
    settype($wh, "int");
    settype($phw, "double");

    $tsal = $wh * $phw;
    
    $tsal = number_format($tsal, 2, ".","");

    print("NUMBER = $num\n");
    print("SALARY = U$ $tsal\n");
?>