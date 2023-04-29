<?php
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $op = $_POST["op"];

    if($op == "sm")echo $num1+$num2;
    if($op == "sb")echo $num1-$num2;
    if($op == "dv")echo $num1/$num2;
    if($op == "ml")echo $num1*$num2;
?>