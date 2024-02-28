<?php

/* $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
$acaoid = filter_input(INPUT_POST, 'acaoid', FILTER_SANITIZE_NUMBER_INT);
$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);
$controleGet = filter_input(INPUT_POST, 'controleGet', FILTER_SANITIZE_STRING);

switch ($acao) {

}
switch ($controle) {
    case 'listaCliente':
        include_once 'cliente.php';
        break;
    case 'listaGenero':
        include_once 'cliente.php';
        break;
    case 'listaFilme':
        include_once 'cliente.php';
        break;
}
switch ($acao) {

} */
$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);

switch ($controle){
    case 'listaGenero':
        include_once './adm/generos.php';
        break;
    case 'listaFilmes':
        include_once './adm/filmes.php';
        break;    
    case 'listaCliente':
        include_once './adm/cliente.php';
        break;
    default:
        echo 'Lista Inexistente!';
}
    

/* if (isset($controle) && !empty($controle)){
    $controle = $_POST['controle'];
    if ($controle == 'listaGenero') {
        echo 'Você clicou no botão listar Gênero!';
    } else if ($controle == 'listaFilmes'){
        echo 'Você clicou no botão listar Filmes!';
    }
    else if ($controle == 'listaCliente'){
        echo 'Você clicou no botão listar Cliente!';
    } else {
    echo 'Menu não disponível!!!';
    }
    } else {
        echo 'Página ineistente!!!';
    } */
?>