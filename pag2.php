<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/pag2.css">
</head>
<body>
    <main>
        <nav>
            <ul>
                <?php
                    include "php/menu.inc";
                ?>
            </ul>
        </nav>
        
        <div class="medicao">
            <h1>Bem vindo ao formulário de Fãs de Breaking Bad</h1>
            <h2>Preencha o formulário abaixo para participar do nosso grupo de administração da página <a
                    href="https://www.facebook.com/BreakingBadCenas/" target="_blank">Fãs de Breaking Bad<a> no
                        Facebook.
            </h2>
            <br>
        </div>
        <strong>
            <center>
            <form
            action="https://formspree.io/f/xjvjwyaj"
            method="POST">
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome completo"
                        style="background-color:#69ff6e">
                        <br>
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu e-mail válido"
                        style="background-color:#69ff6e">
                        <br>
                        <label>Mensagem</label>
                        <textarea name="mensagem" rows="4" cols="50" placeholder="Digite seu elogio" style="background-color:#69ff6e"></textarea>
                        <br>
                        <label>Selecione seu arquivo a ser enviado junto</label>
                        <input type="file" name="upload">
                        <br>
                        <br>
                        <button type="submit">Clique aqui para enviar</button>
                    </form>
            </center>
        </strong>
    </main>
    <footer id="main-footer">
        <p>Copyright &copy;2021,Igor Ramires</p>
    </footer>
</body>

</html>