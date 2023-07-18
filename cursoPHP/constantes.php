<html>

<head>
    <meta charset="utf-8" />
    <title> Curso PHP </title>
</head>

<body>
    <?php
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USER', 'user_dev');
        define('BD_PASSWORD', 'password_dev');

        echo 'URL do Banco de dados: ' . BD_URL . '<br/>';
        echo 'Usuário do Banco de dados: ' . BD_USER . '<br/>';
        echo 'Senha do Banco de dados: ' . BD_PASSWORD . '<br/>';
    ?>
</body>

</html>