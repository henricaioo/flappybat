<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem somos nós? - FlappyBat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style32.css">
</head>

<body>
    <?php include("templates/header.php"); ?>
    <main class="container">
        <?php include("templates/playnow.php"); ?>
        <section class="row d-lg-flex flex-lg-row-reverse align-items-center">
            <div id="nossahistoria" class="col-12 col-lg-9">
                <h3>O JOGO</h3>
                <p>O software Flappy Bat tem por objetivo ser um jogo similar ao Flappy Bird, porém com vários modos de jogo e com incentivo para os usuários competirem entre si, como sistema de títulos e de premiação em moedas do próprio jogo, em um ambiente limpo e justo.
                    O jogo se baseia na quantidade de obstáculos que o jogador, controlando o morcego, consegue desviar. Conforme o jogador for evitando colidir o morcego com os pilares ele vai acumulando pontos, além de estar competindo para obter uma posição melhor na classificação mundial.
                    <br>
                    <br>
                    Recursos do jogo:
                <ul>
                    <br>
                    <li>- Loja</li>
                    <li>- Sistema de nível</li>
                    <li>- Classificação mundial</li>
                    <li>- Chat global</li>
                    <li>- Skins</li>
                </ul>
                </p>
            </div>
            <div class="col-12 col-lg-3">
                <h2 class="d-lg-none d-block my-5 text-center" style="color: white; font-size: 50px; font-weight: bold;">Os criadores</h2>
                <div class="box d-flex flex-column align-items-center p-3">

                    <img src="assets/favico.ico" alt="Foto de perfil">
                    <h3 class="text-center">Caio Henrique de Almeida Magalhães</h3>
                    <b>Estudante TI</b>



                </div>
                <div class="box d-flex flex-column align-items-center p-3">

                    <img src="assets/favico.ico" alt="Foto de perfil">
                    <h3 class="text-center">Letícia Mara Martins</h3>
                    <b>Estudante TI</b>



                </div>
                <div class="box d-flex flex-column align-items-center p-3">

                    <img src="assets/favico.ico" alt="Foto de perfil">
                    <h3 class="text-center">Mirella Miranda Garcia Pereira</h3>
                    <b>Estudante TI</b>



                </div>
                <div class="box d-flex flex-column align-items-center p-3">
                    <img src="assets/favico.ico" alt="Foto de perfil">
                    <h3 class="text-center">Tiago Fernandes Moraes</h3>
                    <b>Estudante TI</b>

                </div>
            </div>


        </section>


    </main>
    <?php include("templates/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>