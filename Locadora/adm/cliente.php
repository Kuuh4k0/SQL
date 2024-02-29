<?php

include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
?>

<div class="container">
    <table class="table">
        <thead>
            <center>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CadastrarCliente">
                    Cadastrar!
                </button>
            </center>
            <tr>
                <th scope="col">IDCliente</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $clientes = listarTabela("idCliente, nome, email, cpf, senha", 'cliente', 'idCliente');

    if ($clientes != 'Vazio'){
        foreach($clientes as $itemcliente){
        $nomecliente = $itemcliente -> nome;
        $idcliente = $itemcliente -> idCliente;
        $email = $itemcliente -> email;
        $cpf = $itemcliente -> cpf;
        $senhacliente = $itemcliente -> senha;
?>
            <tr>
                <th scope="row"><?php echo"$idcliente"; ?></th>
                <td><?php echo"$nomecliente"; ?></td>
                <td><?php echo"$email"; ?></td>
                <td><?php echo"$cpf"; ?></td>
                <td><?php echo"$senhacliente"; ?></td>
            </tr>

            <?php
    }}
   ?>

        </tbody>
    </table>
</div>