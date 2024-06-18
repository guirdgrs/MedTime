<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once('../../classes/Usuario.class.php');

    $usuario = new Usuario();

    $usuario->nome = strip_tags($_POST['nomeCadastro']);
    $usuario->email = strip_tags($_POST['emailCadastro']);
    $usuario->senha = strip_tags($_POST['senhaCadastro']);
    $usuario->cpf = strip_tags($_POST['cpfCadastro']);
    $usuario->data_nascimento = strip_tags($_POST['data_nascimentoCadastro']);
    $usuario->telefone_celular = strip_tags($_POST['telefoneCadastro']);
    $usuario->id_convenio = 0;


    if ($usuario->CadastrarClienteSemLocalizacao() == 1) {
        header('Location: ../../paginainicial.php?sucesso=cadastrarcliente');

        $resultado = $usuario->Logar();

        session_start();

        $_SESSION['usuario'] = $resultado[0];
        header('Location: ../../paginainicial.php?sucesso=login');
        die();
        
    } else {
        header('Location: ../../paginainicial.php?falha=cadastrarcliente');
        die();
    }
}
