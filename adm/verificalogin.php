<?php 
    session_start();
    require "connect.php";

    $nickname = (isset($_POST['nickname'])) ? $_POST['nickname'] : "";
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : ""; 

    $adm1 = 'caio.magalhaes';
    $senha1 = '123';
    $adm2 = 'leticia.martins';
    $senha2 = '456';
    $adm3 = 'mirella.miranda';
    $senha3 = '789';
    $adm4 = 'tiago.moraes';
    $senha4 = '101112';

    $sql = "SELECT * FROM usuario WHERE (username = '".$nickname."' AND senha = '".$senha."')";
    $res = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_assoc($res);

    if($dados['total'] > 0){    
        $_SESSION['nickname'] = $dados['username'];
        $_SESSION['perfil'] = "usuario"; 
        $_SESSION['logado'] = TRUE;
        echo "<script>window.location='game.php'</script>";
    }else if(($nickname == $adm1) && ($senha == $senha1) || ($nickname == $adm2) && ($senha == $senha2) 
    || ($nickname == $adm3) && ($senha == $senha3) || ($nickname == $adm4) && ($senha == $senha4)){
        $_SESSION['nickname'] = $nickname;
        $_SESSION['perfil'] = "adm"; 
        $_SESSION['logado'] = TRUE;
        echo "<script>window.location='home.php'</script>";
    }else{
        echo "Usuário e/ou senha inválidos!!!";
    }
    mysqli_close($connect);
?>
