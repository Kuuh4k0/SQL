<?php

include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
?>

<div class="container">
    <table class="table">
        <thead>
            <center>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CadastrarGenero">
                Cadastrar!
            </button>
            </center>
            
            <tr>
                <th scope="col">IDGêneros</th>
                <th scope="col">Gênero</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $genero = listarTabela("idGenero, genero", 'genero', 'idGenero');

            if ($genero != 'Vazio') {
                foreach ($genero as $itemgenero) {
                    $genero = $itemgenero->genero;
                    $idgenero = $itemgenero->idGenero;
            ?>

                    <tr>
                        <th scope="row">
                            <?php echo "$idgenero"; ?>
                        </th>
                        <td>
                            <?php echo "$genero"; ?>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>


            
    </script>
        </tbody>
    </table>
</div>