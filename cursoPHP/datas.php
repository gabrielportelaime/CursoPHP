<html>
    <head>
        <meta charset="utf-8" />
        <title> Curso PHP </title>
    </head>
    <body>
        <?php
            echo date('d/m/Y H:i');
            echo '<br/>';
            echo date_default_timezone_get();
            echo '<br/>';
            echo date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y H:i');
            echo '<br/>';
            echo date_default_timezone_get();
            echo date_default_timezone_set('America/Manaus');
            echo '<br/>';
            echo date('d/m/Y H:i');
            echo '<br/>';
            echo date_default_timezone_get();
            echo '<br/>';
            $data_inicial = '2023-07-15'; //Padrão americano
            $data_final = date('Y-m-d');
            echo $data_inicial;
            echo '<br/>';
            echo $data_final;
            echo '<br/>';
            echo 'A diferença é: ' .  (strtotime($data_final)-strtotime($data_inicial))/86400 . ' dias';
        ?>
    </body>
</html> 