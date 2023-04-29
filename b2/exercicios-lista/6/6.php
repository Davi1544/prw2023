<?php
    $nome = $_POST['nome'];
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
    $freq = $_POST['freq'];

    echo "Aluno $nome, você ";
    if(($n1+$n2)/2 < 5){
        echo "<span style='color:red'>Reprova por nota</span>";
    }else if($freq < 75){
        echo "Reprova por Frequência";
    }else{
        echo "está Aprovado";
    }
?>