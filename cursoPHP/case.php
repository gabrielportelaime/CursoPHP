<html>
    <head>
        <meta charset="utf-8" />
        <title> Curso PHP </title>
    </head>
    <body>
        <?php
            $parametro = 1.2;
            switch($parametro){
                case 'abc':
                    echo 'Caso 1 foi escolhido!';
                    break;
                case false:
                    echo 'Caso 2 foi escolhido!';
                    break;
                default:
                    echo 'Nenhuma das opções!';
                    break;
            }
        ?>
    </body>
</html> 