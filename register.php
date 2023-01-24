<!doctype html>
<html lang="pt-br">

<head>
  <title>Tela Cadastro - FlappyBat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" href="./assets/favico.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style32.css">
  <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
</head>

<body>
  <main id="mainRegister">
    <section class="d-flex flex-column align-items-center container">
      <h1 class="my-5" style="font-size: 60px;">Cadastre-se</h1>
      <form class="row g-3" style="width: 600px;" method="post" action="registration.php">
        <div class="col-12 my-5">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" required>
        </div>
        <div class="col-12 my-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="col-12 my-5">
          <label for="pais" class="form-label">País</label>
          <input type="pais" class="form-control" name="pais" id="pais">
        </div>
        <div class="col-md-6">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" name="senha" id="senha" required>
          <div id="passwordHelp" class="form-text">Digite uma senha de 8 a 12 caracteres</div>
        </div>
        <div class="col-md-6">
          <label for="confirmarSenha" class="form-label">Confirmar senha</label>
          <input type="password" class="form-control" id="confirmarSenha" required>
        </div>
        <div class="d-flex justify-content-center my-5" id="divButton">
          <button type="submit">Enviar</button>
        </div>
      </form>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>