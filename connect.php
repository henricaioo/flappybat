<?php 
    $hostname = 'sql102.epizy.com';
    $user = 'epiz_31716378';
    $password = 'K6pA7zgvngEe1';
    $database = 'epiz_31716378_flappybat';
 
    $connect = mysqli_connect($hostname, $user, $password ,$database) or die ("Não foi possível realizar a conexão");
?>