<?php
    require 'includes/conexao.php';
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];
    $email = $_POST['email'];

    $data = date("y-m-d");

    $check = "SELECT * FROM agenda WHERE email = '$email'";
    foreach(mysqli_query($con, $check) as $key => $value){
        $res = $value['email'];
    }

    if(!isset($res)){

        $sql = "INSERT INTO agenda VALUES(NULL, '$nome', '$apelido', '$endereco', '$bairro', '$cidade', '$estado', '$tel', '$cel', '$email', '$data')";
        $res = mysqli_query($con, $sql);
        if(mysqli_affected_rows($con) == 1){
            header("Location:listar_agenda.php");
        } else{
            echo "Falha na gravação do registro<br>";
        }

    }else{
        echo "Usuário com esse email já cadastrado<br>";
        echo "<a href='cadastro_agenda.html'>Voltar ao cadastro</a>";
    }

?>