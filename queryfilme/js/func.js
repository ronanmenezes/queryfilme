document.getElementById("iemail").focus();

function fazerLogin() {
    mostrarloading()
    var email = document.getElementById('iemail').value;
    var senha = document.getElementById('isenha').value;
    var erromsg = document.getElementById('erromsg');
    if (email === '') {
        setTimeout(function() { esconderloading()}, 20);
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de e-mail está vazio. Preencha por favor.';
        return;
    }
    else if (senha === '') {
        setTimeout(function() { esconderloading()}, 20);
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de senha está vazio. Preencha por favor.';
        return;
    } else if (senha.length < 8) {
        setTimeout(function() { esconderloading()}, 20);
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'A senha deve conter 8 ou mais dígitos. Tente novamente';
        return;
    } else {
        erromsg.style.display = 'none';
    }


fetch('login.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'email=' + encodeURIComponent(email) + '&senha=' + encodeURIComponent(senha),
})

    .then(response => response.json())
    .then(data => {
        esconderloading();
        if (data.success) {
            setTimeout(function() {
                window.location.href = 'adm.php';
            }, 2000);
            alert(data.message);
            erromsg.classList.remove('alert-danger');
            erromsg.classList.add('alert-success');
            erromsg.innerHTML = data.message;
            erromsg.style.display = 'block';
        } else {
            erromsg.style.display = 'block';
            erromsg.innerHTML = data.message
        }
    })
    .catch(error => {
        console.error('Erro na requisição', error);
    });
}
function mostrarloading() {
    var divProcessando = document.createElement('div');
    divProcessando.id = 'processandoDiv';
    divProcessando.style.position = 'fixed';
    divProcessando.style.top = '80%';
    divProcessando.style.left = '48%';
    divProcessando.style.transform = 'translate(-50%, -50%)';
    divProcessando.innerHTML = '<img src="./img/loading.gif" width="100px" alt="Carregando" title="Processando...">';
    document.body.appendChild(divProcessando);
}
function esconderloading() {
    var divProcessando = document.getElementById('processandoDiv');
    if (divProcessando) {
        document.body.removeChild(divProcessando);
    }
}


function carregarConteudo(controle){
    alert('clicou');
}