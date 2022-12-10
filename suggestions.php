<?php 
    require("adm/connect.php");

    $username = (isset($_POST['username'])) ? $_POST['username'] : "";
    $suggest = (isset($_POST['sugestao'])) ? $_POST['sugestao'] : "";
    $stars = (isset($_POST['stars'])) ? $_POST['stars'] : "";

    $sql_insert = "INSERT INTO avalie_nos(username, sugestao, estrelas) 
    VALUES ('$username', '$suggest' , '$stars')";

    if(mysqli_query($connect,$sql_insert)){
        header("location: index.php");
    }else{
        print 'Não foi possível incluir os dados!';
    }
            
    mysqli_close($connect);
?>