<?php
    $alunos = array("Davi", "Samuel", "Ana");

    print_r($alunos);

    sort($alunos);

    print("<br><br> Com sort: ");
    print_r($alunos);

    rsort($alunos);

    print("<br><br> Com rsort: ");
    print_r($alunos);

    $x = array_search("Davi", $alunos);

    print("<br><br>O aluno Davi está na posição: $x");
?>