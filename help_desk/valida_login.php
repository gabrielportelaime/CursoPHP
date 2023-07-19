<?php
    // Usuários do sistema
    $usuarios = [
        ['email' => 'admin@teste', 'senha' => '1234', 'nome' => 'admin'],
        ['email' => 'user@teste', 'senha' => 'abcd', 'nome' => 'user'],
    ];

    // Variável para saber se o usuário está autenticado
    $usuario_autenticado = false;

    foreach($usuarios as $user){

        if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']){
            $usuario = $user['nome'];
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo $usuario . ' autenticado!';
    }else{
        header('Location: index.php?login=erro');
    }

    // echo '<pre>';
    // print_r($usuarios);
    // echo '</pre>';
    // print_r($_GET);
    // echo '<br/> Login feito com sucesso! <br/>';
    // echo $_GET['email'] . '<br/>';
    // echo $_GET['senha'];

?>