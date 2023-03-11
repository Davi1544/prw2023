<?php
 
    $d = readline();
    
    $an = $d / 365;
    settype($an, "int");
    
    $mes = $d % 365;
    settype($mes, "int");
 
    $dia = $mes % 30;
    settype($dia, "int");
    
    $mes = $mes / 30;
    settype($mes, "int");
    
    print("$an ano(s)\n");
    print("$mes mes(es)\n");
    print("$dia dia(s)\n");
?>