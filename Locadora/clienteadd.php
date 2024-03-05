<?php
include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
$conn = conectar();

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// echo json_encode([$Dados['genero']]);

if (isset($Dados) && !empty($Dados)){
    $cliente = isset($Dados["cliente"]) ? addslashes(mb_strtoupper($Dados["cliente"], 'UTF-8')) : '';

    $retornoInsert = insertUnico('cliente', 'nome, email, CPF, senha',$cliente);
  
    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Cliente $cliente cadastrado com successo!"],JSON_THROW_ON_ERROR);
    } else {
        echo json_encode(['success' => false, 'message' => "Cliente não cadastrado! ErroR Bd"],JSON_THROW_ON_ERROR);
    }
} else {
  
    echo json_encode(['success' => false, 'message' => "Cliente Não cadastrado! ErroR variável"],JSON_THROW_ON_ERROR);
}

?>