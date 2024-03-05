<?php
include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
$conn = conectar();

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($Dados) && !empty($Dados)) {
    $id = isset($Dados['idgenero']) ? intval($Dados['idgenero']) : 0;
    
    $retornoUpdate =  apagarGenero('genero', 'idGenero', $id);
    if ($retornoUpdate > 0) {
        echo json_encode(['success' => true, 'message' => "Genero excluido com successo!"]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Método de requisição incorreto']);
    }
} else {
    echo json_encode((['success' => false, 'message' => 'Genero não encontrado!']));
};
