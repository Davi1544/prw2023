<?php
    $n1 = $_POST['n1'];

    if($n1 % 4 == 0 && $n1 % 100 != 0) echo "bissexto";
    else echo "não bissexto";
?>