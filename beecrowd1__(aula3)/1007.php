<?php
 
 $a = readline();
 $b = readline();
 $c = readline();
 $d = readline();
 
 settype($a, "int");
 settype($b, "int");
 settype($c, "int");
 settype($d, "int");
 
 $media = ($a*$b) - ($c*$d);
 
 print("DIFERENCA = $media\n");
?>