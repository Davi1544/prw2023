<?php
    $texto = $_POST['texto'];
    $textoarea = $_POST['textoarea'];
    $op = $_POST["op"];
    $numb = $_POST['numb'];

    echo $texto."<br>";
    echo $textoarea."<br>";

    if(isset($_POST['pr'])) echo "primeiro selecionado<br>";
    if(isset($_POST['sec'])) echo "segundo selecionado<br>";

    echo $op."<br>";
    echo $numb."<br>";
?>