<?php

include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";

$conn = conectar();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$email = $dados ['email'];
$pass = $dados ['senha'];

$BancodeDados = validarSenhaCriptografia('idadm, nome, email, senha, ativo','adm', 'email', 'senha', $email, $pass, 'ativo', 'A');
if ($BancodeDados) {
        if ($BancodeDados=='usuario'){
            echo json_encode(['success' => false, 'message' => 'Usuário inválido!']);
        } else if ($BancodeDados=='senha'){
            echo json_encode(['success' => false, 'message' => 'Senha inválida!']);
        }else{
            $_SESSION['idadm'] = $BancodeDados->idadm;
            $_SESSION['nome'] = $BancodeDados->nome;
            echo json_encode(['success' => true, 'message' => 'Usuário Logado com sucesso!']);
        }

}else{
    echo json_encode(['success' => false, 'message' => 'Usuário ou Senha inválidos!']);
}

?>