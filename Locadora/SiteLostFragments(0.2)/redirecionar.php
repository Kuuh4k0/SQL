<?php 
session_start();
$senha = md5($_POST["senha"]);
$usuario = ($_POST["usuario"]);
$senha_adm = '827ccb0eea8a706c4c34a16891f84e7b';
$usuario_adm = 'Cleonir';
$_SESSION["usuario"] = $usuario;
if ($senha == $senha_adm && $usuario == $usuario_adm) {
    header('location:'.'adm_page.php');
} else {
    header('location:'.'erro.php');
};
?>