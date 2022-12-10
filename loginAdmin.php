<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <title> Login - ADM's </title>
    <style>
    *{
    scroll-behavior: smooth;
    font-family: 'VT323', monospace;
}

.full{
    min-height:100vh;
    height: auto;
}
body{
    background-color: #eeddff;
}
nav{
    background-color: #6d4d8a;
    width: 30px;
    padding: 15px;
    transition: 0.1s width;
    height:30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 10px;
    left: 5px;
}

nav:hover{
    background-color: #3c005f;
    cursor: pointer;
}

nav img{
    width: 35px;
}

nav ul{
    display:none;
}

nav ul li {
 margin-bottom: 10px;
 padding: 20px;
 
}


nav ul li:hover {
    background-color: #3c005f;
}
   

nav ul li a {
    color: #dddcdc;
    text-decoration: none;
    font-size: 35px;
}

.menu{
    width: 280px!important;
    height: 100vh!important;
    display: block!important;
    border-radius: unset;
    top: 0;
    left: 0;
    padding: 0;
}
.menu:hover{
    background-color: #56226b;
    cursor: initial;
}
.menu ul{
 display: block;
}
 #close{
     width: 35px;
     position:fixed;
     top: 22px;
     left: 310px;
     display: none;
 }

 #close:hover{
     cursor: pointer;
 }
.titulo-primario{
    text-align: center;
    font-size: 60px;
    padding: 25px;
}

.texto{
    font-size: 25px;
    padding: 10px;
    text-align: center;
}

.flex{
    display: flex;
}

.wrap{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    
}

form{
    padding: 30px;
}

label{
    display: block;
    font-size: 25px;
    margin-bottom: 5px;
}

.campo{
    width: 70%;
    margin-left: 15px;
    border: 0;
    outline: 0;
    background-color:unset;
    border-bottom:solid 1px #3c005f;
    font-size:22px;
    transition: 0.5s width;
}

input[class='campo']:focus{
    width: 100%;
}

input[type='submit']{
    font-size: 30px;
    background-color: #56226b;
    border: 0;
    outline: 0;
    color: #dddcdc;
    width: 600px;
    transition: 0.2s background-color;
    margin-top: 50px;
}

input[type='submit']:hover{
    background-color: #3c005f;
    cursor: pointer;
}

label label{
    display: inline;
}
.change{
    color: green;
}

.delete{
    color: red;
}

.center{
    display: flex;
    justify-content: center;
}

.coluna{
    flex-direction: column;
}
#login{
    background-image: url('../img/fundoLogin.png');
    background-size: cover;
    background-position: center;
}

#login-container{
    background-color: #785b8a;
    width: 700px;
    height: 350px;
    
}

#login-container form{
    margin-top: 30px;
}

#login-container label{
    margin-bottom: 10px;
    color: #dddcdc;
}

#login .titulo-primario{
    color: #414141;
}

.campo-login{
    width: 100%;
    margin-bottom:10px;
    font-size: 20px;
    outline: 0;
}

#login-container input[type='submit']{
    display: block;
    width: 100%;
}
    </style>
</head>
<body>
    <section class="full" id="login">
        <h1 class="titulo-primario"> Login ADM's </h1>
        <div class="center"> 
            <div id="login-container">
                <form action="verificaLoginAdm.php" method="post">
                   
                        <label for="adm"> ADM: </label>
                        <input type="text" name="adm" class="campo-login">

                        <label for="senha"> Senha: </label>
                        <input type="password" name="senha" class="campo-login">

                        <input type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>