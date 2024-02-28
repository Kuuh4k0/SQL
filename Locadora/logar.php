<?php
// session_start();
include_once 'config/conexao.php';
include_once 'config/constantes.php';
include_once 'func/funcoes.php';
$conn = conectar();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$email = $dados['email'];
$pass = $dados['senha'];

/* $validar = ValidarSenha('nome, senha, email, idadm, foto, cadastro, alteracao, ativo', 'adm', 'senha', 'email', $pass, $email, 'ativo', 'a');

if ($validar != 'Vazio') {
    foreach($validar as $validaritem)
    $_SESSION['idadm'] = $validaritem->idadm;
    $_SESSION['email'] = $validaritem->email;
    $_SESSION['nome'] = $validaritem->nome;
    echo json_encode(['success' => true, 'message' => "Logado com sucesso"]);
} else {
    echo json_encode(['success' => false, 'message' => 'Usuário ou senha errado']);
} */


$validar = ValidarSenhaCriptografada('idadm, nome, senha, email, foto, cadastro, alteracao, ativo', 'adm', 'senha', 'email', $pass, $email, 'ativo', 'a');
 if ($validar != null) {
    if ($validar == 'usuario'){
        echo json_encode(['success' => false, 'message' => 'Usuário errado']);
    }else if ($validar == 'senha'){
        echo json_encode(['success' => false, 'message' => 'Senha errada']);
    } else {
       
        $_SESSION['idadm'] = $validar -> idadm;
        $_SESSION['email'] = $validar -> email;
        $_SESSION['nome'] = $validar -> nome;
        echo json_encode(['success' => true, 'message' => "Logado com sucesso"]);
    }
    
    
} else {
    echo json_encode(['success' => false, 'message' => 'Usuário ou senha errado']);
}
