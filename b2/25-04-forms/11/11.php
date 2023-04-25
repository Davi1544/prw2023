<?php
    $prontuario = $_POST['prontuario'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $periodo = $_POST['periodo'];
    $modulo = $_POST['modulo'];

    if(empty($prontuario)) echo "Dados inválidos";
    else if(empty($nome)) echo "Dados inválidos";
    else if($idade < 15 || $idade > 75) echo "Dados inválidos";
    else if($periodo != "V" && $periodo != "N") echo "Dados inválidos";
    else if($modulo < 1 || $modulo > 4) echo "Dados inválidos";
    else echo "Dados válidos";
?>