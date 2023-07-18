<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //gettype() => retorna o tipo da variável
    $valor = 101.1;
    $valor2 = (float) $valor; //float ou double
    $valor3 = (string) $valor; 
    $valor4 = (integer) $valor;
    echo $valor. ' ' . gettype($valor);
    echo '<br />';
    echo $valor2. ' ' .gettype($valor2);
    echo '<br />';
    echo $valor3. ' ' .gettype($valor3);
    echo '<br />';
    echo $valor4. ' ' .gettype($valor4);
    ?>
</body>

</html>