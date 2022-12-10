<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Avaliar Sugestões</title>
    <style>
        *{
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #eeddff;
        }
        .sug{
            margin: 10px 0 10px 0;
            display: flex;
            border: 3px solid black;
            border-radius: 10px;
            padding: 5px;
        }
        .sug div{
            padding-left: 5px;
        }
        .user{
            text-align: center;
            border-right: 1px solid black;
            padding-right: 5px;
        }
        .user img{
            height: 10vw;
            border-radius: 100px;
        }
        .user a{
            font-size: 1rem;
            box-shadow: 5px 5px 5px black;
        }
        header{
            background-color: #3f374f;
        }
    </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="icones.html">Ícones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="skins.html">Skins</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sugestões
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="readsuggest.php">Verificar sugestões</a></li>
                  <li><a class="dropdown-item" href="suggest_saved.php">Sugestões salvas</a></li>
                </ul>
              </li>
            </ul>
            <a href="logoutAdmin.php" class="btn btn-danger">Encerrar sessão</a>
          </div>
        </div>
      </nav>
  </header>
    <div id="avaliacao" class="container">
        <div>
            <h3 class="my-5">Avaliar sugestões</h3>
        </div>
        
            <?php 
                require("connect.php");
                $sql = "SELECT * FROM avalie_nos";
                $res = mysqli_query($connect, $sql);
                $num_rows = mysqli_num_rows($res);
                if($num_rows > 0){
                    while($dados = mysqli_fetch_assoc($res)){
                        echo "<div class='sug'><div class='user'>
                        <img src='favico.ico' alt='icon_user'>
                        <p>". $dados['username'] ."</p>
                        <a class='btn btn-danger m-2' href='delestesuggest.php?cod=". $dados["id_sugestao"] ."'>
                            Excluir
                        </a>
                        <a class='btn btn-success m-2' href='save_suggest.php?cod=". $dados["id_sugestao"] ."'>
                            Salvar
                        </a>
                    </div>
                    <div>
                        <p>". $dados['sugestao'] ."</p>
                    </div>
                    </div>";
                    }
                }
            ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
