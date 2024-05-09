<?php

    $host = 'localhost';
    $usuario ='root';
    $password = '';
    $database = 'db_directory';


    $conect = mysqli_connect($host, $usuario, $password, $database);
    if(mysqli_connect_error()){
        die("Erro ao se conectar ao banco de dados". $conect -> connect_error);
    }
    if( $_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $senha = $_POST["password"];

    }
    $commandSql = "INSERT INTO datasheet(name, email, tel, password) VALUES ('$name', '$email', '$telefone', '$senha')";
    $sql_select = "SELECT log FROM datasheet";
    $result = mysqli_query($conect, $sql_select);




    if(mysqli_query($conect, $commandSql)){
        echo"Dados add com sucesso";

    }else{
        echo"Algo deu errado";
    }
    if(mysqli_num_rows($result) > 0){
        echo"<h1> Horario de log</h1>";
        while($row = mysqli_fetch_assoc($result)){
            echo"<em>". $row["log"]. "</em>";
            echo"<br>";
        }

    }
    else{
        echo"faz o L";
    }







?>