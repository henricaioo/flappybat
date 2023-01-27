<?php 
  session_start();
  if (!$_SESSION['logado'] || $_SESSION['perfil'] != 'adm') {
    header("Location:login.php");
  }
?>
<?php 



    require("connect.php");

    $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "";

    $sql = "DELETE FROM avalie_nos WHERE id_sugestao = '$cod'";



    if(mysqli_query($connect, $sql)){

        echo "<script>alert('Comentário excluído com sucesso!');window.location='readsuggest.php'</script>";

    }

    else{

        echo "<script>alert('Erro ao excluir!');window.location='readsuggest.php'</script>";

    }



    mysqli_close($connect);

?>