<?php
    include "conexao.php";

    $conn = conectar();
    if(!$conn){
        exit(1);
    }

    inserir($conn, $_POST['nome'], $_POST['materiais']);

?>