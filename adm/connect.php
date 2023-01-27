<?php 
    $hostname = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'epiz_31716378_flappybat';
 
    $connect = mysqli_connect($hostname, $user, $password ,$database) or die ("Não foi possível realizar a conexão");
?>