<?php
include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
$conn = conectar();

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($Dados) && !empty($Dados)){
    $genero = isset($Dados["genero"]) ? addslashes(mb_strtoupper($Dados["genero"], 'UTF-8')) : '';

    $retornoInsert = insertUnico('genero', 'genero',$genero);
  
    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Genero $genero cadastrado com successo!"],JSON_THROW_ON_ERROR);
    } else {
        echo json_encode(['success' => false, 'message' => "Genero não cadastrado! ErroR Bd"],JSON_THROW_ON_ERROR);
    }
} else {
  
    echo json_encode(['success' => false, 'message' => "Genero Não cadastrado! ErroR variável"],JSON_THROW_ON_ERROR);
}

?>