<?php

    include "conexao.php";

    $conn = conectar();
    if(!$conn){
        exit(1);
    }

    inserirRegistro($conn, $_GET['nome'], $_GET['materiais']);

?>