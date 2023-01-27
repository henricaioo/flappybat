<?php 
  session_start();
  if (!$_SESSION['logado'] || $_SESSION['perfil'] != 'adm') {
    header("Location:login.php");
  }
?>
<?php 
    require("connect.php");
    $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "";
    $sql = "UPDATE avalie_nos 
            SET salvo =  1
            WHERE id_sugestao = '$cod'";

    if(mysqli_query($connect, $sql)){
        echo "<script>window.location='readsuggest.php'</script>";
    }

    mysqli_close($connect);
?>