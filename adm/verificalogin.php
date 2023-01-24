<?php 
    session_start();
    require "connect.php";
    $sql = "SELECT * ,count(*) as total FROM usuario WHERE (username = '".$_POST['nickname']."' AND senha = '".$_POST['senha']."')";
    echo $sql;
    $res = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_assoc($res);

    if($dados['total'] > 0){    
        $_SESSION['nickname'] = $dados['username'];
        $_SESSION['logado'] = TRUE;
        echo "<script>window.location='game.php'</script>";
    }
    else{
        echo "Usuário e/ou senha inválidos!!!";
    }
    mysqli_close($connect);
?>