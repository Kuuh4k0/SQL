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



            <div class="modal fade" id="CadastrarFilme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </tbody>
    </table>
</div>