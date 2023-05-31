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

    $check = "SELECT * FROM agenda WHERE email = '$email'";
    foreach(mysqli_query($con, $check) as $key => $value){
        $res = $value['email'];
        $id_agenda = $value['id_agenda'];
    }

    if(isset($res)){

        $sql = "update agenda set nome = '$nome', apelido = '$apelido', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', estado = '$estado', telefone = '$tel', celular = '$cel', email = '$email' where id_agenda = ".$id_agenda;
        $res = mysqli_query($con, $sql);
        if(mysqli_affected_rows($con) == 1){
            header("Location:listar_agenda.php");
        } else{
            echo "Falha na gravação do registro<br>";
        }

    }else{
        echo "Essa agenda não existe<br>";
        echo "<a href='listar_agenda.php'>Voltar à lista</a>";
    }
?>