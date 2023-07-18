<html>

<head>
    <meta charset="utf-8" />
    <title> Curso PHP </title>
</head>

<body>
    <?php
    $nome = 'Gabriel Lucas';
    $idade = 26;
    $peso = 89.4;
    $fumante = false;
    ?>
    <h1>Ficha Cadastral</h1>
    <br />
    <p>Nome:
        <?= $nome ?>
    </p>
    <p>Idade:
        <?= $idade . ' anos' ?>
    </p>
    <p>Peso:
        <?= $peso . ' Kg' ?>
    </p>
    <p>Fumante:
        <?php echo ($fumante) ? 'Sim' : 'Não'; ?>
    </p>
</body>

</html>