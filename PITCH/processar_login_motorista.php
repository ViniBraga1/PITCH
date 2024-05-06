<?php
require ('Conexao Motorista.php');

if(isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM motorista WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = $conexao->query($consulta);

    if ($resultado->num_rows == 1) {

        header("Location: pagina_inicial.php");
        exit;
    } else {

        header("Location: login.php?erro=1");
        exit;
    }
} else {

    header("Location: login.php");
    exit;
}

$conexao->close();
?>