<?php session_start();
  if(!$_SESSION['logado']){
      echo "<script>alert('Ambiente restrito! Favor fazer login para acessar.');window.location='login.php'</script>";
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favico.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <title>Flappy Bat</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'VT323', monospace;
        }
        body{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        canvas{
            border: 1px solid #000;
            display: block;
            margin: 0 auto;
        }
        a{
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            position: absolute;
            right: 20px;
            top: 20px;
            background-color: #6d4d8a;
            width: 150px;
            height: 50px;
            font-size: 25px;
            color: white;
            border-radius: 10px;
            border: none;
        }
        a:hover{
            color: black;
        }
    </style>
</head>
<body>
    <a href="logout.php">Sair</a>
    <canvas id="game" width="320" height="480"></canvas>
    <h1 class="text-center">Aperte espaço para jogar!!!</h1>
    <script src="./game3.js"></script>
</body>
</html>