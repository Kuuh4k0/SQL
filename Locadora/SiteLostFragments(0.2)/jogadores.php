<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jogadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="row" style="margin-left: 14%; margin-top: 2%;">
            <div class="col-2">
                <div>
                    <img src="./img/jogadores/dIjin.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-3">Dijin-Thando</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#dijin">
                            Sobre
                        </button>
                        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#excluir">
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <img src="./img/jogadores/elerson.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-3">Elerson-Oliveira</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#elerson">
                            Sobre
                        </button>
                        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#excluir">
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <img src="./img/jogadores/hakima.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-3">Hakima-Kako</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#hakima">
                            Sobre
                        </button>
                        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#excluir">
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <img src="./img/jogadores/ezreal.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-3">Ezreal-Blackriver</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#ezreal">
                            Sobre
                        </button>
                        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#excluir">
                            Excluir
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <img src="./img/jogadores/vazio.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mt-3">Empty</h5>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#createnew">
                            Criar Novo +
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modais -->
        <div class="modal fade" id="dijin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="background-color: gray;">
                <div class="modal-content" style="background-color: gray;">
                    <div class="modal-header" style="background-color: gray;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Dijin Thando</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: gray;">
                        <img src="./img/jogadores/dijinmodal.png" alt="">
                        <div style="color: white;">
                            <ul style="list-style: none;">
                                <li>
                                    <p>Nome: Dijin-Thando</p>
                                </li>
                                <li>
                                    <p>Idade: 31 </p>
                                </li>
                                <li>
                                    <p>Raça: Humano</p>
                                </li>
                                <li>
                                    <p>Sexo: Homem</p>
                                </li>
                                <li>
                                    <p>Altura: 1,30</p>
                                </li>
                                <li>
                                    <p>Peso: 50kg</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: gray;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="elerson" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="background-color: gray;">
                <div class="modal-content" style="background-color: gray;">
                    <div class="modal-header" style="background-color: gray;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elerson Oliveira</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: gray;">
                        <img src="./img/jogadores/elersonmodal.png" alt="">
                        <div style="color: white;">
                            <ul style="list-style: none;">
                                <li>
                                    <p>Nome: Elerson-Oliveira</p>
                                </li>
                                <li>
                                    <p>Idade: 25 </p>
                                </li>
                                <li>
                                    <p>Raça: Meio Elfo</p>
                                </li>
                                <li>
                                    <p>Sexo: Homem</p>
                                </li>
                                <li>
                                    <p>Altura: 1,87</p>
                                </li>
                                <li>
                                    <p>Peso: 76kg</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: gray;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hakima" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="background-color: gray;">
                <div class="modal-content" style="background-color: gray;">
                    <div class="modal-header" style="background-color: gray;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hakima Kako</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: gray;">
                        <img src="./img/jogadores/hakimamodal.png" alt="">
                        <div style="color: white;">
                            <ul style="list-style: none;">
                                <li>
                                    <p>Nome: Hakima-Kako</p>
                                </li>
                                <li>
                                    <p>Idade: 22 </p>
                                </li>
                                <li>
                                    <p>Raça: Humano</p>
                                </li>
                                <li>
                                    <p>Sexo: Homem</p>
                                </li>
                                <li>
                                    <p>Altura: 1,75</p>
                                </li>
                                <li>
                                    <p>Peso: 75kg</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: gray;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ezreal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="background-color: gray;">
                <div class="modal-content" style="background-color: gray;">
                    <div class="modal-header" style="background-color: gray;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ezreal Blackriver</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: gray;">
                        <img src="./img/jogadores/ezrealmodal.png" alt="">
                        <div style="color: white;">
                            <ul style="list-style: none;">
                                <li>
                                    <p>Nome: Ezreal-Blackriver</p>
                                </li>
                                <li>
                                    <p>Idade: 29 </p>
                                </li>
                                <li>
                                    <p>Raça: Humano</p>
                                </li>
                                <li>
                                    <p>Sexo: Homem</p>
                                </li>
                                <li>
                                    <p>Altura: 1,78</p>
                                </li>
                                <li>
                                    <p>Peso: 72kg</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: gray;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="createnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create a New Chacter</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Idade</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Raça</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Sexo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Altura</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Peso</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Esquece</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="background-color: gray;">
                <div class="modal-content" style="background-color: gray;">
                    <div class="modal-header" style="background-color: gray;">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluindo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: gray;">
                        <h2>Tem certeza que deseja excluir esse player ?</h2>
                    <div class="modal-footer" style="background-color: gray;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>