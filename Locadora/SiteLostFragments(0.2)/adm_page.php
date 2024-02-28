<?php 
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página ADM</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white;">Bem Vindo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./adm_page.php?page=manual" style="color:white;">Manual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./adm_page.php?page=jogadores" style="color:white;">Jogadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./adm_page.php?page=anotacoes" style="color:white;">Anotações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./adm_page.php?page=mapa" style="color:white;">Mapa</a>
                    </li>
            </div>
        </div>
    </nav>
      <?php
      if (isset($_GET['page']) && !empty($_GET['page'])) {
        $page = $_GET['page'];

        if ($page == 'mapa') {
            include_once 'mapa.php';
        } else if ($page == 'manual') {
            include_once 'manual.php';
        } else if ($page == 'jogadores') {
            include_once 'jogadores.php';
        } else if ($page == 'anotacoes') {
            include_once 'anotacoes.php';
        } else {
        echo 'Bem Vindo!', $_SESSION["usuario"];
        }
        };
      ?>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>