<?php

include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";
if ($_SESSION['idadm']) {
    $idUsuarioSession = $_SESSION['idadm'];
} else {
    session_destroy();
    header('Location: ./index.php');
}
?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagex/png" href="./img/Logoda.ico">
    <title>Locadora</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .nomee:hover {
            text-shadow: #fbfbfb 0 0 1em;
            color: #fbfbfb;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #fbfbfd;">

    <nav class="navbar navbar-expand-lg" style="background-color: #491D77;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/Logo.png" alt="" style="width: 90px; height: 90px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0.5;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white;">Início</a>
                    </li>
                    <a class="nav-link" aria-current="page" href="./logout.php" style="color: white;">Sair</a>
            </div>
        </div>
    </nav>
    </div>

    <div class="row">
        <div style="height:800px; background-color: #491D77;" class="col-2">
            <div class="offcanvas-header">
                <h5 style="margin-left: 44%; font-size: 30px; color: #fbfbfb; margin-top: 15px;" class="offcanvas-title" id="offcanvasExampleLabel">ADM</h5>
            </div>
            <div class="offcanvas-body mt-2">
                <div>
                    <ul>
                        <li style="list-style: none; text-align: center;"><a class="nomee" style="text-decoration: none; color: #fbfbfb" onclick="carregarConteudo('listaCliente')" href="#">Cliente</a></li>
                        <li style="list-style: none; text-align: center;"><a class="nomee" style="text-decoration: none; color: #fbfbfb" onclick="carregarConteudo('listaGenero')" href="#">Genero</a></li>
                        <li style="list-style: none; text-align: center;"><a class="nomee" style="text-decoration: none; color: #fbfbfb" onclick="carregarConteudo('listaFilmes')" href="#">Filmes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-10">

            <div id="conteudo"></div>

            <?php
$url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos';
$parametros = [
    'sol' => 990,
    'camera' => 'navcam',
    'api_key' => 'X0Em0qtepQacDZpIDbQ9h2SJ5JznKHbxCzWc5EQF' 
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($parametros));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resposta = curl_exec($ch);
curl_close($ch);
$data = json_decode($resposta, true);
$width = 1595;
$height = 813;
if(isset($data['photos']) && !empty($data['photos'])) {
    foreach ($data['photos'] as $photo) {
        echo '<img src="' . $photo['img_src'] . '" alt="Foto de marte" style="width: ' . $width . 'px; height:' . $height  . 'px; margin: -13px"><br>';
}
} else {
    echo 'Imagem não disponível!';
}
?>


        </div>
    </div>





            <div class="modal fade" id="CadastrarGenero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="idgenero" class="form-label">Gênero</label>
                                    <br>
                                    <input type="text" class="form-control-sm genero" id="idGenero" aria-label=".form-control" required="required" name="genero" placeholder="Digite um gênero:">
                                </div>
                                <button type="submit" id="btnAddGenero" class="btn btn-sm btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="./js/func.js">
    </script>
</body>
<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Se Inscreva Já!</h3>
                        <p>Não perca essa oportunidade de fazer parte da nossa família!</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Inscrever-se</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Baixar</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Companhia</a></li>
                            <li><a href="#">Aplicativo Android</a></li>
                            <li><a href="#">Aplicativo IOS</a></li>
                            <li><a href="#">Área de Trabalho</a></li>
                            <li><a href="#">Projetos</a></li>
                            <li><a href="#">Indicações</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Ajuda</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Termos &amp; Condições</a></li>
                            <li><a href="#">Comunicado</a></li>
                            <li><a href="#">Documentações</a></li>
                            <li><a href="#">Política de Suporte</a></li>
                            <li><a href="#">Privacidade</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="f-title f_600 t_color f_size_20">Redes Sociais</h3>
                    <div>
                        <a href="#" class=""><img src="./img/redessociais/facebookpreto.png" alt="" style="margin-right: 2%;"></a>
                        <a href="#" class=""><img src="./img/redessociais/twitterpreto.png" alt="" style="margin-right: 2%;"></a>
                        <a href="#" class=""><img src="./img/redessociais/instagrampreto.png" alt="" style="margin-right: 2%;"></a>
                        <a href="#" class=""><img src="./img/redessociais/pinterestpreto.png" alt="" style="margin-right: 2%;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© Henrique, Pedro... 2024 Todos os Direitos Reservados.</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">

                </div>
            </div>
        </div>
    </div>
</footer>

</html>