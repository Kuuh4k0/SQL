//document.getElementById("inemail").focus();

function fazerlogin() {
    var email = document.getElementById('inemail').value;
    var senha = document.getElementById('insenha').value;
    var errormsg = document.getElementById('erromsg');
    var qantsenha = senha.length;

    if (email === '') {
        errormsg.style.display = 'block';
        errormsg.innerHTML = 'O campo de email está vazio. Insira um email válido';
        return;
    }
    if (senha === "") {
        errormsg.style.display = 'block';
        errormsg.innerHTML = 'O campo de senha está vazia. Insira uma senha válida';
        return;
    }
    if (qantsenha < 8) {
        errormsg.style.display = 'block';
        errormsg.innerHTML = 'O campo de senha não possui 8 dígitos';
        return;
    } else {
        errormsg.style.display = 'none';
    }
    processando();

    fetch('login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'email=' + encodeURIComponent(email) + '&senha=' + encodeURIComponent(senha),
    })
        .then(response => response.json())
        .then(data => {
            esconderProcessando();
            if (data.success) {
                alert(data.message);
                errormsg.classList.remove('alert-danger');
                errormsg.classList.add('alert-success');
                errormsg.innerHTML = data.message;
                errormsg.style.display = 'block';
                setTimeout(function () {
                    window.location.href = 'telainicial.php';
                }, 1000)
            } else {
                errormsg.style.display = 'block';
                errormsg.innerHTML = data.message;
            }
        })
        .catch(error => {
            console.error('Erro na requisição:', error);
        })
}

function processando() {
    var divprocessando = document.createElement('div');
    divprocessando.id = 'processandoDiv';
    divprocessando.style.position = 'fixed';
    divprocessando.style.top = '40%';
    divprocessando.style.left = '50%';
    divprocessando.style.transform = 'translate(-50%, -50%)';
    divprocessando.innerHTML = '<img src="./img/loading.gif" width="300px" alt="Processando..." title="Processando...">';
    document.body.appendChild(divprocessando);
}

function esconderProcessando() {
    var divprocessando = document.getElementById('processandoDiv');
    if (divprocessando) {
        document.body.removeChild(divprocessando);
    }
}

function carregarConteudo(controle) {
    fetch('controle.php', {
        method: 'POST',
        headers: {
            'Content-type': 'application/x-www-form-urlencoded',
        },
        body: 'controle=' + encodeURIComponent(controle),
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('conteudo').innerHTML = data;
        })
        .catch(error => console.error('Erro ba requisição:', error));
}

const cadastrargenero = document.getElementById('CadastrarGenero');
const ingenero = document.getElementById('idGenero');
const btnAddGenero = document.getElementById('btnAddGenero');

if (cadastrargenero) {
    const formGenero = document.getElementById('frmAddGenero');

    cadastrargenero.addEventListener('shown.bs.modal', () => {
        ingenero.focus();

        const submitHandler = function (event) {
            event.preventDefault();
            btnAddGenero.disabled = true;


            var form = event.target;
            var formData = new FormData(form);

            formData.append('controle', 'generoAdd');
            fetch('controle.php', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data.success) {

                    } else {

                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                })
        }

    })
}
