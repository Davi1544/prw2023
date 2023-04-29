<?php
    $time =  $_POST['hora'];
    
    $pf = explode(":", $time);
    $hr = $pf[0];
    $min = $pf[1];

    if(($hr <= 11 && $min <= 59) || ($hr == 12 && $min == 0)) echo "bom dia";
    else if(($hr <= 17 && $min <= 59) || ($hr == 18 && $min == 0)) echo "boa tarde";
    else if($hr >= 18 && $min >= 0) echo "boa noite";
?>