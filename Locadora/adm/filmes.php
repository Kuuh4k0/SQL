<?php

include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
?>

<div class="container">
    <table class="table">
        <thead>
            <center>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CadastrarFilme">
                    Cadastrar!
                </button>
            </center>
            <tr>
                <th scope="col">IdFilmes</th>
                <th scope="col">Filme</th>
                <th scope="col">IdGênero</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $filmes = listarTabela("idfilme, filme, idgenero", 'filme', 'idfilme');

    if ($filmes != 'Vazio'){
        foreach($filmes as $itemfilme){
        $filme = $itemfilme -> filme;
        $idfilme = $itemfilme -> idfilme;
        $idgenero = $itemfilme -> idgenero;
?>
            <tr>
                <th scope="row"><?php echo"$idfilme"; ?></th>
                <td><?php echo"$filme"; ?></td>
                <td><?php echo"$idgenero"; ?></td>
            </tr>

            <?php
    }}
   ?>

        </tbody>
    </table>
</div>