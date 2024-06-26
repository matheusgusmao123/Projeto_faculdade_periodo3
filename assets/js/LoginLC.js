
/*function entrar() {
    let usuario = document.querySelector('#usuario')
    let userLabel = document.querySelector('#userLabel')

    let senha = document.querySelector('#senha')
    let senhaLabel = document.querySelector('#senhaLabel')

    let MSGErro = document.querySelector('#MSGErro')
    let MSGSuc = document.querySelector('#MSGSuc')


    let listaUser = []

    let userValid = {
        user: '',
        senha: ''
    }

    listaUser = JSON.parse(localStorage.getItem('listaUser'))

        listaUser.forEach((item) => {
            if (usuario.value == item.loginCad && senha.value == item.senhaCad) {
                userValid = {
                    user: item.loginCad,
                    senha: item.senhaCad
                }
            }
        })

        if (usuario.value == userValid.user && senha.value == userValid.senha) {
            setTimeout(function () {
                window.location.href = 'Página-Inicial.html';
            }, 3000); 

            userLabel.setAttribute('style', 'color: green')
            senhaLabel.setAttribute('style', 'color: green')
            MSGSuc.setAttribute('style', 'display: block')
            MSGSuc.innerHTML = '<strong>Logando, aguarde...</strong>'
    } else {
        userLabel.setAttribute('style', 'color: red')
        senhaLabel.setAttribute('style', 'color: red')
        MSGErro.setAttribute('style', 'display: block')
        MSGErro.innerHTML = '<strong>Login e/ou senha incorretos.</strong>'
    }
}


function checkLoginStatus() {
    let userMenu = document.getElementById('user-menu');
    let usernamePlaceholder = document.getElementById('username-placeholder');

    let loggedInUser = JSON.parse(localStorage.getItem('loggedInUser'));

    if (loggedInUser) {
        usernamePlaceholder.innerText = loggedInUser.loginCad;

        userMenu.addEventListener('mouseover', function () {
            document.getElementById('navbarDropdown').click(); // Simula o clique para abrir o menu
        });

        userMenu.addEventListener('mouseout', function () {
            document.getElementById('navbarDropdown').click(); // Simula o clique para fechar o menu
        });
    }
}

function logout() {
    localStorage.removeItem('loggedInUser');
    window.location.href = 'Página-Inicial.html'; // Redireciona para a página inicial após o logout
}

document.addEventListener('DOMContentLoaded', checkLoginStatus);
*/