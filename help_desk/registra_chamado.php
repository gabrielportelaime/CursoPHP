<?php
    $arquivo = fopen('arquivo_chamados.txt', 'a');
    foreach($_POST as $chave => $valor){
        $_POST[$chave] = str_replace('#', '-', $valor);
    }
    fwrite($arquivo, implode('#', $_POST) . PHP_EOL);
    fclose($arquivo);
    header('Location: abrir_chamado.php');
?>
