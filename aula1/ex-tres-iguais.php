<?php

    $a = "10";
    $b = 10;
    
    var_dump($a == $b);
    echo "<br>";
    var_dump($a === $b);
    echo "<br>";

    // pre e pos incremento

    echo ++$a."<br>";
    echo $a++."<br>";
    echo $a."<br>";

    echo --$a."<br>";
    echo $a--."<br>";
    echo $a."<br>";

    $c = 0;
    $h = 'a';
    echo "<br>";
    while($c < 26){
        echo $h."<br>";
        $h++;
        $c++;
    }