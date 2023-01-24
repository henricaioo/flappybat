<?php

    ini_set('error_reporting', E_ALL);

    ini_set('display_errors', 1);

    require("adm/connect.php");



    $username = (isset($_POST['username'])) ? $_POST['username'] : "";

    $email = (isset($_POST['email'])) ? $_POST['email'] : "";

    $pais = (isset($_POST['pais'])) ? $_POST['pais'] : "";

    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : "";



    $sql_insert = "INSERT INTO usuario (username, email, pais, senha) VALUES ('$username', '$email' , '$pais' , '$senha')";
    echo $sql_insert;



    if(mysqli_query($connect,$sql_insert)){

        // header("location: index.php");

    }else{

        print 'Não foi possível incluir os dados!';

    }

            

    mysqli_close($connect);

?>