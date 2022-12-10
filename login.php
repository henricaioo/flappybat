<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - FlappyBat</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style32.css">
        <link rel="shortcut icon" href="favico.ico" type="image/x-icon">
    </head>
    <body>
        <main id="mainLogin">
            <section style="min-height: 100vh;" class="container d-flex flex-column align-items-center justify-content-center">
                <img style="height: 128px; margin-bottom: 2%;" class="img-fluid" src="logoanim.gif" alt="  ">
                <form class="col-12 col-lg-6" style="background-color: #3F374F; border-radius: 50px;" method="POST" action="verificalogin.php">
                    <div class="row mt-4 py-3 px-5">
                        <label for="nickname" class="form-label p-0 ms-2 text-white">Nickname</label>
                        <input type="text" class="form-control" name="nickname" id="nickname">
                    </div>
                    <div class="row px-5">
                        <label for="senha" class="form-label p-0 ms-2 text-white">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>
                    <div class="btn-group p-0 ms-2 my-5 w-100" role="group" aria-label="Basic example">
                        <div style="gap:20px;" class="d-flex flex-column align-items-center justify-content-center flex-md-row justify-content-md-end pe-sm-5 row w-100">
                            <a class="col-8 col-md-4" href="register.php">Cadastre-se</a>
                            <button class="col-8 col-md-4" type="submit">Entrar</button>
                        </div>
                    </div>
                </form>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
