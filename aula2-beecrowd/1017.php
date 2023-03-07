<?php
    $h = readline();
    $vm = readline();
    
    $tkm = $h * $vm;
    
    $tkm /= 12;
    $tkm = number_format($tkm, 3, ".","");
    print("$tkm\n");
?>