<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    function exibirMensagem (){
        echo 'Curso de PHP <br/>';
    }

    function calcularArea ($altura, $largura){
        $area = $altura*$largura;
        return $area;
    }

    function calcularImposto ($salario){
        if($salario <= 1903.98){
            echo 'Isento!';
        }else{
            if($salario <= 2826.65){
                echo 'Alíquota: 7,5% e o valor a ser pago: ' . $salario*0.075;
            }else{
                if($salario <= 3751.05){
                    echo 'Alíquota: 15% e o valor a ser pago: ' . $salario*0.15;
                }else{
                    if($salario <= 4664.68){
                        echo 'Alíquota: 22,5% e o valor a ser pago: ' . $salario*0.225;
                    }else{
                        echo 'Alíquota: 27,5% e o valor a ser pago: ' . $salario*0.275;
                    }
                }
            }
        }
    }

    exibirMensagem();
    echo calcularArea(5, 4) . '<br />';
    calcularImposto(5000);
    
    ?>
</body>

</html>