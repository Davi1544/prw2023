<?php

    $pequenas = intval($_POST['pequena']);
    $medias = intval($_POST['media']);
    $grandes = intval($_POST['grande']);

    echo "Valor = ".$pequenas*10+$medias*12+$grandes*15;
?>