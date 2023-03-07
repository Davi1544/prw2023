<?php
 $radius = readline();
 
 $volume = $radius*$radius*$radius * 3.14159 * (4/3);
 
 $volume = number_format($volume, 3, ".", "");
 print("VOLUME = $volume\n");
?>