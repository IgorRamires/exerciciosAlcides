<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>Redirecionamento de link</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <!-- Inclui o arquivo CSS Externo -->
    <link rel="stylesheet" href="css/pag1.css">
</head>

<body class="main-hero">

    <main>
        <nav>
            <ul>
                <?php
                    include "php/menu.inc";
                ?>    
            </ul>
        </nav>
        
        <header>
            <br>
            <div class="center">
            <img src="images/logo.jpg"
            width="100px"
            height="100px" alt="logo" title="Logo Breaking Bad">
            </div>

            <h1>
                Bem vindo ao meu site sobre Breaking Bad, acima são os links para direcioná-lo para alguns assuntos
                sobre a
                série.
            </h1>
        </header>

        <!-- Utilizei a class="center" para centralizar no meio, pelo CSS externo. -->
        <center>
            <video width="320" height="400" alt="Um breve video sobre Breaking Bad e de como é a trama da série"
                controls title="Breve história de Walt">
                <source src="video/BreakingBadWalt.mp4" type="video/mp4">
                Seu navegador não suporta este tipo de mídia.
            </video>
        </center>
        <p class="center" style="color:rgb(0, 255, 13) ">
            <strong>"I was alive"</strong> <cite>~MR.Lambert</cite>
        </p>
        <br>
        <br>
        <br>
        <div class="center">
            <img src="gif/yeahmrwhite.gif" alt="Jesse Pinkman falando com Walt" title="Jesse Pinkman Yeah,Science">
        </div>
        <br>
        <br>
        <br>
        <!-- Footer sempre em último -->
        <footer id="main-footer">
            <p>Copyright &copy;2021,Igor Ramires</p>
        </footer>
    </main>
</body>

</html>