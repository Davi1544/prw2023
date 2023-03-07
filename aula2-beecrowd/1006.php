<?php
 
 $a = readline();
 $b = readline();
 $c = readline();
 
 settype($a, "double");
 settype($b, "double");
 settype($c, "double");
 
 $media = ($a * 2) + ($b * 3) + ($c * 5);
 
 $media /= 10;
 
 $media = number_format($media,1, ".", "");
 print("MEDIA = $media\n");
?>
