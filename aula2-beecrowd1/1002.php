<?php
 
 $r = readline();
 $p = 3.14159;
 
 $area = $p * ($r * $r);
 
 $area = number_format($area,4, ".", "");
 
 echo "A=$area\n";
?>