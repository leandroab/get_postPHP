<?php

function conectar(){
    $servername = "localhost";
    $database = "festa_junina";
    $username = "root";
    $password = "196600";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
    }
    else {
        echo "Connection successfully<br>";
    }

    return $conn;
}

function inserirRegistro($conn, $nome, $material){
    $sql = "INSERT INTO nome_material (nome, material) VALUES ('" . $nome . "', '" . $material . "');";
    echo $sql . "<br>";
    
    if (mysqli_query($conn, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}


?>