<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home.css">
    <title>Login</title>
</head>

<body>
    <?php
    $user = $_POST['user'];
    $pass = $_POST['senha'];

    if ($user == "gustavo" && $pass == "123123") {
        $login = true;
    } else {
        $login = false;
    }
    ?>

    <header id="cabecalho">
        <h3>Home</h3>
        <nav>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li><a href="contatos.html">Contatos</a></li>
                <li><a href="sobre.html">Sobre Nós</a></li>
            </ul>
        </nav>
    </header>

    <script>
        var logado = "<?php echo $login?>";
        if(logado){
            alert ("usuario logado\n Bem-vindo <?php echo $user?>");
        }else {
            alert("usuario ou senha incorreto");
            window.location.href = "index.html";
        }
    </script>

</body>

</html>