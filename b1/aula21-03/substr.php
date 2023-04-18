<?php
    $data = date('d/m/Y');
    $dia = substr($data,0,2);
    $mes = substr($data,3,2);
    $ano = substr($data,6,4); // 21/03/2023
    echo "Dia ".$dia."<br>";
    echo "Mês ".$mes."<br>";
    echo "Ano ".$ano."<br>";
?>