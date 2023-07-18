<html>

<head>
    <meta charset="utf-8" />
    <title> Curso PHP </title>
</head>

<body>
    <?php
    $lista_pessoas = ['João', 'José', 'Maria'];
    $lista_coisas = [1, 2, 3, $lista_pessoas];
    $lista_pessoas[] = 'Gabriel';
    $lista_frutas = array(
        'b' => array('Banana', 'Bacate'), 
        'm' => array('Maçã', 'Morango'), 
        'u' => 'Uva', 
        'j' => 'Jambo');
    $lista_frutas['m'][] = 'Laranja';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    echo '<hr/>';
    echo 'posição: ' . array_search('Uva', $lista_frutas);
    echo '<br/>';
    if(in_array('uva', $lista_frutas)){
        echo 'Está no array';
    }else{
        echo 'Não está no array';
    }
    echo '<hr/>';
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';
    echo '<hr/>';
    echo '<pre>';
    print_r($lista_pessoas);
    echo '</pre>';
    ?>
</body>

</html>