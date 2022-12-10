<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./assets/favico.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style32.css">
  <title>Início - Flappy Bat</title>
</head>

<body id="bdIndex">
  <?php include("header.php"); ?>
  <main id="indexMain" class="mb-5">
    <?php include("playnow.php"); ?>
    <section class="container">
      <h1 class="row fw-bold mb-5 d-flex justify-content-center">Bem-vindo(a) ao Flappy Bat!!!</h1>
      <div class="row row-cols-1 mt-3 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="surprise.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Futuras atualizações</h5>
              <p class="card-text">Pretendemos implementar uma loja no jogo, a fim de que os jogadores adquiram visuais que mais os agradam quando utilizados.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="surprise.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Skin misteriosa em breve</h5>
              <p class="card-text">Os desenvolvedores estão discutindo e preparando uma nova skin, que chegará em breve ao jogo. Comece a juntar suas Batcoins!!!</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="surprise.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Notas de atualização</h5>
              <p class="card-text">O jogo passará a gerar Power Ups durante as partidas por tempo limitado a fim de testes, os quais podem ficar permanentemente no jogo. Experimente agora!</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
