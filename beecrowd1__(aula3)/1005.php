<?php
 
 $a = readline();
 $b = readline();
 
 settype($a, "double");
 settype($b, "double");
 
 $media = ($a * 3.5) + ($b * 7.5);
 
 $media /= 11;
 
 $media = number_format($media,5, ".", "");
 print("MEDIA = $media\n");
?>