<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
        $texto = 'curso Completo de PHP!';
        echo $texto . '<hr />';
        echo strtolower($texto);
        echo '<hr />';
        echo strtoupper($texto);
        echo '<hr />';
        echo ucfirst($texto);
        echo '<hr />';
        echo str_replace('PHP', 'Java',$texto);
        echo '<hr />';
        echo substr($texto, 3, strlen($texto));
        echo '<hr />';

        $numero = 123.53;

        echo ceil($numero) . '<hr/>';
        echo floor($numero) . '<hr/>';
        echo round($numero) . '<hr/>';
        echo rand(1, 200) . '<hr/>';
        echo sqrt($numero) . '<hr/>';

    ?>
</body>

</html>