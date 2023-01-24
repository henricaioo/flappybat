<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avalie-nos - Flappy Bat</title>
    <link rel="shortcut icon" href="./assets/favico.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style32.css">
</head>

<body>
    <?php include("templates/header.php"); ?>
    <main id="mainRateUs">
        <?php include("templates/playnow.php"); ?>

        <section>
            <div class="divTitulo mb-4">
                <h1 style="font-size: 3.5em; color: #58446b;">Curtiu jogar FlappyBat?</h1>
                <p style="font-size: 2em; color: #58446b; margin-top: 30px;">Deixe suas sugestões e avalie-nos</p>
            </div>
            <form class="container mt-4 d-flex flex-column justify-content-center align-items-center" method="POST" action="suggestions.php">
                <div class="formDiv1 row">
                    <div class="col-12 col-lg-5">
                        <label for="username">Username<input class="ms-3" id="username" type="text" name="username"></label>
                    </div>
                </div>
                <div class="formDiv2 row">
                    <textarea class="col-12 col-lg-5 p-4" aria-label="Deixe sua sugestão" name="sugestao" id="sugestao" cols="70" rows="10" placeholder="Deixe sua sugestão"></textarea>
                </div>
                <div class="rating mt-3">
                    <label for="s1">
                        <input type="radio" id="s1" name="stars" value="1" />
                        <span class="icon">★</span>
                    </label>
                    <label for="s2">
                        <input type="radio" id="s2" name="stars" value="2" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label for="s3">
                        <input type="radio" id="s3" name="stars" value="3" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label for="s4">
                        <input type="radio" id="s4" name="stars" value="4" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label for="s5">
                        <input type="radio" id="s5" name="stars" value="5" />
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>