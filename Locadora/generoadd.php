<?php
include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
$conn = conectar();

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($Dados) && isset($Dados)){
    $genero = isset($Dados["genero"]) ? addslashes(mb_strtoupper($Dados["genero"], 'UTF-8')) : '';

    $retornoInsert = insertDoisId('genero', 'genero, cadastro',"$genero", DATATIMEATUAL);
    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Genero $genero cadastrado com successo!"]);
    } else {
        echo json_encode(['success' => false, 'message' => "Genero não cadastrado! ErroR Bd"]);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Genero Não cadastrado! ErroR variável"]);
}


?>