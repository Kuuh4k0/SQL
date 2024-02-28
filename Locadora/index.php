<?php
include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
$conn = conectar();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="page">
        <form method="POST" action="#" class="formLogin" id="loginform">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" name="email" autofocus="true" id="inemail">
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" id="insenha">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastro">    
                Crie uma conta aqui!
            </button>
            <div class="alert" role="alert" style="display: none;" id="erromsg">
            
            </div>
            <button type="button" name="btnlogar" onclick="fazerlogin();" class="btn">Logar</button>
        </form>
    </div>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastre-se aqui!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="./index.php" class="formLogin">
            <p>Digite os seus dados para se cadastrar:</p>
            <label for="name">Nome</label>
            <input type="text" placeholder="Digite seu Nome" autofocus="true">
            <label for="name">CPF</label>
            <input type="text" placeholder="Digite seu CPF" autofocus="true">
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu E-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite Sua Senha" />
            <label for="password">Confirme sua Senha</label>
            <input type="password" placeholder="Repita sua Senha" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Cadastrar-se</button>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="js/func.js"></script>
  
</body>

</html>