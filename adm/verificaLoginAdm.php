<?php session_start();

    $adm = (isset($_POST['adm'])) ? $_POST['adm'] : "";
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : ""; 

    $adm1 = 'caio.magalhaes';
    $senha1 = '123';
    $adm2 = 'leticia.martins';
    $senha2 = '456';
    $adm3 = 'mirella.miranda';
    $senha3 = '789';
    $adm4 = 'tiago.moraes';
    $senha4 = '101112';


    if(($adm == $adm1) && ($senha == $senha1) || ($adm == $adm2) && ($senha == $senha2) 
    || ($adm == $adm3) && ($senha == $senha3) || ($adm == $adm4) && ($senha == $senha4)
    ){
        $_SESSION['logado'] = TRUE;
        echo "<script>window.location='home.php'</script>";
    }else{
        echo "<script>alert('Dados inválidos!');window.location='login.php'</script>";
    }

?>