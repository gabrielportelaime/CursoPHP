<?php
    session_start();
    // Usuários do sistema
    $usuarios = [
        ['id' => 1, 'email' => 'admin@teste', 'senha' => '1234', 'nome' => 'admin', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@teste', 'senha' => '1234', 'nome' => 'user', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'maria@teste', 'senha' => '1234', 'nome' => 'Maria', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'jose@teste', 'senha' => '1234', 'nome' => 'José', 'perfil_id' => 2]
    ];

    // Variável para saber se o usuário está autenticado
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'admin', 2 => 'user');

    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']){
            $usuario = $user['nome'];
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo $usuario . ' autenticado!';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        if(empty($_POST['email']) or empty($_POST['senha'])){
            header('Location: index.php?login=vazio');
        }else{
            header('Location: index.php?login=erro');
        }
    }

    // echo '<pre>';
    // print_r($usuarios);
    // echo '</pre>';
    // print_r($_GET);
    // echo '<br/> Login feito com sucesso! <br/>';
    // echo $_GET['email'] . '<br/>';
    // echo $_GET['senha'];

?>