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
                <th scope="col">Alterar</th>
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
                        <td>
                        <button type='button' class="btn btn-success"
                        onclick='abrirModalEdicao("<?php echo $genero ?>", "<?php echo $idgenero ?>")'>Ver Mais</button> 
                        <button type='button' class="btn btn-primary"
                        onclick='abrirModalEdicao("<?php echo $genero ?>", "<?php echo $idgenero ?>")'>Alterar</button> 
                        <button type='button' class="btn btn-danger"
                        onclick='deletegenero("apagarGenero", <?php echo $idgenero; ?>)'>Excluir</button> 
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>