<?php
    // Usuários do sistema
    $usuarios = [
        ['email' => 'admin@teste', 'senha' => '1234'],
        ['email' => 'user@teste', 'senha' => 'abcd'],
    ];

    echo '<pre>';
    print_r($usuarios);
    echo '</pre>';
    // print_r($_GET);
    // echo '<br/> Login feito com sucesso! <br/>';
    // echo $_GET['email'] . '<br/>';
    // echo $_GET['senha'];

    echo 'teste commit';

    print_r($_POST);
    echo '<br/> Login feito com sucesso com POST!<br/>';
    echo $_POST['email'] . '<br/>';
    echo $_POST['senha'];

?>